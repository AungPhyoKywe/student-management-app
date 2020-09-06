@extends('partials.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>ကျောင်းသားစာရင်းသွင်းရန်</h1>
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

                                            
                                                <div class="container">

                                                    <!-- start form -->
                                                    <form name="studentForm" id="studentForm" method="POST"
                                                          action="{{ route('student.store') }}"
                                                          data-parsley-validate="true" enctype="multipart/form-data">
                                                        {!! csrf_field() !!}

                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <strong>အမည်:</strong>
                                                                    <input type="text"
                                                                           name="name"
                                                                           value="{{ old('name') }}"
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
                                                                    <strong>အသက်:</strong>
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
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <strong>အဖအမည်:</strong>
                                                                    <input type="text"
                                                                           name="fname"
                                                                           value="{{ old('fname') }}"
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
                                                                    <strong>မွေးသက္ကရဇ်:</strong>
                                                                    <input type="date"
                                                                           name="dob"
                                                                           value="{{ old('dob') }}"
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
                                                                    <strong>ကျား/မ:</strong>
                                                                    <select class="form-control"
                                                                            name="gender"
                                                                            data-parsley-required="true"
                                                                            data-parsley-maxlength="255">

                                                                        <option value="male">Male</option>
                                                                        <option value="female">Female</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <strong>ကိုးကွယ်သည့်ဘာသာ :</strong>
                                                                    <select class="form-control"
                                                                            name="reglious"
                                                                            data-parsley-required="true"
                                                                            data-parsley-maxlength="255">

                                                                        <option value="Buddha">Buddha</option>
                                                                        <option value="Christian">Christian</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                                <div class="form-group">
                                                                    <strong>ဖုန်း :</strong>
                                                                    <input type="text"
                                                                           name="phone"
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
                                                                    <strong>လိပ်စာ:</strong>
                                                                    <input type="text"
                                                                           name="address"
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
                                                                    <strong>ဓာတ်ပုံ:</strong><br>
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

                                                        <div class="row">
                                                            <div class="col-lg-12 margin-tb">
                                                                <div class="pull-left">
                                                                </div>
                                                                <div class="pull-right">
                                                                    <a class="btn btn-warning"
                                                                       href="{{route('student.index')}}"> Back to
                                                                        Listing</a>
                                                                    <button type="submit" class="btn btn-success">Save
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>

                                                <!-- end form -->
                
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