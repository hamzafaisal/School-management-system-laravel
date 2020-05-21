@extends('layouts.app')

@section('content')
<div class="container text-center">
<div class="row">
<div class="col-10 offset-1">
<h3 class="my-3">All Students</h3>
<table class="table table-striped table-bordered table-sm">
  <thead>
    <tr>
      <th scope="col">Roll #</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
        @foreach($students as $student)
        <tr class="text-capitalize">
            <th>{{$student->rollNo}}</th>
            <th>{{$student->username}}</th>
            <th>{{$student->email}}</th>
            <th>{{$student->phone}}</th>
            <th>{{$student->address}}</th>
            <th>
            <a href="/students/{{$student->rollNo}}" class="btn btn-sm btn-success">View</a>
             | 
            <form class="d-inline-block" action="/students/{{ $student->rollNo }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger">Delete</button>
            </form>
            </th>
        </tr>        
        @endforeach
  </tbody>
</table>
</div>
</div>
</div>
@endsection