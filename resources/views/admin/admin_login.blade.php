@extends('website.master')
@section('content')


<title>Online Class Admin - Login</title>

<link rel="shortcut icon" href="{{url('backend/img/favicon.png')}}">

<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

<link rel="stylesheet" href="{{url('backend/plugins/bootstrap/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{url('backend/plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{url('backend/plugins/fontawesome/css/all.min.css')}}">

<link rel="stylesheet" href="{{url('backend/css/style.css')}}">

<body>

<div class="main-wrapper login-body">
    <div class="login-wrapper">
        <div class="container">
            <div class="loginbox">
                <div class="login-left">
                    <img class="img-fluid" src="{{url('backend/img/logo3.png')}}" alt="Logo">
                </div>
                <div class="login-right">
                @if(session()->has('msg'))
                        <p class="alert alert-success">
                            {{session()->get('msg')}}
                        </p>
                        @endif
    
                        @if(session()->has('error'))
                        <p class="alert alert-danger">
                            {{session()->get('error')}}
                        </p>
                        @endif
                    <div class="login-right-wrap">
                        <h1>Login</h1>
                        <p class="account-subtitle">Access to our dashboard</p>
                        
    
                        <form action="{{route('admin.do.login')}}" method="post">
                        @csrf
                            <div class="form-group">
                                <input name="email" class="form-control" type="text" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="password" type="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit">Login</button>
                            </div>
                        </form>

                        <div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="login-or">
                            <span class="or-line"></span>
                            <span class="span-or">or</span>
                        </div>

                        <div class="text-center dont-have">Don’t have an account? <a
                                href="register.html">Register</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{url('backend/js/jquery-3.6.0.min.js')}}"></script>

<script src="{{url('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{url('backend/js/script.js')}}"></script>
</body>

@endsection