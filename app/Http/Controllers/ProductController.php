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
    public function productCreate()
    {
        $category = Category::all();
        return view('backend.admin.product.add',compact('category'));
    }
    public function product_store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'min:3', 'unique:products'],
            'image' => ['required'],
            'detail' => ['required'],
            'category_id'=>['required'],
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
