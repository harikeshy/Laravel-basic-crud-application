@extends('layouts.app')

@section('content')
<div class="container">

 @if (Auth::check())
	
                <h2>Add New User</h2>
               
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{url('adduserlist')}}">

    <div class="form-group">
	<label>Name</label>
        <input type="text" name="username" class="form-control">  
    </div>
	
	<div class="form-group">
	<label>Email</label>
        <input type="text" name="email" class="form-control">  
    </div>
	
	<div class="form-group">
	<label>Password</label>
        <input type="password" name="password" class="form-control">  
    </div>
	
	<div class="form-group">
	<label>Confirm Password</label>
        <input type="password" name="password_confirmation" class="form-control">  
    </div>
	
	
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
	
{{ csrf_field() }}
</form>
  @else
                    <h3>You need to log in. <a href="{{url('/login')}}">Click here to login</a></h3>
                @endif
</div>

@endsection
