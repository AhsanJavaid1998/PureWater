<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index()
    {
        $contact = Information::where('type','contact')->first();
        $about = Information::where('type','about')->first();
        $term = Information::where('type','term')->first();
        $delivery = Information::where('type','delivery')->first();


        return view('backend.admin.information.index',compact('contact','about','term','delivery'));
    }

    public function logo()
    {
        $logo = Information::where('type','logo')->first();
        return view('backend.admin.site.logo',compact('logo'));
    }
    public function header()
    {
        $header = Information::where('type','header')->first();

        return view('backend.admin.site.header',compact('header',));
    }

    public function contact_store(Request $request)
    {
        $find = Information::where('type','contact')->first();
        if (isset($find))
        {
            $request->validate([
                'map' => ['url'],
                'address' => ['required'],
                'number' => ['required', 'min:3'],
                'email' => ['required', 'string', 'email', 'max:255', 'min:3'],
            ]);
            $find->type = 'contact';
            $find->content = '{"email":"' . $request->email . '","number":"' . $request->number . '","address":"' . $request->address . '","map":"' . $request->map . '"}';
            $find->save();
            return response()->json('Contact Updated Successfully');
        }
        else {


            $request->validate([
                'map' => ['url'],
                'address' => ['required'],
                'number' => ['required', 'min:3'],
                'email' => ['required', 'string', 'email', 'max:255', 'min:3'],

            ]);
            $info = new Information();
            $info->type = 'contact';
            $info->content = '{"email":"' . $request->email . '","number":"' . $request->number . '","address":"' . $request->address . '","map":"' . $request->map . '"}';
            $info->save();
            return response()->json('Contact Created Successfully');
        }
    }
    public function about_store(Request $request)
    {
        $find = Information::where('type','about')->first();
        if (isset($find))
        {
            if (isset($request->image))
            {
                $file = $request->image;
                $image = time() . $file->getClientOriginalName();
                $file->move('uploads/images', $image);
            }
            else
            {
                $image = $find->avatar;
            }
            $request->validate([
                'description' => ['required'],
                'title' => ['required', 'string', 'max:255', 'min:3'],
            ]);

            $find->type = 'about';
            $find->content = '{"title":"'.$request->title.'","description":"'.$request->description.'","avatar":"'.$image.'"}';
            $find->save();
            return response()->json('About Updated Successfully');
        }
        else
        {
            $request->validate([
                'image' => ['required'],
                'description' => ['required'],
                'title' => ['required', 'string', 'max:255', 'min:3'],
            ]);
            $file = $request->image;
            $image = time() . $file->getClientOriginalName();
            $file->move('uploads/images', $image);

            $info = new Information();
            $info->type = 'about';
            $info->content = '{"title":"'.$request->title.'","description":"'.$request->description.'","avatar":"'.$image.'"}';
            $info->save();
            return response()->json('About Created Successfully');
        }

    }
    public function term_store(Request $request)
    {
        $find = Information::where('type','term')->first();
        if (isset($find))
        {
            $request->validate([
                'description' => ['required'],
                'title' => ['required', 'string', 'max:255', 'min:3'],
            ]);

            $find->type = 'term';
            $find->content = '{"title":"'.$request->title.'","description":"'.$request->description.'"}';
            $find->save();
            return response()->json('Terms & Conditions Updated Successfully');
        }
        else
        {
            $request->validate([
                'description' => ['required'],
                'title' => ['required', 'string', 'max:255', 'min:3'],
            ]);

            $info = new Information();
            $info->type = 'term';
            $info->content = '{"title":"'.$request->title.'","description":"'.$request->description.'"}';
            $info->save();
            return response()->json('Terms & Conditions Created Successfully');
        }

    }
    public function delivery_store(Request $request)
    {
        $find = Information::where('type','delivery')->first();
        if (isset($find))
        {
            $request->validate([
                'description' => ['required'],
                'title' => ['required', 'string', 'max:255', 'min:3'],
            ]);

            $find->type = 'delivery';
            $find->content = '{"title":"'.$request->title.'","description":"'.$request->description.'"}';
            $find->save();
            return response()->json('Delivery Information Updated Successfully');
        }
        else
        {
            $request->validate([
                'description' => ['required'],
                'title' => ['required', 'string', 'max:255', 'min:3'],
            ]);

            $info = new Information();
            $info->type = 'delivery';
            $info->content = '{"title":"'.$request->title.'","description":"'.$request->description.'"}';
            $info->save();
            return response()->json('Delivery Information Created Successfully');
        }

    }

    public function logo_store(Request $request)
    {

        $find = Information::where('type','logo')->first();
        if (isset($find))
        {
            if (isset($request->image))
            {
                $file = $request->image;
                $image = time() . $file->getClientOriginalName();
                $file->move('uploads/images', $image);
            }
            else
            {
                $image = $find->avatar;
            }

            $find->type = 'logo';
            $find->content = $image;
            $find->save();
            return response()->json('Site Logo Updated Successfully');
        }
        else
        {
            $request->validate([
                'image' => ['required'],
            ]);
            $file = $request->image;
            $image = time() . $file->getClientOriginalName();
            $file->move('uploads/images', $image);

            $info = new Information();
            $info->type = 'logo';
            $info->content = $image;
            $info->save();
            return response()->json('Site Logo Created Successfully');
        }

    }
    public function header_store(Request $request)
    {
        $find = Information::where('type','header')->first();
        if (isset($find))
        {
            if (isset($request->image))
            {
                $file = $request->image;
                $image = time() . $file->getClientOriginalName();
                $file->move('uploads/images', $image);
            }
            else
            {
                $image = $find->avatar;
            }

            $find->type = 'header';
            $find->content = $image;
            $find->save();
            return response()->json('Site Header Updated Successfully');
        }
        else
        {
            $request->validate([
                'image' => ['required'],
            ]);
            $file = $request->image;
            $image = time() . $file->getClientOriginalName();
            $file->move('uploads/images', $image);

            $info = new Information();
            $info->type = 'header';
            $info->content = $image;
            $info->save();
            return response()->json('Site Header Created Successfully');
        }

    }


}
