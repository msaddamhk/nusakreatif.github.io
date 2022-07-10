<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Keranjang extends Controller
{
    public function index()
    {
        // $barangs = barang::all();
        // "user_id" => auth()->user()->id,
    }
    public function tambahkeranjang(Request $request)
    {
        dd($request);
        // Keranjang::add([
        //     "id_user" => $request->id,
        //     "id_barang" => $request->id,
        //     "quantity" => 1,
        // ]);
        // session()->flash('success', 'Product is Added to Cart Successfully !');

        // return redirect()->route('cart.list');
    }
}
