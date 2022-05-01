@extends('admin.master')
@section('content')

@if(session()->has('msg'))
<p class="alert alert-success">
    {{session()->get('msg')}}
</p>
@endif

<form class="me-5 mt-4" action="{{route('admin.subject')}}">
    <div class="input-group justify-content-end ">
        <div class="form-outline ">
            <input type="text" name="search" class="form-control " placeholder="Search Teacher">

        </div>
        <button type="submit" class="btn btn-primary">
            Search
        </button>

    </div>

</form>
<div class="content container-fluid">

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Subjects</h3>
                
            </div>
            <div class="col-auto text-end float-end ms-auto">
            <input class="btn btn-primary" type="button" onclick="PrintDiv();" value="Download">
                <a href="{{route('admin.subject.add')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
            </div>
        </div>
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
                                    <th>Class</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($subject as $key=>$subjects)
                                <tr>
                                    <td>{{$subjects -> id}}</td>
                                    <td>
                                        <h2>
                                            <a>{{$subjects -> subject_name}}</a>
                                        </h2>
                                    </td>
                                    <td>
                                    {{$subjects -> subject_class}}
                                    </td>
                                    
                                    <td class="text-end">
                                        <div class="actions">
                                            <a href="{{route('admin.subject.edit', $subjects->id)}}" class="btn btn-sm bg-success-light me-2">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a href="{{route('admin.subject.delete', $subjects->id)}}" class="btn btn-sm bg-danger-light">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </div>
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
<script language="javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=1500,height=700');
        popupWin.document.open();
        popupWin.document.write('<html><head><link href="http://localhost/ltms-app/public/css/style.css" rel="stylesheet"></head><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
</script>