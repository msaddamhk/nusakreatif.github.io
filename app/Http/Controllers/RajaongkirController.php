<?php

namespace App\Http\Controllers;

use App\Models\Cities;
use App\Models\Keranjang;



class RajaongkirController extends Controller
{
    public function index()
    {
        // if (!Auth::user()) {
        //     return redirect('login')->with('loginError', 'Silahkan Masuk, Jika Ingin Berbelanja');
        // }
        $keranjang = Keranjang::where('id_user', auth()->user()->id)->get();
        $berat = $keranjang->reduce(function ($totalBerat, $item) {
            return $totalBerat + $item->barang->berat;
        }, 0);
        $title = "Keranjang";
        return view('keranjang', compact('keranjang', 'title'));
    }
    public function ajax($id)
    {
        $cities = Cities::where('province_id', '=', $id)->pluck('city_name', 'postal_code', 'id');
        return json_encode($cities);
    }
    public function destroy(keranjang $keranjang)
    {
        $keranjang->delete();
        return redirect('/keranjang')->with('success', 'data berhasil dihapus');
    }
}
