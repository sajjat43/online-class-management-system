<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function dash()
    {
        $user = User::count();
        $student=User::where('role','student')->count();
        $teacher=User::where('role','teacher')->count();

        // dd($user);
        return view('admin.layouts.dashboard',compact('user','teacher','student'));
    }
}
