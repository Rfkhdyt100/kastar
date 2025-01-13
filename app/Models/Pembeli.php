<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pembeli';

    protected $fillable = [
        'custumor',
        'tanggal_beli',
        'waktu_beli',
        'metode_pembayaran',
        'produk',
        'bayar',
        'kembali',
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk', 'id_produk');
    }
}

