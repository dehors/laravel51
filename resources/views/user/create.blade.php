@extends('layouts.admin')
@section('content')
	<form action="">
		<div class="form-group">
			<label for="">Name</label>
			<input type="text" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Email</label>
			<input type="text" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Password</label>
			<input type="password" class="form-control">
		</div>
		<button class="btn btn-primary">Send</button>
	</form>
@endsection