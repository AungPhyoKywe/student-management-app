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
                            <h3 class="card-title">Payment List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table  table-responsive-sm nowrap"style="width: 100%;" >
                                <thead>
                                <tr>
                                    <th>Payment Title</th>
                                    <th>Date</th>
                                    <th>Payment Description</th>
                                    <th>Student</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($payment as $e)
                                    <tr>
                                        <td>{{ $e->payment_title }}</td>
                                        <td>{{ $e->payment_date }}</td>
                                        <td>{{ $e->payment_description }}</td>
                                        <td>{{ $e->name }}</td>
                                        <td>${{ $e->amount }}</td>
                                       @if($e->status == 'unpaid')
                                            <td><span class="badge badge-danger">{{ $e->status }}</span></td>
                                        @endif
                                        @if($e->status == 'paid')
                                            <td><span class="badge badge-success">{{ $e->status }}</span></td>
                                        @endif
                                        <td>
                                            <a href="/invoice/{{$e->id}}" class="btn-sm btn-primary"><i class="fas fa-dollar-sign"></i></a>
                                            <a href="{{route('payment.edit',$e->id) }}" class="btn-sm btn-warning"><i class="far fa-edit"></i></a>
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
                        window.location.href='/payments/'+$id;
                    })
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            })

        }

    </script>
@stop
