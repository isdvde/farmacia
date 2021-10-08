@extends('layouts.main')
@section('content')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Laboratorios</h1>
	</div>
</div><!--/.row-->

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-body">
				<form action="{{url('laboratorio/'.$laboratorio->id.'/edit')}}" method="POST">
					@csrf

					<div class="text-center">
						<h4 class="h4">Informacion Principal</h4>
					</div>

					<div class="mb-3">
						<label for="" class="form-label">Nombre</label>
						<input id="nombre" name="nombre" type="text" class="form-control" value="{{$laboratorio->nombre}}">
					</div>

					<div class="mb-3">
						<label for="" class="form-label">Direccion</label>
						<input id="direccion" name="direccion" type="text" class="form-control" value="{{$laboratorio->direccion}}">
					</div>

					<div class="mb-3">
						<label for="" class="form-label">Telefono</label>
						<input id="telefono" name="telefono" type="text" class="form-control" value="{{$laboratorio->telefono}}">
					</div>
					<div class="text-center" style="margin-top: 10px;">
						<button type="submit" class="btn btn-primary"> Guardar </button>
						<a href="{{url('laboratorio')}}" class="btn btn-danger"> Cancelar </a>
					</div>
					
				</form>

			</div>
		</div>
	</div>
</div>

@endsection
