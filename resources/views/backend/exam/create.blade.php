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
                            <h3 class="card-title">Create Exam</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <div class="container-fluid">
                                <div class="container-fluid">
                                    <section class="content">
                                        <!-- start content panel -->
                                        <div class="panel panel-inverse">

                                            <div class="shadow-sm">
                                                <div class="container">

                                                    <!-- start form -->
                                                    <form name="studentForm" id="studentForm"  method="POST" action="{{ route('exam.store') }}" data-parsley-validate="true" enctype="multipart/form-data" >
                                                        {!! csrf_field() !!}

                                                        <div class="row">
                                                            <div class="col-xs-6 col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <strong>Exam Name:</strong>
                                                                    <input class="form-control"
                                                                            name="exam_name"
                                                                           data-parsley-required="true"
                                                                           data-parsley-maxlength="255">
                                                                </div>
                                                                    <div class="form-group">
                                                                        <strong>Class:</strong>
                                                                        <select class="form-control"
                                                                                name="class_name"
                                                                                data-parsley-required="true"
                                                                                data-parsley-maxlength="255"
                                                                               >
                                                                            <option value="">Open this select menu</option>
                                                                            @foreach($class as $key =>$value)
                                                                                <option value="{{$value}}">{{$key}}</option>
                                                                            @endforeach
                                                                        </select>

                                                                    </div>

                                                                <div class="form-group">
                                                                    <strong>Subject:</strong>
                                                                    <select class="form-control"
                                                                            name="subject_name"
                                                                            data-parsley-required="true"
                                                                            data-parsley-maxlength="255">
                                                                        <option value="">Open this select menu</option>
                                                                        @foreach($subject as $key =>$value)
                                                                        <option value="{{$value}}">{{$key}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <strong>Upload Question:</strong>
                                                                <div class="custom-file">

                                                                    <input type="file" name="file"
                                                                           class="custom-file-input"
                                                                           data-parsley-required="true"
                                                                           data-parsley-maxlength="255">
                                                                    <label class="custom-file-label">Choose file...</label>
                                                                </div>
                                                                </div>

                                                            <div class="col-xs-6 col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <strong>Exam Date:</strong>
                                                                    <input class="form-control"
                                                                           type="date"
                                                                            name="exam_date"
                                                                            data-parsley-required="true"
                                                                            data-parsley-maxlength="255">
                                                                </div>


                                                                <div class="form-group">
                                                                    <strong>Start Time:</strong>
                                                                    <input class="form-control"
                                                                           type="time"
                                                                           name="start_time"
                                                                           data-parsley-required="true"
                                                                           data-parsley-maxlength="255">

                                                                </div>
                                                                <div class="form-group">
                                                                    <strong>End Time:</strong>
                                                                    <input class="form-control"
                                                                            type="time"
                                                                            name="end_time"
                                                                            data-parsley-required="true"
                                                                            data-parsley-maxlength="255">
                                                                </div>


                                                                <div class="form-group">
                                                                    <strong>Description:</strong>
                                                                    <textarea class="form-control"
                                                                              name="description"
                                                                              data-parsley-required="true"
                                                                              data-parsley-maxlength="255"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-12 margin-tb">
                                                                <div class="pull-left">
                                                                </div>
                                                                <div class="pull-right">
                                                                    <a class="btn btn-warning" href="{{route('exam.index')}}"> Back to Listing</a>
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
