@extends('admin.master')
@section('content')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Add Subject</h3>
                
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('admin.subject.update',$subject->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>Subject Information</span></h5>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Subject Name</label>
                                    <!-- <input required value="{{$subject->subject_name}}" name="subject_name" type="text" class="form-control"> -->
                                    <select required value="{{$subject->subject_name}}" name="subject_name" class="form-control select">
                                        <option value="" >Select Subject</option>
                                        <option @if($subject->subject_name == "Bangla") selected @endif>Bangla</option>
                                        <option @if($subject->subject_name == "English") selected @endif>English</option>
                                        <option @if($subject->subject_name == "Math") selected @endif>Math</option>
                                        <option @if($subject->subject_name == "Science") selected @endif>Science</option>
                                        <option @if($subject->subject_name == "Social Science") selected @endif>Social Science</option>
                                        <option @if($subject->subject_name == "Relegion") selected @endif>Relegion</option>
                                        <option @if($subject->subject_name == "Ict") selected @endif>Ict</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Class</label>
                                    <select required value="{{$subject->subject_class}}" name="subject_class" class="form-control select">
                                        <option>Select Class</option>
                                        <option value="">Select Class</option>
                                        <option @if($subject->subject_class == "1") selected @endif>1</option>
                                        <option @if($subject->subject_class == "2") selected @endif>2</option>
                                        <option @if($subject->subject_class == "3") selected @endif>3</option>
                                        <option @if($subject->subject_class == "4") selected @endif>4</option>
                                        <option @if($subject->subject_class == "5") selected @endif>5</option>
                                        <option @if($subject->subject_class == "6") selected @endif>6</option>
                                        <option @if($subject->subject_class == "7") selected @endif>7</option>
                                        <option @if($subject->subject_class == "8") selected @endif>8</option>
                                        <option @if($subject->subject_class == "9") selected @endif>9</option>
                                        <option @if($subject->subject_class == "10") selected @endif>10</option>
                                        <option @if($subject->subject_class == "11") selected @endif>11</option>
                                        <option @if($subject->subject_class == "12") selected @endif>12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection