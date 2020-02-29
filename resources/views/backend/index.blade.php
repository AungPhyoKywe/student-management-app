@extends('partials.master')

@section('content')
    <div class="content-wrapper">
        <br><br>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="info-box bg-info">
                            <span class="info-box-icon"><i class="fas fa-users"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">{{__('msg.Students')}}</span>
                                <span class="info-box-number">{{$student}}</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: {{$student}}%"></div>
                                </div>
                                <span class="progress-description">
                  {{($student / 100)*100}}%{{__('msg.Increase in 30 Days')}}
                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    @if($teacher >0)
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="info-box bg-success">
                            <span class="info-box-icon"><i class="fas fa-users"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">{{__('msg.Teachers')}}</span>
                                <span class="info-box-number">{{$teacher}}</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: {{$teacher}}%"></div>
                                </div>
                                <span class="progress-description">
                  {{($teacher / 100)*100}}% {{__('msg.Increase in 30 Days')}}
                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    @endif
                    <!-- /.col -->
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="info-box bg-warning">
                            <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">{{__('msg.Time Tables')}}</span>
                                <span class="info-box-number">{{$time}}</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: {{$time}}%"></div>
                                </div>
                                <span class="progress-description">
                  {{($time / 100)*100}}% {{__('msg.Increase in 30 Days')}}
                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- /.col -->
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="info-box bg-info">
                            <span class="info-box-icon"><i class="fas fa-users"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">{{__('msg.Student Enroll')}}</span>
                                <span class="info-box-number">{{$enrol}}</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: {{$enrol}}%"></div>
                                </div>
                                <span class="progress-description">
                  {{($enrol / 100)*100}}% {{__('msg.Increase in 30 Days')}}
                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="info-box bg-success">
                            <span class="info-box-icon"><i class="fas fa-book-open"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">{{__('msg.Exam')}}</span>
                                <span class="info-box-number">{{$exam}}</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: {{$exam}}%"></div>
                                </div>
                                <span class="progress-description">
                  {{($exam / 100)*100}}% {{__('msg.Increase in 30 Days')}}
                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="info-box bg-warning">
                            <span class="info-box-icon"><i class="fas fa-graduation-cap"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Class</span>
                                <span class="info-box-number">{{$class}}</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: {{$class}}%"></div>
                                </div>
                                <span class="progress-description">
                  {{($class / 100)*100}}% {{__('msg.Increase in 30 Days')}}
                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- /.col -->
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="info-box bg-info">
                            <span class="info-box-icon"><i class="far fa-bookmark"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Subject</span>
                                <span class="info-box-number">{{$subject}}</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: {{$subject}}%"></div>
                                </div>
                                <span class="progress-description">
                  {{($subject / 100)*100}}% {{__('msg.Increase in 30 Days')}}
                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="info-box bg-success">
                            <span class="info-box-icon"><i class="fas fa-dollar-sign"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Payments</span>
                                <span class="info-box-number">{{$payment}}</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: {{$payment}}%"></div>
                                </div>
                                <span class="progress-description">
                  {{($payment / 100)*100}}% {{__('msg.Increase in 30 Days')}}
                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="info-box bg-warning">
                            <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Attendance</span>
                                <span class="info-box-number">{{$att}}</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: {{$att}}%"></div>
                                </div>
                                <span class="progress-description">
                                    {{($att / 100)*100}} % {{__('msg.Increase in 30 Days')}}
                                 </span>
                                <example-component></example-component>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- /.col -->
                </div>
            </div>
        </section>
        </div>

@stop
