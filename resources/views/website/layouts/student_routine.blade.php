@extends('website.master')
@section('content')

<div class="hero-arera course-item-height" data-background="{{url('assets/img/slider/course-slider.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hero-course-1-text">
                    <h2>Class Schedule</h2>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="content container-fluid pt-30 pb-30">
    <div id="divToPrint" class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-center mb-0 datatable">
                        <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Class</th>
                                    <th>Subject</th>
                                    <th>Class Time</th>
                                    <th>Date</th>
                                    <th>Class Link</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $key=>$a)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$a->class}}</td>
                                    <td>{{optional($a -> subject)->subject_name}}</td>
                                    <td>{{$a->time}}</td>
                                    <td>{{$a->date}}</td>
                                    <td><a href="{{$a->link}}" class="btn btn-primary">Join Now</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection