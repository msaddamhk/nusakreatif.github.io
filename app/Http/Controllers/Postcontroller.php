<?php

namespace App\Http\Controllers;

use App\Models\Barang as barang;
use App\Models\Kategori as kategori;


class Postcontroller extends Controller
{
    public function index()
    {
        $barangs = barang::latest();
        $kategoris = kategori::paginate(4);
        $bar = $barangs->limit(8)->get();
        $title = "Beranda";
        return view('index',  compact('bar', 'title', 'kategoris'));
    }
    public function tampilproduk()
    {
        $barangs = barang::latest()
            ->where('judul', 'like', '%' . (request('search') ?? '') . '%')
            ->get();

        $title = "Produk";
        return view('produk', compact('barangs', 'title'));
    }
    public function tampilkategori()
    {
        $kategoris = kategori::paginate(8);
        $title = "detailkategori";
        return view('detailkategori', compact('kategoris', 'title'));
    }
    public function cari()
    {
        dd(request('search'));
    }
}
