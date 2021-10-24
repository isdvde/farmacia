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
		<h1 class="page-header">compra</h1>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
		
			<div class="panel-body">

                   <table class="table">
					<thead>
						<tr>
							<th scope="col" class="text-center">id</th>
							<th scope="col" class="text-center">id pedido</th>
							<th scope="col" class="text-center">vencimiento</th>
							<th scope="col" class="text-center">cancelado</th>
                            <th scope="col" class="text-center">Farmacia</th>
							<th scope="col" class="text-center">Laboratorio</th>
							<th scope="col" class="text-center">Analista</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-center">{{$compra->id}}</th>
							<td class="text-center">{{$compra->id_pedido}}</th>
							<td class="text-center">{{$compra->vencimiento}}</th>
                            <td class="text-center">{{$compra->cancelado}}</th>
                            <td class="text-center">{{$compra->pedido->farmacia->nombre}}</th>
							<td class="text-center">{{$compra->pedido->laboratorio->nombre}}</th>
							<td class="text-center">{{$compra->pedido->empleado->nombre}}</th>
						</tr>
					</tbody>
				</table>

            

                <table class="table" id="tmedicamento">
					<thead>
						<tr>
							<th scope="col" class="text-center">Monodroga</th>
							<th scope="col" class="text-center">Presentacion</th>
							<th scope="col" class="text-center">Accion</th>
							<th scope="col" class="text-center">Cantidad</th>
						</tr>
					</thead>
					<tbody>
						@foreach($medicamentos as $medicamento)
						<tr>
							<td class="text-center">{{$medicamento->id_medicamento}}</th>
							<td class="text-center">{{$medicamento->medicamento->presentacion}}</th>
							<td class="text-center">{{$medicamento->medicamento->accion}}</th>
							<td class="text-center">{{$medicamento->medicamento->cantidad}}</th>
						</tr>
						@endforeach

					</tbody>
				</table>

					<div class="col-2">
						<a href="{{url('compra')}}" class="btn btn-danger">Regresar</a>
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