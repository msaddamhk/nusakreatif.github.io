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
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        $provinsi = Provinces::all();
        $keranjang = keranjang::where('id_user', auth()->user()->id)->get();
        $berat = $keranjang->reduce(function ($totalBerat, $item) {
            return $totalBerat + $item->barang->berat;
        }, 0);
        return view('pesanan', compact('provinsi', 'keranjang', 'berat'));
    }

    public function pesanan(Request $request)
    {
        $code = 'NUSAKREATIF-' . mt_rand(0000, 9999);
        $keranjang = keranjang::where('id_user', auth()->user()->id)->get();
        $results =  $request->opsi_pengiriman;
        $pecah = explode(',', $results);
        $pesanan = Pesanan::create([
            'user_id' => auth()->user()->id,
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

        keranjang::where('id_user', auth()->user()->id)->delete();

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
                'first_name'    => Auth::user()->name,
                'email'         => Auth::user()->email,
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

    // calback
    public function callback(Request $request)
    {
        // Set konfigurasi midtrans
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');

        // Buat instance midtrans notification
        $notification = new Notification();


        $order = explode('-',  $notification->order_id);
        // Assign ke variable untuk memudahkan coding
        $status = $notification->transaction_status;
        $type = $notification->payment_type;
        $fraud = $notification->fraud_status;
        $order_id = $order[1];

        // Cari transaksi berdasarkan ID
        // $transaction = Pesanan::findOrFail($order_id);

        $transaction = Pesanan::findOrFail($order_id);

        // Handle notification status midtrans
        if ($status == 'capture') {
            if ($type == 'credit_card') {
                if ($fraud == 'challenge') {
                    $transaction->transaction_status = 'PENDING';
                } else {
                    $transaction->transaction_status = 'SUCCESS';
                }
            }
        } else if ($status == 'settlement') {
            $transaction->transaction_status = 'SUCCESS';
        } else if ($status == 'pending') {
            $transaction->transaction_status = 'PENDING';
        } else if ($status == 'deny') {
            $transaction->transaction_status = 'CANCELLED';
        } else if ($status == 'expire') {
            $transaction->transaction_status = 'CANCELLED';
        } else if ($status == 'cancel') {
            $transaction->transaction_status = 'CANCELLED';
        }

        // Simpan transaksi
        $transaction->save();

        return  $transaction;
    }
    public function pesanandetail()
    {
        $datatransaksi = Pesanan::where('user_id', auth()->id())->latest()->get();
        return view('invoice', compact('datatransaksi'));
    }
}


//  Set konfigurasi midtrans
//  Config::$serverKey = config('services.midtrans.serverKey');
//  Config::$isProduction = config('services.midtrans.isProduction');
//  Config::$isSanitized = config('services.midtrans.isSanitized');
//  Config::$is3ds = config('services.midtrans.is3ds');

//  Buat instance midtrans notification
//  $notification = new Notification();
//  $order = explode('-',  $notification->order_id);
//  Assign ke variable untuk memudahkan coding
//  $status = $notification->transaction_status;
//  $type = $notification->payment_type;
//  $fraud = $notification->fraud_status;
//  $order_id = $order[0] . '-' . $order[1];

//  Cari transaksi berdasarkan ID
//  $transaction = Pesanan::findOrFail($order_id);
//  if (in_array($status, ['capture', 'settlement'])) {
//      $status_baru = 'SUCCESS';
//  } elseif ($status == 'pending') {
//      $status_baru = 'PENDING';
//  } else {
//      $status_baru = 'CANCELLED';
//  }

//  $transaction = Pesanan::where('kodepesanan', $order_id)->first();
//  $transaction->update([
//      'transaction_status' => $status_baru
//  ]);