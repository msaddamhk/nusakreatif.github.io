<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pesanan;
use App\Models\PesananItems;
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
            'resi' => $request->resi,
        ]);
        return redirect('/kelolapesanan');
    }

    public function konfirmasi($kode_pesanan)
    {
        $pesanan = Pesanan::where('kodepesanan', $kode_pesanan, 'barang')->with('items')->first();
        $pesanan->update([
            "konfirmasi" => 'SUDAH DI KONFIRMASI',
        ]);
        collect($pesanan->items)->each(function ($item) {
            $barang = Barang::find($item->barang_id);
            $barang->update([
                'stock' => $barang->stock - $item->jumlah
            ]);
        });
        return redirect()->back();
    }
}
