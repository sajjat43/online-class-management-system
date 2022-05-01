<div class="header">

    <div class="header-left">
        <a href="{{route('admin.dashboard')}}" class="logo">
            <img src="{{url('backend/img/logo.png')}}" alt="Logo"  >
        </a>
        <a href="{{route('admin.dashboard')}}" class="logo logo-small" >
            <img src="{{url('backend/img/logo-small.png')}}" alt="Logo" width="30" height="30">
        </a> 
    </div>

    <!-- <a href="javascript:void(0);" id="toggle_btn">
        <i class="fas fa-align-left"></i>
    </a> -->

    <a class="mobile_btn" id="mobile_btn">
        <i class="fas fa-bars"></i>
    </a>

    <ul class="nav user-menu">
        <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                <span class="user-img"><img class="rounded-circle" src="{{url('backend/img/profiles/avatar-01.jpg')}}"
                        width="31" alt="Ryan Taylor"></span>
            </a>
            <div class="dropdown-menu">
                <div class="user-header">
                    <div class="avatar avatar-sm">
                        <img src="{{url('backend/img/profiles/avatar-01.jpg')}}" alt="User Image"
                            class="avatar-img rounded-circle">
                    </div>
                    <div class="user-text">
                        <h6>Al-Amin</h6>
                        <p class="text-muted mb-0">Administrator</p>
                    </div>
                </div>
                <!-- <a class="dropdown-item" href="profile.html">My Profile</a> -->

                <a class="dropdown-item" href="{{route('admin.logout')}}">Logout</a>
            </div>
        </li>

    </ul>

</div>
