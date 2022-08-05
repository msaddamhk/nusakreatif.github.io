<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = "pesanans";

    protected $fillable = ['user_id', 'nama_penerima', 'notlp', 'alamat', 'provinsi', 'kota', 'berat', 'kurir', 'total_ongkir', 'etd', 'total_harga', 'kodepesanan', 'transaction_status', 'resi', 'konfirmasi', 'opsipengiriman'];

    public function items()
    {
        return $this->hasMany(PesananItems::class);
    }
}
