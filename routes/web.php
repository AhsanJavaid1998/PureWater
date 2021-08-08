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
Route::get('/test', function(){
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    return 123;
});


Route::get('/', function () {
    return view('frontend.welcome');
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/product', function () {
    return view('frontend.product');
});


Route::get('/checkout', function () {
    return view('frontend.checkout');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/cart', function () {
    return view('frontend.cart');
});
Route::get('/blog', function () {
    return view('frontend.blog');
});
Route::get('/blog_detail', function () {
    return view('frontend.blog_detail');
});

Route::get('/faq_page', function () {
    return view('frontend.faq_page');
});
Route::get('/pricing', function () {
    return view('frontend.pricing');
});
Route::get('/product_detail', function () {
    return view('frontend.product_detail');
});
Route::get('/team', function () {
    return view('frontend.team');
});
Route::get('/testimonial', function () {
    return view('frontend.testimonial');
});
Route::get('/terms_and_conditions', function () {
    return view('frontend.term');
});
Route::get('/wishlist', function () {
    return view('frontend.wishlist');
});
Route::get('/order_history', function () {
    return view('frontend.order_history');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//Admin Section Start

//Admin Profile Section Start
Route::get('/admin/profile', [App\Http\Controllers\AdminController::class, 'admin_profile'])->name('admin.profile');
Route::post('/admin/profile/update', [App\Http\Controllers\AdminController::class, 'profile_update'])->name('admin.profile.update');
Route::post('/admin/profile/password_update', [App\Http\Controllers\AdminController::class, 'password_update'])->name('admin.profile.password_update');
Route::post('/admin/profile/delete', [App\Http\Controllers\AdminController::class, 'profile_delete'])->name('admin.profile.destroy');
Route::get('/admin/manager/profile/view/{id}', [App\Http\Controllers\AdminController::class, 'manager_profile_view'])->name('admin.manager.profile.view');
Route::get('/admin/supervisor/profile/view/{id}', [App\Http\Controllers\AdminController::class, 'supervisor_profile_view'])->name('admin.supervisor.profile.view');
Route::get('/admin/rider/profile/view/{id}', [App\Http\Controllers\AdminController::class, 'rider_profile_view'])->name('admin.rider.profile.view');
Route::get('/admin/user/profile/view/{id}', [App\Http\Controllers\AdminController::class, 'user_profile_view'])->name('admin.user.profile.view');

Route::post('/admin/user/profile/update/{id}', [App\Http\Controllers\AdminController::class, 'user_profile_update'])->name('admin.user.profile.update');
Route::post('/admin/user/profile/password_update/{id}', [App\Http\Controllers\AdminController::class, 'user_password_update'])->name('admin.user.profile.password_update');

//Admin Profile Section End


//Admin Blog Section Start
Route::get('/admin/blog/all', [App\Http\Controllers\BlogController::class, 'index'])->name('admin.blog.all');
Route::get('/admin/blog/create', [App\Http\Controllers\BlogController::class, 'create'])->name('admin.blog.create');
Route::post('/admin/blog/store', [App\Http\Controllers\BlogController::class, 'store'])->name('admin.blog.store');
Route::post('/admin/blog/delete', [App\Http\Controllers\BlogController::class, 'delete'])->name('admin.blog.destroy');
Route::get('/admin/blog/view/{id}', [App\Http\Controllers\BlogController::class, 'view'])->name('admin.blog.view');
Route::post('/admin/blog/update/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('admin.blog.update');

//Admin Blog Section End

//Admin Faq Section Start
Route::get('/admin/faq/all', [App\Http\Controllers\FaqController::class, 'index'])->name('admin.faq.all');
Route::get('/admin/faq/create', [App\Http\Controllers\FaqController::class, 'create'])->name('admin.faq.create');
Route::post('/admin/faq/store', [App\Http\Controllers\FaqController::class, 'store'])->name('admin.faq.store');
Route::post('/admin/faq/delete', [App\Http\Controllers\FaqController::class, 'delete'])->name('admin.faq.destroy');
Route::get('/admin/faq/view/{id}', [App\Http\Controllers\FaqController::class, 'view'])->name('admin.faq.view');
Route::post('/admin/faq/update/{id}', [App\Http\Controllers\FaqController::class, 'update'])->name('admin.faq.update');

//Admin Faq Section End


//Admin Testimonial Section Start
Route::get('/admin/testimonial/all', [App\Http\Controllers\TestimonialController::class, 'index'])->name('admin.testimonial.all');
Route::get('/admin/testimonial/create', [App\Http\Controllers\TestimonialController::class, 'create'])->name('admin.testimonial.create');
Route::post('/admin/testimonial/store', [App\Http\Controllers\TestimonialController::class, 'store'])->name('admin.testimonial.store');
Route::post('/admin/testimonial/delete', [App\Http\Controllers\TestimonialController::class, 'delete'])->name('admin.testimonial.destroy');
Route::get('/admin/testimonial/view/{id}', [App\Http\Controllers\TestimonialController::class, 'view'])->name('admin.testimonial.view');
Route::post('/admin/testimonial/update/{id}', [App\Http\Controllers\TestimonialController::class, 'update'])->name('admin.testimonial.update');

//Admin Testimonial Section End


//Admin Team Section Start
Route::get('/admin/team/all', [App\Http\Controllers\TeamController::class, 'index'])->name('admin.team.all');
Route::get('/admin/team/create', [App\Http\Controllers\TeamController::class, 'create'])->name('admin.team.create');
Route::post('/admin/team/store', [App\Http\Controllers\TeamController::class, 'store'])->name('admin.team.store');
Route::post('/admin/team/delete', [App\Http\Controllers\TeamController::class, 'delete'])->name('admin.team.destroy');
Route::get('/admin/team/view/{id}', [App\Http\Controllers\TeamController::class, 'view'])->name('admin.team.view');
Route::post('/admin/team/update/{id}', [App\Http\Controllers\TeamController::class, 'update'])->name('admin.team.update');

//Admin Team Section End

//Admin Information Section Start
Route::get('/admin/information/all', [App\Http\Controllers\InformationController::class, 'index'])->name('admin.information.all');
Route::get('/admin/information/create', [App\Http\Controllers\InformationController::class, 'create'])->name('admin.information.create');
Route::post('/admin/information/delete', [App\Http\Controllers\InformationController::class, 'delete'])->name('admin.information.destroy');
Route::get('/admin/information/view/{id}', [App\Http\Controllers\InformationController::class, 'view'])->name('admin.information.view');
Route::post('/admin/information/update/{id}', [App\Http\Controllers\InformationController::class, 'update'])->name('admin.information.update');

Route::post('/admin/information/contact/store', [App\Http\Controllers\InformationController::class, 'contact_store'])->name('admin.information.contact.store');
Route::post('/admin/information/about/store', [App\Http\Controllers\InformationController::class, 'about_store'])->name('admin.information.about.store');
Route::post('/admin/information/term/store', [App\Http\Controllers\InformationController::class, 'term_store'])->name('admin.information.term.store');
Route::post('/admin/information/delivery/store', [App\Http\Controllers\InformationController::class, 'delivery_store'])->name('admin.information.delivery.store');

//Admin Information Section End

//Admin Site Section Start
Route::get('/admin/site/logo', [App\Http\Controllers\InformationController::class, 'logo'])->name('admin.site.logo');
Route::get('/admin/site/header', [App\Http\Controllers\InformationController::class, 'header'])->name('admin.site.header');

Route::post('/admin/information/logo/store', [App\Http\Controllers\InformationController::class, 'logo_store'])->name('admin.information.logo.store');
Route::post('/admin/information/header/store', [App\Http\Controllers\InformationController::class, 'header_store'])->name('admin.information.header.store');

//Admin Site Section End



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

//Admin Manager Section Start
Route::post('/admin/manager/store', [App\Http\Controllers\AdminController::class, 'manager_store'])->name('admin.manager.store');
Route::get('/admin/manager/create', [App\Http\Controllers\AdminController::class, 'manager_create'])->name('admin.manager.create');
Route::get('/admin/manager/all', [App\Http\Controllers\AdminController::class, 'manager'])->name('admin.manager.all');
//Admin Manager Section End


//Admin Supervisor Section Start
Route::post('/admin/supervisor/store', [App\Http\Controllers\AdminController::class, 'supervisor_store'])->name('admin.supervisor.store');
Route::get('/admin/supervisor/create', [App\Http\Controllers\AdminController::class, 'supervisor_create'])->name('admin.supervisor.create');
Route::get('/admin/supervisor/all', [App\Http\Controllers\AdminController::class, 'supervisor'])->name('admin.supervisor.all');
//Admin Supervisor Section End

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
Route::get('/manager/profile', [App\Http\Controllers\AdminController::class, 'vendor_profile'])->name('manager.profile');
Route::post('/manager/profile/update', [App\Http\Controllers\AdminController::class, 'profile_update'])->name('manager.profile.update');
Route::post('/manager/profile/password_update', [App\Http\Controllers\AdminController::class, 'password_update'])->name('manager.profile.password_update');

//Vendor Profile Section End

//Vendor Section End

//Rider Section Start

//Rider Profile Section Start
Route::get('/rider/profile', [App\Http\Controllers\AdminController::class, 'rider_profile'])->name('rider.profile');
Route::post('/rider/profile/update', [App\Http\Controllers\AdminController::class, 'profile_update'])->name('rider.profile.update');
Route::post('/rider/profile/password_update', [App\Http\Controllers\AdminController::class, 'password_update'])->name('rider.profile.password_update');

//Rider Profile Section End

//Rider Section End
