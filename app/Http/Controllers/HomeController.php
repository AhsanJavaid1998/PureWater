<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::User()->role_id == '1')
        {
            return view('backend.admin.dashboard');
        }
        else if (Auth::User()->role_id == '2')
        {
            return view('backend.vendor.dashboard');
        }
        else if (Auth::User()->role_id == '3')
        {
            return view('backend.rider.dashboard');
        }
        else if (Auth::User()->role_id == '4')
        {
            return view('frontend.welcome');
        }
    }
}
