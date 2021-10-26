<div>
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Inventario</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">

				<div class="panel-body">
					<table class="table" id="tinventario">
						<thead>
							<tr>
								<th scope="col" class="text-center">Farmacia</th>
								<th scope="col" class="text-center">Medicamento</th>
								<th scope="col" class="text-center">Cantidad</th>
							</tr>
						</thead>

						<tbody>
							@foreach ( $inventarios as $inventario )

							<tr>
								<td class="text-center">{{$inventario->farmacia->nombre}}</td>
								<td class="text-center">{{$inventario->medicamento->monodroga}}</td>
								<td class="text-center">{{$inventario->cantidad}}</td>

							</tr>

							@endforeach
						</tbody>
					</table>


					<div class="col-2 text-center">
						<div class="bootstrap-iso">
							<div class="col-2 text-right">
								{{ $inventarios->links() }}
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>
</div>
