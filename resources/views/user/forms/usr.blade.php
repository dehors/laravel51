	<div class="form-group">
		{!!Form::label('nombre','Nombre:')!!}
		{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
		{{$errors->first('name')}}
	</div>
	<div class="form-group">
		{!!Form::label('email','Correo:')!!}
		{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
		{{$errors->first('email')}}
	</div>
	<div class="form-group">
		{!!Form::label('password','Contraseña:')!!}
		{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
		{{$errors->first('password')}}
	</div>
	<div class="form-group">
	 	<textarea  class="ckeditor" name="editor1" id="editor1" rows="10" cols="80">
            Este es el textarea que es modificado por la clase ckeditor
        </textarea>
	</div>                          

