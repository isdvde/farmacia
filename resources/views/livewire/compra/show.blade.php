<div class="modal fade" id="compraShow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
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
							<th scope="col" class="text-center">ID</th>
							<th scope="col" class="text-center">Farmacia</th>
							<th scope="col" class="text-center">Laboratorio</th>
							<th scope="col" class="text-center">Analista</th>
							<th scope="col" class="text-center">Pedido</th>
							<th scope="col" class="text-center">Vencimiento</th>
							<th scope="col" class="text-center">Cancelado</th>
						</tr>
					</thead>
					<tbody>
						@isset ($compra)
						<tr>
							<td class="text-center">{{$compra->id}}</td>
							<td class="text-center">{{$compra->pedido->farmacia->nombre}}</td>
							<td class="text-center">{{$compra->pedido->laboratorio->nombre}}</td>
							<td class="text-center">
								{{$compra->pedido->empleado->nombre.' '.$compra->pedido->empleado->apellido}}
							</td>
							<td class="text-center">{{$compra->id_pedido}}</td>
							<td class="text-center">{{$compra->vencimiento}}</td>
							<td class="text-center">{{$compra->cancelado == 0? 'No': 'Si'}}</td>
						</tr>
						@endisset
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

					@isset ($pmedicamentos)
					<tbody>
						@foreach($pmedicamentos as $pmedicamento)
						<tr>
							<td class="text-center">{{$pmedicamento->medicamento->monodroga}}</td>
							<td class="text-center">{{$pmedicamento->medicamento->presentacion}}</td>
							<td class="text-center">{{$pmedicamento->medicamento->accion}}</td>
							<td class="text-center">{{$pmedicamento->cantidad}}</td>
						</tr>
						@endforeach
					</tbody>
					@endisset

				</table>

			</div>
			<div class="modal-footer">
				<button wire:click.prevent="closeShow" type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				
				<button wire:click.prevent="edit({{$compra}}, {{1}})" type="button" class="btn btn-primary">
					Editar	
				</button>

			</div>
		</div>
	</div>
</div>


<script>
	window.addEventListener('openShow', event => {
		$("#compraShow").modal('show');
	});

	window.addEventListener('closeShow', event => {
		$("#compraShow").modal('hide');
	});
</script>
