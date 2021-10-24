<div>
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Pedidos</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
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
								<td class="text-center">
									{{$pedido->empleado->nombre.' '.$pedido->empleado->apellido }}
								</th>
								<td class="text-center">{{$pedido->forma_pago}}</th>

								<td class="text-center" class="col-1 text-center">
									<button wire:click.prevent="openForm({{ 1 }}, {{ $pedido}})" class="btn btn-success" >Ver</button>
									<button wire:click.prevent="openForm({{ 1 }}, {{ $pedido}})" class="btn btn-info" >Editar</button>
									<button wire:click.prevent="delete({{ $pedido->id }})" class="btn btn-danger" >Eliminar</button>
								</th>
							</tr>
							@endforeach

						</tbody>
					</table>


					<div class="col-2 text-center">
						<button wire:click.prevent="openForm({{0}})" class="btn btn-primary">Añadir</button>

						<div class="bootstrap-iso">
							<div class="col-2 text-right">
								{{ $pedidos->links() }}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
