@extends ('layouts.admin')
@section ('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de publicidad</h3>

		@include('admin.mascotas.search')

	</div>
</div>

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<div class="table-responsive">
			<table class="table table-dark table-bordered table-condensed table-hover">
				<thead class="">
					<th>ID de mascota</th>
					<th>Nombre de mascota</th>
					<th>Fecha nacimiento</th>
					<th>Sexo</th>
					<th>Dueño</th>
					<th>¿Disponible para adopción?</th>
					<th>Raza de mascota</th>
				</thead>
				@foreach ($mascota as $pet)
				<tr>
					<td>{{$pet->Id_Mascota}}</td>
					<td>{{$pet->NombreMascota}}</td>
					<td>{{$pet->fechaNac}}</td>
					<td>{{$pet->SexoMascota}}</td>
					<td>{{$pet->NombreUsuario}}</td>
					<td>{{$pet->Estado}}</td>
					<td>{{$pet->RazaMascota}}</td>
					
					<td>
						<a href=""><button class="btn btn-info">Editar</button></a>
						<a href=""><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
		{{$mascota->render()}}
	</div>

</div>

@endsection