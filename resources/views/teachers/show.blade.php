@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron text-capitalize pt-4">
        <h1 class="display-5 mb-3">Hello, {{$teacher->email}}!</h1>
        <p class="lead">
            Name: <b>{{$teacher->username}}</b>
        </p>
        <p class="lead">
            University Id: <b>{{$teacher->universityId}}</b>
        </p>
        <p class="lead">
            Department: <b>{{$teacher->department}}</b>
        </p>
        <p class="lead">
            Qualification: <b>{{$teacher->qualification}}</b>
        </p>
        <p class="lead">
            Designation: <b>{{$teacher->designation}}</b>
        </p>
        <hr class="my-4">

        <h3 class="text-center font-weight-bold">Teacher's Courses</h3>
            <div class="row">
                @foreach($teacherCourses as $teacherCourse)
                    <div class="col-lg-4 my-3">
                        <div class="card border-dark mb-3" style="max-width: 18rem;">
                            <h5 class="card-header py-2 font-weight-bolder text-center">{{$teacherCourse->name}}</h5>
                            <div class="card-body text-dark">
                                <h5>Class:      <b>{{$teacherCourse->class}}</b></h5>
                                <h5>Section:    <b>{{$teacherCourse->section}}</b></h5>
                                <h5>Class Time: <b>{{$teacherCourse->classTime}}</b></h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </div>
</div>
@endsection