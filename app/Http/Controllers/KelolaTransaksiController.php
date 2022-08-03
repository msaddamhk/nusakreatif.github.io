<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class KelolaTransaksiController extends Controller
{
    public function index()
    {
        // $transaksi = Pesanan::all();
        // return view('admin.keloladatatransaksi',  [
        //     "title" => "Pesanan"
        // ], compact('transaksi'));

        $transaksi = Pesanan::latest()
            ->where('kodepesanan', 'like', '%' . (request('cari') ?? '') . '%')
            ->get();
        $title = "Pesanan";
        return view('admin.keloladatatransaksi', compact('transaksi', 'title'));
    }
    // public function tampilproduk()
    // {
    //     $barangs = barang::latest()
    //         ->where('judul', 'like', '%' . (request('search') ?? '') . '%')
    //         ->get();

    //     $title = "Produk";
    //     return view('produk', compact('barangs', 'title'));
    // }
    public function edit(Pesanan $transaksi)
    {
        // return $transaksi;
        return view('admin.updatedatatransaksi', compact('transaksi'));
    }
    public function show(Pesanan $transaksi, $id)
    {
        $pesanan = Pesanan::find($id);
        // return $id;
        return view('admin.showdatapesanan', compact('pesanan'));
    }
    public function update(request $request, Pesanan $transaksi)
    {
        $transaksi->update([
            'transaction_status' => $request->transaksi,
        ]);
        return redirect('/kelolapesanan');
    }
}
