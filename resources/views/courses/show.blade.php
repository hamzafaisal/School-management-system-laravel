@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron text-capitalize pt-4">
        <h1 class="display-5 mb-3">Welcome to, <span class="font-weight-bold">{{$course->name}}</span> course!</h1>
        <p class="lead">
            Section: <b>{{$course->section}}</b>
        </p>
        <p class="lead">
            Teacher Name: <b> {{$course->teacherName}}</b>
        </p>
        <p class="lead">
            Credit Hours: <b>{{$course->creditHours}}</b>
        </p>
        <p class="lead">
            For Class: <b>{{$course->class}}</b>
        </p>
        <p class="lead">
            Class Time: <b>{{$course->classTime}}</b>
        </p>
        <hr class="my-4">

        <div class="row">
        <div class="col-6">
        <form action="/enroll-student" method="POST">     
        @csrf
        <div class="form-row">
            <div class="form-group col-12">
            <h5 class="font-weight-bolder ml-1" for="enroll">Enroll Student In This Course</h5>
            <select id="studentRollNo" name="student_id" class="form-control">
                <option selected>Choose Student</option>
                @foreach($students as $student)
                <option value={{$student->id}}>{{$student->username}}</option>
                @endforeach
            </select>
            </div>
            <!-- HIDDEN INPUT FIELD THAT CAN SUBMIT COURSE ID ALONG WITH STUDENT ROLL NO -->
            <input type="hidden" name="course_id" value={{$course->id}}> 
            </div>
        <button type="submit" class="btn btn-sm btn-primary text-white">Enroll Student</button>
        </form>
        </div>


        <div class="col-6 pl-5 ">
            <h3 class="text-center font-weight-bold">Enrolled Students</h3>
            <ol>
                @foreach($courseStudents as $student)
                    <li><h5>{{$student->username}}</h5></li>
                @endforeach
            </ol>
        </div>
        </div>
    </div>
</div>
@endsection