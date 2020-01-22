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
                            <h3 class="card-title">Exam List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-responsive-sm nowrap">
                                <thead>
                                <tr>
                                    <th>Exam Name</th>
                                    <th>Description</th>
                                    <th>Class</th>
                                    <th>Subject</th>
                                    <th>Exam Date</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($exam as $e)
                                    <tr>
                                        <td>{{ $e->name }}</td>
                                        <td>{{ $e->description }}</td>
                                        <td>{{ $e->class_name }}</td>
                                        <td>{{ $e->subject_name }}</td>
                                        <td>{{ $e->exam_date }}</td>
                                        <td>{{ $e->start_time }}</td>
                                        <td>{{ $e->end_time }}</td>
                                        <td>
                                            <a href="/download/{{ $e->question_file }}"class="btn-sm btn-primary"><i class="fas fa-download"></i></a>
                                            <a href="/uploads/question/{{ $e->question_file }}" class="btn-sm btn-primary" target="_blank"><i class="fas fa-eye"></i></a>
                                            <a href="{{route('exam.edit',$e->id) }}" class="btn-sm btn-warning"><i class="far fa-edit"></i></a>
                                            <a href="#" onclick="confirmation({{ $e->id }})"  class="btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
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
