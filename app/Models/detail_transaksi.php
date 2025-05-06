<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\orders;
use App\Models\layanan;

class detail_transaksi extends Model
{
    protected $table = 'detail_transaksis';
    protected $fillable = ['order_id', 'layanan_id', 'berat', 'subtotal'];
    public function order()
    {
        return $this->belongsTo(orders::class, 'order_id');
    }
    public function layanan()
    {
        return $this->belongsTo(layanan::class, 'layanan_id');
    }
}
