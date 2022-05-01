@extends('website.master')
@section('content')


<style type="text/css">
    body {
        background: #f7f7ff;
        margin-top: 20px;
    }

    .main-body {
        padding-top: 100px;
        padding-bottom: 100px;
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid transparent;
        border-radius: .25rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
    }

</style>
<div class="hero-arera course-item-height" data-background="{{url('assets/img/slider/course-slider.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hero-course-1-text">
                    <h2>Edit Profile</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-body container">
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="{{url('/uploads/',auth()->user()->image)}}" alt="Admin"
                            class="rounded-circle p-1 bg-primary" width="110">
                        <div class="mt-3">
                            <h4>{{auth()->user()->name}}</h4>
                            <p class="text-secondary mb-1">{{auth()->user()->subject_id}}</p>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <form action="{{route('website.teacher.profile.update',$users->id)}}" method='post'>
                @method('put')
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input required name="name" type="text" class="form-control" value="{{$users->name}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input required name="email" type="text" class="form-control" value="{{$users->email}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Mobile Number</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input required name="mobile" type="text" class="form-control" value="{{$users->mobile}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input required name="address" type="text" class="form-control" value="{{$users->address}}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9 text-secondary">
                                <button type="submit" class="btn btn-primary px-4"> Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
