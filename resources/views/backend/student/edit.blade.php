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
                            <h3 class="card-title">Edit Student</h3>
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
                                                    <form name="studentForm" id="studentForm" method="POST" action="{{ route('student.update',$student[0]->id) }}" data-parsley-validate="true" enctype="multipart/form-data">
                                                        <input type="hidden" name="_method" value="PATCH">
                                                        {!! csrf_field() !!}
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <strong>Name:</strong>
                                                                    <input type="text"
                                                                           name="name"
                                                                           value="{{ $student[0]->name }}"
                                                                           placeholder="Name"
                                                                           class="form-control"
                                                                           data-parsley-required="true"
                                                                           data-parsley-maxlength="255"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <strong>Age:</strong>
                                                                    <select class="form-control"
                                                                            name="age"
                                                                            data-parsley-required="true"
                                                                            data-parsley-maxlength="255">

                                                                        @for($age=10; $age<21;$age++)
                                                                            @if($age == $student[0]->age)
                                                                                <option selected value="{{ $age }}">{{ $age }}</option>
                                                                            @else
                                                                                <option value="{{ $age }}">{{ $age }}</option>
                                                                            @endif
                                                                        @endfor
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <strong>Father Name:</strong>
                                                                    <input type="text"
                                                                           name="fname"
                                                                           value="{{ $student[0]->father_name }}"
                                                                           placeholder="Father Name"
                                                                           class="form-control"
                                                                           data-parsley-required="true"
                                                                           data-parsley-maxlength="255"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <strong>Date Of Birth:</strong>
                                                                    <input type="date"
                                                                           name="dob"
                                                                           value="{{ $student[0]->DOB }}"
                                                                           placeholder="Date Of Birth"
                                                                           class="form-control"
                                                                           data-parsley-required="true"
                                                                           data-parsley-maxlength="255"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <strong>Gender:</strong>
                                                                    <select class="form-control"
                                                                            name="gender"
                                                                            data-parsley-required="true"
                                                                            data-parsley-maxlength="255">
                                                                        @if($student[0]->gender == 'male')
                                                                            <option selected value="male">Male</option>
                                                                            <option  value="female">Female</option>
                                                                        @else
                                                                            <option  value="male">Male</option>
                                                                            <option  selected value="female">Female</option>
                                                                        @endif
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <strong>Reglious:</strong>
                                                                    <select class="form-control"
                                                                            name="reglious"
                                                                            data-parsley-required="true"
                                                                            data-parsley-maxlength="255">
                                                                        @if($student[0]->reglious == 'Buddha')
                                                                            <option selected value="Buddha">Buddha</option>
                                                                            <option  value="Christian">Christian</option>
                                                                        @else
                                                                            <option selected value="Christian">Christian</option>
                                                                            <option  value="Buddha">Buddha</option>
                                                                        @endif
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <strong>Phone:</strong>
                                                                    <input type="text"
                                                                           name="phone"
                                                                           value="{{ $student[0]->ph_no }}"

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
                                                                    <strong>Address:</strong>
                                                                    <input type="text"
                                                                           name="address"
                                                                           value="{{ $student[0]->address }}"
                                                                           placeholder="address"
                                                                           class="form-control"
                                                                           data-parsley-required="true"
                                                                           data-parsley-maxlength="255"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                                <div class="form-group">
                                                                    <strong>Image:</strong><br>
                                                                    <img src="/uploads/logos/{{ $student[0]->profile_image }}" id="profile-img-tag" style="width: 150px;height: 150px;border-bottom-color: #0c525d" /><br><br>
                                                                    <input class="form-group  btn-primary" type="file" name="file" id="profile-img">

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-12 margin-tb">
                                                                <div class="pull-left">
                                                                </div>
                                                                <div class="pull-right">
                                                                    <a class="btn btn-warning" href="{{route('student.index')}}"> Back to Listing</a>
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
