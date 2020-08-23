<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Timetable;
use App\User;
use Auth;
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
        $timetable=DB::table('timetables')
            ->select('timetables.id','users.name','classes.class_name','timetables.date','timetables.start_time','timetables.end_time')
            ->join('classes','classes.class_id','=','timetables.class_id')
            ->join('users','users.id','=','timetables.teacher_id')
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
        $teacher=Auth::User()->where('id','!=','1')->pluck('id','name');
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
    {   $timetable=DB::table('timetables')
        ->select('timetables.id','users.name','classes.class_name','timetables.date','timetables.start_time','timetables.end_time')
        ->join('classes','classes.class_id','=','timetables.class_id')
        ->join('users','users.id','=','timetables.teacher_id')
        ->where('timetables.id',$id)
        ->get();

        $teacher =Auth::User()->where('id','!=','1')->pluck('id','name');
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
