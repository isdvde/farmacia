<div>
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Laboratorios</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				{{-- <div class="panel-heading">
					Empleados
				</div> --}}
				<div class="panel-body">

					<table class="table" id="tlaboratorio">
						<thead >
							<tr>
								<th scope="col" class="text-center">Nombre</th>
								<th scope="col" class="text-center">Direccion</th>
								<th scope="col" class="text-center">Telefono</th>
								<th scope="col" class="text-center"></th>
							</tr>
						</thead>

						<tbody>
							@foreach ( $laboratorios as $laboratorio )

							<tr>
								<td class="text-center">{{$laboratorio->nombre}}</td>
								<td class="text-center">{{$laboratorio->direccion}}</td>
								<td class="text-center">{{$laboratorio->telefono}}</td>

								@can('laboratorio.edit')
								<td class="col-1 text-center">
									<button wire:click.prevent="openForm({{ 1 }}, {{ $laboratorio}})" class="btn btn-info" >Editar</button>
									<button wire:click.prevent="delete({{ $laboratorio->id }})" class="btn btn-danger" >Eliminar</button>
								</td>
								@endcan
							</tr>

							@endforeach
						</tbody>
					</table>

					<div class="col-2 text-center">
						@can('laboratorio.create')
						<button wire:click.prevent="openForm({{0}})" class="btn btn-primary">Añadir</button>
						@endcan

						<div class="bootstrap-iso">
							<div class="col-2 text-right">
								{{ $laboratorios->links() }}
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>

	@include('livewire.laboratorio.create')

</div>
