<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_stok';

    protected $fillable = [
        'id_produk',
        'tanggal_update_stok',
        'stok_awal',
        'stok_akhir',
        'keterangan',
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk', 'id_produk');
    }
}
