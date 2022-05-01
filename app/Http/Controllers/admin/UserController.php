<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function userList(Request $request)
    {
            $search=$request->query('search');
            if($search)
            {
                $users=User::where('name','Like','%'.$search.'%')->get();
                return view('admin.layouts.user_list',compact('users'));
            }

        $users = User::all();
        return view('admin.layouts.user_list',compact('users'));
    }

    public function pending($user_id)
    {
        $users=User::find($user_id);
        $users->update([
         'status'=>'accepted'
        ]);
        return redirect()->back();
    }

    public function view($user_id)
    {
        //dd("$user_id");
        $users=User::find($user_id);
        //dd($users);
        return view('admin.pages.user_view',compact('users'));
    }

    public function edit($user_id)
    {
        //dd("$user_id");
        $users=User::find($user_id);
        //dd($users);
        return view('admin.pages.user_edit',compact('users'));
    }

    public function update(Request $request,$user_id)
    {
        //dd("$user_id");
        $users=User::find($user_id);
        $users->update([
           
        'name'=>$request->name,
        'gender'=>$request->gender,
        'birth'=>$request->birth,
        'class'=>$request->class,
        'join'=>$request->join,
        'mobile'=>$request->mobile,
        'email'=>$request->email,
        'password'=>$request->password,
        'father_name'=>$request->father_name,
        'father_mobile'=>$request->father_mobile,
        'mother_name'=>$request->mother_name,
        'mother_mobile'=>$request->mother_mobile,
        'address'=>$request->address,
        'image'=>$request->image,

        ]);
        return redirect()->route('admin.user.list')->with('msg','Updated Sucessfully');
    }


    public function delete($user_id)
    {
       User::find($user_id)->delete();
       return redirect()->back()->with('msg','Deleted')->with('msg','User deleted successfully');
        
    }
}
