<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    //admin Profile section start
    public function admin_profile()
    {
        return view('backend.admin.profile');
    }
    //admin Profile section end


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
        $users = User::where('role_id','2')->paginate(12);
        return view('backend.admin.vendor.index',compact('users'));
    }
    public function vendor_profile()
    {
        return view('backend.vendor.profile');
    }
    public function vendor_create()
    {
        return view('backend.admin.vendor.create');
    }
    public function vendor_store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = new User();
        $slug=Str::slug($request->name);
        $user->role_id = 2;
        $user->slug = $slug;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->status = 1;
        $user->password = Hash::make($request->password);
        $user->save();
        return response()->json('Vendor Created Successfully');
    }

    //vendor section end

    //rider section start
    public function rider()
    {
        $users = User::where('role_id','3')->paginate(12);
        return view('backend.admin.rider.index',compact('users'));
    }
    public function rider_profile()
    {
        return view('backend.rider.profile');
    }
    public function rider_create()
    {
        return view('backend.admin.rider.create');
    }
    public function rider_store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = new User();
        $slug=Str::slug($request->name);
        $user->role_id = 3;
        $user->slug = $slug;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->status = 1;
        $user->password = Hash::make($request->password);
        $user->save();
        return response()->json('Rider Created Successfully');
    }


    //rider section end

    //customer section start
    public function customer()
    {
        $users = User::where('role_id','4')->paginate(12);
        return view('backend.admin.customer.index',compact('users'));
    }
    //customer section end

}
