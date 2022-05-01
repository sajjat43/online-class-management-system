<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\Subject;

class ResultController extends Controller
{
    public function result(Request $request)
    {
        $search=$request->query('search');
            if($search)
            {
                $data=Result::where('user_id','Like','%'.$search.'%')->get();
                return view('admin.layouts.result',compact('data'));
            }
        $data=Result::all();

        return view('admin.layouts.result',compact('data'));
    }

    public function resultAdd()
    {
        $subjects = Subject::all();
        return view('admin.pages.result_add', compact('subjects'));
    }


    public function store(Request $request)
    {
        Result::create([
            'name'=>$request-> name,
            'user_id'=>$request-> user_id,
            'class'=>$request-> class,
            'subject'=>$request->subject,
            'grade'=>$request->grade,
            'status'=>$request->status,
            

        ]);
        return redirect()->route('admin.result')->with('msg','Result form created sucessfully');

    }
    public function edit($id)
    {
        //dd("$user_id");
        $subjects = Subject::all();
        $result=Result::find($id);
        //dd($users);
        return view('admin.pages.result_edit',compact('result','subjects'));
    }
 
    public function update(Request $request,$id)
    {
        //dd("$user_id");
        $subjects = Subject::all();
        $result=Result::find($id);
        $result->update([
           
            'name'=>$request-> name,
            'user_id'=>$request-> user_id,
            'class'=>$request-> class,
            'subject_id'=> $request->subject_id,
            'grade'=>$request->grade,
            'status'=>$request->status,
            
 
        ]);
        return redirect()->route('admin.result')->with('msg','Updated Sucessfully');
    }
 
     public function delete($id)
    {
       Result::find($id)->delete();
       return redirect()->back()->with('msg','Deleted')->with('msg','Result deleted successfully');
        
    }
}
