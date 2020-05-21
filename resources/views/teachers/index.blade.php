@extends('layouts.app')

@section('content')
<div class="container text-center">
<div class="row">
<div class="col-10 offset-1">

<ul class="nav nav-pills">
  <li class="nav-item">
  <a class="nav-link @if($dept == 'LAW') active @endif" href="/teachers?dept=LAW">LAW</a>
  </li>
  <li class="nav-item">
  <a class="nav-link  @if($dept == 'BBA') active @endif" href="/teachers?dept=BBA">BBA</a>
  </li>
  <li class="nav-item">
  <a class="nav-link   @if($dept == 'CS') active @endif" href="/teachers?dept=CS">CS</a>
  </li>
</ul>

<h3 class="my-3">All Teachers Of {{$dept}} Department</h3>
<table class="table table-striped table-bordered table-sm">
  <thead>
    <tr>
      <th scope="col">University Id</th>
      <th scope="col">Email</th>
      <th scope="col">Name</th>
      <th scope="col">Qualification</th>
      <th scope="col">Department</th>
      <th scope="col">Designation</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
        @foreach($teachers as $teacher)
        @if($teacher->department == $dept)
        <tr class="text-capitalize">
            <th>{{$teacher->universityId}}</th>
            <th>{{$teacher->email}}</th>
            <th>{{$teacher->username}}</th>
            <th>{{$teacher->qualification}}</th>
            <th>{{$teacher->department}}</th>
            <th>{{$teacher->designation}}</th>
            <th><a href="/teachers/{{$teacher->universityId}}" class="btn btn-sm btn-success">View</a>
             | 
             <form class="d-inline-block" action="/teachers/{{ $teacher->universityId }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger">Delete</button>
            </form>
            </th>
        </tr>  
        @endif      
        @endforeach
  </tbody>
</table>
</div>



</div>
</div>
@endsection