<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diskon extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_diskon';

    protected $fillable = [
        'nama_diskon',
        'persentase_diskon',
        'tanggal_mulai_diskon',
        'tanggal_berakhir_diskon',
        'id_produk',
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk', 'id_produk');
    }
}

