<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\customers;
use App\Models\detail_transaksi;

class orders extends Model
{
    protected $table = 'orders';
    protected $fillable = ['customer_id', 'order_date', 'pickup_date', 'status', 'payment', 'total_amount'];

    public function customer()
    {
        return $this->belongsTo(customers::class, 'customer_id');
    }
    public function detail_transaksi()
    {
        return $this->hasMany(detail_transaksi::class, 'order_id');
    }
}
