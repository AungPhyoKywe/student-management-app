
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
                            <h3 class="card-title">Students List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table   table-responsive  nowrap"style="width: 100%;" >
                                <thead>
                                <tr>
                                    <th>Student Image</th>
                                    <th>Student Name</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Father's Name</th>
                                    <th>Reglious</th>
                                    <th>Dath of Birth</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $d)
                                 <tr>
                                     <td><img class="rounded-circle" src="/uploads/logos/{{$d->profile_image}}"width="40"height="40"></td>
                                     <td>{{ $d->name }}</td>
                                     <td>{{ $d->age }}</td>
                                     <td>{{ $d->gender }}</td>
                                     <td>{{ $d->father_name }}</td>
                                     <td>{{ $d->reglious }}</td>
                                     <td>{{ $d->DOB }}</td>
                                     <td>{{ $d->ph_no }}</td>
                                     <td>{{ $d->address }}</td>
                                     <td>
                                         <a href="{{route('student.edit',$d->id) }}" class="btn-sm btn-warning"><i class="far fa-edit"></i></a>
                                         <a href="#" onclick="confirmation({{ $d->id }})"  class="btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
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
                        window.location.href='/students/'+$id;
                    })
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            })

    }

</script>
@stop
