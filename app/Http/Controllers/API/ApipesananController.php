<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use App\Helpers\ApiFormatter;

class ApipesananController extends Controller
{
    public function all(Request $request)
    {
        // return $request->all();
        // $pesanan = Pesanan::where('user_id', $request->user_id)->get();

        // if ($pesanan) {
        //     $pesanan = collect($pesanan)->map(function ($item) {
        //         $item->barang = $item->barang;
        //         return $item;
        //     });

        //     dd($pesanan)
        //     return ApiFormatter::createApi(200, 'Sukses', $pesanan);
        // } else {
        //     return ApiFormatter::createApi(400, 'Gagal');
        // }

        $id = $request->input('id');
        // $limit = $request->input('limit', 6);
        $status = $request->input('status');

        if ($id) {
            $pesanan = Pesanan::with(['items'])->find($id);
            if ($pesanan)
                return ApiFormatter::success(
                    $pesanan,
                    'Data transaksi berhasil diambil'
                );
            else
                return ApiFormatter::error(
                    null,
                    'Data transaksi tidak ada',
                    404
                );
        }

        $pesanan = Pesanan::with(['items'])->where('user_id', $request->user_id);

        if ($status)
            $pesanan->where('status', $status);

        return ApiFormatter::success(
            $pesanan->get(),
            'Data list transaksi berhasil diambil'
        );
    }
}
