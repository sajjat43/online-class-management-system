<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MOdels\User;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('website.layouts.profile');
    }

    public function edit($id)
    {
        
        $users=User::find($id);
        return view('website.layouts.profile_edit',compact('users'));
    }
    public function update(Request $request,$id)
    {
        
        $users=User::find($id);
        $users->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'father_mobile'=>$request->father_mobile,
            'address'=>$request->address,


        ]);
        return redirect()->route('website.profile')->with('msg','Profile Updated');
    }
}
