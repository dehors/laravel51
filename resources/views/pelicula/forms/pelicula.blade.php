<div class="form-group">
	{!!Form::label('nombre','Nombre:')!!}
	<input type="text" class="form-control" placeholder="Ingresa el Nombre de la pelicula" ng-model="movieData.name">
</div>
<div class="form-group">
	{!!Form::label('Elenco','Elenco:')!!}
	<input type="text" class="form-control" placeholder="Ingresa el elenco" ng-model="movieData.cast">	
</div>
<div class="form-group">
	{!!Form::label('Direccion','Dirección:')!!}
	<input type="text" class="form-control" placeholder="Ingresa al director" ng-model="movieData.direction">	
</div>
<div class="form-group">
	{!!Form::label('Duracion','Duración:')!!}
	<input type="text" class="form-control" placeholder="Ingresa la duración" ng-model="movieData.duration">
</div>
<div class="form-group">	
	      
      <br>Photo:
      <input type="file" ngf-select ng-model="movieData.path" name="file"    
             accept="image/*">  
      <img ngf-thumbnail="movieData.path" class="thumb">

</div>
<div class="form-group">
	{!!Form::label('Genero','Genero:')!!}	
	<select name="genders_id" ng-model="movieData.genders_id">
			<option value="">---Please select---</option>
	        <option ng-repeat="genders in getGenders" value="@{{ genders.id }}">@{{ genders.genre }}</option>
	</select>
</div>