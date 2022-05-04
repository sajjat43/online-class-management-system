@extends('website.master')
@section('content')
    <div class="container">
        <form action="{{ route('question.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1>Upload Question</h1>
            <select name="class" class="form-control" id="exampleFormControlSelect1">
                @foreach ($class as $data)
                    <option value="{{ $data->id }}">{{ $data->addclass }}</option>
                @endforeach
            </select>
            <input type="file" name="question">
            <input type="submit">
        </form>
    </div>
    <div class="container">
        <a href="{{ route('question.view') }}" class="btn btn-primary">view</a>
    </div>
@endsection
