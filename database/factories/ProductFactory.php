<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Product;
use App\Models\ProductBrand;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $productBrandId = ProductBrand::all()->pluck('id')->toArray();
    return [
        'name'=>$faker->name(),
        'desc'=>$faker->paragraph(2),
        'image' => 'https://via.placeholder.com/480x320.png?text=Dinhop',
        'price'=>$faker->randomFloat(),
        'product_brand_id' => $faker -> randomElement($productBrandId)
    ];
});
