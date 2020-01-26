<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payment= DB::table('payments')
            ->select('payments.id',
                'payments.payment_title','payments.payment_date',
                'payments.payment_description','payments.amount','payments.status',
                'table_students.name'
            )
            ->join('table_students','table_students.id','=','payments.student_id')
            ->get();
        return view('backend.payment.show',['payment'=>$payment]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $payment=DB::table('enrolments')
            ->select('table_students.id','table_students.name','table_classes.class_name')
            ->join('table_students','enrolments.student_id','=','table_students.id')
            ->join('table_classes','table_classes.class_id','=','enrolments.class_id')
            ->get();

        return view('backend.payment.create',['payment'=>$payment]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $payment = new Payment();
        $payment->payment_title=$request->payment_title;
        $payment->payment_date=$request->payment_date;
        $payment->payment_description=$request->payment_description;
        $payment->student_id=$request->student;
        $payment->amount=$request->amount;
        $payment->status=$request->status;
        $payment->save();

        return redirect('/payment');
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
        //
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
        $payment =Payment::find($id);
        $payment->delete();
        return redirect('/payment');
    }

    public function invoice($id)
    {
        $payment= DB::table('payments')
            ->select('table_students.id','table_students.name',
                'table_students.ph_no','table_students.address',
                'payments.payment_title','payments.payment_date',
                'payments.payment_description','payments.amount',
                'payments.status'

            )
            ->join('table_students','payments.student_id','=','table_students.id')
            ->get();
        return view('backend.payment.invoice',['payment'=>$payment]);
    }

}
