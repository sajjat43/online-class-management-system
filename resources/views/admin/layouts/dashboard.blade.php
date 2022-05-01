@extends('admin.master')
@section('content')

       @if(session()->has('msg'))
                <p class="alert alert-success">
                {{session()->get('msg')}}
                </p>
           @endif

<div class="content container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title">Welcome Admin!</h1>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 col-sm-6 col-12 d-flex">
            <div class="card bg-one w-100">
                <div class="card-body">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="db-info">
                            <h1>{{$user}}</h1>
                            <h4>Number of Users</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6 col-12 d-flex">
            <div class="card bg-two w-100">
                <div class="card-body">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="db-info">
                            <h1>{{$teacher}}</h1>
                            <h4>Number of Teachers</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6 col-12 d-flex">
            <div class="card bg-three w-100">
                <div class="card-body">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <div class="db-info">
                            <h1>{{$student}}</h1>
                            <h4>Number of Students</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection