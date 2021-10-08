@extends('layouts.main')
@section('content')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Farmacias</h1>
	</div>
</div><!--/.row-->

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-body">
				<form action="{{url('farmacia/'.$farmacia->id.'/edit')}}" method="POST">
					@csrf

					<div class="mb-3">
						<label for="" class="form-label">Nombre </label>
						<input id="nombre" name="nombre" type="text" class="form-control" value="{{$farmacia->nombre}}">
					</div>

					<div class="mb-3">
						<label for="" class="form-label">Ubicacion</label>
						<input id="ubicacion" name="ubicacion" type="text" class="form-control" value="{{$farmacia->ubicacion}}">
					</div>


					<div class="text-center" style="margin-top: 10px;">
						<button type="submit" class="btn btn-primary">Guardar</button>
						<a href="{{url('farmacia')}}" class="btn btn-danger">Cancelar</a>
					</div>
				</form>

			</div>
		</div>
	</div>
</div>
@endsection
