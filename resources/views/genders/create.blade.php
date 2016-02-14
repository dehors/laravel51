@extends('layouts.admin')
@section('content')
<div class="col-sm-4" ng-controller="Gender">
    
        <h3>Genero</h3>
        <form ng-submit="submitgender()">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Genero" ng-model="genderData.genre">
            </div>
            <span>@{{ errorMessages.genre[0] }}</span>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    
</div>
@endsection