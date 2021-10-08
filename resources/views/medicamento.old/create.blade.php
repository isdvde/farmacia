@extends('layouts.main')
@section('content')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Medicamentos</h1>
	</div>
</div><!--/.row-->

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-body">
				<form action="{{url('medicamento/create')}}" method="POST">
					@csrf

					<div class="text-center">
						<h4 class="h4">Informacion Principal</h4>
					</div>

					<div class="mb-3">
						<label for="" class="form-label">Monodroga</label>
						<input id="monodroga" name="monodroga" type="text" class="form-control">
					</div>

					<div class="mb-3">
						<label for="" class="form-label">Presentacion</label>
						<input id="presentacion" name="presentacion" type="text" class="form-control">
					</div>

					<div class="mb-3">
						<label for="" class="form-label">Accion</label>
						<input id="accion" name="accion" type="text" class="form-control">
					</div>

					<div class="mb-3">
						<label for="" class="form-label">Precio</label>
						<input id="precio" name="precio" type="number" class="form-control">
					</div>

					<div class="text-center" style="margin-top: 10px;">
						<button type="submit" class="btn btn-primary">Guardar</button>
						<a href="{{url('medicamento')}}" class="btn btn-danger">Cancelar</a>
					</div>
				</form>

			</div>
		</div>
	</div>
</div>
@endsection
