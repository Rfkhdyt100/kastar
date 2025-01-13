<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory; 
    
    protected $primaryKey = 'id_shift'; 
    protected $fillable = [ 
        'id_user', 
        'tanggal_mulai', 
        'waktu_mulai', 
        'waktu_selesai', 
        'keterangan', 
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}

