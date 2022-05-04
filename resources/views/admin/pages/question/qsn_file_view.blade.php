@extends('website.master')
@section('content')
    <div class="container">
        <h1>class: {{ $data->class }}</h1>
        <iframe height="800" width="700" src="/question/{{ $data->question }}" frameborder="0"></iframe>
    </div>
@endsection
