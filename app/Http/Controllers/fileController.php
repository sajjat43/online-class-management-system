<?php

namespace App\Http\Controllers;

use App\Models\AddClass;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class fileController extends Controller
{
    public function questionUpload()
    {
        $class = AddClass::all();
        return view('admin.pages.question.questionUplode', compact('class'));
    }
    public function questionStore(Request $request)
    {
        // dd($request);
        $data = new Question();
        $question = $request->question;
        $filename = time() . '.' . $question->getclientOriginalExtension();
        $request->question->move('question', $filename);
        $data->question = $filename;

        $data->class = $request->class;
        $data->save();
        return redirect()->back();
    }

    public function questionView()
    {
        $data = Question::all();
        // dd($data);
        return view('admin.pages.question.questionView', compact('data'));
    }

    public function questionDownload(Request $request, $question)
    {
        return response()->download(public_path('question/' . $question));
    }
    public function questionFileView($id)
    {
        $data = Question::find($id);
        return view('admin.pages.question.qsn_file_view', compact('data'));
    }
}
