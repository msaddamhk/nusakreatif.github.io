<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postw extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'gambar,tanggal'];
}
