<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AddClass;
use Illuminate\Http\Request;

class classConroller extends Controller
{
    public function classAdd()
    {
        return view('admin.pages.class');
    }
    public function classStore(Request $request)
    {
        $request->validate([

            'addclass' => 'required',

        ]);
        AddClass::create([

            'addclass' => $request->addclass,
        ]);
        return redirect()->back()->with('msg', 'class created sucessfully');
    }
}
