<?php

namespace App\Http\Controllers;

use App\Subject;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subject=DB::table('subject')
            ->select('subject.id','subject.subject_name','users.name')
            ->join('users','subject.teacher_id','=','users.id')
            ->get();
        return  view('backend.subject.show',['subject'=>$subject]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teacher =User::where('role','teacher')->pluck('id','name');
        return view('backend.subject.create',['teacher'=>$teacher]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subject =new Subject();
        $subject->subject_name=$request->subject_name;
        $subject->teacher_id=$request->subject_teacher;
        $subject->save();
        return redirect('/subject');
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
    {
        $subject =DB::table('subject')
            ->select('subject.id','subject.subject_name','users.name')
            ->join('users','subject.teacher_id','=','users.id')
            ->where('subject.id',$id)
            ->get();
        $teacher =User::where('role','teacher')->pluck('id','name');
        return view('backend.subject.edit',['teacher'=>$teacher,'subject'=>$subject]);
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
        //dd($request->all());
        $subject =Subject::find($id);
        $subject->subject_name=$request->subject_name;
        $subject->teacher_id=$request->subject_teacher;
        $subject->save();
        return redirect('/subject');
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
}
