<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggans';

    protected $primaryKey = 'id_pelanggan';

    protected $fillable = [
        'nama_pelanggan',
        'email',
        'telepon',
        'alamat',
    ];

    public function penjualans() 
    { 
        return $this->hasMany(Penjualan::class, 'id_pelanggan', 'id_pelanggan'); 
    } 
    public function pembelis() 
    { 
        return $this->hasMany(Pembeli::class, 'custumor', 'id_pelanggan'); 
    }

}
