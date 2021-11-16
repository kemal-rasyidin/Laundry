<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;

    protected $table = 'outlets';
    protected $fillable = ['nama','alamat','telepon'];

    public function pakets()
    {
        return $this->hasMany(Paket::class,'id_outlet','id');
    }
    public function user(){
        return $this->hasMany(User::class,'id_outlet','id'); // foreign , owener key / local key
    }
}
