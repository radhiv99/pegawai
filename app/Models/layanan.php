<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class layanan extends Model
{
    protected $table = 'layanans';
    protected $fillable = ['layanan_name', 'layanan_price'];

public function detail_transaksis()
    {
        return $this->hasMany(detail_transaksi::class, 'layanan_id');
    }
public function order()
    {
        return $this->hasMany(orders::class, 'layanan_id');
    }
}
