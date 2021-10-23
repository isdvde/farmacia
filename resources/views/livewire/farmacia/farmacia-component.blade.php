<div>
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Farmacias</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">

				<div class="panel-body">
					<table class="table" id="tfarmacia">
						<thead >
							<tr>
								<th scope="col" class="text-center">Nombre</th>
								<th scope="col" class="text-center">Ubicacion</th>
								<th scope="col" class="text-center"></th>
							</tr>
						</thead>

						<tbody>
							@foreach ( $farmacias as $farmacia )

							<tr>
								<td class="text-center">{{$farmacia->nombre}}</td>
								<td class="text-center">{{$farmacia->ubicacion}}</td>

								<td class="col-1 text-center">

									<button wire:click.prevent="openForm({{ 1 }}, {{ $farmacia}})" class="btn btn-info" >Editar</button>
									<button wire:click.prevent="delete({{ $farmacia->id }})" class="btn btn-danger" >Eliminar</button>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>

					<div class="col-2 text-center">
						<button wire:click.prevent="openForm({{0}})" class="btn btn-primary">Añadir</button>

						<div class="bootstrap-iso">
							<div class="col-2 text-right">
								{{ $farmacias->links() }}
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		@include('livewire.farmacia.create')
	</div>
