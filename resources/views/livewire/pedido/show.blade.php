<div class="modal fade" id="pedidoShow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">
					Pedido
				</h5>
			</div>
			<div class="modal-body">

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
						@isset($pedido)
						<tr>
							<th>{{$pedido->farmacia->nombre}}</th>
							<th>{{$pedido->laboratorio->nombre}}</th>
							<th>{{$fpago[$pedido->forma_pago]}}</th>
							<th>{{$pedido->empleado->nombre.' '.$pedido->empleado->apellido}}</th>
						</tr>
						@endisset
					</tbody>
				</table>

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
						@isset ($pmedicamentos)
						@foreach($pmedicamentos as $medicamento)
						<tr>
							<th>{{$medicamento->medicamento->monodroga}}</th>
							<th>{{$medicamento->medicamento->presentacion}}</th>
							<th>{{$medicamento->medicamento->accion}}</th>
							<th>{{$medicamento->cantidad}}</th>
						</tr>
						@endforeach
						@endisset

					</tbody>
				</table>

			</div>
			<div class="modal-footer">
				<button wire:click.prevent="closeShow" type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				
				@isset ($pedido)
				@can('compra.create')
				<button wire:click.prevent="compra({{$pedido}})" type="button" class="btn btn-success">
					Comprar	
				</button>
				@endcan
				@endisset

				@can('pedido.edit')
				<button wire:click.prevent="edit({{$pedido}}, {{1}})" type="button" class="btn btn-primary">
					Editar	
				</button>
				@endcan

			</div>
		</div>
	</div>
</div>


<script>
	window.addEventListener('openShow', event => {
		$("#pedidoShow").modal('show');
	});

	window.addEventListener('closeShow', event => {
		$("#pedidoShow").modal('hide');
	});
</script>
