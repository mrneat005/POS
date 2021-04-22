<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'products';
    protected $fillable = [
    'name',
   'address'
    ];
}
