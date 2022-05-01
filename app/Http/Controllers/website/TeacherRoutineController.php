<?php

namespace App\Http\Controllers\website;

use App\Models\Exam;
use App\Models\Routine;
use App\Models\Subject;
use App\Models\AddClass;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TeacherRoutineController extends Controller
{
    public function routine()
    {
        $class = AddClass::all();
        // dd($class);
        $data = Routine::where('subject_id', auth()->user()->subject_id)->get();
        return view('website.layouts.teacher_routine', compact('data', 'class'));
    }


    public function exam()
    {

        $exam = Exam::where('subject_id', auth()->user()->subject_id)->get();
        return view('website.layouts.teacher_exam', compact('exam'));
    }
}
