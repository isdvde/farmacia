@extends('layouts.main')
@section('content')


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
				<table class="table" id="tpedido">
					<thead>
						<tr>
							<th scope="col" class="text-center">ID</th>
							<th scope="col" class="text-center">Farmacia</th>
							<th scope="col" class="text-center">Laboratorio</th>
							<th scope="col" class="text-center">Empleado</th>
							<th scope="col" class="text-center">Pago</th>
							<th scope="col" class="text-center"></th>
						</tr>
					</thead>
					<tbody>
						@foreach($pedidos as $pedido)
						<tr>
							<td class="text-center">{{$pedido->id}}</th>
							<td class="text-center">{{$pedido->farmacia->nombre}}</th>
							<td class="text-center">{{$pedido->laboratorio->nombre}}</th>
							<td class="text-center">{{$pedido->empleado->nombre}}</th>
							<td class="text-center">{{$pedido->forma_pago}}</th>

							<td class="text-center" class="col-1 text-center">
								<form action="{{url('pedido/delete')}}" method="POST" class="form-inline">
									@csrf
									<a href="{{url('pedido/'.$pedido->id.'/show')}}" class="btn btn-success">Ver</a>
									<a href="{{url('pedido/'.$pedido->id.'/edit')}}" class="btn btn-info">Editar</a>
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
	</div>
</div>


<script src="{{ url('lumino/js/datatables.min.js') }}"></script>
<script>
	$(document).ready( function () {
		$('#tpedido').DataTable();
	} );
</script>
@endsection

