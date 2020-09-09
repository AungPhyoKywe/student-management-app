@extends('partials.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Exam List</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Exam List</li>
                  </ol>
                </div>
              </div>
            </div><!-- /.container-fluid -->
          </section>
        <section class="content">
            <div class="row">

                <div class="col-12">

                    <div class="card">
    
                        <!-- /.card-header -->
                        <div class="card-body">
                           
                                <table id="example2" class="table table-striped table-responsive-sm" >
                                    <thead>
                                    <tr class="table-info">
                                        <th>Exam Name</th>
                                        <th>Description</th>
                                        <th>Class</th>
                                        <th>Subject</th>
                                        <th>Exam Date</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Old Questions</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($exam as $e)
                                        <tr>
                                            <td>{{ $e->exam_name }}</td>
                                            <td>{{ $e->description }}</td>
                                            <td>{{ $e->class_name }}</td>
                                            <td>{{ $e->subject_name }}</td>
                                            <td>{{ $e->exam_date }}</td>
                                            <td>{{ $e->start_time }}</td>
                                            <td>{{ $e->end_time }}</td>
                                            <td><a href="/download/{{ $e->question_file }}">{{ $e->question_file }}</a></td>
                                            <td>

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
            </div>
        </section>
    </div>

    <script>
        $(document).ready( function () {

            $('#example2').DataTable({

                "lengthChange": true,
                "processing": true,
                dom: 'lBfrtip',
                buttons: [
                    {
                        extend: 'csv',
                        exportOptions: {
                            columns: [  1, 2,3,4,5,6,7,8 ]
                        }
                    },
                    {
                        extend: 'excel',
                        exportOptions: {
                            columns: [  1, 2,3,4,5,6,7,8 ]
                        }
                    }
                    ,
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: [  1, 2,3,4,5,6,7,8 ]
                        }
                    }
                    ,
                    {
                        extend: 'print',
                        exportOptions: {
                            columns: [  1, 2,3,4,5,6,7,8 ]
                        }
                    },
                    {
                        extend: 'colvis',
                        columns: ':not(:first-child)'


                    }
                ],
                initComplete: function () {
                    var btns = $('.dt-button');
                    btns.addClass('btn btn-light btn-sm');
                    btns.removeClass('dt-button');

                }

            });
            
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
                        window.location.href='/exams/'+$id;
                    })
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            })

        }

    </script>
@stop
