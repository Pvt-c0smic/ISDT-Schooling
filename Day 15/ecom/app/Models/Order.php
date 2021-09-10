<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'reference_no',
        'order_items',
        'sub_total',
        'delivery_fee',
        'total',
        'full_address',
        'payment_id',
        'payment_response',
        'payment_status',
        'status'
    ];

    protected $casts = [
        'order_items' => 'array',
        'payment_response' => 'array'
    ];
}
