<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_detail';
    protected $fillable = [
        'name',
        'price',
        'quantity',
        'total',
        'order_id',
        'product_id'
    ];
    // function order(){
    //     return $this->belongsToMany('App\Models\Order', 'order_id', 'id');
    // }
    // function product(){
    //     return $this->belongsToMany('App\Models\Product', 'product_id', 'id');
    // }
    // function order(){
    //     return $this->belongsTo('App\Models\Order');
    // }
    // function product(){
    //     return $this->belongsTo('App\Models\Product');
    // }
}
