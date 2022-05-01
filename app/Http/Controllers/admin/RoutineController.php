<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Routine;
use App\Models\Subject;

class RoutineController extends Controller
{
    public function routine(Request $request)
    {
        $search=$request->query('search');
            if($search)
            {
                $data=Routine::where('class','Like','%'.$search.'%')->get();
                return view('admin.layouts.routine',compact('data'));
            }

        $data=Routine::all();
        return view('admin.layouts.routine',compact('data'));
    }
    public function routineAdd()
    {
        $subjects = Subject::all();
        return view('admin.pages.routine_add', compact('subjects'));
    }
    public function store(Request $request)
    {
        Routine::create([
            'class'=>$request-> class,
            'subject_id'=> $request->subject_id,
            'date'=>$request->date,
            'time'=>$request->time,
            'link'=>$request->link,

        ]);
        return redirect()->route('admin.routine')->with('msg','Routine form created sucessfully');
    }

    public function edit($id)
   {
       //dd("$user_id");
       $subjects = Subject::all();
       $routine=Routine::find($id);
       //dd($users);
       return view('admin.pages.routine_edit',compact('routine','subjects'));
   }

   public function update(Request $request,$id)
   {
       //dd("$user_id");
       $subjects = Subject::all();
       $routine=Routine::find($id);
       $routine->update([
          
        'class'=>$request-> class,
        'subject_id'=> $request->subject_id,
        'date'=>$request->date,
        'time'=>$request->time,
        'link'=>$request->link,

       ]);
       return redirect()->route('admin.routine')->with('msg','Updated Sucessfully');
   }

    public function delete($id)
   {
      Routine::find($id)->delete();
      return redirect()->back()->with('msg','Deleted')->with('msg','Routine deleted successfully');
       
   }
}
