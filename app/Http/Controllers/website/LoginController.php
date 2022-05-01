<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('website.layouts.login');
    }
   

    public function doLogin(Request $request){
        // dd($request->all());
        $userpost=$request->except('_token');
            // dd($userpost->email);
        if (Auth::attempt($userpost))
        
         {
            // dd(auth()->user());
            if (auth()->user()->status == "accepted")
             {
                return redirect()->route('website.home')->with('msg','Login Sucessfully');
            } 

            else
             {
                Auth::logout();
            return redirect()->route('website.home')->with('msg','Account created Sucessfully but not approved');
            }
            
        }
        else
        return redirect()->route('user.login')->with('error','Invalid User Cretentials');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('website.home')->with('error','Logout Sucessfully');
    }
}
