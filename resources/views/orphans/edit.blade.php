@extends('layout')
@section('content')
<div class="card col-md-5">
    <div class="card-header">
        <h3>Edit member details</h3>
    </div>
    <div class="card-body">
        <form action="{{url('orphans/'.$orphan->id)}}" method="POST">
        @csrf
        @method('PATCH')
        <label for="fname" class="form-label">First Name :</label>
        <input type="text" placeholder="Enter first name" value="{{$orphan->fname}}" name="fname" id="fname" class="form-control">
        <label for="sname" class="form-label">Second Name :</label>
        <input type="text" placeholder="Enter second name" value="{{$orphan->sname}}" name="sname" id="sname" class="form-control">
        <label for="dob" class="form-label">Date of Birth :</label>
        <input type="date" placeholder="Enter date of birth" value="{{$orphan->dob}}" name="dob" id="dob" class="form-control">
        <label for="age" class="form-label">Age :</label>
        <input type="text" name="age" readonly id="age" value="{{$orphan->age}}" placeholder="Enter age" class="form-control">
        <label for="gender" class="form-label">Gender :</label>
        <select name="gender" value="{{$orphan->gender}}" class="form-select" id="gender">
            @if ($orphan->gender=='Male')
            <option value="Male" selected>Male</option>
            <option value="Female">Female</option>                
            @else
            <option value="Male">Male</option>
            <option value="Female" selected>Female</option>                
            @endif
        </select>
    
        <button class="m-5 btn btn-sm btn-success">Save!</button>
    
        </form>

    </div>
</div>
@endsection