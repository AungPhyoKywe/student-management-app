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
                            <h3 class="card-title">Create Student</h3>
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
                                                            <form name="countryForm" id="countryForm" method="POST" action="{{ route('student.store') }}" data-parsley-validate="true" enctype="multipart/form-data">
                                                                {!! csrf_field() !!}

                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                                                        <div class="form-group">
                                                                            <strong>Name:</strong>
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
                                                                            <strong>Class:</strong>
                                                                            <select class="form-control"
                                                                                    name="class"
                                                                                    data-parsley-required="true"
                                                                                    data-parsley-maxlength="255">

                                                                                @foreach($class as $key => $classes)
                                                                                <option >{{ $key }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                                                        <div class="form-group">
                                                                            <strong>Phone:</strong>
                                                                            <input type="text"
                                                                                   name="country_url"
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
                                                                            <strong>Address:</strong>
                                                                            <input type="text"
                                                                                   name="address"
                                                                                   value="address"
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
                                                                            <strong>Image:</strong>
                                                                            <div style="height:0px;overflow:hidden;"><input type="file" name="image" value="" id="jumbo_image" accept="image/jpg,image/jpeg,image/png" data-parsley-required="true"  data-parsley-errors-container= '#imgErr'/></div>
                                                                            <button class="btn btn-primary" style="opacity: 0.7; position: absolute;"data-placement="left" data-toggle="tooltip" title="Upload new image"onclick="document.getElementById('file-input').click();"><i class="far fa-upload"></i></button>
                                                                            <img id="jumbo_image_preview" style="border:1px solid lightgray; width: 200px; height: 200px;" src="/img/aa.jpg" alt="image preview" class="img-responsive">

                                                                            <input id="file-input" type="file" name="name" style="display: none;" />
                                                                            <span id="imgErr" class='parsley-errors-list filled'></span>
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
    @stop
