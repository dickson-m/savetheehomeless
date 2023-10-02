@extends('layout')
@section('content')
<div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded">
    <div class="card-header">
        <h3>The Orphans Registered</h3>
    </div>
    <div class="col-md-3">

        <a href="{{url('/orphans/create')}}" class="btn btn-primary btn-sm m-3"><i>Add new</i></a>
    </div>
    <div class="card-body">
        <table class="table table-light table-striped table-hover">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>Age</th>
                <th>Joining Date</th>
                <th>Action</th>
            </tr>
            @foreach ($orphans as $orphan)
            <tr>
                <td>{{$orphan->id}}</td>
                <td>{{$orphan->sname.', '.$orphan->fname}}</td>
                <td>{{$orphan->gender}}</td>
                <td>{{$orphan->dob}}</td>
                <td>{{$orphan->age}}</td>
                <td>{{$orphan->created_at}}</td>
                <td>
                    <a href="{{url('orphans/'.$orphan->id)}}" class="btn btn-sm btn-primary"><i>Show</i></a>
                    <a href="{{url('orphans/'.$orphan->id.'/edit')}}" class="btn btn-sm btn-warning"><i>Edit</i></a>
                    <form action="{{url('orphans/'.$orphan->id)}}" style="display: inline;" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('You want to delete?')"><i>Delete!</i></button>
                    </form>
                </td>
            </tr>
                
            @endforeach
        </table>
          
        <div class="d-flex">
            {!! $orphans->links() !!}
        </div>

    </div>
</div>
@endsection