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
            return ApiFormatter::success('Sukses', $keranjang);
        } else {
            return ApiFormatter::error(400, 'Gagal');
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
        return ApiFormatter::success($keranjang, 'berhasil ditambah');
    }
    public function destroy(Keranjang $keranjang)
    {
        $keranjang->delete();
        return ApiFormatter::success('berhasil dihapus');
    }
}
