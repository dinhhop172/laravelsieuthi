<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Product;
use App\Models\ProductBrand;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $user = User::all();
        $customer = Customer::all();
        $brand = ProductBrand::all();
        $product = Product::all();

        return view('admin.dashboard.index',
        [
            'users' => $user,
            'customers' => $customer,
            'brands' => $brand,
            'products' => $product
            ]);
    }
}
