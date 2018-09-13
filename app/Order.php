<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'postal_code',
        'email',
        'address',
        'description',
        'products',
        'user_id',
        'status',
        'sum',
        'delivery_date',
    ];

    protected $casts = [
        'products' => 'array'
    ];


}
