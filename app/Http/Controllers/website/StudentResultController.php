<?php

namespace App\Http\Controllers\website;

use App\Models\Exam;
use App\Models\Result;
use App\Models\Subject;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentResultController extends Controller
{
    public function result()

    {
        $subjects = Subject::all();
        $data = Result::where('user_id', auth()->user()->user_id)->get();
        return view('website.layouts.student_result', compact('data', 'subjects'));
    }
    public function exam()
    {

        $exam = Exam::where('class', auth()->user()->class)->get();
        // dd($exam);
        $to = Exam::all();

        return view('website.layouts.student_exam', compact('exam', 'to'));
    }
}
