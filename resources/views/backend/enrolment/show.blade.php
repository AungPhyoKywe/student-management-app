@extends('partials.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Enrollment List</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Enrollment List</li>
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
                            <table id="example2" class="table  table-striped table-responsive-sm  nowrap"style="width: 100%;" >
                                <thead>
                                <tr class="table-info">
                                    <th>Student Name</th>
                                    <th>Class Name</th>
                                    <th>Enrolment Date</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($enrol as $e)
                                @if(isset($e->classes[0]))
                                <tr>
                                <td>{{$e->name}}</td>
                                    <td>{{ isset($e->classes[0]->class_name)?$e->classes[0]->class_name:'' }}</td>
                                    <td>{{ isset($e->classes[0]->created_at)?$e->classes[0]->created_at:'' }}</td>
                                    <td>
                                        <a href="{{route('enroll.edit',1) }}" class="btn-sm btn-warning"><i class="far fa-edit"></i></a>
                                        <a href="#" onclick="confirmation({{ 1 }})"  class="btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                @endif
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
                        window.location.href='/enrolls/'+$id;
                    })
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            })

        }

    </script>
@stop
