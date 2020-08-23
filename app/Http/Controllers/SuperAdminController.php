<?php

namespace App\Http\Controllers;

use App;
use App\Attendance;
use App\Classes;
use App\Enroll;
use App\Exam;
use App\Payment;
use App\Student;
use App\Subject;
use App\Timetable;
use App\User;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($local)
    {
        App::setLocale($local);
        $payment = Payment::count();
        $student = Student::count();
        $exam = Exam::count();
        $att = Attendance::count();
        $subject = Subject::count();
        $enrol = Enroll::count();
        $time = Timetable::count();
        $class = Classes::count();
       
        //$teacher = User()->role()->name->count();
        return view('backend.index',
            ['student' => $student, 'teacher' => 0,
                'time' => $time, 'enrol' => $enrol,
                'exam' => $exam, 'class' => $class,
                'subject' => $subject, 'att' => $att,
                'payment' => $payment

            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }
}
