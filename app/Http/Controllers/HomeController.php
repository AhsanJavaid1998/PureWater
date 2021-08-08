<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\User;
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
            $manager = count(User::where('role_id',2)->get());
            $rider =  count(User::where('role_id',3)->get());
            $customer =  count(User::where('role_id',4)->get());
            $supervisor =  count(User::where('role_id',5)->get());

            return view('backend.admin.dashboard',compact('customer','rider','manager','supervisor'));
        }
        else if (Auth::User()->role_id == '2')
        {
            return view('backend.manager.dashboard');
        }
        else if (Auth::User()->role_id == '3')
        {
            return view('backend.rider.dashboard');
        }
        else if (Auth::User()->role_id == '5')
        {
            return view('backend.supervisor.dashboard');
        }
        else if (Auth::User()->role_id == '4')
        {
            return view('frontend.welcome');
        }
    }
}
