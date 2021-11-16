<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'members';
    protected $fillable = ['nama','alamat','jenis_kelamin','telepon'];
    // protected $guarded = [];

    public function transaksi(){
        return $this->hasMany(Transaksi::class,'id_member','id'); // foreign , owener key / local key
    }
}
