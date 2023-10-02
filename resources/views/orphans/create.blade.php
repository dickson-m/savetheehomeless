@extends('layout')
@section('content')
<div class="card col-md-5">
    <div class="card-header">
        <h3>Register a member</h3>
    </div>
    <div class="card-body">
        <form action="{{url('orphans')}}" method="POST">
        @csrf
        <label for="fname" class="form-label">First Name :</label>
        <input type="text" placeholder="Enter first name" name="fname" id="fname" class="form-control">
        <label for="sname" class="form-label">Second Name :</label>
        <input type="text" placeholder="Enter second name" name="sname" id="sname" class="form-control">
        <label for="dob" class="form-label">Date of Birth :</label>
        <input type="date" placeholder="Enter date of birth" name="dob" id="dob" class="form-control">
        {{-- <label for="age" class="form-label">Age :</label>
        <input type="text" name="age" id="age" placeholder="Enter age" class="form-control"> --}}
        <label for="gender" class="form-label">Gender :</label>
        <select name="gender" class="form-select" id="gender">
            <option value="" selected><i>Select gender</i></option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
    
        <button class="m-5 btn btn-sm btn-success">Save!</button>
    
        </form>

    </div>
</div>
@endsection