@extends ('layouts.admin')
@section ('contenido')
 <body>
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>
  </body>
</html>
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Usuarios<a href="/admin/usuario/create"><button class="btn btn-primary">Registrar nuevo usuario</button></a></h3>

		@include('admin.usuario.search')

	</div>
</div>

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<div class="table-responsive">
			<table class="table table-dark table-bordered table-condensed table-hover">
				<thead class="">
					<th>ID</th>
					<th>Nombre de usuario</th>
					<th>Fecha de nacimiento</th>
					<th>Correo electrónico</th>					
				</thead>
				@foreach ($usuario as $cat)
				<tr>
					<td>{{$cat->id}}</td>
					<td>{{$cat->NombreUsuario}}</td>
					<td>{{$cat->FechaNacimiento_Usuario}}</td>
					<td>{{$cat->CorreoUsuario}}</td>
					
				</tr>
				@endforeach
			</table>
		</div>
		{{$usuario->render()}}
	</div>

</div>

@endsection