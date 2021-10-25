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
							@foreach($pedidos as $p)
							<tr>
								<td class="text-center">{{$p->id}}</th>
								<td class="text-center">{{$p->farmacia->nombre}}</th>
								<td class="text-center">{{$p->laboratorio->nombre}}</th>
								<td class="text-center">
									{{$p->empleado->nombre.' '.$p->empleado->apellido }}
								</td>
								<td class="text-center">{{$p->forma_pago}}</td>

								<td class="text-center" class="col-1 text-center">
									<button wire:click.prevent="show({{$p}})" class="btn btn-success" >Ver</button>
									<button wire:click.prevent="edit({{$p}})" class="btn btn-info" >Editar</button>
									<button wire:click.prevent="delete({{ $p->id }})" class="btn btn-danger" >Eliminar</button>
								</td>
							</tr>
							@endforeach

						</tbody>
					</table>


					<div class="col-2 text-center">
						<button wire:click.prevent="create" class="btn btn-primary">Añadir</button>

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
	 @include('livewire.pedido.show')
	 @include('livewire.pedido.create.create')
	 @include('livewire.pedido.edit.edit')
</div>
