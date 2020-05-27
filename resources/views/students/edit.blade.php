@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2 mt-2">
            <h1 class="mb-3 text-capitalize">Edit Profile {{$student->username}}</h1>
            <form action="/students/update" method="POST">
             @csrf
             <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="phone">Phone</label>
                    <input type="number" class="form-control" name="phone" placeholder="Phone" value="{{$student->phone}}" autocomplete=false>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Address" value="{{$student->address}}">
                    </div>
                    <input type="hidden" name="rollNo" value="{{$student->rollNo}}">
                </div>
                <button type="submit" class="btn btn-primary mt-2">Edit Profile</button>
        </form>
        
        </div>
    </div>
</div>
@endsection