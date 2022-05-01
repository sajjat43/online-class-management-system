@extends('admin.master')
@section('content')
    <a href="{{ route('class.under.students') }}" class="btn btn-primary">Back</a>
    <div class="container py-2 ms-5">
        <h1>Details</h1>
        <h2>Student name</h2>
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

                                            <th>Date</th>

                                            <th>Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($student as $key => $list)

                                            <tr>

                                                <td>{{ $list->date }}
                                                </td>
                                                <td>{{ $list->attendance }}
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
    </div>
@endsection
