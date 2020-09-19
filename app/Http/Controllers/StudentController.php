<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Student;
use DB;
use Illuminate\Http\Request;
use App\User;
use Datatables;
use App\Repositories\Student\StudentRepositoryInterface;

class StudentController extends Controller
{
    protected $student;

    /**
     * PostController constructor.
     *
     * @param PostRepositoryInterface $post
     */
    public function __construct(StudentRepositoryInterface $student)
    {
        $this->student = $student;
    }



    public function index()
    {
        

        return view('backend.student.show',['data'=>$this->student->all()]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $class= $this->student->getClassName();

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
        $this->student->saveStudent($request);
        
        return redirect()->route('student.index');
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
       $student = DB::table('students')->select('*')->where('id',$id)->get();

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
        $student->age=$request->age;
        $student->gender=$request->gender;
        $student->father_name=$request->fname;
        $student->DOB=$request->dob;
        $student->reglious=$request->reglious;
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
