@extends('website.master')
@section('content')
    <form action="{{ route('student.attendance.store') }}" method='POST' enctype="multipart/form-data">
        @csrf
        <div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Date</label>
                    <input required name="date" type="date" class="form-control">
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

                                            <th>student ID</th>
                                            <th>student Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <div class="form-control" name="attendance_all[]">
                                            @foreach ($class as $key => $data)
                                                {{-- @dd($data) --}}
                                                <tr>

                                                    <td><input name="Sid[]" value="{{ $data->id }}">
                                                    </td>
                                                    <td><input name="Sname[]" value="{{ $data->name }}">
                                                    </td>
                                                    <td>
                                                        <div class="container">
                                                            <div class="form-group">
                                                                <label></label>
                                                                <select required name="attendance[]"
                                                                    class="form-control select my-2">
                                                                    <option value='Present'>1</option>
                                                                    <option value='Absent'>0</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><input type="hidden" name="class_id[]"
                                                            value="{{ $data->class_id }}">
                                                    </td>


                                                </tr>
                                            @endforeach
                                        </div>

                                    </tbody>

                                </table>
                                <button type="submit" class="btn btn-success"> Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
