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
                            <h3 class="card-title">Add Student Attendance</h3>
                        </div>
                        <!-- /.card-header -->
                        <form name="studentForm" id="studentForm" method="POST" action="{{ route('att.store') }}" data-parsley-validate="true" enctype="multipart/form-data">
                            {!! csrf_field() !!}

                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <label>Class ID:</label>
                                    <input class="form-control" type="text"value="{{$class_id}}" name="class"readonly>
                                </div>
                                <div class="col-6">
                                    <label>Date:</label>
                                    <input class="form-control" type="date"value="{{$date}}"name="date"readonly>
                                </div>
                            </div>
                            <br><br>
                            <table id="example2" class="table table-responsive-sm nowrap">
                                <thead>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Status</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($class as $e)
                                    <tr>
                                        <td>{{ $e->name }}</td>
                                        <td>
                                            <!-- Material inline 1 -->
                                            <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input"  value="present" name="qty[{{ $e->id }}]">
                                                <label class="form-check-label" for="materialInline1">present</label>
                                            </div>

                                            <!-- Material inline 2 -->
                                            <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input"  value="absent"name="qty[{{ $e->id }}]">
                                                <label class="form-check-label" for="materialInline2">absent</label>
                                            </div>

                                            <!-- Material inline 3 -->
                                            <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input" id="materialInline3" value="late" name="qty[{{ $e->id }}]">
                                                <label class="form-check-label" for="materialInline3">late</label>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>

                            </table>
                            <div>
                                <a href="{{route('att.create')}}"class="btn btn-warning">Back</a>
                                <button type="submit" class="btn btn-success ">Save Attendance</button>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        </form>
                    </div>

                    <!-- /.card -->
                </div>
                <!-- /.card -->
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
