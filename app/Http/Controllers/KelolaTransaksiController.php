<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class KelolaTransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Pesanan::all();
        return view('admin.keloladatatransaksi',  [
            "title" => "Pesanan"
        ], compact('transaksi'));
    }
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
