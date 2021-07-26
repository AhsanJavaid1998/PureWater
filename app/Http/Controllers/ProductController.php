<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function product_create()
    {
        $category = Category::all();
        return view('backend.admin.product.add',compact('category'));
    }
    public function product_view($slug)
    {
        $product = Product::where('slug',$slug)->first();
        $category = Category::all();
        return view('backend.admin.product.view',compact('category','product'));
    }

    public function product_store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'min:3', 'unique:products'],
            'image' => ['required'],
            'detail' => ['required'],
            'category_id'=>['required'],
            'slug' => ['unique:products'],

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
        $product = new Product();
        $product->name = $request->name;
        $product->slug = $slug;
        $product->avatar = $image;
        $product->category_id = $request->category_id;
        $product->detail = $request->detail;
        $product->status = $request->status;
        $product->price = $request->price;
        $product->save();
        return response()->json('Product Created Successfully');
    }

    public function product_update(Request $request,$id)
    {
        $product = Product::find($id);
        if (isset($request->image))
        {
            $file = $request->image;
            $image = time() . $file->getClientOriginalName();
            $file->move('uploads/images', $image);
        }
        else
        {
            $image = $product->avatar;
        }

        if ($product->slug == $request->slug && $product->name == $request->name)
        {
            $request->validate([
                'name' => ['required', 'string', 'max:255', 'min:3'],
                'detail' => ['required'],
                'category_id'=>['required'],
            ]);
        }
        else if($product->slug == $request->slug && $product->name != $request->name)
        {
            $request->validate([
                'name' => ['required', 'string', 'max:255', 'min:3', 'unique:products'],
                'detail' => ['required'],
                'category_id'=>['required'],
            ]);
        }
        else if($product->slug != $request->slug && $product->name == $request->name)
        {
            $request->validate([
                'slug' => ['unique:products'],
                'detail' => ['required'],
                'category_id'=>['required'],
            ]);
        }
        else
        {
            $request->validate([
                'name' => ['required', 'string', 'max:255', 'min:3', 'unique:products'],
                'slug' => ['unique:products'],
                'detail' => ['required'],
                'category_id'=>['required'],
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
        $product->name = $request->name;
        $product->slug = $slug;
        $product->avatar = $image;
        $product->category_id = $request->category_id;
        $product->detail = $request->detail;
        $product->status = $request->status;
        $product->price = $request->price;
        $product->save();
        return response()->json('Product Update Successfully');
    }


    public function product_delete(Request $request)
    {
        if ($request->status == 'delete')
        {
            if ($request->ids) {
                foreach ($request->ids as $id) {
                    Product::destroy($id);
                }
                return response()->json('Product Removed');
            }

        }
    }
}
