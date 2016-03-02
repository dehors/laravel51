@extends('layouts.admin')
@section('content')
<div id="page-wrapper" ng-controller="Gender">
	<div class="col-sm-4">
		       <h3>Genero</h3>
	        <form ng-submit="updategender({!! $gender->id !!})">
	            <div class="form-group">
	                <input type="text" class="form-control" placeholder="Genero" ng-model="genderData.genre" ng-init="{!! $gender->genre !!}">
	            </div>
	            <span>@{{ errorMessages.genre[0] }}</span>
	            <button class="btn btn-primary" type="submit">Submit</button>	            
	        </form>
	</div>
</div>
@endsection