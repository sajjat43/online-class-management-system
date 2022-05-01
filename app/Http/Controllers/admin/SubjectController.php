<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AddClass;
use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function subject(Request $request)
    {
        $search = $request->query('search');
        if ($search) {
            $subject = Subject::where('subject_name', 'Like', '%' . $search . '%')->get();
            return view('admin.layouts.subject', compact('subject'));
        }
        $subject = Subject::all();
        return view('admin.layouts.subject', compact('subject'));
    }
    public function subjectAdd()
    {
        $class = AddClass::all();
        return view('admin.pages.subject_add', compact('class'));
    }



    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'subject_name' => 'required',
            'subject_class' => 'required',
        ]);

        Subject::create(
            [
                'subject_name' => $request->subject_name,
                'subject_class' => $request->subject_class,
            ]
        );
        return redirect()->route('admin.subject')->with('msg', 'Subject add successfully');
    }


    public function edit($id)
    {
        //dd("$user_id");
        $subject = Subject::find($id);
        //dd($users);
        return view('admin.pages.subject_edit', compact('subject'));
    }

    public function update(Request $request, $id)
    {
        //dd("$user_id");
        $subject = Subject::find($id);
        $subject->update([

            'subject_name' => $request->subject_name,
            'subject_class' => $request->subject_class,

        ]);
        return redirect()->route('admin.subject')->with('msg', 'Updated Sucessfully');
    }

    public function delete($id)
    {
        Subject::find($id)->delete();
        return redirect()->back()->with('msg', 'Deleted')->with('msg', 'Subject deleted successfully');
    }
}
