@extends('website.master')
@section('content')
    <div class="container">
        <li> <a href=" {{ route('student.qsn.view', $data->class) }}" class="btn btn-praimary">question</a>
        </li>
    </div>
@endsection
