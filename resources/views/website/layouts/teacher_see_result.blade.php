@extends('website.master')
@section('content')
    <div class="hero-arera course-item-height bg-secondary">
        <div class="container text-center">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-course-1-text">
                        <h2 class="ms-5">Top Result</h2>
                    </div>
                    <div class="container">


                        @foreach ($ax as $ax)
                            <h1 class="text-info">Name =
                                {{ $ax->name }}
                            </h1>
                            <h1 class="text-info">Subject =
                                {{ optional($ax->subject)->subject_name }}
                            </h1>
                            <h1 class="text-info">Mark =
                                {{ $max }}
                            </h1>

                            <h1 class="text-info">Class =
                                {{ $ax->class }}
                            </h1>
                        @endforeach


                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="content container-fluid pt-30 pb-30">
        <div class="col-auto text-end float-end ms-auto">
            <a href="{{ route('website.teacher.result.add') }}" class="btn btn-primary"><i class="fas fa-plus"></i>Add
                result</a>
        </div>
        <div id="divToPrint" class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-center mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Student ID</th>
                                        <th>Class</th>
                                        <th>Subject</th>
                                        <th>Grade</th>
                                        {{-- <th>Height grade</th> --}}

                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $a)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>{{ $a->name }}</td>
                                            <td>{{ $a->user_id }}</td>
                                            <td>{{ $a->class }}</td>
                                            <td>{{ optional($a->subject)->subject_name }}</td>
                                            <td>
                                                @if ($a->grade <= '100' && $a->grade >= '90')
                                                    <a href="">A</a>
                                                @elseif($a->grade <= '89' && $a->grade >= '80')
                                                    <a href="">B</a>
                                                @elseif($a->grade <= '79' && $a->grade >= '70')
                                                    <a href="">C</a>
                                                @elseif($a->grade <= '69' && $a->grade >= '60')
                                                    <a href="">D</a>
                                                @else($a->grade <= '59' && $a->grade >= '00')
                                                        <a href="">F</a>
                                                @endif
                                            </td>

                                            {{-- <td> {{ $max }}</td> --}}
                                            <td>{{ $a->status }}
                                            </td>
                                            <td>
                                                <a href="{{ route('website.teacher.result.delete', $a->id) }}"
                                                    class="btn btn-sm bg-danger-light">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
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
