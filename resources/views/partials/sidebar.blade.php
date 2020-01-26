
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light"> School Managements</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if(Auth()->user()->role =='superadmin')
                <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                @endif
                @if(Auth()->user()->role =='teacher')
                    <img src="/uploads/teacher/{{Auth()->user()->profile_image}}" class="rounded-circle" style="width: 40px;height: 40px;">
                @endif
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth()->user()->name}}</a>
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
                            Students
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('student.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Students List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('student.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Students Add</p>
                            </a>
                        </li>

                    </ul>
                </li>
                @if(Auth::user()->role =='superadmin')
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <p>
                            Teacher
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
                                <p>Teacher Add</p>
                            </a>
                        </li>

                    </ul>
                </li>
                @endif
                <li class="nav-item has-treeview">
                    <a href="{{route('enroll.index')}}" class="nav-link">
                        <i class="fas fa-book-open"></i>
                        <p>Student Enroll
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('enroll.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Enroll List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('enroll.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Enroll Add</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('timetable.index') }}" class="nav-link">
                        <i class="fas fa-table"></i>
                        <p>Time Tables
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
                                <p>TimeTable Add</p>
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
                                <p>Exam Add</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-school"></i>
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
                                <p>Class Add</p>
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
                                <p>Subjects List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('subject.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Subjects Add</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-book-open"></i>
                        <p>Score
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
                                <p>Score Add</p>
                            </a>
                        </li>

                    </ul>
                </li>

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
                                <p>Payment Add</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-users"></i>
                        <p>Attendence
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('att.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Attendence List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('att.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Attendence Add</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-book"></i>
                        <p>
                            Report
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Student report</p>
                            </a>
                        </li>
                        @if(Auth::user()->role =='superadmin')
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Teachers report</p>
                            </a>
                        </li>
                        @endif

                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>


    <!-- /.sidebar -->
</aside>




@include('partials._js')
