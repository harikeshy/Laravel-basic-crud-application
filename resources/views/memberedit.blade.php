@extends('layouts.app')

@section('content')
	<div class="container">
	<h1>Edit the User</h1>
	
<form method="POST" action="{{ url("update") }}">
	<input type="hidden" name="user_id" value="{{ $userRec->id }}">
	<div class="form-group">
		<textarea name="username" class="form-control">{{$userRec->name }}</textarea>	
	</div>


	<div class="form-group">
		<button type="submit" name="update" class="btn btn-primary">Update User</button>
	</div>
{{ csrf_field() }}
</form>



</div>

@stop