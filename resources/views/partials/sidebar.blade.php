@if(Auth()->user()->hasRole('Superadmin'))
    <aside class="main-sidebar sidebar-dark-primary2 elevation-4">
@else
    <aside class="main-sidebar sidebar-dark-primary1  elevation-4">
@endif

    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
        <img src="/img/school_logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light"> <b>ကျောင်း</b>စီမံခန့်ခွဲမှု</span>
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
                            ကျောင်းသား
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('student.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ကျောင်းသားစာရင်း</p>
                            </a>
                        </li>

                        
                        <li class="nav-item">
                            <a href="{{ route('student.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ကျောင်းသားစာရင်းသွင်းရန်</p>
                            </a>
                        </li>

                    </ul>
                </li>
                @if(Auth()->user()->hasRole('Superadmin'))
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <p>
                            ဆရာ/ဆရာမ
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('teacher.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ဆရာစာရင်း</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('teacher.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ဆရာစာရင်းသွင်းရန်</p>
                            </a>
                        </li>

                    </ul>
                </li>
                @endif
                <li class="nav-item has-treeview">
                    <a href="{{route('enroll.index')}}" class="nav-link">
                        <i class="fas fa-book-open"></i>
                        <p>ကျောင်းသားစာရင်းပေးသွင်းရန်
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('enroll.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ကျောင်းအပ်ထားသောစာရင်း</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('enroll.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ကျောင်းအပ်ရန်</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('timetable.index') }}" class="nav-link">
                        <i class="fas fa-table"></i>
                        <p>အချိန်ဇယား
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('timetable.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>အချိန်ဇယား</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('timetable.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>အချိန်ဇယားထည့်ရန်</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="far fa-sticky-note"></i>
                        <p>စာမေးပွဲ
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('exam.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>စာမေးပွဲအချိန်စာရင်း</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('exam.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>စာမေးပွဲအချိန်စာရင်းထည့်ရန်</p>
                            </a>
                        </li>

                    </ul>
                </li>
                @if(Auth()->user()->hasRole('Superadmin'))
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-graduation-cap"></i>
                        <p>စာသင်ခန်း
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('class.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>စာသင်ခန်းစာရင်း</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('class.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>စာသင်ခန်းစာရင်းထည့်ရန်</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-bookmark"></i>
                        <p>ဘာသာရပ်
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('subject.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ဘာသာရပ်စာရင်း</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('subject.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ဘာသာရပ်စာရင်းထည့်ရန်</p>
                            </a>
                        </li>

                    </ul>
                </li>
                @endif


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-book-open"></i>
                        <p>အမှတ်
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('score.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>အမှတ်စာရင်း</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('score.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>အမှတ်စာရင်းထည့်ရန်</p>
                            </a>
                        </li>

                    </ul>
                </li>
            @if(Auth()->user()->hasRole('Superadmin'))
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-money-check-alt"></i>
                        <p>လစာဉ်ကြေး
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('payment.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>လစာဉ်ကြေး</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('payment.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>လစာဉ်ကြေးပေးသွင်းရန်</p>
                            </a>
                        </li>
                    </ul>
                   
                </li>
                 @endif

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-users"></i>
                        <p>ကျောင်းခေါ်ကြိမ်
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('att.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ကျောင်းခေါ်ကြိမ်စာရင်း</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('att.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ကျောင်းခေါ်ကြိမ်စာရင်းထည့်ရန်</p>
                            </a>
                        </li>

                    </ul>
                </li>
                 @if(Auth()->user()->hasRole('Superadmin'))
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-book"></i>
                        <p>
                            အစီရင်ခံစာ
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                   
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('st_report.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ကျောင်းအစီရင်ခံစာ</p>
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
