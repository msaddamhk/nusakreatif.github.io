<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Keranjang;
use App\Models\Transaction;
use App\Models\TransactionItem;
use Illuminate\Http\Request;
use App\Helpers\ApiFormatter;
use Illuminate\Support\Facades\Auth;

class ApikeranjangController extends Controller
{
    public function all(Request $request)
    {
        // return $request->all();
        $keranjang = Keranjang::where('id_user', $request->id_user)->get();

        if ($keranjang) {
            $keranjang = collect($keranjang)->map(function ($item) {
                $item->barang = $item->barang;
                return $item;
            });

            dd($keranjang);
            return ApiFormatter::createApi(200, 'Sukses', $keranjang);
        } else {
            return ApiFormatter::createApi(400, 'Gagal');
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function keranjang(Request $request)
    {
        $keranjang = Keranjang::updateOrCreate(['id_barang' => $request->id_barang], [
            'id_user' => $request->id_user,
            'id_barang' => $request->id_barang,
            'jumblah' => $request->jumblah
        ]);
        return ApiFormatter::createApi($keranjang, 'berhasil ditambah');
    }
    public function destroy(Keranjang $keranjang)
    {
        $keranjang->delete();
        return ApiFormatter::createApi('berhasil dihapus');
    }
}
