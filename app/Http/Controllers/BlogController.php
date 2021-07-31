<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::paginate(12);
        return view('backend.admin.blog.index',compact('blogs'));
    }

    public function create()
    {
        return view('backend.admin.blog.add');
    }
    public function view($id)
    {
        $blog = Blog::find($id);
        return view('backend.admin.blog.view',compact('blog'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required'],
            'description' => ['required'],
            'title' => ['required', 'string', 'max:255', 'min:3',],
        ]);
        $file = $request->image;
        $image = time() . $file->getClientOriginalName();
        $file->move('uploads/images', $image);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->avatar = $image;
        $blog->detail = $request->description;
        $blog->status = $request->status;
        $blog->save();
        return response()->json('Blog Created Successfully');
    }

    public function update(Request $request,$id)
    {
        $blog = Blog::find($id);
        if (isset($request->image))
        {
            $file = $request->image;
            $image = time() . $file->getClientOriginalName();
            $file->move('uploads/images', $image);
        }
        else
        {
            $image = $blog->avatar;
        }


        $request->validate([
            'description' => ['required'],
            'title' => ['required', 'string', 'max:255', 'min:3'],
        ]);
        $blog->title = $request->title;
        $blog->avatar = $image;
        $blog->detail = $request->description;
        $blog->status = $request->status;
        $blog->save();
        return response()->json('Blog Update Successfully');
    }


    public function delete(Request $request)
    {
        if ($request->status == 'delete')
        {
            if ($request->ids) {
                foreach ($request->ids as $id) {
                    Blog::destroy($id);
                }
                return response()->json('Blog Removed');
            }

        }
    }
}
