<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::paginate(12);
        return view('backend.admin.testimonial.index',compact('testimonials'));
    }

    public function create()
    {
        return view('backend.admin.testimonial.add');
    }
    public function view($id)
    {
        $testimonial = Testimonial::find($id);
        return view('backend.admin.testimonial.view',compact('testimonial'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required'],
            'description' => ['required'],
            'title' => ['required', 'string', 'max:255', 'min:3',],
            'name' => ['required', 'string', 'max:255', 'min:3',],
        ]);
        $file = $request->image;
        $image = time() . $file->getClientOriginalName();
        $file->move('uploads/images', $image);

        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->title = $request->title;
        $testimonial->avatar = $image;
        $testimonial->detail = $request->description;
        $testimonial->status = $request->status;
        $testimonial->save();
        return response()->json('Testimonial Created Successfully');
    }

    public function update(Request $request,$id)
    {
        $testimonial = Testimonial::find($id);
        if (isset($request->image))
        {
            $file = $request->image;
            $image = time() . $file->getClientOriginalName();
            $file->move('uploads/images', $image);
        }
        else
        {
            $image = $testimonial->avatar;
        }


        $request->validate([
            'description' => ['required'],
            'title' => ['required', 'string', 'max:255', 'min:3',],
            'name' => ['required', 'string', 'max:255', 'min:3',],
        ]);
        $testimonial->name = $request->name;
        $testimonial->title = $request->title;
        $testimonial->avatar = $image;
        $testimonial->detail = $request->description;
        $testimonial->status = $request->status;
        $testimonial->save();
        return response()->json('Testimonial Update Successfully');
    }


    public function delete(Request $request)
    {
        if ($request->status == 'delete')
        {
            if ($request->ids) {
                foreach ($request->ids as $id) {
                    Testimonial::destroy($id);
                }
                return response()->json('Testimonial Removed');
            }

        }
    }
}
