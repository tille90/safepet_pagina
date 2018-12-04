{!! Form::open(array('url'=>'admin/usuario','method'=>'GET','autocomplete'=>'off','role'=>'search'))!!}

<div class="form-group">
	<div class="input-group">
		<form>
			<input type="text" class="form-control" name="searchText" placeholder="Correo" value="{{$searchText}}">
			
			<span class="input-group-btn">
				<button type="submit" class="btn btn-primary">Buscar</button>
			</span>
		</form>
		
	</div>
</div>



{{Form::close()}}