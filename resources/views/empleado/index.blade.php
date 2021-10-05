@extends('layouts.main')
@section('content')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Empleados</h1>
	</div>
</div><!--/.row-->

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			{{-- <div class="panel-heading">
				Empleados
			</div> --}}
			<div class="panel-body">

				<table class="table" id="templeado">
					<thead>
						<tr>
							<th scope="col">CI</th>
							<th scope="col">Farmacia</th>
							<th scope="col">Nombre</th>
							<th scope="col">Apellido</th>
							<th scope="col">Edad</th>
							<th scope="col">Cargo</th>
							<th scope="col">Telefono</th>
							<th scope="col"></th>
						</tr>
					</thead>
					<tbody>
						@foreach($empleados as $empleado)
						<tr>
							<th>{{$empleado->ci}}</th>
							<th>{{$empleado->id_farmacia}}</th>
							<th>{{$empleado->nombre}}</th>
							<th>{{$empleado->apellido}}</th>
							<th>{{$empleado->edad}}</th>
							<th>{{$empleado->cargo}}</th>
							<th>{{$empleado->telefono}}</th>

							<th class="col-1">
								<form action="{{url('empleado/delete')}}" method="POST">
									@csrf
									<a href="{{url('empleado/'.$empleado->ci.'/edit')}}" class="btn btn-info">Editar</a>
									<input type="hidden" id="ci" name="ci" value="{{$empleado->ci}}">
									<button type="submit" class="btn btn-danger">Eliminar</button>
								</form>
							</th>
						</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<script src="{{ url('lumino/js/datatables.min.js') }}"></script>
<script>
	$(document).ready( function () {
		$('#templeado').DataTable();
	} );
</script>
@endsection