@extends('partials.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Enrollment Add</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Enroll  /  Create</li>
                  </ol>
                </div>
              </div>
            </div><!-- /.container-fluid -->
          </section>
        <section class="content">
            <div class="row">

                <div class="col-12">

                    <div class="card">
                        
                        <div class="card-body">


                            <div class="container-fluid">
                                <div class="container-fluid">
                                    <section class="content">
                                        <!-- start content panel -->
                                        <div class="panel panel-inverse">

                                            <!-- start content heading panel -->
                                            <div class="panel-heading">
                                                @if(Session::has('enrol_error'))
                                                <div class="alert alert-danger" role="alert">
                                                    This Student is already enroll!
                                                  </div>
                                                @endif

                                                
                                                  
                                            </div>
                                            <!-- end content heading panel -->

                                            <!-- start content body panel -->

                                            
                                                <div class="container">

                                                    <!-- start form -->
                                                    <form name="studentForm" id="studentForm" method="POST"
                                                          action="{{ route('enroll.store') }}"
                                                          data-parsley-validate="true" enctype="multipart/form-data">
                                                        {!! csrf_field() !!}

                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <strong>Student Name:</strong>
                                                                    <select class="form-control"
                                                                            name="student_name"
                                                                            data-parsley-required="true"
                                                                            data-parsley-maxlength="255">
                                                                        @foreach($student as $stu)
                                                                       
                                                                            <option value="{{ $stu->id }}">{{ $stu->name}}</option>
                                                                       
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <strong>Class Name:</strong>
                                                                    <select class="form-control"
                                                                            name="class_name"
                                                                            data-parsley-required="true"
                                                                            data-parsley-maxlength="255">

                                                                        @foreach($class as $key => $classes)
                                                                            <option
                                                                                value="{{ $classes }}">{{ $key}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <strong>Enrolment Date:</strong>
                                                                    <input type="date"
                                                                           name="date"
                                                                           value="{{ old('phone') }}"
                                                                           class="form-control"
                                                                           data-parsley-required="true"
                                                                           data-parsley-maxlength="255"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12 margin-tb">
                                                                <div class="pull-left">
                                                                </div>
                                                                <div class="pull-right">
                                                                    <a class="btn btn-warning"
                                                                       href="{{route('enroll.index')}}"> Back to
                                                                        Listing</a>
                                                                    <button type="submit" class="btn btn-success">Save
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>

                                                <!-- end form -->
                                                <br><br><br>
                                            
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
