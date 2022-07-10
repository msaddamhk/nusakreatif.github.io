<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user', 'id');
    }
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }
    public function getTotalHarga()
    {
        return $this->barang->harga * $this->jumblah;
    }
}
