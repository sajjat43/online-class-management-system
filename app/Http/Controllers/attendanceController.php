<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class attendanceController extends Controller
{
    public function attendanceStore(Request $request)
    {
        // dd($request->all());

        // $attendance = Attendance::create([
        //     'dateAdd' => $request->date,

        // ]);

        $Sname = $request->Sname;
        $Sid = $request->Sid;
        $attendance = $request->attendance;
        $class_id = $request->class_id;


        for ($i = 0; $i < count($Sname); $i++) {

            $saveRecord = ([

                'class_id' => $request->class_id[$i],
                'Sname' => $request->Sname[$i],
                'Sid' => $request->Sid[$i],
                'attendance' => $request->attendance[$i],
                'date' => Carbon::now()

            ]);
            // dd($key);
            DB::table('attendances')->insert($saveRecord);
        }





        return redirect()->route('website.teacher.routine')->with('msg', 'Student Attendance submited');
    }
}
