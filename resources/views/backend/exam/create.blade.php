@extends('partials.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
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
                                                    <form name="studentForm" id="studentForm" class="was-validated" method="POST" action="{{ route('exam.store') }}" data-parsley-validate="true" enctype="multipart/form-data" >
                                                        {!! csrf_field() !!}

                                                        <div class="row">
                                                            <div class="col-xs-6 col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <strong>Exam Name:</strong>
                                                                    <input class="form-control"
                                                                            id="validationTooltip01"
                                                                            name="exam_name"
                                                                           required
                                                                            >
                                                                    <div class="invalid-feedback">Example invalid feedback text</div>

                                                                </div>
                                                                    <div class="form-group">
                                                                        <strong>Class:</strong>
                                                                        <select class="form-control"
                                                                               name="class_name"
                                                                               id="customControlValidation2"
                                                                               required
                                                                               >
                                                                            <option value="">Open this select menu</option>
                                                                            @foreach($class as $key =>$value)
                                                                                <option value="{{$value}}">{{$key}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        <div class="invalid-feedback">Example invalid feedback text</div>
                                                                    </div>

                                                                <div class="form-group">
                                                                    <strong>Subject:</strong>
                                                                    <select class="form-control"
                                                                            name="subject_name"
                                                                            id="customControlValidation2"
                                                                            required
                                                                            data-parsley-required="true"
                                                                            data-parsley-maxlength="255">
                                                                        <option value="">Open this select menu</option>
                                                                        @foreach($subject as $key =>$value)
                                                                        <option value="{{$value}}">{{$key}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <div class="invalid-feedback">Example invalid feedback text</div>
                                                                </div>

                                                                <strong>Upload Question:</strong>
                                                                <div class="custom-file">

                                                                    <input type="file" name="file" class="custom-file-input" id="validatedCustomFile" required>
                                                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                                                </div>
                                                                </div>

                                                            <div class="col-xs-6 col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <strong>Exam Date:</strong>
                                                                    <input class="form-control"
                                                                           type="date"
                                                                            name="exam_date"
                                                                            id="customControlValidation2"
                                                                            required
                                                                            data-parsley-required="true"
                                                                            data-parsley-maxlength="255">
                                                                    <div class="invalid-feedback">Example invalid feedback text</div>
                                                                </div>


                                                                <div class="form-group">
                                                                    <strong>Start Time:</strong>
                                                                    <input class="form-control"
                                                                           type="time"
                                                                           id="customControlValidation2"
                                                                           required
                                                                           name="start_time"
                                                                           data-parsley-required="true"
                                                                           data-parsley-maxlength="255">
                                                                    <div class="invalid-feedback">Example invalid feedback text</div>

                                                                </div>
                                                                <div class="form-group">
                                                                    <strong>End Time:</strong>
                                                                    <input class="form-control"
                                                                            type="time"
                                                                            name="end_time"
                                                                           id="customControlValidation2"
                                                                           required
                                                                            data-parsley-required="true"
                                                                            data-parsley-maxlength="255">
                                                                    <div class="invalid-feedback">Example invalid feedback text</div>
                                                                </div>


                                                                <div class="form-group">
                                                                    <strong>Description:</strong>
                                                                    <textarea class="form-control"
                                                                              id="customControlValidation2"
                                                                              required
                                                                              name="description"
                                                                              data-parsley-required="true"
                                                                              data-parsley-maxlength="255"></textarea>
                                                                    <div class="invalid-feedback">Example invalid feedback text</div>
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
