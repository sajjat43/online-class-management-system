@extends('admin.master')
@section('content')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Update Student Info</h3>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('admin.user.update',$users->id)}}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>Student Information</span></h5>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input required type="text" name="name" value="{{$users->name}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Image</label>
                                <input required  name="image" value="{{$users->image}}" type="file" class="form-control">
                            </div>
                        </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select required name="gender" value="{{$users->gender}}" class="form-control select">
                                        <option @if($users->gender == "Male") selected @endif>Male</option>
                                        <option @if($users->gender == "Female") selected @endif>Female</option>
                                        <option @if($users->gender == "Others") selected @endif>Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Birth Date</label>
                                    <input required type="date" name="birth" value="{{$users->birth}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Class</label>
                                    <select required name="class" value="{{$users->class}}" class="form-control select">
                                        <option value="">Select Class</option>
                                        <option @if($users->class == "1") selected @endif>1</option>
                                        <option @if($users->class == "2") selected @endif>2</option>
                                        <option @if($users->class == "3") selected @endif>3</option>
                                        <option @if($users->class == "4") selected @endif>4</option>
                                        <option @if($users->class == "5") selected @endif>5</option>
                                        <option @if($users->class == "6") selected @endif>6</option>
                                        <option @if($users->class == "7") selected @endif>7</option>
                                        <option @if($users->class == "8") selected @endif>8</option>
                                        <option @if($users->class == "9") selected @endif>9</option>
                                        <option @if($users->class == "10") selected @endif>10</option>
                                        <option @if($users->class == "11") selected @endif>11</option>
                                        <option @if($users->class == "12") selected @endif>12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <input required type="text" name="mobile" value="{{$users->mobile}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Join Date</label>
                                    <input required type="date" name="join" value="{{$users->join}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Email ID</label>
                                    <input required type="email" name="email" value="{{$users->email}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input required type="text" name="password" value="{{$users->password}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Father Name</label>
                                    <input required type="text" name="father_name" value="{{$users->father_name}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Father Mobile Number</label>
                                    <input required type="text" name="father_mobile" value="{{$users->father_mobile}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Mother Name</label>
                                    <input required type="text" name="mother_name" value="{{$users->mother_name}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Mother Mobile Number</label>
                                    <input required type="text" name="mother_mobile" value="{{$users->mother_mobile}}" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input required type="text" name="address" value="{{$users->address}}"  class="form-control">
                                </div>
                            </div>
                            

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
