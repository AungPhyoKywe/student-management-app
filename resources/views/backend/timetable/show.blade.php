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
                            <h3 class="card-title">TimeTables List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table  table-responsive-sm nowrap"style="width: 100%;" >
                                <thead>
                                <tr>
                                    <th>Teacher</th>
                                    <th>Class</th>
                                    <th>Date</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($timetable as $time)
                                   <tr>
                                       <td>{{$time->name}}</td>
                                       <td>{{$time->class_name}}</td>
                                       <td>{{$time->date}}</td>
                                       <td>{{$time->start_time}}</td>
                                       <td>{{$time->end_time}}</td>
                                       <td>
                                           <a href="{{route('timetable.edit',$time->id) }}" class="btn-sm btn-warning"><i class="far fa-edit"></i></a>
                                           <a href="#" onclick="confirmation({{ $time->id }})"  class="btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
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
            table.buttons().container()
                .appendTo( '#example_wrapper .col-md-6:eq(0)' );
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
                        window.location.href='/timetables/'+$id;
                    })
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            })

        }

    </script>
@stop
