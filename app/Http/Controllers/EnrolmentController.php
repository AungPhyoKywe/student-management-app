<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Enroll;
use App\Student;
use DB;
use Illuminate\Http\Request;

class EnrolmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enrol = Student::all();
        //dd($enrol);
        //dd($enrol[0]->classes);
        return view('backend.enrolment.show', ['enrol' => $enrol[0]->classes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enrol = Enroll::pluck('student_id');

        $student = Student::pluck('id', 'name');
        $class = Classes::pluck('class_id', 'class_name');
        $arr = [];
        foreach ($enrol as $key => $value) {
            $arr[] = $value;

        }
        //dd($arr);

        return view('backend.enrolment.create', ['class' => $class, 'student' => $student, 'enrol' => $arr]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $enroll = new Enroll();
        $enroll->student_id = $request->student_name;
        $enroll->class_id = $request->class_name;
        $enroll->enrolment_date = $request->date;
        $enroll->save();
        return redirect('/enroll');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enrol = DB::table('enrolments')
            ->select('enrolments.id', 'classes.class_name', 'students.name', 'enrolments.enrolment_date')
            ->join('classes', 'classes.class_id', '=', 'enrolments.class_id')
            ->join('students', 'students.id', '=', 'enrolments.student_id')
            ->where('enrolments.id', $id)
            ->get();
        $class = Classes::pluck('class_id', 'class_name');
        $student = Student::pluck('id', 'name');
        return view('backend.enrolment.edit', ['enrol' => $enrol, 'class' => $class, 'student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enroll = Enroll::find($id);
        $enroll->delete();
        return redirect('/enroll');
    }
}
