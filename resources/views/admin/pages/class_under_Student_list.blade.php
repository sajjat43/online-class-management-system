@extends('admin.master')
@section('content')
    <a href="{{ route('class.under.students') }}" class="btn btn-primary">Back</a>
    <div class="container py-2 ms-5">
        <h1>All class Student</h1>
    </div>
    <div class="container">
        <div class="content container-fluid pt-30 pb-30">
            <div id="divToPrint" class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover  table-center mb-0 datatable">

                                    <thead>
                                        <tr>

                                            <th>student ID</th>
                                            <th>student Name</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <div class="form-control" name="attendance_all[]">
                                            @foreach ($student as $key => $list)
                                                <tr>
                                                    <td>{{ $list->id }}
                                                    </td>
                                                    <td>{{ $list->name }}
                                                    </td>
                                                    <td><a href="{{ route('student.details', $list->id) }}">Details</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </div>

                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
