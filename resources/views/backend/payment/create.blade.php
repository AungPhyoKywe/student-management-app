@extends('partials.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <br><br>
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add Payment</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">


                            <div class="container-fluid">
                                <div class="container-fluid">
                                    <section class="content">
                                        <!-- start content panel -->
                                        <div class="panel panel-inverse">

                                            <!-- start content heading panel -->
                                            <div class="panel-heading">

                                            </div>
                                            <!-- end content heading panel -->

                                            <!-- start content body panel -->

                                            <div class="shadow-sm">
                                                <div class="container">

                                                    <!-- start form -->
                                                    <form name="studentForm" id="studentForm" method="POST" action="{{ route('payment.store') }}" data-parsley-validate="true" enctype="multipart/form-data">
                                                        {!! csrf_field() !!}

                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <strong>Payment Title:</strong>
                                                                    <input class="form-control"
                                                                           type="text"
                                                                            name="payment_title"
                                                                            data-parsley-required="true"
                                                                            data-parsley-maxlength="255">

                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <strong>Payment Description:</strong>
                                                                    <textarea class="form-control"
                                                                            name="payment_description"
                                                                            data-parsley-required="true"
                                                                            data-parsley-maxlength="255">
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <strong>Student:</strong>
                                                                    <select name="student"
                                                                           class="form-control"
                                                                           data-parsley-required="true"
                                                                            data-parsley-maxlength="255">
                                                                        @foreach($payment as $p)

                                                                        <option value="{{$p->id}}">{{$p->name }} - ({{$p->class_name}})</option>
                                                                        @endforeach

                                                                    </select>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <strong>Amount:</strong>
                                                                    <input class="form-control"
                                                                           type="text"
                                                                           name="amount"
                                                                           data-parsley-required="true"
                                                                           data-parsley-maxlength="255">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <strong>Status:</strong>
                                                                    &nbsp; &nbsp;
                                                                    <input
                                                                            type="radio"
                                                                           value="unpaid"
                                                                           name="status"
                                                                           data-parsley-required="true"
                                                                           data-parsley-maxlength="255">
                                                                    <label>UNPAID</label>

                                                                    <input
                                                                           value="paid"
                                                                           type="radio"
                                                                           name="status"
                                                                           data-parsley-required="true"
                                                                           data-parsley-maxlength="255">
                                                                    <label>PAID</label>


                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <strong>Payment Date:</strong>
                                                                    <input class="form-control"
                                                                           type="date"
                                                                           name="payment_date"
                                                                           data-parsley-required="true"
                                                                           data-parsley-maxlength="255">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12 margin-tb">
                                                                <div class="pull-left">
                                                                </div>
                                                                <div class="pull-right">
                                                                    <a class="btn btn-warning" href="{{route('payment.index')}}"> Back to Listing</a>
                                                                    <button type="submit" class="btn btn-success">Save</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>

                                                <!-- end form -->
                                                <br><br><br>
                                            </div>
                                            <!-- end content body panel -->
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@stop
