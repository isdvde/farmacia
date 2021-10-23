<div>
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Empleados</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<table class="table" id="templeado">
						<thead>
							<tr>
								<th scope="col" class="text-center">CI</th>
								<th scope="col" class="text-center">Farmacia</th>
								<th scope="col" class="text-center">Nombre</th>
								<th scope="col" class="text-center">Apellido</th>
								<th scope="col" class="text-center">Edad</th>
								<th scope="col" class="text-center">Cargo</th>
								<th scope="col" class="text-center">Telefono</th>
								<th scope="col" class="text-center"></th>
							</tr>
						</thead>
						<tbody>
							@foreach($empleados as $empleado)
							<tr>
								<td class="text-center">{{$empleado->ci}}</td>
								<td class="text-center">{{$empleado->farmacia->nombre}}</td>
								<td class="text-center">{{$empleado->nombre}}</td>
								<td class="text-center">{{$empleado->apellido}}</td>
								<td class="text-center">{{$empleado->edad}}</td>
								<td class="text-center">{{ucfirst($empleado->cargo)}}</td>
								<td class="text-center">{{$empleado->telefono}}</td>

								<td class="col-1">
									<button wire:click.prevent="edit({{$empleado}})" class="btn btn-info">Editar</button>
									<button wire:click.prevent="delete({{$empleado->ci}})" class="btn btn-danger">Eliminar</button>
								</td>
							</tr>
							@endforeach

						</tbody>
					</table>

					<div class="col-2 text-center">
						<button wire:click.prevent="create" class="btn btn-primary">Añadir</button>

						<div class="bootstrap-iso">
							<div class="col-2 text-right">
								{{ $empleados->links() }}
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	@include('livewire.empleado.create.create')
	@include('livewire.empleado.edit.edit')

</div>
