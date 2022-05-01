@extends('website.master')
@section('content')

<div class="hero-arera course-item-height" data-background="{{url('assets/img/slider/course-slider.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hero-course-1-text">
                    <h2>Result</h2>
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
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Student ID</th>
                                    <th>Class</th>
                                    <th>Subject</th>
                                    <th>Grade</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $total_grade = 0;
                                @endphp
                                @foreach($data as $key=>$a)
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$a->name}}</td>
                                    <td>{{$a->user_id}}</td>
                                    <td>{{$a->class}}</td>
                                    <td>{{optional($a -> subject)->subject_name}}</td>

                                    <td>
                                        @if($a->grade <= '100' && $a->grade >= '90')<a href="">A</a>
                                            @elseif($a->grade <= '89' && $a->grade >='80')<a href="">B</a>
                                                @elseif($a->grade <= '79' && $a->grade >= '70')<a href="">C</a>
                                                    @elseif($a->grade <= '69' && $a->grade >= '60')<a href="">D</a>
                                                        @else($a->grade <= '59' && $a->grade >= '00')<a href="">F</a>

                                                            @endif
                                                            @php
                                                            $total_grade = ($a->grade + $total_grade);
                                                            @endphp
                                    </td>
                                    <!-- <td>{{$total_grade}}</td> -->
                                    <td>{{$a->status}}</td>

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
