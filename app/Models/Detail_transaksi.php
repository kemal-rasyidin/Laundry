<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_transaksi extends Model
{
    use HasFactory;
    protected $table = 'detail_transaksi';
    protected $guarded  = [];
    public function transaksi(){
        return $this->belongsTo(Transaksi::class,'id_transaksi'); // foreign
    }
    public function paket(){
        return $this->belongsTo(Paket::class,'id_paket'); // foreign
    }
}
