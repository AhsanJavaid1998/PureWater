<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function category_create()
    {
        $category = Category::where('parent_id',Null)->get();
        return view('backend.admin.category.add', compact('category'));
    }
    public function category_view($slug)
    {
        $category = Category::where('slug',$slug)->first();
        $categories = Category::where('parent_id',Null)->get();
        return view('backend.admin.category.view',compact('category','categories'));
    }

    public function category_store(Request $request)
    {
        $request->validate([
            'image' => ['required'],
            'slug' => ['unique:categories'],
            'name' => ['required', 'string', 'max:255', 'min:3', 'unique:categories'],

        ]);
        $file = $request->image;
        $image = time() . $file->getClientOriginalName();
        $file->move('uploads/images', $image);
        if (isset($request->slug))
        {
            $slug = $request->slug;
        }
        else
        {
            $slug=Str::slug($request->name);
        }
        $category = new Category();
        $category->name = $request->name;
        $category->slug = $slug;
        $category->avatar = $image;
        $category->parent_id = $request->parent_id;
        $category->status = $request->status;
        $category->save();
        return response()->json('Category Created Successfully');
    }

    public function category_update(Request $request,$id)
    {
        $category = Category::find($id);
        if (isset($request->image))
        {
            $file = $request->image;
            $image = time() . $file->getClientOriginalName();
            $file->move('uploads/images', $image);
        }
        else
        {
            $image = $category->avatar;
        }

        if ($category->slug == $request->slug && $category->name == $request->name)
        {
            $request->validate([
                'name' => ['required', 'string', 'max:255', 'min:3'],
            ]);
        }
        else if($category->slug == $request->slug && $category->name != $request->name)
        {
            $request->validate([
                'name' => ['required', 'string', 'max:255', 'min:3', 'unique:categories'],
            ]);
        }
        else if($category->slug != $request->slug && $category->name == $request->name)
        {
            $request->validate([
                'slug' => ['unique:categories'],
            ]);
        }
        else
        {
            $request->validate([
                'slug' => ['unique:categories'],
                'name' => ['required', 'string', 'max:255', 'min:3', 'unique:categories'],

            ]);
        }


        if (isset($request->slug))
        {
            $slug = $request->slug;
        }
        else
        {
            $slug=Str::slug($request->name);
        }
        $category->name = $request->name;
        $category->slug = $slug;
        $category->avatar = $image;
        $category->parent_id = $request->parent_id;
        $category->status = $request->status;
        $category->save();
        return response()->json('Category Update Successfully');
    }

    public function category_delete(Request $request)
    {
        if ($request->status == 'delete')
        {
            if ($request->ids) {
                foreach ($request->ids as $id) {
                    Category::where('parent_id',$id)->delete();
                    Category::destroy($id);

                }
                return response()->json('Category Removed');
            }

        }
    }
}
