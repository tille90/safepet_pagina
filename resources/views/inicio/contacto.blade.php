

<body>

<div class="container">



{!! Form::open(['route'=>'mail.store']) !!}

<div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
<p>{!! Form::label('Nombre:') !!}<span style="color: red">*</span></p>
{!! Form::text('nombre', old('nombre'), ['class'=>'form-control', 'placeholder'=>'Ingrese su Nombre']) !!}
<span class="text-danger">{{ $errors->first('nombre') }}</span>
</div>

<div class="form-group {{ $errors->has('correo') ? 'has-error' : '' }}">
<p>{!! Form::label('Correo electrónico:') !!}<span style="color: red">*</span></p>
{!! Form::email('correo', old('correo'), ['class'=>'form-control', 'placeholder'=>'Ingrese su correo electrónico']) !!}
<span class="text-danger">{{ $errors->first('correo') }}</span>
</div>

<div class="form-group {{ $errors->has('telefono') ? 'has-error' : '' }}">
<style>

</style>
<p>{!! Form::label('Telefono:') !!}<span style="color: red">*</span></p>
{!! Form::text('telefono', old('telefono'), ['class'=>'form-control', 'placeholder'=>'Ingrese su teléfono', 'maxlength'=>9]) !!}
<span class="text-danger">{{ $errors->first('telefono') }}</span>
</div>


<div class="form-group {{ $errors->has('mensaje') ? 'has-error' : '' }}">
<p>{!! Form::label('Mensaje:') !!}<span style="color: red">*</span>	</p>
{!! Form::textarea('mensaje', old('contenido'), ['class'=>'form-control', 'placeholder'=>'Ingrese su mensaje']) !!}
<span class="text-danger">{{ $errors->first('mensaje') }}</span>
</div>

<h3>@include('alerts.success')</h3>

<div class="form-group">
<h3><button class="btn btn-primary btn-outline	 btn-xl">Contactar!</button></h3>
</div>

{!! Form::close() !!}

</div>



</body>
</html>