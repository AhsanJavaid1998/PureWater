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
Route::post('/admin/profile/update', [App\Http\Controllers\AdminController::class, 'profile_update'])->name('admin.profile.update');
Route::post('/admin/profile/password_update', [App\Http\Controllers\AdminController::class, 'password_update'])->name('admin.profile.password_update');
Route::post('/admin/profile/delete', [App\Http\Controllers\AdminController::class, 'profile_delete'])->name('admin.profile.destroy');
Route::get('/admin/vendor/profile/view/{id}', [App\Http\Controllers\AdminController::class, 'vendor_profile_view'])->name('admin.vendor.profile.view');
Route::get('/admin/rider/profile/view/{id}', [App\Http\Controllers\AdminController::class, 'rider_profile_view'])->name('admin.rider.profile.view');
Route::get('/admin/user/profile/view/{id}', [App\Http\Controllers\AdminController::class, 'user_profile_view'])->name('admin.user.profile.view');

Route::post('/admin/user/profile/update/{id}', [App\Http\Controllers\AdminController::class, 'user_profile_update'])->name('admin.user.profile.update');
Route::post('/admin/user/profile/password_update/{id}', [App\Http\Controllers\AdminController::class, 'user_password_update'])->name('admin.user.profile.password_update');

//Admin Profile Section End

//Admin Product Section Start
Route::get('/admin/product/all', [App\Http\Controllers\AdminController::class, 'product'])->name('admin.product.all');
Route::get('/admin/product/create', [App\Http\Controllers\ProductController::class, 'product_create'])->name('admin.product.create');
Route::post('/admin/product/store', [App\Http\Controllers\ProductController::class, 'product_store'])->name('admin.product.store');
Route::post('/admin/product/delete', [App\Http\Controllers\ProductController::class, 'product_delete'])->name('admin.product.destroy');
Route::get('/admin/product/view/{slug}', [App\Http\Controllers\ProductController::class, 'product_view'])->name('admin.product.view');
Route::post('/admin/product/update/{id}', [App\Http\Controllers\ProductController::class, 'product_update'])->name('admin.product.update');

//Admin Product Section End

//Admin Category Section Start
Route::get('/admin/category/all', [App\Http\Controllers\AdminController::class, 'category'])->name('admin.category.all');
Route::get('/admin/category/create', [App\Http\Controllers\CategoryController::class, 'category_create'])->name('admin.category.create');
Route::post('/admin/category/store', [App\Http\Controllers\CategoryController::class, 'category_store'])->name('admin.category.store');
Route::post('/admin/category/delete', [App\Http\Controllers\CategoryController::class, 'category_delete'])->name('admin.category.destroy');
Route::get('/admin/category/view/{slug}', [App\Http\Controllers\CategoryController::class, 'category_view'])->name('admin.category.view');
Route::post('/admin/category/update/{id}', [App\Http\Controllers\CategoryController::class, 'category_update'])->name('admin.category.update');

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
Route::post('/vendor/profile/update', [App\Http\Controllers\AdminController::class, 'profile_update'])->name('vendor.profile.update');
Route::post('/vendor/profile/password_update', [App\Http\Controllers\AdminController::class, 'password_update'])->name('vendor.profile.password_update');

//Vendor Profile Section End

//Vendor Section End

//Rider Section Start

//Rider Profile Section Start
Route::get('/rider/profile', [App\Http\Controllers\AdminController::class, 'rider_profile'])->name('rider.profile');
Route::post('/rider/profile/update', [App\Http\Controllers\AdminController::class, 'profile_update'])->name('rider.profile.update');
Route::post('/rider/profile/password_update', [App\Http\Controllers\AdminController::class, 'password_update'])->name('rider.profile.password_update');

//Rider Profile Section End

//Rider Section End
