@extends('layouts.admin')
@section('contenido')


<script type="text/javascript">
		var dateobj = new Date(); //Get today's date
		var yesterday = new Date(dateobj.getFullYear(), dateobj.getMonth(), dateobj.getDay() - 2);
		$("#FechaNacimiento_Usuario").datepicker({
		startDate: yesterday,
		});
</script>


<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>Registro de clientes</h3>
		@if(count($errors)>0)
		<div class="alert alert-danger">
			<ul>
			@foreach ($errors->all() as $error)
				<li>
				 {{$error}}
				</li>
			@endforeach
			</ul>
		</div>
		@endif

		{!!Form::open(array('url' => 'admin/usuario', 'method' => 'POST'))!!}
		{{ csrf_field() }}
		
		<div class="form-group {{ $errors->has('id') ? 'has-error' : '' }}">
			<p>{!! Form::label('id', 'Id usuario') !!}<span style="color: red"></span></p>
			{!! Form::text('id', old('id'),['class' => 'form-control']) !!}
			<span class="text-danger">{{ $errors->first('id') }}</span>
		</div>
		
			
		<div class="form-group {{ $errors->has('NombreUsuario') ? 'has-error' : '' }}">
			<p>{!! Form::label('NombreUsuario', 'Nombre de Usuario') !!}<span style="color: red"></span></p>
			{!! Form::text('NombreUsuario', old('NombreUsuario'),['class' => 'form-control']) !!}
			<span class="text-danger">{{ $errors->first('NombreUsuario') }}</span>
		</div>
		<div class="form-group {{ $errors->has('FechaNacimiento_Usuario') ? 'has-error' : '' }}">
			<p>{!! Form::label('FechaNacimiento_Usuario','Fecha de nacimiento') !!}<span style="color: red"></span></p>
			{!! Form::date('FechaNacimiento_Usuario', old('FechaNacimiento_Usuario'), ['class'=>'form-control']) !!}
			<span class="text-danger">{{ $errors->first('FechaNacimiento_Usuario') }}</span>
		</div>
		
		<div class="form-group {{ $errors->has('Rol_IdRol') ? 'has-error' : '' }}">
			<p>{!! Form::label('Rol_IdRol','Rol de usuario') !!}<span style="color: red"></span></p>
			{!! Form::text('Rol_IdRol', old('Rol_IdRol'), ['class'=>'form-control','placeholder'=>'Si se crea un usuario cliente, introduzca 0']) !!}
			<span class="text-danger">{{ $errors->first('Rol_IdRol') }}</span>
		</div>
		<div class="form-group {{ $errors->has('CorreoUsuario') ? 'has-error' : '' }}">
			<p>{!! Form::label('CorreoUsuario','Correo electrónico') !!}<span style="color: red"></span></p>
			{!! Form::email('CorreoUsuario', old('CorreoUsuario'), ['class'=>'form-control']) !!}
			<span class="text-danger">{{ $errors->first('CorreoUsuario') }}</span>
		</div>
		<div class="form-group {{ $errors->has('PasswordUsuario') ? 'has-error' : '' }}">
			<p>{!! Form::label('Contraseña') !!}<span style="color: red"></span></p>
			{!! Form::password('PasswordUsuario', ['class'=>'form-control']) !!}
			<span class="text-danger">{{ $errors->first('PasswordUsuario') }}</span>
		</div>

		@if (session('warning'))
			<div class="alert alert-danger alert-dismissable custom-success-box" style="margin: 15px;">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong> {{ session('warning') }} </strong>
			</div>
		@endif

		@if (session('success'))
			<div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong> {{ session('success') }} </strong>
			</div>
		@endif

		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
			<button class="btn btn-success">Guardar Datos</button>

			<input type="reset" value="Limpiar" class="btn btn-info">
			</div>
		</div>

    	{{ Form::close() }}
    </div>
</div>

@endsection