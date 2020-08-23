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
                            <h3 class="card-title">Create Class</h3>
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
                                                    <form name="studentForm" id="studentForm" method="POST"
                                                          action="{{ route('class.store') }}"
                                                          data-parsley-validate="true" enctype="multipart/form-data">
                                                        {!! csrf_field() !!}

                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <strong>Teacher Name:</strong>
                                                                    <select class="form-control"
                                                                            name="class_teacher"
                                                                            data-parsley-required="true"
                                                                            data-parsley-maxlength="255">

                                                                        @foreach($teacher as $key =>$value)
                                                                            @if($class[0]->name == $key)
                                                                                <option selected
                                                                                        value="{{ $value }}">{{ $key }}</option>
                                                                            @endif
                                                                            <option
                                                                                value="{{ $value}}">{{ $key }}</option>

                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <strong>Class Name:</strong>
                                                                    <input class="form-control"
                                                                           name="class_name"
                                                                           value="{{$class[0]->class_name}}"
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
                                                                    <a class="btn btn-warning"
                                                                       href="{{route('class.index')}}"> Back to
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
