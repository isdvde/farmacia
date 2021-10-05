@extends('layouts.main')
@section('content')

@php
$forma_pago = array(
	'contado' => 'Contado',
	'5d' => 'Credito 5 dias',
	'10d' => 'Credito 10 dias',
	'15d' => 'Credito 15 dias',
	'20d' => 'Credito 20 dias',
	'30d' => 'Credito 30 dias',
)
@endphp

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Pedidos</h1>
	</div>
</div><!--/.row-->

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			{{-- <div class="panel-heading">
				Empleados
			</div> --}}
			<div class="panel-body">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Farmacia</th>
							<th scope="col">Laboratorio</th>
							<th scope="col">Metodo de Pago</th>
							<th scope="col">Analista</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>{{$pedido->farmacia->nombre}}</th>
							<th>{{$pedido->laboratorio->nombre}}</th>
							<th>{{$forma_pago[$pedido->forma_pago]}}</th>
							<th>{{$pedido->empleado->nombre}}</th>
						</tr>
					</tbody>
				</table>

				<table class="table" id="tmedicamento">
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
					<div class="col-2">
						<a href="{{url('pedido/'.$pedido->id.'/edit')}}" class="btn btn-primary">Editar</a>

						<a href="{{url('pedido')}}" class="btn btn-danger">Regresar</a>
					</div>
			</div>
		</div>

	</div>
</div>

<script src="{{ url('lumino/js/datatables.min.js') }}"></script>
<script>
	$(document).ready( function () {
		$('#tmedicamento').DataTable();
	} );
</script>
@endsection