@extends('partials.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <br><br>
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
            <div class="row">

                @include('partials.toast')

                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Addendance List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table  table-responsive-sm  nowrap"style="width: 100%;" >
                                <thead>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Class Name</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($attend as $e)
                                    <tr>
                                        <td>{{ $e->name }}</td>
                                        <td>{{ $e->class_name }}</td>
                                        <td>{{ $e->status }}</td>
                                        <td>{{ $e->date }}</td>
                                        <td>
                                            <a href="{{route('att.edit',$e->id) }}" class="btn-sm btn-warning"><i class="far fa-edit"></i></a>

                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Class Name</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                                </tfoot>
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
        $(document).ready(function() {
            $('#example2').DataTable( {
                "responsive":true,
                "processing": true,
                dom: 'lBfrtip',
                buttons: [
                    {
                        extend: 'csv',
                        exportOptions: {
                            columns: [ 0, 1, 2,3]
                        }
                    },
                    {
                        extend: 'excel',
                        exportOptions: {
                            columns: [ 0, 1, 2,3 ]
                        }
                    }
                    ,
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: [ 0, 1, 2,3]
                        }
                    }
                    ,
                    {
                        extend: 'print',
                        exportOptions: {
                            columns: [ 0, 1, 2,3 ]
                        }
                    }
                ],
                initComplete: function () {
                    var btns = $('.dt-button');
                    btns.addClass('btn btn-light btn-sm');
                    btns.removeClass('dt-button');
                    this.api().columns().every( function () {
                        var column = this;
                        var select = $('<select><option value=""></option></select>')
                            .appendTo( $(column.footer()).empty() )
                            .on( 'change', function () {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );

                                column
                                    .search( val ? '^'+val+'$' : '', true, false )
                                    .draw();
                            } );

                        column.data().unique().sort().each( function ( d, j ) {
                            select.append( '<option value="'+d+'">'+d+'</option>' )
                        } );
                    } );
                }
            } );
        } );
    </script>
@stop
