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
Route::post('/admin/product/store', [App\Http\Controllers\AdminController::class, 'product_store'])->name('admin.product.store');
//Admin Product Section End

//Admin Category Section Start
Route::get('/admin/category/all', [App\Http\Controllers\AdminController::class, 'category'])->name('admin.category.all');
Route::get('/admin/category/create', [App\Http\Controllers\AdminController::class, 'categoryCreate'])->name('admin.category.create');
Route::post('/admin/category/store', [App\Http\Controllers\AdminController::class, 'category_store'])->name('admin.category.store');
//Admin Category Section End

//Admin Vendor Section Start
Route::post('/admin/vendor/store', [App\Http\Controllers\AdminController::class, 'vendor_store'])->name('admin.vendor.store');
Route::get('/admin/vendor/create', [App\Http\Controllers\AdminController::class, 'vendor_create'])->name('admin.vendor.create');
Route::get('/admin/vendor/all', [App\Http\Controllers\AdminController::class, 'vendor'])->name('admin.vendor.all');
//Admin Vendor Section End

//Admin Rider Section Start
Route::post('/admin/rider/store', [App\Http\Controllers\AdminController::class, 'rider_store'])->name('admin.rider.store');
Route::get('/admin/rider/create', [App\Http\Controllers\AdminController::class, 'rider_create'])->name('admin.rider.create');
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
