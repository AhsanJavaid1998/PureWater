<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //product section start
    public function product()
    {
        return view('backend.admin.product.index');
    }
    public function productCreate()
    {
        return view('backend.admin.product.add');
    }
    //product section end

    //category section start
    public function category()
    {
        return view('backend.admin.category.index');
    }
    public function categoryCreate()
    {
        return view('backend.admin.category.add');
    }
    //category section end

    //vendor section start
    public function vendor()
    {
        return view('backend.admin.vendor.index');
    }
    //vendor section end

    //rider section start
    public function rider()
    {
        return view('backend.admin.rider.index');
    }
    //rider section end

    //customer section start
    public function customer()
    {
        return view('backend.admin.customer.index');
    }
    //customer section end

}