<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;

    protected $table = 'pakets';
    protected $fillable = ['id_outlet','jenis','nama_paket','harga'];

    public function outlets()
    {
        return $this->belongsTo(Outlet::class,'id_outlet');
    }

    public function detail_transaksi(){
        return $this->hasMany(Detail_transaksi::class,'id_paket','id'); // foreign , owener key / local key
    }

}
