@extends('website.master')
@section('content')
    <div class="hero-arera course-item-height" data-background="{{ url('assets/img/slider/course-slider.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-course-1-text">
                        <h2>Add Result</h2>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="content container-fluid pt-30 pb-30">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Add Result</h3>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('website.teacher.result.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title"><span>Basic Details</span></h5>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input required type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Student ID</label>
                                        <input required type="number" name="user_id" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Class</label>
                                        <select name="class" class="form-control" id="exampleFormControlSelect1">
                                            @foreach ($class as $data)
                                                <option value="{{ $data->id }}">{{ $data->addclass }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <select name="subject_id" class="form-control select">
                                            @foreach ($subjects as $sub)
                                                <option value="{{ $sub->id }}">{{ $sub->subject_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Mark</label>
                                        <input required name="grade" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select required name='status' type="text" class="form-control">
                                            <option>Select One</option>
                                            <option>Excellent</option>
                                            <option>Very good</option>
                                            <option>Good</option>
                                            <option>Poor</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
