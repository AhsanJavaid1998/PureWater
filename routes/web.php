<?php

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//Admin Section Start

//Admin Profile Section Start
Route::get('/admin/profile', [App\Http\Controllers\AdminController::class, 'admin_profile'])->name('admin.profile');
//Admin Profile Section End

//Admin Product Section Start
Route::get('/admin/product/all', [App\Http\Controllers\AdminController::class, 'product'])->name('admin.product.all');
Route::get('/admin/product/create', [App\Http\Controllers\AdminController::class, 'productCreate'])->name('admin.product.create');
//Admin Product Section End

//Admin Category Section Start
Route::get('/admin/category/all', [App\Http\Controllers\AdminController::class, 'category'])->name('admin.category.all');
Route::get('/admin/category/create', [App\Http\Controllers\AdminController::class, 'categoryCreate'])->name('admin.category.create');
//Admin Category Section End

//Admin Vendor Section Start
Route::get('/admin/vendor/all', [App\Http\Controllers\AdminController::class, 'vendor'])->name('admin.vendor.all');
//Admin Vendor Section End

//Admin Rider Section Start
Route::get('/admin/rider/all', [App\Http\Controllers\AdminController::class, 'rider'])->name('admin.rider.all');
//Admin Rider Section End

//Admin Customer Section Start
Route::get('/admin/customer/all', [App\Http\Controllers\AdminController::class, 'customer'])->name('admin.customer.all');
//Admin Customer Section End




//Admin Section End

//Vendor Section Start

//Vendor Profile Section Start
Route::get('/vendor/profile', [App\Http\Controllers\AdminController::class, 'vendor_profile'])->name('vendor.profile');
//Vendor Profile Section End

//Vendor Section End

//Rider Section Start

//Rider Profile Section Start
Route::get('/rider/profile', [App\Http\Controllers\AdminController::class, 'rider_profile'])->name('rider.profile');
//Rider Profile Section End

//Rider Section End
