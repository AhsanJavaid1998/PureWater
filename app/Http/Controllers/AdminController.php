<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    //admin Profile section start
    public function admin_profile()
    {
        return view('backend.admin.profile');
    }

    public function profile_update(Request $request)
    {
        if (Auth::user()->email == $request->email)
        {
            $request->validate([
                'email' => ['required', 'string', 'email', 'max:255'],
                'name' => ['required', 'string', 'max:255', 'min:3'],

            ]);
        }

        else
        {
            $request->validate([
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'name' => ['required', 'string', 'max:255', 'min:3'],

            ]);
        }
        if (isset($request->image))
        {
            $file = $request->image;
            $image = time() . $file->getClientOriginalName();
            $file->move('uploads/profile', $image);
        }
        else
        {
            $image = Null;
        }

        $user =User::find(Auth::user()->id);
        $slug=Str::slug($request->name);
        $user->slug = $slug;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->avatar = $image;
        $user->status = 1;
        $user->save();
        return response()->json('Profile Updated Successfully');
    }
    public function password_update(Request $request)
    {
        $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $user =User::find(Auth::user()->id);
        $user->password = Hash::make($request->password);
        $user->save();
        return response()->json('Password Update Successfully');

    }

    public function profile_delete(Request $request)
    {
        if ($request->status == 'delete')
        {
            if ($request->ids) {
                foreach ($request->ids as $id) {
                    User::destroy($id);
                }
                return response()->json('Account Removed');
            }

        }
    }

    public function vendor_profile_view($id)
    {
        $user = User::find($id);
        return view('backend.admin.vendor.view',compact('user'));
    }
    public function rider_profile_view($id)
    {
        $user = User::find($id);
        return view('backend.admin.rider.view',compact('user'));
    }

    public function user_profile_view($id)
    {
        $user = User::find($id);
        return view('backend.admin.customer.view',compact('user'));
    }


    public function user_profile_update(Request $request,$id)
    {
        $user = User::find($id);
        if ($user->email == $request->email)
        {
            $request->validate([
                'email' => ['required', 'string', 'email', 'max:255'],
                'name' => ['required', 'string', 'max:255', 'min:3'],

            ]);
        }

        else
        {
            $request->validate([
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'name' => ['required', 'string', 'max:255', 'min:3'],

            ]);
        }
        if (isset($request->image))
        {
            $file = $request->image;
            $image = time() . $file->getClientOriginalName();
            $file->move('uploads/profile', $image);
        }
        else
        {
            $image = Null;
        }

        $slug=Str::slug($request->name);
        $user->slug = $slug;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->avatar = $image;
        $user->status = 1;
        $user->save();
        return response()->json('Profile Updated Successfully');
    }

    public function user_password_update(Request $request,$id)
    {
        $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $user =User::find($id);
        $user->password = Hash::make($request->password);
        $user->save();
        return response()->json('Password Update Successfully');

    }

    //admin Profile section end


    //product section start
    public function product()
    {
        $products = Product::paginate(12);
        return view('backend.admin.product.index',compact('products'));
    }

    //product section end

    //category section start
    public function category()
    {
        $categories = Category::paginate(12);
        return view('backend.admin.category.index', compact('categories'));
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
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'name' => ['required', 'string', 'max:255', 'min:3'],

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
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'name' => ['required', 'string', 'max:255', 'min:3'],

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
