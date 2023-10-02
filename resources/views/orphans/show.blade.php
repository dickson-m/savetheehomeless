@extends('layout')
@section('content')
<h3>Show Details</h3>
<div class="col-md-5">
    <label for="name" class="form-label">Name :</label> 
    <input type="text" id="name" readonly value="{{$orphan->fname.' '.$orphan->sname}}" class="form-control">
    <label for="name" class="form-label">Age :</label> 
    <input type="text" id="name" readonly value="{{$orphan->age}}" class="form-control">
    <label for="name" class="form-label">DOB :</label> 
    <input type="text" id="name" readonly value="{{$orphan->dob}}" class="form-control">
    <label for="name" class="form-label">Joining Date :</label> 
    <input type="text" id="name" readonly value="{{$orphan->created_at}}" class="form-control">
    <div class="col-md-3">
        <a href="{{url('orphans')}}" class="btn form-control btn-sm btn-success m-3">back</a>

    </div>

</div>


@endsection