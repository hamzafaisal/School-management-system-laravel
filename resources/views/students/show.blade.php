@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron text-capitalize pt-4">
    <a class="btn btn-primary text-white float-right" href="/students/{{$student->rollNo}}/edit">Edit Profile</a>
        <h1 class="display-5 mb-3">Hello, {{$student->email}}!</h1>
        <p class="lead">
            Name:  <b>{{$student->username}}</b>
        </p>
        <p class="lead">
            Roll #: <b>{{$student->rollNo}}</b>
        </p>
        <p class="lead">
            Phone: <b>{{$student->phone}}</b>
        </p>
        <p class="lead">
            Address: <b>{{$student->address}}</b>
        </p>
        <hr class="my-4">
        <h3 class="text-center font-weight-bold">Student Enrolled Courses</h3>
            <div class="row">
                @foreach($enrollCourses as $enrollCourse)
                    <div class="col-lg-4 my-3">
                        <div class="card border-dark mb-3" style="max-width: 18rem;">
                            <h5 class="card-header py-2 font-weight-bolder text-center">{{$enrollCourse->name}}</h5>
                            <div class="card-body text-dark">
                                <h5>Class:      <b>{{$enrollCourse->class}}</b></h5>
                                <h5>Section:    <b>{{$enrollCourse->section}}</b></h5>
                                <h5>Class Time: <b>{{$enrollCourse->classTime}}</b></h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </div>
</div>
@endsection