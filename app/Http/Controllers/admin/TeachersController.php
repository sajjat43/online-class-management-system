<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subject;

class TeachersController extends Controller
{
    public function teacher(Request $request)
    {
        $search = $request->query('search');
        if ($search) {
            $users = User::where('name', 'Like', '%' . $search . '%')
                ->orwhere('user_id', 'Like', '%' . $search . '%')->get();
            return view('admin.layouts.teacher', compact('users'));
        }
        // dd($teacher);

        $users = User::all();
        // dd($users);
        return view('admin.layouts.teacher', compact('users'));
    }
    public function teacherAdd()
    {
        $subjects = Subject::all();
        return view('admin.pages.teacher_add', compact('subjects'));
    }
    public function pending($id)
    {
        $users = User::find($id);
        $users->update([
            'status' => 'accepted'
        ]);
        return redirect()->route('admin.teacher');
    }
    public function view($id)
    {
        //dd("$user_id");
        $users = User::find($id);
        //    dd($users);
        $subjects = Subject::all();

        return view('admin.pages.teacher_view', compact('users', 'subjects'));
    }

    public function edit($id)
    {
        //dd("$user_id");
        $subjects = Subject::all();
        $users = User::find($id);
        //dd($users);
        return view('admin.pages.teacher_edit', compact('users', 'subjects'));
    }

    public function update(Request $request, $id)
    {
        //dd("$user_id");
        $subjects = Subject::all();
        $users = User::find($id);
        $users->update([

            'name' => $request->name,
            'gender' => $request->gender,
            'mobile' => $request->mobile,
            'subject_id' => $request->subject_id,
            'email' => $request->email,
            'password' => $request->password,
            'address' => $request->address,
            'image' => $request->image,

        ]);
        return redirect()->route('admin.teacher')->with('msg', 'Updated Sucessfully');
    }


    public function delete($id)
    {
        User::find($id)->delete();
        return redirect()->back()->with('msg', 'Deleted')->with('msg', 'Teacher deleted successfully');
    }

    //attendance

    public function attendanceView($id)
    {

        $class = User::where('class_id', $id)->get();
        // dd($class);

        return view('admin.pages.attendance', compact('class'));
    }
}
