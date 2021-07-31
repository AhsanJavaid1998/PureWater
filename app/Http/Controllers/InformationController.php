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

        return view('backend.admin.information.index',compact('contact','about'));
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
}
