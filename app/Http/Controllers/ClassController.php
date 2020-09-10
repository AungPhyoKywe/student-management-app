<?php

namespace App\Http\Controllers;

use App\Classes;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $class=DB::table('classes')
        ->select('classes.class_id','classes.class_name','users.name')
        ->join('users','classes.teacher_id','=','users.id')
        ->get();
        return view('backend.class.show',['class'=>$class]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teacher =Auth::User()->where('id','!=','1')->pluck('id','name');

        return view('backend.class.create',['teacher'=>$teacher]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $class=new Classes();
        $class->class_name=$request->class_name;
        $class->teacher_id=$request->class_teacher;
        $class->save();

        return redirect()->route('class.index');
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
        $class=DB::table('classes')
            ->select('classes.class_id','classes.class_name','users.name')
            ->join('users','classes.teacher_id','=','users.id')
            ->where('classes.class_id',$id)
            ->get();
        $teacher =Auth::User()->where('id','!=','1')->pluck('id','name');

        return view('backend.class.edit',['teacher'=>$teacher,'class'=>$class]);
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
        $class= Classes::where('class_id',$id);
        $class->delete();
        return redirect()->route('class.index');
    }
}
