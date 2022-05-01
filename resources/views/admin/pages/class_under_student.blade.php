@extends('admin.master')
@section('content')
    <div class="container m-5 ">
        <td>
            <nav>
                <li class="hov">class
                    <ul class="main">
                        @foreach ($class as $data)
                            <li>
                                <a href="{{ route('student.view', $data->id) }}">{{ $data->addclass }}</a>


                            </li>
                        @endforeach
                    </ul>
                </li>
            </nav>
        </td>
    </div>
@endsection
