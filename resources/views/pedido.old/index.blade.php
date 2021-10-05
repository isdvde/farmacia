@extends('layouts.base')
@section('content')

<div class="row justify-content-center">

	<div class="col-8">

		<table class="table" id="tabla">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Farmacia</th>
					<th scope="col">Laboratorio</th>
					<th scope="col">Empleado</th>
					<th scope="col">Pago</th>
					<th scope="col">Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($pedidos as $pedido)
				<tr>
					<th>{{$pedido->id}}</th>
					<th>{{$pedido->farmacia->nombre}}</th>
					<th>{{$pedido->laboratorio->nombre}}</th>
					<th>{{$pedido->empleado->nombre}}</th>
					<th>{{$pedido->forma_pago}}</th>

					<th class="col-1 text-center">
						<a href="{{url('pedido/'.$pedido->id.'/show')}}" class="btn btn-secondary">Ver</a>
					</th>
					<th class="col-1">
						<a href="{{url('pedido/'.$pedido->id.'/edit')}}" class="btn btn-info">Editar</a>
					</th>
					<th class="col-1">
						<form action="{{url('pedido/delete')}}" method="POST">
							@csrf
							<input type="hidden" id="id" name="id" value="{{$pedido->id}}">
							<button type="submit" class="btn btn-danger">Eliminar</button>
						</form>
					</th>
				</tr>
				@endforeach

			</tbody>
		</table>
	</div>
</div>

<div class="row justify-content-center">

	<div class="col-2">

		<a href="{{url('/pedido/create')}}" class="btn btn-primary">Añadir</a>
	</div>

	<div class="col-2">
		<form action="{{url('logout')}}" method="POST">
			@csrf
			<button type="submit" class="btn btn-danger">Cerrar Sesion</button>
		</form>
	</div>
</div>
@endsection

