<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\KelolaController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RajaongkirController;
use App\Http\Controllers\KelolaTransaksiController;


Route::get('/', [Postcontroller::class, 'index'])->name('home');
Route::get('/detail/{id}', [PesanController::class, 'index']);
Route::resource('/admin', AdminController::class)->middleware('admin');
Route::resource('/kategori', KategoriController::class)->middleware('admin');;
Route::get('/edit/{barangs}', [AdminController::class, 'edit'])->name('barangs.edit');
Route::patch('update/{barangs}', [AdminController::class, 'update']);
Route::get('hapus/{barangs}', [AdminController::class, 'destroy'])->name('hapus');
Route::get('hapuskategori/{model}', [KategoriController::class, 'destroy']);
// Route::get('updatekategori/{id}', [KategoriController::class, 'edit']);
Route::get('/tampilkategori/{kategoris}', [KategoriController::class, 'tampilkategori'])->name('kategori.tampil');
Route::post('/pesanan/{id}', [PesanController::class, 'keranjang']);
Route::get('/produk', [Postcontroller::class, 'tampilproduk'])->name('tampilproduk');
Route::get('/detailkategori', [Postcontroller::class, 'tampilkategori']);
Route::resource('/kelolaadmin', KelolaController::class);

Route::get('/editkategori/{model}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::patch('updatekategori/{model}', [KategoriController::class, 'update']);
// auth
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// raja ongkir
Route::get('/get_ongkir', [RajaongkirController::class, 'get_ongkir']);
Route::get('getCity/ajax/{id}', [RajaongkirController::class, 'ajax']);

// keranjang
Route::get('/keranjang', [RajaongkirController::class, 'index'])->middleware('auth');
Route::delete('/hapuskeranjang/{keranjang}', [RajaongkirController::class, 'destroy'])->name('hapuskeranjang');

// pesanan
Route::get('/pesanan', [PesananController::class, 'index'])->name('pesan')->middleware('auth');
Route::post('/pesanan1', [PesananController::class, 'pesanan'])->name('pesan1');

// pesanan detail
Route::get('/pesanandetail', [PesananController::class, 'pesanandetail']);

// kelola pesanan
Route::get('/kelolapesanan', [KelolaTransaksiController::class, 'index']);
Route::get('/updatepesanan/{transaksi}', [KelolaTransaksiController::class, 'edit'])->name('updatepesanan');
Route::patch('updatetransaksi/{transaksi}', [KelolaTransaksiController::class, 'update'])->name('updatetransaksi');
Route::get('/showpesanan/{id}', [KelolaTransaksiController::class, 'show'])->name('showpesanan');

// 
Route::get('/suksuestransaksi', function () {
    return view('suksestransaksi');
});

Route::get('/detaildatabarang/{id}', [AdminController::class, 'show'])->name('showbarang');
