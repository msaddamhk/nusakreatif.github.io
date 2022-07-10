<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
  use HasFactory;

  public function barang()
  {
    return $this->belongsTo(Barang::class, 'barang_id', 'id');
  }
  public function order()
  {
    return $this->belongsTo('App\pesananterbaru1', 'pesanan_id', 'id');
  }
}
