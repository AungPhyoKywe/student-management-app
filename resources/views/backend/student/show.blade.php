
@extends('partials.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Students List</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Students List</li>
                  </ol>
                </div>
              </div>
            </div><!-- /.container-fluid -->
          </section>
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="col-12">

                    <div class="card">
                        
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table  table-striped table-responsive  nowrap"style="width: 100%;" >
                                <thead>
                                <tr class="table-info">
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
                                        <a href="#"class="btn-sm btn-primary"><i class="fas fa-eye"></i></a>
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
                        window.location.href='/students/'+$id;
                    })
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            })

    }

</script>
@stop
