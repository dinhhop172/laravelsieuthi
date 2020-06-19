<?php

use App\Models\ProductBrand;
use Illuminate\Database\Seeder;

class ProductBrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ProductBrand::class, 5)->create();
    }
}
