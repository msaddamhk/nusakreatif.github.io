<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Barang extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
    public function keranjang()
    {
        return $this->hasMany(Keranjang::class, 'id');
    }
    // public function items()
    // {
    //     return $this->hasMany(PesananItems::class, 'id');
    // }
}
