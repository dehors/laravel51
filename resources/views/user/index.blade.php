@extends('layouts.admin')
@section('content')
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Creado</th>
			<th>Operacion</th>

		</thead>
		@foreach($users as $user)
			<tbody>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $user->created_at)->diffForHumans()}}</td>
				<td>
					{!!link_to_route('user.edit', $title = 'Editar', $parameters = array($user->id), $attributes = ['class'=>'btn btn-primary'])!!}
					{!!Form::open(array('route' => array('user.destroy', $user->id),'method' => 'DELETE'))!!}
					{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}					
				</td>

			</tbody>
		@endforeach
	</table>
	{!! $users->render() !!}
@endsection