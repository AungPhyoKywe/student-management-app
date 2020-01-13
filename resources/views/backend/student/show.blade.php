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
                            <h3 class="card-title"><a href="{{route('student.create')}}" class="btn btn-primary"> + Add New Student</a></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>image</th>
                                    <th>name</th>
                                    <th>class</th>
                                    <th>phone</th>
                                    <th>address</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $d)
                                 <tr>
                                     <td>{{ $d->profile_image }}</td>
                                     <td>{{ $d->name }}</td>
                                     <td>{{ $d->class_name }}</td>
                                     <td>{{ $d->ph_no }}</td>
                                     <td>{{ $d->address }}</td>
                                     <td>
                                         <a href=""class="btn-sm btn-success">edit</a>
                                         <a href=""class="btn-sm btn-danger">delete</a>
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
    $(function () {
        $('#example2').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,

        });
    });

</script>
@stop
