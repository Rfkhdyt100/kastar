<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanPenjualan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_laporan_penjualan';

    protected $fillable = [
        'id_penjualan',
        'tanggal_laporan',
        'total_pendapatan_laporan',
        'jumlah_transaksi_laporan',
    ];

    public function penjualan()
    {
        return $this->belongsTo(Penjualan::class, 'id_penjualan', 'id_penjualan');
    }
}

