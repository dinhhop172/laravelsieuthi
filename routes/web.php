<?php

use App\Http\Controllers\MyController;
use App\Http\Middleware\CheckAge;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('post/{post}/comment/{comment}', function($postId, $commentId){
    return "post: {$postId} - comment: {$commentId}";
});
Route::get('user/{id}', function($id= null){
    return $id;
})->middleware('CheckAge', 'checkName');

Route::get('show/{id}', 'Admin\MyController@show');

Route::get('tong/{a}/{b}', 'Admin\MyController@tong');

// Route::group(['prefix' => 'admin'], function () {
//     Route::get('/', function(){
//         return view('admin.dashboard.index');
//     })->name('index');
//     Route::resource('products', 'ProductController');
//     Route::resource('customers', 'CustomerController');
//     Route::resource('orders', 'OrderController');
//     Route::resource('productbrands', 'ProductBrandController');
//     Route::resource('orderdetails', 'OrderDetailController');
//     // Route::resource('login', 'AccountController');
//     Route::resource('users', 'UserController', ['except' => ['show', 'create', 'store']]);
// });
Route::group(['middleware' => ['web', 'admin'], 'prefix' => 'admin', 'namespace' => 'Admin'], function () {
    // Route::get('/', function(){
    //         return view('admin.dashboard.index');
    //     })->name('index');
    Route::resource('products', 'ProductController');
    Route::resource('customers', 'CustomerController');
    Route::resource('orders', 'OrderController');
    Route::resource('productbrands', 'ProductBrandController');
    Route::resource('orderdetails', 'OrderDetailController');
    Route::resource('users', 'UserController', ['except' => ['show', 'create', 'store']]);
    Route::get('/', 'DashboardController@index')->name('dashboards.index');
});
// Route::group(['prefix' => 'admin',['namespace' => 'Admin'] ,'middleware' => ['web','admin']], function(){
//     Route::resource('products', 'ProductController');
//     Route::resource('customers', 'CustomerController');
//     Route::resource('productbrands', 'ProductBrandController');
//     Route::resource('orders', 'OrderController');
//     Route::resource('orderdetails', 'OrderDetailController');
// });

// Route::get('dangnhap', 'LoginController@getLogin')->name('home');
// Route::post('dangnhap', 'LoginController@postLogin')->name('login');


