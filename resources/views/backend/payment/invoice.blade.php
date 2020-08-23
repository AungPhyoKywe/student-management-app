@extends('partials.master')

@section('content')
    <div class="content-wrapper">
        <br><br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <!-- Main content -->
                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-12">
                                <h4>
                                    <i class="fas fa-globe"></i> School Managements
                                    <small class="float-right">Date: {{$payment[0]->payment_date}}</small>
                                </h4>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                From
                                <address>
                                    <strong>School Managements</strong><br>
                                    San Francisco, CA 94107<br>
                                    Email: info@almasaeedstudio.com
                                </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                To
                                <address>
                                    <strong>{{$payment[0]->name}}</strong><br>
                                    {{$payment[0]->address}}<br>
                                    Phone: {{$payment[0]->ph_no}}<br>
                                </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                @if($payment[0]->status == 'unpaid')
                                    <b class="text-danger"><h3>UNPAID</h3></b><br>
                                @endif
                                    @if($payment[0]->status == 'paid')
                                        <b class="text-success"><h3>PAID</h3></b><br>
                                    @endif
                                <br>
                                <b>Student ID:</b> {{$payment[0]->id}}<br>
                                <b>Payment Due:</b> 2/22/2023<br>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>

                                        <th>Product</th>
                                        <th>Description</th>
                                        <th>Subtotal</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{$payment[0]->payment_title}}</td>
                                        <td>{{$payment[0]->payment_description}}</td>
                                        <td>${{$payment[0]->amount}}</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-6">

                            </div>
                            <!-- /.col -->
                            <div class="col-6">
                                <p class="lead">Amount Due 2/22/2023</p>

                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th style="width:50%">Subtotal:</th>
                                            <td>${{$payment[0]->amount}}</td>
                                        </tr>
                                        <tr>
                                            <th>Tax (9.3%)</th>
                                            <td>$10.34</td>
                                        </tr>
                                        <tr>
                                            <th>Total:</th>
                                            <td>${{$payment[0]->amount +10.34}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-12">
                                <a class="btn btn-warning" href="{{route('payment.index')}}"> Back to Listing</a>
                                <button onclick="myFunction()"  class="btn btn-default"><i class="fas fa-print"></i> Print</button>
                            </div>
                        </div>
                    </div>
                    <!-- /.invoice -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    </div>
@stop
