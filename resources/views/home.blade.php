@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-4 my-3">
            <div class="card border-dark mb-3 text-center" style="max-width: 18rem;">
                <h5 class="card-header py-2 font-weight-bolder">Create Student</h5>
                <div class="card-body text-dark">
                <a href="/students/create" class="btn btn-secondary btn-sm">Create Student</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 my-3">
            <div class="card border-dark mb-3 text-center" style="max-width: 18rem;">
                <h5 class="card-header py-2 font-weight-bolder">Create Teacher</h5>
                <div class="card-body text-dark">
                <a href="/teachers/create" class="btn btn-secondary btn-sm">Create Teacher</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 my-3">
            <div class="card border-dark mb-3 text-center" style="max-width: 18rem;">
                <h5 class="card-header py-2 font-weight-bolder">Create Course</h5>
                <div class="card-body text-dark">
                <a href="/courses/create" class="btn btn-secondary btn-sm">Create Course</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 my-3">
            <div class="card border-dark mb-3 text-center" style="max-width: 18rem;">
                <h5 class="card-header py-2 font-weight-bolder">View Students</h5>
                <div class="card-body text-dark">
                <a href="/students" class="btn btn-secondary btn-sm">View Students</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 my-3">
            <div class="card border-dark mb-3 text-center" style="max-width: 18rem;">
                <h5 class="card-header py-2 font-weight-bolder">View Techers</h5>
                <div class="card-body text-dark">
                <a href="/teachers?dept=LAW" class="btn btn-secondary btn-sm">View Teachers</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 my-3">
            <div class="card border-dark mb-3 text-center" style="max-width: 18rem;">
                <h5 class="card-header py-2 font-weight-bolder">View Courses</h5>
                <div class="card-body text-dark">
                <a href="/courses" class="btn btn-secondary btn-sm">View Courses</a>
                </div>
            </div>
        </div>
    
    </div>
</div>
@endsection
