@extends('partials.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <br><br>
        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Class List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table  table-responsive-sm  nowrap" style="width: 100%;">
                                <thead>
                                <tr>
                                    <th>Class Name</th>
                                    <th>Class Teacher</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($class as $e)
                                    <tr>
                                        <td>{{ $e->class_name }}</td>
                                        <td>{{ $e->name }}</td>
                                        <td>
                                            <a href="{{route('class.edit',$e->class_id) }}"
                                               class="btn-sm btn-warning"><i class="far fa-edit"></i></a>
                                            <a href="#" onclick="confirmation({{ $e->class_id }})"
                                               class="btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
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
        $(document).ready(function () {

            $('#example2').DataTable({

                "lengthChange": true,
                "processing": true,
                dom: 'lBfrtip',
                buttons: [
                    {
                        extend: 'csv',
                        exportOptions: {
                            columns: [1, 2, 3, 4, 5, 6, 7, 8]
                        }
                    },
                    {
                        extend: 'excel',
                        exportOptions: {
                            columns: [1, 2, 3, 4, 5, 6, 7, 8]
                        }
                    }
                    ,
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: [1, 2, 3, 4, 5, 6, 7, 8]
                        }
                    }
                    ,
                    {
                        extend: 'print',
                        exportOptions: {
                            columns: [1, 2, 3, 4, 5, 6, 7, 8]
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
                .appendTo('#example_wrapper .col-md-6:eq(0)');
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
            }).then(function (isConfirm) {
                if (isConfirm) {
                    swal({
                        title: 'Shortlisted!',
                        text: 'Candidates are successfully shortlisted!',
                        icon: 'success'
                    }).then(function () {
                        window.location.href = '/classes/' + $id;
                    })
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            })

        }

    </script>
@stop
