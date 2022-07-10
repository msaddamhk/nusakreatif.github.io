<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\Barang as barang;
use App\Models\kategori;
use Illuminate\Http\Request;

class ApiBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $data = barang::all();
    //     if ($data) {
    //         return ApiFormatter::createApi(200, 'Sukses', $data);
    //     } else {
    //         return ApiFormatter::createApi(400, 'Gagal');
    //     }
    // }

    // public function kategori()
    // {
    //     $data = kategori::all();
    //     if ($data) {
    //         return ApiFormatter::createApi(200, 'Sukses', $data);
    //     } else {
    //         return ApiFormatter::createApi(400, 'Gagal');
    //     }
    // }

    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $name = $request->input('name');
        $description = $request->input('description');
        $tags = $request->input('tags');
        $categories = $request->input('categories');

        $price_from = $request->input('price_from');
        $price_to = $request->input('price_to');

        if ($id) {
            $product = barang::with(['kategori'])->find($id);

            if ($product)
                return ApiFormatter::success(
                    $product,
                    'Data produk berhasil diambil'
                );
            else
                return ApiFormatter::error(
                    null,
                    'Data produk tidak ada',
                    404
                );
        }

        $product = barang::with(['kategori']);

        if ($name)
            $product->where('name', 'like', '%' . $name . '%');

        if ($description)
            $product->where('description', 'like', '%' . $description . '%');

        if ($tags)
            $product->where('tags', 'like', '%' . $tags . '%');

        if ($price_from)
            $product->where('price', '>=', $price_from);

        if ($price_to)
            $product->where('price', '<=', $price_to);

        if ($categories)
            $product->where('categories_id', $categories);

        return ApiFormatter::success(
            $product->paginate($limit),
            'Data list produk berhasil diambil'
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
