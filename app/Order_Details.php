<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Details extends Model
{
    //
    protected $table = 'transactions';
    protected $fillable = [
    'order-id',
    'product_id',
    'quantity',
    'unit_price',
    'amount',
    'discount',
    ];
}
