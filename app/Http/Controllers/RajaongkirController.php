<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\cities;
use App\Models\provinces;
use Illuminate\Support\Facades\Auth;
use App\Models\Keranjang;
use App\Models\pesanan;


class RajaongkirController extends Controller
{
    public function index()
    {
        // if (!Auth::user()) {
        //     return redirect('login')->with('loginError', 'Silahkan Masuk, Jika Ingin Berbelanja');
        // }
        $keranjang = keranjang::where('id_user', auth()->user()->id)->get();
        $berat = $keranjang->reduce(function ($totalBerat, $item) {
            return $totalBerat + $item->barang->berat;
        }, 0);
        return view('keranjang', compact('keranjang'));
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
