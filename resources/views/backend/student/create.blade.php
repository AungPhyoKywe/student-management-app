@extends('partials.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add New Student</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Students Add</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="row">

                <div class="col-12">

                    <div class="card">
                        <div class="card-header with-border">


                            <div class="card-tools">
                                <div class="btn-group float-right" style="margin-right: 5px">
                                    <a href="{{route('student.index')}}" class="btn  btn-flat btn-outline-dark"
                                       title="List"><i class="fa fa-list"></i><span
                                            class="hidden-xs"> Back List</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- start form -->
                        <form name="studentForm" id="studentForm" method="POST"
                              action="{{ route('student.store') }}"
                              data-parsley-validate="true" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="card-body">

                                <div class="container-fluid">
                                    <div class="container-fluid">
                                        <section class="content">
                                            <!-- start content panel -->
                                            <div class="panel panel-inverse">
                                                <div class="panel-heading">

                                                </div>


                                                <div class="container">


                                                    <div class="form-group row">

                                                        <label class="col-sm-2 col-form-label"><strong>Student Name<span
                                                                    style="color:red">*</span></strong></label>
                                                        <div class="col-sm-8">
                                                            <input type="text"
                                                                   name="name"
                                                                   value="{{ old('name') }}"
                                                                   placeholder="Student Name"
                                                                   class="form-control"
                                                                   data-parsley-required="true"
                                                                   data-parsley-maxlength="255"/>
                                                        </div>

                                                    </div>
                                                    <div class="form-group row">

                                                        <label class="col-sm-2 col-form-label"><strong>Student Age<span
                                                                    style="color:red">*</span></strong></label>

                                                        <div class="col-sm-8">
                                                            <select class="form-control"
                                                                    name="age"
                                                                    data-parsley-required="true"
                                                                    data-parsley-maxlength="255">

                                                                @for($age=10; $age<21;$age++)
                                                                    <option
                                                                        value="{{ $age }}">{{ $age }}</option>
                                                                @endfor
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">

                                                        <label class="col-sm-2 col-form-label"><strong>Father Name<span
                                                                    style="color:red">*</span></strong></label>

                                                        <div class="col-sm-8">
                                                            <input type="text"
                                                                   name="fname"
                                                                   value="{{ old('fname') }}"
                                                                   placeholder="Father Name"
                                                                   class="form-control"
                                                                   data-parsley-required="true"
                                                                   data-parsley-maxlength="255"/>
                                                        </div>
                                                    </div>
                                                    <div class=" form-group row">

                                                        <label class="col-sm-2 col-form-label"><strong>Date Of
                                                                Birth<span style="color:red">*</span></strong></label>
                                                        <div class="col-sm-8">
                                                            <input type="date"
                                                                   name="dob"
                                                                   value="{{ old('dob') }}"
                                                                   placeholder="Date Of Birth"
                                                                   class="form-control"
                                                                   data-parsley-required="true"
                                                                   data-parsley-maxlength="255"/>
                                                        </div>

                                                    </div>
                                                    <div class="form-group row">

                                                        <label class="col-sm-2 col-form-label"><strong>Gender<span
                                                                    style="color:red">*</span></strong></label>
                                                        <div class="col-sm-8">
                                                            <select class="form-control"
                                                                    name="gender"
                                                                    data-parsley-required="true"
                                                                    data-parsley-maxlength="255">

                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="form-group row">

                                                        <label class="col-sm-2 col-form-label"><strong>Religious<span
                                                                    style="color:red">*</span></strong></label>
                                                        <div class="col-sm-8">
                                                            <select class="form-control"
                                                                    name="reglious"
                                                                    data-parsley-required="true"
                                                                    data-parsley-maxlength="255">

                                                                <option value="Buddha">Buddha</option>
                                                                <option value="Christian">Christian</option>
                                                            </select>
                                                        </div>

                                                    </div>

                                                    <div class=" form-group row">

                                                        <label class="col-sm-2 col-form-label"><strong>Phone Number<span
                                                                    style="color:red">*</span></strong></label>
                                                        <div class="col-sm-8">
                                                            <input type="text"
                                                                   name="phone"
                                                                   value="{{ old('phone') }}"
                                                                   placeholder="phone"
                                                                   class="form-control"
                                                                   data-parsley-required="true"
                                                                   data-parsley-maxlength="255"/>
                                                        </div>

                                                    </div>
                                                    <div class="form-group row">

                                                        <label class="col-sm-2 col-form-label"><strong>Address<span
                                                                    style="color:red">*</span></strong></label>
                                                        <div class="col-sm-8">
                                                            <input type="text"
                                                                   name="address"
                                                                   placeholder="address"
                                                                   class="form-control"
                                                                   data-parsley-required="true"
                                                                   data-parsley-maxlength="255"/>
                                                        </div>

                                                    </div>
                                                    <div class=" from-group row">

                                                        <label class="col-sm-2 col-form-label"><strong>Student
                                                                Image<span style="color:red">*</span></strong></label>
                                                        <div class="col-sm-8">

                                                            <div style="height:0px;overflow:hidden;">
                                                                <input class="btn-primary" type="file"
                                                                       name="file" id="profile-img"><i
                                                                    class="fas fa-cloud"></i></input>
                                                            </div>
                                                            <button type="button" class="btn btn-primary"
                                                                    style="opacity: 0.7; position: absolute;"
                                                                    onclick="chooseFile('#profile-img');"
                                                                    data-placement="left" data-toggle="tooltip"
                                                                    title="Upload new image"><i
                                                                    class="fas fa-upload"></i></button>
                                                            <img src="" id="profile-img-tag"
                                                                 style="border:1px solid lightgray; width: 200px; height: 200px;"/>
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
                                        <button type="submit" class="btn-group btn btn-outline-primary float-right">Save
                                        </button>
                                        <button class="btn-group btn btn-outline-warning float-left"
                                                type="reset">Reset
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

@endsection
@section('js')
    <script type="text/javascript">

        function chooseFile(input_div) {
            $(input_div).click();
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#profile-img-tag').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#profile-img").change(function () {
            readURL(this);
        });
    </script>

@endsection
