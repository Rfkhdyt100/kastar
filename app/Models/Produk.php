<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_produk';

    protected $fillable = [
        'nama_produk',
        'harga',
        'stok',
        'id_kategori',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }

    public function pembelis() 
    { 
        return $this->hasMany(Pembeli::class, 'produk', 'id_produk'); 
    } 
    public function barangPenjualans() 
    { 
        return $this->hasMany(BarangPenjualan::class, 'id_produk', 'id_produk'); 
    } 
    public function diskons() 
    { 
        return $this->hasMany(Diskon::class, 'id_produk', 'id_produk'); 
    } 
    public function stoks() 
    { 
        return $this->hasMany(Stok::class, 'id_produk', 'id_produk'); 
    }
}

