<?php

namespace App\Http\Controllers;


use App\Models\Barang as barang;
use App\Models\Keranjang as keranjang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index($id)
    {
        $barang = barang::where('id', $id)->get()->first();
        $barangs = barang::latest()->limit(4)->get();
        return view('detail', compact('barang', 'barangs'));
    }
    public function keranjang(Request $request, $id)
    {
        if (!Auth::user()) {
            return redirect('login')->with('loginError', 'Silahkan Masuk, Jika Ingin Berbelanja');
        }
        // Keranjang::create([
        //     "id_user" => auth()->user()->id,
        //     "id_barang" => $id,
        //     "jumblah" => $request->jumlahpesanan,
        // ]);
        $cek = keranjang::where('id_barang', $id)->where('id_user', auth()->user()->id)->first();

        if (empty($cek)) {
            $keranjang = new keranjang;
            $keranjang->id_user = auth()->user()->id;
            $keranjang->id_barang = $id;
            $keranjang->jumblah = $request->jumlahpesanan;
            $keranjang->save();
        } else {
            $keranjang = keranjang::where('id_barang', $id)->where('id_user', auth()->user()->id)->first();
            $keranjang->jumblah = $keranjang->jumblah + $request->jumlahpesanan;
            $keranjang->update();
        }
        return redirect('/keranjang')->with('loginError', 'Barang Berhasil Ditambah');
    }
}
