<div class="modal fade" id="farmaciaShow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">
					Farmacia
				</h5>
			</div>
			<div class="modal-body">


				@isset ($farmacia)

				<table class="table">
					<thead >
						<tr>
							<th scope="col" class="text-center">Nombre</th>
							<th scope="col" class="text-center">Ubicacion</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td class="text-center">{{$farmacia->nombre}}</td>
							<td class="text-center">{{$farmacia->ubicacion}}</td>
						</tr>
					</tbody>
				</table>

				<ul class="nav nav-tabs nav-justified">
					<li class="active"><a data-toggle="tab" href="#empleados">Empleados</a></li>
					<li><a data-toggle="tab" href="#inventario">Inventario</a></li>
					<li><a data-toggle="tab" href="#pedidos">Pedidos</a></li>
					<li><a data-toggle="tab" href="#compras">Compras</a></li>
				</ul>

				<div class="tab-content">
					<div id="empleados" class="tab-pane fade in active">

						<table class="table">
							<thead>
								<tr>
									<th scope="col" class="text-center">CI</th>
									<th scope="col" class="text-center">Nombre</th>
									<th scope="col" class="text-center">Apellido</th>
									<th scope="col" class="text-center">Edad</th>
									<th scope="col" class="text-center">Cargo</th>
									<th scope="col" class="text-center">Telefono</th>
									<th scope="col" class="text-center"></th>
								</tr>
							</thead>
							<tbody>

								@foreach( $farmacia->empleados as $e)
								<tr>
									<td class="text-center">{{$e->ci}}</td>
									<td class="text-center">{{$e->nombre}}</td>
									<td class="text-center">{{$e->apellido}}</td>
									<td class="text-center">{{$e->edad}}</td>
									<td class="text-center">{{ucfirst($e->cargo)}}</td>
									<td class="text-center">{{$e->telefono}}</td>
								</tr>
								@endforeach

							</tbody>
						</table>
					</div>


					<div id="inventario" class="tab-pane fade">

						<table class="table">
							<thead>
								<tr>
									<th scope="col" class="text-center">Medicamento</th>
									<th scope="col" class="text-center">Cantidad</th>
								</tr>
							</thead>

							<tbody>
								@foreach ( $farmacia->inventarios as $i )

								<tr>
									<td class="text-center">{{$i->medicamento->monodroga}}</td>
									<td class="text-center">{{$i->cantidad}}</td>
								</tr>

								@endforeach
							</tbody>
						</table>
					</div>


					<div id="pedidos" class="tab-pane fade">

						<table class="table">
							<thead>
								<tr>
									<th scope="col" class="text-center">Laboratorio</th>
									<th scope="col" class="text-center">Empleado</th>
									<th scope="col" class="text-center">Pago</th>
								</tr>
							</thead>
							<tbody>
								@foreach($farmacia->pedidos as $p)
								<tr>
									<td class="text-center">{{$p->laboratorio->nombre}}</th>
										<td class="text-center">
											{{$p->empleado->nombre.' '.$p->empleado->apellido }}
										</td>
										<td class="text-center">{{$p->forma_pago}}</td>

									</tr>
									@endforeach

								</tbody>
							</table>

						</div>

						<div id="compras" class="tab-pane fade">

							<table class="table">
								<thead >
									<tr>
										<th scope="col" class="text-center">Pedido</th>
										<th scope="col" class="text-center">Vencimiento</th>
										<th scope="col" class="text-center">Cancelado</th>
										<th scope="col" class="text-center">Total Compra</th>
									</tr>
								</thead>

								<tbody>
									@php
										$n = 0
									@endphp
									@foreach($farmacia->compras as $c)
									<tr>
										<td class="text-center">{{$c->id_pedido}}</td>
										<td class="text-center">{{$c->vencimiento}}</td>
										<td class="text-center">
											{{$c->cancelado == 0 ? 'No' : 'Si' }}
										</td>
										<td class="text-center">
											{{$this->totalCompra[$n].'$'}}
										</td>
									</tr>
									@php
										$n++
									@endphp
									@endforeach
								</tbody>

								<tfoot>
									<tr>
										<th scope="col" class="text-center"></th>
										<th scope="col" class="text-center"></th>
										<th scope="col" class="text-center">Total General</th>
										<td scope="col" class="text-center">{{ $total.'$' }}</td>
									</tr>


								</tfoot>
							</table>

						</div>


					</div>

					@endisset
				</div>
				<div class="modal-footer">
					<button wire:click.prevent="closeShow" type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>

	<script>
		window.addEventListener('openShow', event => {
			$("#farmaciaShow").modal('show');
		});

		window.addEventListener('closeShow', event => {
			$("#farmaciaShow").modal('hide');
		});
	</script>