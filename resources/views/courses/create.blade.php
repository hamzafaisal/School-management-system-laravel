@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2 mt-2">
            <h1 class="mb-3">Create a New Course</h1>
            <form action="/courses" method="POST">
             @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="name">Course Name</label>
                    <input type="text" class="form-control" name="name" placeholder="course">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="section">Section</label>
                    <input type="text" class="form-control" name="section" placeholder="section">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="creditHours">Credit Hours</label>
                        <input type="number" class="form-control" name="creditHours" placeholder="credit hours">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="teacherName">Teacher Name</label>
                    <select id="teacherName" name="teacherName" class="form-control">
                        <option selected>Choose Teacher</option>
                        @foreach($teachers as $teacher)
                        <option value={{$teacher->username}}>{{$teacher->username}}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="class">For Class</label>
                    <input type="text" class="form-control" name="class" placeholder="class e.g grade 1, grade 2">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="classTime">Class Time</label>
                    <input type="time" class="form-control" name="classTime" placeholder="class time e.g 11:00">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-2">Register Teacher</button>
        </form>
        
        </div>
    </div>
</div>
@endsection