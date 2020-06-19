<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Customer;
use App\Models\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    $customerId = Customer::all()->pluck('id')->toArray();
    return [
        // 'customer_id'=> function(){
        //     return factory(Customer::class)->create()->id;
        // },
            'customer_id' => $faker -> randomElement($customerId)
    ];
});
