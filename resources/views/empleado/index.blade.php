@extends('layouts.base')
@section('content')

<div class="row justify-content-center">

	<div class="col-8">

		<table class="table">
			<thead>
				<tr>
					<th scope="col">CI</th>
					<th scope="col">Farmacia</th>
					<th scope="col">Nombre</th>
					<th scope="col">Apellido</th>
					<th scope="col">Edad</th>
					<th scope="col">Cargo</th>
					<th scope="col">Telefono</th>
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

					{{-- <th class="col-1">

						<a href="{{url('empleado/'.$empleado->id.'/edit')}}" class="btn btn-info">Editar</a>
					</th>
					<th class="col-1">
						<form action="{{url('empleado/delete')}}" method="POST">
							@csrf
							<input type="hidden" id="id" name="id" value="{{$empleado->id}}">
							<button type="submit" class="btn btn-danger">Eliminar</button>
						</form>
					</th> --}}
				</tr>
				@endforeach

			</tbody>
		</table>
	</div>
</div>

<div class="row justify-content-center">

	<div class="col-2">

		<a href="{{url('/empleado/create')}}" class="btn btn-primary">Añadir</a>
	</div>

	<div class="col-2">
		<form action="{{url('logout')}}" method="POST">
			@csrf
			<button type="submit" class="btn btn-danger">Cerrar Sesion</button>
		</form>
	</div>
</div>
@endsection