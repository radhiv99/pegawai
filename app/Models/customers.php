<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\orders;

class customers extends Model
{
    protected $table = 'customers';
    protected $fillable = ['name', 'no_telepon', 'alamat'];

    public function orders()
    {
        return $this->hasOne(orders::class, 'customer_id');
    }
}
