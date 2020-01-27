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
                            <h3 class="card-title">Add Attendance</h3>
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
                                                    <form name="studentForm" id="studentForm" method="POST" action="{{ route('search') }}" data-parsley-validate="true" enctype="multipart/form-data">
                                                        {!! csrf_field() !!}
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-6">
                                                            <select class="form-control" name="class">
                                                                @foreach($class as $key =>$value)
                                                                <option value="{{$value}}">{{$key}}</option>
                                                                @endforeach
                                                            </select><br>
                                                            <input type="date"class="form-control" name="date">
                                                            <br>
                                                            <button type="submit" class=" btn-sm btn-success form-control">Create New Attendance</button>
                                                        </div>
                                                    </div>
                                                    </form>
                                                    <!-- start form -->

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
    <script>
        $(document).ready( function () {

            $('#example2').DataTable();
        });

        function confirmation($id) {
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: [
                    'No, cancel it!',
                    'Yes, I am sure!'
                ],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {
                    swal({
                        title: 'Shortlisted!',
                        text: 'Candidates are successfully shortlisted!',
                        icon: 'success'
                    }).then(function () {
                        window.location.href='/classes/'+$id;
                    })
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            })

        }

    </script>

@stop
