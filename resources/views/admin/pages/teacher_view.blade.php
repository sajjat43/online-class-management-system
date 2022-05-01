@extends('admin.master')
@section('content')

<div class="content container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Teachers Details</h3>
            </div>
            <div class="col-auto text-end float-end ms-auto">
            <input class="btn btn-primary" type="button" onclick="PrintDiv();" value="Print">
            </div>
        </div>
    </div>
    <div id="divToPrint" class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="about-info">
                        <h4>About Me</h4>
                        <div class="media mt-3  d-flex">
                            <img src="{{url('/uploads/'.$users->image)}}" class="me-3 flex-shrink-0" alt="...">
                            <div class="media-body flex-grow-1">
                            <ul>
                                    <li>
                                        <span class="title-span">Teacher id : </span>
                                        <span class="info-span">{{$users->user_id}}</span>
                                    </li>
                                    <li>
                                        <span class="title-span">Full Name : </span>
                                        <span class="info-span">{{$users->name}}</span>
                                    </li>
                                    <li>
                                        <span class="title-span">Gender : </span>
                                        <span class="info-span">{{$users->gender}}</span>
                                    </li>
                                    <li>
                                        <span class="title-span">Email : </span>
                                        <span class="info-span">{{$users->email}}</span>
                                    </li>
                                    <li>
                                        <span class="title-span">Mobile : </span>
                                        <span class="info-span">{{$users->mobile}}</span>
                                    </li>
                                    
                                    
                                    
                                </ul>
                                
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <p>Hello I am {{$users->name}}. Lorem Ipsum is simply dummy text of the printing
                                    and typesetting industry, simply dummy text of the printing and
                                    typesetting industry.</p>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5>Address</h5>
                                <p>{{$users->address}}</p>
                            </div>
                        </div>
                        
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
        var popupWin = window.open('', '_blank', 'width=1100,height=700');
        popupWin.document.open();
        popupWin.document.write('<html><head><link href="http://localhost/ltms-app/public/css/style.css" rel="stylesheet"></head><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
</script>