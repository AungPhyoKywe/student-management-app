<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Exam;
use App\Subject;
use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exam = DB::table('exam')
            ->select('exam.id', 'exam.exam_name', 'exam.description', 'exam.question_file', 'table_classes.class_name'
                , 'subject.subject_name', 'exam.exam_date',
                'exam.start_time', 'exam.end_time')
            ->join('table_classes', 'table_classes.class_id', '=', 'exam.class_id')
            ->join('subject', 'subject.id', '=', 'exam.subject_id')
            ->get();
        return view('backend.exam.show', ['exam' => $exam]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subject = Subject::pluck('id', 'subject_name');
        $class = Classes::pluck('class_id', 'class_name');
        return view('backend.exam.create', ['subject' => $subject, 'class' => $class]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $exam = new Exam();
        $exam->exam_name = $request->exam_name;
        $exam->description = $request->description;
        $exam->class_id = $request->class_name;
        $exam->subject_id = $request->subject_name;
        $exam->exam_date = $request->exam_date;
        $exam->start_time = $request->start_time;
        $exam->end_time = $request->end_time;
        $exam->question_file = null;
        if ($request->hasfile('file')) {
            $file = $request->file('file');
            //dd($file);
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/question/', $filename);
            $exam->question_file = $filename;
        }

        $exam->save();

        return redirect('/exam');

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
        $exam = Exam::find($id);
        $exam->delete();
        return redirect('/exam');
    }

    public function download($file)
    {
        $file = public_path() . "/uploads/question/" . $file;

        $headers = array(
            'Content-Type: application/pdf',
        );

        return Response::download($file, 'question.pdf', $headers);
    }

}
