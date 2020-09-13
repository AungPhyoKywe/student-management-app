@if(Auth()->user()->hasRole('Superadmin'))
    <aside class="main-sidebar sidebar-dark-primary2 elevation-4">
@else
    <aside class="main-sidebar sidebar-dark-primary1  elevation-4">
@endif

    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
        <img src="/img/school_logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light"> <b>Schools MN Systems </b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if(Auth()->user()->hasRole('Superadmin'))
                <img src="/dist/img/user4-128x128.jpg" class="img-circle elevation-2" alt="User Image">
                @else
                 <img src="/uploads/teacher/{{Auth()->user()->profile_image}}" class="rounded-circle" style="width: 40px;height: 40px;">
                @endif
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ __(Auth()->user()->name) }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-graduation-cap"></i>
                        <p>
                            Student
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('student.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Student List</p>
                            </a>
                        </li>

                        
                        <li class="nav-item">
                            <a href="{{ route('student.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Student</p>
                            </a>
                        </li>

                    </ul>
                </li>
                @if(Auth()->user()->hasRole('Superadmin'))
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <p>
                            Teachers
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('teacher.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Teacher List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('teacher.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Teachers</p>
                            </a>
                        </li>

                    </ul>
                </li>
                @endif
                <li class="nav-item has-treeview">
                    <a href="{{route('enroll.index')}}" class="nav-link">
                        <i class="fas fa-book-open"></i>
                        <p>Enrollment
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('enroll.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Student Enroll List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('enroll.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Student Enroll</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('timetable.index') }}" class="nav-link">
                        <i class="fas fa-table"></i>
                        <p>TimeTable
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('timetable.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>TimeTable List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('timetable.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add TimeTable</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="far fa-sticky-note"></i>
                        <p>Exam
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('exam.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Exam List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('exam.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Exam </p>
                            </a>
                        </li>

                    </ul>
                </li>
                @if(Auth()->user()->hasRole('Superadmin'))
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-graduation-cap"></i>
                        <p>Class
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('class.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Class List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('class.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Class</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-bookmark"></i>
                        <p>Subjects
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('subject.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Subject List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('subject.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Subject</p>
                            </a>
                        </li>

                    </ul>
                </li>
                @endif


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-book-open"></i>
                        <p>Student Scores
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('score.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Score List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('score.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Score</p>
                            </a>
                        </li>

                    </ul>
                </li>
            @if(Auth()->user()->hasRole('Superadmin'))
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-money-check-alt"></i>
                        <p>Payments
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('payment.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Payment List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('payment.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Payment</p>
                            </a>
                        </li>
                    </ul>
                   
                </li>
                 @endif

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-users"></i>
                        <p>Student Attendance
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('att.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Attendance List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('att.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Attendance</p>
                            </a>
                        </li>

                    </ul>
                </li>
                 @if(Auth()->user()->hasRole('Superadmin'))
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-book"></i>
                        <p>
                            School Report 
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                   
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('st_report.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>School Report</p>
                            </a>
                        </li>

                    </ul>
                    
                </li>
                @endif

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>


    <!-- /.sidebar -->
</aside>
@include('partials._js')
