<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class TeacherprofileController extends Controller
{
    public function profile()
    {
           return view('website.layouts.teacherprofile');
    }

    public function edit($id)
    {
        
        $users=User::find($id);
        return view('website.layouts.teacherprofile_edit',compact('users'));
    }
    public function update(Request $request,$id)
    {
        
        $users=User::find($id);
        $users->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'address'=>$request->address,


        ]);
        return redirect()->route('website.teacherprofile')->with('msg','Profile Updated');
    }
}
