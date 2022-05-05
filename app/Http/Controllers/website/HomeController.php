<?php

namespace App\Http\Controllers\website;

use App\Models\AddClass;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home()
    {

        return view('website.layouts.home');
    }
}
