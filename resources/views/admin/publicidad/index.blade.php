@extends ('layouts.admin')
@section ('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de publicidad<a href="publicidad/create"><button class="btn btn-success">Nuevo</button></a></h3>

		@include('admin.publicidad.search')

	</div>
</div>

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<div class="table-responsive">
			<table class="table table-dark table-bordered table-condensed table-hover">
				<thead class="">
					<th>ID</th>
					<th>Fecha Inicio</th>
					<th>Fecha termino</th>
					<th>Imagen</th>
					<th>Link</th>
					<th>Mensaje</th>
					<th>Estado</th>
					<th>Usuario que publica</th>
					<th>Opciones</th>
				</thead>
				@foreach ($publicidad as $cat)
				<tr>
					<td>{{$cat->idPublicidad}}</td>
					<td>{{$cat->fecha_inicio}}</td>
					<td>{{$cat->fecha_termino}}</td>
					<td><a href="{{$cat->imagen_publi}}"><img src="{{$cat->imagen_publi}}" height="50" width="50" class="img-thumbnail img-fluid rounded"></a></td>
					<td>{{$cat->link_redirect}}</td>
					<td>{{$cat->mensaje_publi}}</td>
					<td>{{$cat->est_publicidad}}</td>
					<td>{{$cat->NombreUsuario}}</td>
					<td>
						<a href="{{URL::action('PublicidadController@edit',$cat->idPublicidad)}}"><button class="btn btn-info">Editar</button></a>
						<a href=""><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
		{{$publicidad->render()}}
	</div>

</div>

@endsection