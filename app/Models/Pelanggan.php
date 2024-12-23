<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory; 
    protected $primaryKey = 'id_pelanggan'; // Match the primary key name in your database
    
    protected $fillable = [
        'nama_pelanggan', 
        'email', 
        'no_telepon', 
        'alamat'
    ];
        
}
