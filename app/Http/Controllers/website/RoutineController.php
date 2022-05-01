<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Routine;


use Illuminate\Http\Request;

class RoutineController extends Controller
{
    public function routine()
    {
        
        $data=Routine::where('class',auth()->user()->class)->get();
        return view('website.layouts.student_routine',compact('data'));
    }

   
}
