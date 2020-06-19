<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(OrderDetail::class, function (Faker $faker) {
    $orderId = Order::all()->pluck('id')->toArray();
    $productId = Product::all()->pluck('id')->toArray();
    return [
        // 'order_id' => function(){
        //     return factory(Order::class)->create()->id;
        // },
        // 'product_id' => function(){
        //     return factory(Product::class)->create()->id;
        // },
        'name' => $faker -> name(),
        'price' => $faker ->randomFloat(),
        'quantity' => $faker -> randomDigit(),
        'total' => $faker -> randomFloat(),
        'order_id' => $faker -> randomElement($orderId),
        'product_id' => $faker -> randomElement($productId)
    ];
});
