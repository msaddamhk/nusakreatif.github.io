<?php

use App\Models\Keranjang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ApiBarangController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\API\ApikategoriController;
use App\Http\Controllers\API\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('callback', [PesananController::class, 'callback']);
Route::get('user1', [UserController::class, 'fetch']);
Route::post('login', [UserController::class, 'login']);
Route::post('logout', [UserController::class, 'logout']);
Route::post('register', [UserController::class, 'register']);

Route::get('Apikategori', [ApikategoriController::class, 'all']);
Route::get('Apibarang', [ApiBarangController::class, 'all']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/cekOngkir', function () {
    $response = Http::asForm()->withHeaders(
        ['key' => '348f7df1af6c99775960c445bcdd4696']
    )->post('https://api.rajaongkir.com/starter/cost', [
        'origin' =>   22,
        'destination' => request('destination'),
        'weight' =>  request('weight'),
        "courier" =>  request('courier')
    ]);
    echo json_encode($response['rajaongkir']['results'][0]);
});
