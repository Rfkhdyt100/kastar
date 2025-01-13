<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Model
{
    use HasFactory; 
    protected $primaryKey = 'id_user'; 
    protected $fillable = [ 
        'nama_user', 
        'password', 
        'peran', ]; 
        
        protected $hidden = [ 
            'password', 
        ];

        public function penjualans() 
        { 
            return $this->hasMany(Penjualan::class, 'id_user', 'id_user'); 
        } 
        public function shifts() 
        { 
            return $this->hasMany(Shift::class, 'id_user', 'id_user');
        }
    }