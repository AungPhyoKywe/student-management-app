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
                        <div class="card-header"></div>
                    <!-- start form -->
                    <form name="studentForm" id="studentForm" method="POST"
                        action="{{ route('enroll.store') }}"
                        data-parsley-validate="true" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        
                        <div class="card-body">


                            <div class="container-fluid">
                                <div class="container-fluid">
                                    <section class="content">
                                        <!-- start content panel -->
                                        <div class="panel panel-inverse">

                                            <!-- start content heading panel -->
                                            <div class="panel-heading">
                                                @include('partials.toast')  
                                            </div>
                                            <!-- end content heading panel -->

                                            <!-- start content body panel -->

                                            
                                                <div class="container">

                                                    

                                                        <div class="form-group row">
                                                            
                                                                    <label class="col-sm-2 col-form-label"><strong>Student Name<span style="color:red">*</span></strong></label>
                                                                    <div class="col-sm-8">

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


                                                        <div class="form-group row">
                                                            
                                                            <label class="col-sm-2 col-form-label"><strong>Class Name<span style="color:red">*</span></strong></label>
                                                                    <div class="col-sm-8">
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

                                                        <div class="form-group row">
                                                            
                                                                    <label class="col-sm-2 col-form-label"><strong>Enrollment Date<span style="color:red">*</span></strong></label>
                                                                    <div class="col-sm-8">
                                                                        <input type="date"
                                                                           name="date"
                                                                           value="{{ old('phone') }}"
                                                                           class="form-control"
                                                                           data-parsley-required="true"
                                                                           data-parsley-maxlength="255"/>
                                                                    </div>
                                                        </div>
                                                        

                                                   
                                                </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                
                                <div class="col-md-2">
                                </div>
                                    <div class="col-md-8">
                                        <a class="btn-group btn btn-warning float-right"
                                           href="{{route('enroll.index')}}"> Back to
                                            Listing</a>
                                        <button type="submit" class="btn-group btn btn-success float-left">Save
                                        </button>
                                    </div>
                                
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@stop
