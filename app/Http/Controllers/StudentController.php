<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Student;
use DB;
use Illuminate\Http\Request;
use App\User;
use Datatables;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $data = DB::table('table_students')
            ->select('table_students.id','table_students.name','table_students.profile_image','table_classes.class_name','table_students.ph_no','table_students.address')
            ->join('table_classes','table_students.class_id','=','table_classes.class_id')
            ->get();

        return view('backend.student.show',['data'=>$data]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $class= Classes::pluck('class_id','class_name');

        return view('backend.student.create',['class'=>$class]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student=new Student();
        $student->name=$request->name;
        $student->class_id=$request->class;
        $student->ph_no=$request->phone;
        $student->address=$request->address;
        $filename=null;
        if($request->hasfile('file'))
        {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('uploads/logos/', $filename);
        }
        $student->profile_image=$filename;
        $student->save();

        return redirect('/student');
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
        $class= Classes::pluck('class_id','class_name');
       $student = DB::table('table_students')->join('table_classes','table_classes.class_id','=','table_students.class_id')->where('table_students.id',$id)->get();

       return  view('backend.student.edit',['student'=>$student,'class'=>$class]);
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
        $student=Student::find($id);
        $student->name=$request->name;
        $student->class_id=$request->class;
        $student->ph_no=$request->phone;
        $student->address=$request->address;
        if($request->hasfile('file'))
        {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('uploads/logos/', $filename);
            $student->profile_image=$filename;
        }

        $student->save();

        return redirect('/student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student=new Student();
        $student->where('id',$id)->delete();
        return redirect('/student');
    }
}
