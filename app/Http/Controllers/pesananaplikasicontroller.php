<?php

namespace App\Http\Controllers;


use Exception;
use Midtrans\Config;
use Midtrans\Snap;
use App\Models\Provinces;
use App\Models\Keranjang as keranjang;
use Midtrans\Notification;
use App\Models\Pesanan;
use App\Models\PesananItems;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class pesananaplikasicontroller extends Controller
{
    public function index()
    {
        $user_id = request()->has('user_id') ? request('user_id') : Auth::id();
        $user = User::findOrFail($user_id);
        $provinsi = Provinces::all();
        $keranjang = keranjang::where('id_user', $user_id)->get();
        $berat = $keranjang->reduce(function ($totalBerat, $item) {
            return $totalBerat + $item->barang->berat;
        }, 0);
        return view('pesananandroid', compact('provinsi', 'keranjang', 'berat', 'user'));
    }

    public function pesanan(Request $request)
    {

        $user_id = request()->has('user_id') ? request('user_id') : Auth::id();
        $user = User::findOrFail($user_id);
        $code = 'NUSAKREATIF-' . mt_rand(0000, 9999);
        $keranjang = keranjang::where('id_user', $user_id)->get();
        $results =  $request->opsi_pengiriman;
        $pecah = explode(',', $results);
        $pesanan = Pesanan::create([
            'user_id' => $user_id,
            "nama_penerima" => $request->nama,
            "notlp" => $request->notelepon,
            "alamat" => $request->alamat,
            "provinsi" => $request->provinsi,
            "kota" => $request->destination,
            "berat" => 1,
            "kurir" => $request->courier,
            "opsipengiriman" => $pecah[0],
            "etd" => $pecah[1],
            "total_ongkir" => $pecah[2],
            "total_harga" => $request->harga,
            "transaction_status" =>  'PENDING',
            "kodepesanan" => 1,
        ]);

        $databarang = [];

        foreach ($keranjang as $keranjangs) {
            $pesananitems = PesananItems::create([
                'pesanan_id' => $pesanan->id,
                'barang_id' => $keranjangs->id_barang,
                'jumlah' => $keranjangs->jumblah
            ]);
            array_push(
                $databarang,
                [
                    'id' => $pesanan->id,
                    'name'    => $pesananitems->barang->judul,
                    'price'    => (int)$pesananitems->barang->harga,
                    'quantity'   =>  $keranjangs->jumblah,
                ]
            );
        }
        array_push(
            $databarang,
            [
                'id' => rand(),
                'name' => 'Ongkos Kirim',
                'price' => $pecah[2],
                'quantity' => 1,
            ]
        );

        keranjang::where('id_user', $user_id)->delete();

        // Konfigurasi midtrans
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');

        // Buat array untuk dikirim ke midtrans
        $midtrans = array(
            'transaction_details' => array(
                'order_id' =>  'NUSAKREATIF-' . $pesanan->id,
                'gross_amount' => (int) $request->harga + $pecah[2],
            ),
            'customer_details' => array(
                'first_name'    => $user->name,
                'email'         => $user->email,
                'phone'   => $request->notelepon,
            ),
            'item_details' => $databarang,
            'enabled_payments' => array('bank_transfer', 'alfamart'),
            'vtweb' => array()
        );

        try {
            // Ambil halaman payment
            $paymentUrl = Snap::createTransaction($midtrans)->redirect_url;

            // Redirect ke halaman midtrans
            return redirect($paymentUrl);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
