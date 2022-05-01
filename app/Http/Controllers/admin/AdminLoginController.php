<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function login()
    {
        return view('admin.admin_login');
    }

    public function doLogin(Request $request){
        // dd($request->all());
        $userpost=$request->except('_token');
            // dd($userpost);
        if (Auth::attempt($userpost)) {
            // dd("true");
            return redirect()->route('admin.dashboard')->with('msg','Login Sucessfully');
        }
        else
        return redirect()->route('admin.login')->with('error','Invalid User Cretentials');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('website.home')->with('error','Logout from Dashboard');
    }
}
