@extends('layouts.app')

@section('content')
<div class="container text-center">
<div class="row">
<div class="col-10 offset-1">
<h3 class="my-3">All Courses</h3>
<table class="table table-striped table-bordered table-sm">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Section</th>
      <th scope="col">Teacher Name</th>
      <th scope="col">Credit Hours</th>
      <th scope="col">For Class</th>
      <th scope="col">Class Time</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
        @foreach($courses as $course)
        <tr class="text-capitalize">
            <th>{{$course->name}}</th>
            <th>{{$course->section}}</th>
            <th>{{$course->teacherName}}</th>
            <th>{{$course->creditHours}}</th>
            <th>{{$course->class}}</th>
            <th>{{$course->classTime}}</th>
            <th><a href="/courses/{{$course->id}}" class="btn btn-sm btn-success">View</a>
             | 
            <form class="d-inline-block" action="/courses/{{ $course->id }}" method="POST">
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