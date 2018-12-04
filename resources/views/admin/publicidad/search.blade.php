{!! Form::open(array('url'=>'admin/publicidad','method'=>'GET','autocomplete'=>'off','role'=>'search'))!!}

<div class="form-group">
	<div class="input-group">
		<form>
			<input type="text" class="form-control" name="searchText" placeholder="Fecha inicio" value="{{$searchText}}">
			<span class="input-group-btn">
				<button type="submit" class="btn btn-primary">Buscar</button>
			</span>
		</form>
		
	</div>
</div>



{{Form::close()}}