<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Enroll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.attendance.show');
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
        dd($request->input());
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
        $class=DB::table('enrolments')
            ->select('table_students.name','table_students.id')
            ->join('table_students','enrolments.student_id','=','table_students.id')
            ->where('enrolments.class_id',$class_id)
            ->get();
        //dd([$class]);
        return view('backend.attendance.list',['class'=>$class,'class_id'=>$class_id,'date'=>$date]);

        ;

    }
}
