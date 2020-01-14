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
                            <h3 class="card-title"><a href="{{route('teacher.create')}}" class="btn btn-primary"> + Add New Teacher</a></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>image</th>
                                    <th>name</th>
                                    <th>phone</th>
                                    <th>address</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($user as $u)
                                        <tr>
                                            <td><img class="rounded-circle" src="/uploads/teacher/{{$u->profile_image}}"width="40"height="40"></td>
                                            <td>{{$u->name}}</td>
                                            <td>{{$u->ph_no}}</td>
                                            <td>{{$u->address}}</td>
                                            <td>
                                                <a href="{{route('teacher.edit',$u->id) }}" class="btn-sm btn-success">edit</a>
                                                <a href="#" onclick="confirmation({{ $u->id }})"  class="btn-sm btn-danger">delete</a>
                                            </td>

                                        </tr>
                                    @endforeach

                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.card -->
            </div>

        </section>
    </div>

    <script>
        $(document).ready( function () {

            $('#example2').DataTable(

                {
                    responsive: true
                }
            );
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
                        window.location.href='/teachers/'+$id;
                    })
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            })

        }

    </script>
@stop
