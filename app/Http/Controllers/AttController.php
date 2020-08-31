<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\Classes;
use App\Enroll;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class AttController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attend=DB::table('attendance')
            ->select('attendance.id','students.name','classes.class_name','attendance.status','attendance.date')
            ->join('students','attendance.student_id','=','students.id')
            ->join('classes','classes.class_id','=','attendance.class_id')
            ->get();
            //dd($attend);
        return view('backend.attendance.show',['attend'=>$attend]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $class=Classes::pluck('class_id','class_name');
        return view('backend.attendance.create',['class'=>$class]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $class=$request->class;
        $date=$request->date;
        $result=$request->qty;
        if (!is_array($result)){

            toastr()->error('An error has occurred please try again later.');

            return redirect('/att');
        }
        //dd($request->input('qty'));
       foreach ($result as $key => $value)
       {
           $attend=new Attendance();
           $attend->student_id= $key;
           $attend->status=$value;
           $attend->date=$date;
           $attend->class_id=$class;
           $attend->save();

       }
       return redirect('/att');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request)
    {
        $class_id=$request->class;
        $date=$request->date;
        $class= Student::all();
        //dd([$class]);
        return view('backend.attendance.list',['class'=>$class,'class_id'=>$class_id,'date'=>$date]);

        ;

    }
}
