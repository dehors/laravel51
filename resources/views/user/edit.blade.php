@extends('layouts.admin')
	@section('content')
	{!!Form::model($user,['route'=>['user.update',$user],'method'=>'PUT'])!!}
	@include('user.forms.usr')
	{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@endsection