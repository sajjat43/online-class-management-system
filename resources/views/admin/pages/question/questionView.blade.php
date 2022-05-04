@extends('website.master')
@section('content')
    <div class="container">
        <table border="1px">
            <tr>
                <th>class name</th>
                {{-- <th>Question</th> --}}
                <th>view</th>
                <th>Download</th>
            </tr>
            @foreach ($data as $data)
                <tr>
                    <td>{{ $data->class }}</td>
                    {{-- <td>{{ $file->question }}</td> --}}
                    <td><a href="{{ route('question.file.view', $data->id) }}">view</a></td>
                    <td><a href="{{ route('question.download', $data->question) }}">Download</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
