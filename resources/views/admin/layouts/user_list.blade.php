@extends('admin.master')
@section('content')

@if(session()->has('msg'))
<p class="alert alert-success">
    {{session()->get('msg')}}
</p>
@endif


<form class="me-5 mt-4" action="{{route('admin.user.list')}}">
    <div class="input-group justify-content-end ">
        <div class="form-outline ">
            <input type="text" name="search" class="form-control " placeholder="Search User">

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
                <h3 class="page-title">All User</h3>

            </div>
            <div class="col-auto text-end float-end ms-auto">
            <input class="btn btn-primary" type="button" onclick="PrintDiv();" value="Download">
                <a href="{{route('admin.teacher.add')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile Number</th>
                                    <th>Status</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $key=>$a)
                                <tr>

                                    <td>{{$a->user_id}}</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="{{route('admin.user.view',$a->id)}}"
                                                class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle"
                                                    src="{{url('/uploads/'.$a->image)}}" alt="User Image"></a>
                                            <a href="{{route('admin.user.view',$a->id)}}">{{$a->name}}</a>
                                        </h2>

                                    </td>
                                    <td>{{$a->email}}</td>
                                    <td>{{$a->mobile}}</td>
                                    <td class="">
                                        <div class="actions">
                                        @if($a->status == 'pending')
                                            <a href="{{route('admin.user.accept',$a->id)}}"
                                                class="btn btn-sm bg-danger-light">
                                                <i class="fas fa-hourglass"></i>
                                            </a>
                                            @else
                                            <a href="{{route('admin.user.accept',$a->id)}}"
                                                class="btn btn-sm bg-success-light me-2">
                                                <i class="fas fa-check"></i>
                                            </a>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <div class="actions">
                                            @if($a->status == 'pending')
                                            <a href="{{route('admin.user.accept',$a->id)}}"
                                                class="btn btn-sm bg-success-light me-2">
                                                <i class="fas fa-check"></i>
                                            </a>
                                            @endif
                                            <a href="{{route('admin.teacher.edit',$a->id)}}"
                                                class="btn btn-sm bg-success-light me-2">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a href="{{route('admin.teacher.delete',$a->id)}}"
                                                class="btn btn-sm bg-danger-light">
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