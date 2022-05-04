<div class="fix">
    <div class="side-info">
        <div class="side-info-content">
            <div class="offset-widget offset-logo mb-40">
                <div class="row align-items-center">
                    <div class="col-9">
                        <a href="{{ route('website.home') }}">
                            <img src="{{ url('backend/img/logo4.png') }}" width="180px" alt="Logo">
                        </a>
                    </div>
                    <div class="col-3 text-end"><button class="side-info-close"><i class="fal fa-times"></i></button>
                    </div>
                </div>
            </div>
            <div class="mobile-menu d-xl-none fix"></div>

        </div>
    </div>
</div>


<header>
    <div class="header-area sticky-header">
        <div class="container-fluid">
            <div class="header-main-wrapper">
                <div class="row align-items-center">
                    <div class="col-xl-9 col-lg-7 col-md-5 col-sm-9 col-10">
                        <div class="header-left d-flex align-items-center">
                            <div class="header-logo">
                                <a href="{{ route('website.home') }}"><img src="{{ url('backend/img/logo4.png') }}"
                                        width="210px" alt="logo"></a>
                            </div>
                            <div class="pl-4 main-menu d-none d-xl-block pt-25">
                                <nav id="mobile-menu ">
                                    <ul>
                                        <li class=""><a href="{{ route('website.home') }}">Home</a>
                                        </li>
                                        <li class=""><a href="{{ route('website.about') }}">About Us</a>
                                        </li>

                                        @if (auth()->user() && auth()->user()->role == 'student')
                                            @if (auth()->user())
                                                <li class=""><a
                                                        href="{{ route('website.profile') }}">Profile</a></li>
                                                <li class=""><a
                                                        href="{{ route('website.routine') }}">Class Schedule</a></li>

                                                <li class=""><a
                                                        href="{{ route('website.exam') }}">Exam</a></li>
                                                <li class=""><a
                                                        href="{{ route('website.result') }}">Result</a></li>
                                                <li class=""><a
                                                        href="{{ route('user.logout') }}">Logout</a></li>
                                            @else
                                                <li class="" style="display:none;"> <a
                                                        class=""
                                                        href="{{ route('user.login') }}">SignIn</a></li>
                                            @endif
                                        @else
                                            @if (auth()->user())
                                                <li class=""><a
                                                        href="{{ route('website.teacherprofile') }}">Profile</a></li>
                                                <li class=""><a
                                                        href="{{ route('website.teacher.routine') }}">Class
                                                        Schedule</a>
                                                </li>
                                                <li class=""><a
                                                        href="{{ route('question.uploade') }}">Question Uploade</a>
                                                </li>
                                                <li class=""><a
                                                        href="{{ route('website.teacher.exam') }}">Exam</a></li>
                                                <li class=""><a
                                                        href="{{ route('website.teacher.result') }}">Result</a></li>
                                                <li class=""><a
                                                        href="{{ route('user.logout') }}">Logout</a></li>
                                                {{-- <li>
                                                    <a href="">Attendance</a>
                                                    <ul class="dropdown">

                                                        @foreach ($class as $data)
                                                            <li>
                                                                <a
                                                                    href="{{ route('admin.attendance.view.class', $data->id) }}">{{ $data->addclass }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>

                                                </li> --}}
                                            @else
                                                <li class="" style="display:none;"> <a
                                                        class=""
                                                        href="{{ route('user.login') }}">SignIn</a></li>
                                            @endif
                                        @endif


                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    @if (!auth()->user())
                        <div class="col-xl-3 col-lg-5 col-md-7 col-sm-3 col-2">
                            <div class="header-right d-flex align-items-center justify-content-end">
                                <div class="user-btn-inner p-relative d-none d-md-block">
                                    <div class="user-btn-wrapper">
                                        <div class="user-btn-content ">
                                            <a class="user-btn-sign-in" href="{{ route('admin.login') }}">SignIn</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-none d-md-block">
                                    <a class="user-btn-sign-up edu-btn"
                                        href="{{ route('website.student.signup') }}">Student
                                        SignUp</a>
                                </div>
                                <div class="menu-bar d-xl-none ml-20">
                                    <a class="side-toggle" href="javascript:void(0)">
                                        <div class="bar-icon">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @else
                        <div></div>
                    @endif
                </div>
            </div>
        </div>

    </div>
    @if (session()->has('error'))
        <p class="alert alert-danger">{{ session()->get('error') }}</p>
    @endif

    @if (session()->has('msg'))
        <p class="alert alert-success">{{ session()->get('msg') }}</p>
    @endif
</header>
