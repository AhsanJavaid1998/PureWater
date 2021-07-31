<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::paginate(12);
        return view('backend.admin.faq.index',compact('faqs'));
    }

    public function create()
    {
        return view('backend.admin.faq.add');
    }
    public function view($id)
    {
        $faq = Faq::find($id);
        return view('backend.admin.faq.view',compact('faq'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => ['required'],
            'title' => ['required', 'string', 'max:255', 'min:3',],

        ]);
        $faq = new Faq();
        $faq->title = $request->title;
        $faq->detail = $request->description;
        $faq->status = $request->status;
        $faq->save();
        return response()->json('FAQ Created Successfully');
    }

    public function update(Request $request,$id)
    {
        $faq = Faq::find($id);
        $request->validate([
            'description' => ['required'],
            'title' => ['required', 'string', 'max:255', 'min:3'],

        ]);
        $faq->title = $request->title;
        $faq->detail = $request->description;
        $faq->status = $request->status;
        $faq->save();
        return response()->json('FAQ Update Successfully');
    }


    public function delete(Request $request)
    {
        if ($request->status == 'delete')
        {
            if ($request->ids) {
                foreach ($request->ids as $id) {
                    Faq::destroy($id);
                }
                return response()->json('FAQ Removed');
            }

        }
    }
}
