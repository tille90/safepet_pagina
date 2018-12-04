@extends ('layouts.admin')
@section ('contenido')
<script type="text/javascript">

var datepickerBegin = $("#fecha_inicio").val();
var datepickerEnd = $("#fecha_termino").val();

var difference = (datepickerEnd- datepickerBegin ) / (86400000 * 30);
if (difference < 0) {
  alert("La fecha de inicio debe venir antes que la fecha de termino");
  return false;
}

if (difference <= 1) {
  alert("La fecha de termino debe ser al menos 30 días mayor que la de inicio");
  return false;
}

return true;
</script>



<script type="text/javascript">
	function contar() { 
         var max = "240"; 
         var cadena = document.getElementById("mensaje_publi").value; 
         var longitud = cadena.length; 

             if(longitud <= max) { 
                  document.getElementById("contador").value = max-longitud; 
             } else { 
                  document.getElementById("mensaje_publi").value = cadena.substr(0, max); 
             } 
    } 

    var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>


<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>Crear Publicidad</h3>
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

		{!!Form::model($publicidad,['method'=>'PATCH','route'=>['admin.publicidad.update',$publicidad->idPublicidad]])!!}
		{{ csrf_field() }}
		<div class="form-group {{ $errors->has('fecha_inicio') ? 'has-error' : '' }}">
		<div class="form-group">
			<label for="Usuario_Id_Usuario" class="">Usuario que publica</label>
			<input type="text" name="Usuario_Id_Usuario" class="form-control" value="{{$publicidad->Usuario_Id_Usuario}}">
						
		</div>		

		<div class="form-group {{ $errors->has('fecha_inicio') ? 'has-error' : '' }}">
			<p>{!! Form::label('Fecha Inicio') !!}<span style="color: red"></span></p>
			{!! Form::date('fecha_inicio', old('fecha_inicio'), ['class'=>'form-control']) !!}
			<span class="text-danger">{{ $errors->first('fecha_inicio') }}</span>
		</div>
		<div class="form-group {{ $errors->has('fecha_termino') ? 'has-error' : '' }}">
			<p>{!! Form::label('Fecha Termino') !!}<span style="color: red"></span></p>
			{!! Form::date('fecha_termino', old('fecha_termino'), ['class'=>'form-control']) !!}
			<span class="text-danger">{{ $errors->first('fecha_termino') }}</span>
		</div>
		<div class="form-group {{ $errors->has('link_redirect') ? 'has-error' : '' }}">
			<p>{!! Form::label('Link de redireccionamiento') !!}<span style="color: red"></span></p>
			{!! Form::text('link_redirect', old('link_redirect'), ['class'=>'form-control','placeholder'=>'www.ejemplo.com','onKeyDown'=>'cuenta()']) !!}
			<span class="text-danger">{{ $errors->first('link_redirect') }}</span>
		</div>	

		<div class="form-group">
         <label>Caracteres restantes:</label> 
         <input disabled size="3" value="240" id="contador"> 
         <br/> 
         {!! Form::textarea('mensaje_publi', old('mensaje_publi'), ['class'=>'form-control','placeholder'=>'Escribe el mensaje aqui!','onKeyDown'=>'contar()','onKeyUp'=>'contar()','id'=>'mensaje_publi','rows'=>3]) !!} 
    	</div> 
    			
		<div class="form-group {{ $errors->has('imagen_publi') ? 'has-error' : '' }}">
			<p>{!! Form::label('Link de imagen publicación') !!}<span style="color: red"></span></p>
			{!! Form::text('imagen_publi', old('imagen_publi'), ['class'=>'form-control','placeholder'=>'www.ejemplo.com']) !!}
			<span class="text-danger">{{ $errors->first('imagen_publi') }}</span>
		</div>	

	  	
			<div class="form-group {{ $errors->has('est_publicidad') ? 'has-error' : '' }}">
			<label for="est_publicidad">Publicidad Activa</label>
			<input type="checkbox" class="form-check-input" name="est_publicidad" value="1" checked="checked">Cliente
			<span class="text-danger">{{ $errors->first('est_publicidad') }}</span>
			</div>
			@if (session('success'))
			<div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong> {{ session('success') }} </strong>
			</div>
		@endif
		
		
		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
			<button class="btn btn-primary">Guardar Datos</button>
			<input type="reset" value="Limpiar" class="btn btn-info">
		</div>
		</div>


		{{ Form::close() }}
	</div>
</div>


@endsection
