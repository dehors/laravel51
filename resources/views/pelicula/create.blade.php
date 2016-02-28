@extends('layouts.admin')
	@section('content')		
	<div id="page-wrapper" ng-controller="Movie">
		  	<form ng-submit="submitmovie()">
		  		@include('pelicula.forms.pelicula')				
				<button class="btn btn-primary" type="submit">Submit</button>
	        </form>
	</div>
	@endsection