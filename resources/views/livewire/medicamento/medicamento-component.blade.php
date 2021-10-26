<div>
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Medicamentos</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">

				<div class="panel-body">
					<table class="table" id="tmedicamento">
						<thead>
							<tr>
								<th scope="col" class="text-center">Monodroga</th>
								<th scope="col" class="text-center">Presentacion </th>
								<th scope="col" class="text-center">Accion</th>
								<th scope="col" class="text-center">Precio</th>
								<th scope="col" class="text-center"></th>
							</tr>
						</thead>

						<tbody>
							@foreach ( $medicamentos as $medicamento )

							<tr>
								<td class="text-center">{{$medicamento->monodroga}}</td>
								<td class="text-center">{{$medicamento->presentacion}}</td>
								<td class="text-center">{{$medicamento->accion}}</td>
								<td class="text-center">{{$medicamento->precio}}</td>

								@can('medicamento.edit')
								<td class="col-1 text-center">
									<button wire:click.prevent="openForm({{ 1 }}, {{ $medicamento}})" class="btn btn-info" >Editar</button>
									<button wire:click.prevent="delete({{ $medicamento->id }})" class="btn btn-danger" >Eliminar</button>
								</td>
								@endcan
							</tr>

							@endforeach
						</tbody>
					</table>
					<div class="col-2 text-center">
						@can('medicamento.create')
						<button wire:click.prevent="openForm({{0}})" class="btn btn-primary">Añadir</button>
						@endcan

						<div class="bootstrap-iso">
							<div class="col-2 text-right">
								{{ $medicamentos->links() }}
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	@include('livewire.medicamento.form')
</div>
