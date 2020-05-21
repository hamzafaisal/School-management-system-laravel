@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2 mt-2">
            <h1 class="mb-3">Create a New Student</h1>
            <form action="/students" method="POST">
             @csrf
             <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="username">Userame</label>
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <button type="submit" class="btn btn-primary mt-2">Register Student</button>
        </form>
        
        </div>
    </div>
</div>
@endsection