<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $fillable = ['customer_id'];
    function customer(){
        return $this->belongsTo('App\Models\Customer');
    }
    // function orderdetail(){
    //     return $this->hasMany('App\Models\OrderDetail','order_id', 'id');
    // }
    function product(){
        return $this->belongsToMany('App\Models\Product', 'order_detail', 'order_id', 'product_id');
    }

}
