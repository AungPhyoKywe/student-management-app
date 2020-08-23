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
                            <h3 class="card-title">Create TimeTable</h3>
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
                                                    <form name="studentForm" id="studentForm" method="POST" action="{{ route('timetable.store') }}" data-parsley-validate="true" enctype="multipart/form-data">
                                                        {!! csrf_field() !!}

                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <strong>Teacher:</strong>
                                                                    <select class="form-control"
                                                                            name="teacher"
                                                                            data-parsley-required="true"
                                                                            data-parsley-maxlength="255">

                                                                        @foreach($teacher as $key => $t)
                                                                            <option value="{{ $t }}">{{ $key }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <strong>Class:</strong>
                                                                    <select class="form-control"
                                                                            name="class"
                                                                            data-parsley-required="true"
                                                                            data-parsley-maxlength="255">

                                                                        @foreach($class as $key => $classes)
                                                                            <option value="{{ $classes }}">{{ $key }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <strong>Date:</strong>
                                                                    <input type="date"
                                                                           name="date"
                                                                           value="{{ old('phone') }}"
                                                                           placeholder="phone"
                                                                           class="form-control"
                                                                           data-parsley-required="true"
                                                                           data-parsley-maxlength="255"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <strong>Start Time:</strong>
                                                                    <input type="time"
                                                                           name="start_time"
                                                                           value="address"
                                                                           placeholder="address"
                                                                           class="form-control"
                                                                           data-parsley-required="true"
                                                                           data-parsley-maxlength="255"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <strong>End Time:</strong>
                                                                    <input type="time"
                                                                           name="end_time"
                                                                           value="end_time"
                                                                           placeholder="End Time"
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
                                                                    <a class="btn btn-warning" href="{{route('timetable.index')}}"> Back to Listing</a>
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
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#profile-img-tag').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#profile-img").change(function(){
            readURL(this);
        });
    </script>
@stop
