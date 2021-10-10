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
							<th scope="col" class="text-center">CI</th>
							<th scope="col" class="text-center">Farmacia</th>
							<th scope="col" class="text-center">Nombre</th>
							<th scope="col" class="text-center">Apellido</th>
							<th scope="col" class="text-center">Edad</th>
							<th scope="col" class="text-center">Cargo</th>
							<th scope="col" class="text-center">Telefono</th>
							<th scope="col" class="text-center"></th>
						</tr>
					</thead>
					<tbody>
						@foreach($empleados as $empleado)
						<tr>
							<td class="text-center">{{$empleado->ci}}</td>
							<td class="text-center">{{$empleado->farmacia->nombre}}</td>
							<td class="text-center">{{$empleado->nombre}}</td>
							<td class="text-center">{{$empleado->apellido}}</td>
							<td class="text-center">{{$empleado->edad}}</td>
							<td class="text-center">{{$empleado->cargo}}</td>
							<td class="text-center">{{$empleado->telefono}}</td>

							<td class="col-1">
								<form action="{{url('empleado/delete')}}" method="POST">
									@csrf
									<a href="{{url('empleado/'.$empleado->ci.'/edit')}}" class="btn btn-info">Editar</a>
									<input type="hidden" id="ci" name="ci" value="{{$empleado->ci}}">
									<button type="submit" class="btn btn-danger">Eliminar</button>
								</form>
							</td>
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