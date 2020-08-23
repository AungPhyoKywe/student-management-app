<?php

namespace App\Http\Controllers;

use App\Exam;
use App\Score;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $score = DB::table('score')
            ->select('score.id', 'students.name', 'exam.exam_name', 'score.Score', 'score.Status')
            ->join('students', 'students.id', '=', 'score.student_id')
            ->join('exam', 'exam.id', '=', 'score.exam_id')
            ->get();

        return view('backend.score.show', ['score' => $score]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student = Student::pluck('id', 'name');
        $exam = Exam::pluck('id', 'exam_name');
        return view('backend.score.create', ['student' => $student, 'exam' => $exam]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $score = new Score();
        $score->student_id = $request->student;
        $score->exam_id = $request->exam;
        $score->Score = $request->score;

        if ($request->score < 90) {
            $score->Status = 'Fail';
        }
        if ($request->score >= 90) {
            $score->Status = 'Pass';
        }
        if ($request->score > 120) {
            $score->Status = 'Qualify';
        }

        $score->save();

        toastr()->success('Data has been saved successfully!');


        return redirect('/score');

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
        $score = Score::find($id);
        $score->delete();
        return redirect('/score');

    }
}
