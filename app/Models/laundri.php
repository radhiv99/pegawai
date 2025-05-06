<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class laundri extends Model
{
    protected $table = 'laundris';
    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'type',
        'opening_time',
        'closing_time',
    ];
}
