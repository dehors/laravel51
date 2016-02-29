@extends('layouts.admin')
	@section('content')		
	<div id="page-wrapper" ng-controller="Movie">
		  	<form ng-submit="uploadPic(movieData.path)">
		  		@include('pelicula.forms.pelicula')				
				<button class="btn btn-primary" type="submit">Submit</button>
	        </form>
	</div>
	@endsection