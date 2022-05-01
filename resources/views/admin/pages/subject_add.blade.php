@extends('admin.master')
@section('content')
    @if (session()->has('msg'))
        <p class="alert alert-success">
            {{ session()->get('msg') }}
        </p>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Add Subject</h3>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.subject.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title"><span>Subject Information</span></h5>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Subject Name</label>
                                        <!-- <input required name="subject_name" type="text" class="form-control"> -->
                                        <select required name="subject_name" class="form-control select">
                                            <option>Select Subject</option>
                                            <option>Bangla</option>
                                            <option>English</option>
                                            <option>Math</option>
                                            <option>Science</option>
                                            <option>Social Science</option>
                                            <option>Relegion</option>
                                            <option>Ict</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Class</label>
                                        <select name="subject_class" class="form-control" id="exampleFormControlSelect1">
                                            @foreach ($class as $data)
                                                <option value="{{ $data->id }}">{{ $data->addclass }}</option>
                                            @endforeach
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
