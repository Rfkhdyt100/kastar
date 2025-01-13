<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_penjualan';

    protected $fillable = [
        'id_user',
        'id_pelanggan',
        'total_pendapatan',
        'tanggal_penjualan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan', 'id_pelanggan');
    }

    public function barangPenjualans()
    {
        return $this->hasMany(BarangPenjualan::class, 'id_penjualan', 'id_penjualan');
    }

    public function pembayarans()
    {
        return $this->hasMany(Pembayaran::class, 'id_penjualan', 'id_penjualan');
    }

    public function laporanPenjualans()
    {
        return $this->hasMany(LaporanPenjualan::class, 'id_penjualan', 'id_penjualan');
    }
}

