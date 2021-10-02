@extends('layouts.base')
@section('content')

<div class="row justify-content-center">

	<div class="col-8">

		<table class="table">
			<thead>
				<tr>
					<th scope="col">Monodroga</th>
					<th scope="col">Presentacion</th>
					<th scope="col">Accion</th>
					<th scope="col">Cantidad</th>
				</tr>
			</thead>
			<tbody>
				@foreach($medicamentos as $medicamento)
				<tr>
					<th>{{$medicamento->medicamento->monodroga}}</th>
					<th>{{$medicamento->medicamento->presentacion}}</th>
					<th>{{$medicamento->medicamento->accion}}</th>
					<th>{{$medicamento->cantidad}}</th>
				</tr>
				@endforeach

			</tbody>
		</table>
	</div>
</div>

<div class="row justify-content-center">

	<div class="col-2">
		<a href="{{url('pedido/'.$pedido->id.'/edit')}}" class="btn btn-primary">Editar</a>
	</div>
	<div class="col-2">
		<a href="{{url('pedido')}}" class="btn btn-danger">Regresar</a>
	</div>

	
</div>
@endsection