<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Timetable;
use App\User;
use DB;
use Illuminate\Http\Request;

class TimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timetable=DB::table('table_timetables')
            ->select('table_timetables.id','users.name','table_classes.class_name','table_timetables.date','table_timetables.start_time','table_timetables.end_time')
            ->join('table_classes','table_classes.class_id','=','table_timetables.class_id')
            ->join('users','users.id','=','table_timetables.teacher_id')
            ->get();

        return view('backend.timetable.show',['timetable'=>$timetable]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teacher=User::where('role','teacher')->pluck('id','name');
        $class= Classes::pluck('class_id','class_name');

        return view('backend.timetable.create',['class'=>$class,'teacher'=>$teacher]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $timetable=new Timetable();
        $timetable->class_id=$request->class;
        $timetable->teacher_id=$request->teacher;
        $timetable->date=$request->date;
        $timetable->start_time=$request->start_time;
        $timetable->end_time=$request->end_time;
        $timetable->save();
        return redirect('/timetable');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $timetable=DB::table('table_timetables')
        ->select('table_timetables.id','users.name','table_classes.class_name','table_timetables.date','table_timetables.start_time','table_timetables.end_time')
        ->join('table_classes','table_classes.class_id','=','table_timetables.class_id')
        ->join('users','users.id','=','table_timetables.teacher_id')
        ->where('users.id',$id)
        ->get();
        $teacher=User::where('role','teacher')->pluck('id','name');
        $class= Classes::pluck('class_id','class_name');
        return view('backend.timetable.edit',['class'=>$class,'teacher'=>$teacher,'timetable'=>$timetable]);
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

        $timetable=Timetable::find($id);
        $timetable->class_id=$request->class;
        $timetable->teacher_id=$request->teacher;
        $timetable->date=$request->date;
        $timetable->start_time=$request->start_time;
        $timetable->end_time=$request->end_time;
        $timetable->save();
        return redirect('/timetable');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $timetable =Timetable::find($id);
        $timetable->delete();
        return redirect('/timetable');
    }
}
