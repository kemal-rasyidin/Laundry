<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $guarded = [];
    
    public function detail_transaksi(){
        return $this->hasMany(Detail_transaksi::class,'id_transaksi','id'); // foreign , owener key / local key
    }
    public function member(){
        return $this->belongsTo(Member::class,'id_member'); // foreign
    }
}
