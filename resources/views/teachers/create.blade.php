@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2 mt-2">
            <h1 class="mb-3">Create a New Teacher</h1>
            <form action="/teachers" method="POST">
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
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="username">Userame</label>
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="department">Department</label>
                    <select id="department" name="department" class="form-control">
                        <option selected>Choose Department</option>
                        <option value="Primary">Primary</option>
                        <option value="Secondary">Secondary</option>
                    </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="qualification">Qualification</label>
                    <input type="text" class="form-control" name="qualification" placeholder="Qualification">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="designation">Designation</label>
                    <input type="text" class="form-control" name="designation" placeholder="Designation">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-2">Register Teacher</button>
        </form>
        
        </div>
    </div>
</div>
@endsection