<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class testcontroller extends Controller
{
    public function index()
    {
        $response = Http::withHeaders(
            ['key' => '348f7df1af6c99775960c445bcdd4696']
        )->get('https://api.rajaongkir.com/starter/city');
        return $response->body();
    }
}
