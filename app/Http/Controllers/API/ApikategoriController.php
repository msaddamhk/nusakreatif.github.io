<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\barang;
use App\Models\kategori;
use App\Helpers\ApiFormatter;

class ApikategoriController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $name = $request->input('name');
        $show_product = $request->input('show_product');

        if ($id) {
            $category = kategori::with(['barangs'])->find($id);

            if ($category)
                return ApiFormatter::success(
                    $category,
                    'Data produk berhasil diambil'
                );
            else
                return ApiFormatter::error(
                    null,
                    'Data kategori produk tidak ada',
                    404
                );
        }

        $category = kategori::query();

        if ($name)
            $category->where('name', 'like', '%' . $name . '%');

        if ($show_product)
            $category->with('barangs');

        return ApiFormatter::success(
            $category->paginate($limit),
            'Data list kategori produk berhasil diambil'
        );
    }
}
