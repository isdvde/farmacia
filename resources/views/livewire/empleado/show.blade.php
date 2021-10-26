<div class="modal fade" id="showForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Empleado</h5>
			</div>
			<div class="modal-body">

				@isset ($empleado)
				    
				<table class="table">
					<thead>
						<tr>
							<th scope="col" class="text-center">CI</th>
							<th scope="col" class="text-center">Farmacia</th>
							<th scope="col" class="text-center">Nombre</th>
							<th scope="col" class="text-center">Apellido</th>
							<th scope="col" class="text-center">Edad</th>
							<th scope="col" class="text-center">Cargo</th>
							<th scope="col" class="text-center">Telefono</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-center">{{$empleado->ci}}</td>
							<td class="text-center">{{$empleado->farmacia->nombre}}</td>
							<td class="text-center">{{$empleado->nombre}}</td>
							<td class="text-center">{{$empleado->apellido}}</td>
							<td class="text-center">{{$empleado->edad}}</td>
							<td class="text-center">{{ucfirst($empleado->cargo)}}</td>
							<td class="text-center">{{$empleado->telefono}}</td>
						</tr>
					</tbody>
				</table>

				@if ($empleado->cargo == 'pasante' && isset($empleado->pasantia))

				<h5 class="h5">Pasantia</h5>

				<table class="table">
					<thead>
						<tr>
							<th scope="col" class="text-center">Institucion</th>
							<th scope="col" class="text-center">Especialidad</th>
							<th scope="col" class="text-center">Fecha Inicio</th>
							<th scope="col" class="text-center">Fecha Culminacion</th>
							<th scope="col" class="text-center">Numero Permiso</th>
							<th scope="col" class="text-center">Menor Edad</th>
							<th scope="col" class="text-center">Activo</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-center">{{$empleado->pasantia->institucion}}</td>
							<td class="text-center">{{$empleado->pasantia->especialidad}}</td>
							<td class="text-center">{{$empleado->pasantia->f_inicio}}</td>
							<td class="text-center">{{$empleado->pasantia->f_final}}</td>
							<td class="text-center">{{$empleado->pasantia->n_permiso}}</td>
							<td class="text-center">
								{{$empleado->pasantia->minoria_edad == 0 ? 'No':'Si'}}
							</td>
							<td class="text-center">
								{{$empleado->pasantia->activo == 0 ? 'No':'Si'}}
								
							</td>
						</tr>
					</tbody>
				</table>


					@if ($empleado->edad < 18 && isset($empleado->responsable))

					<h5 class="h5">Responsable</h5>

					<table class="table">
						<thead>
							<tr>
								<th scope="col" class="text-center">CI</th>
								<th scope="col" class="text-center">Nombre</th>
								<th scope="col" class="text-center">Apellido</th>
								<th scope="col" class="text-center">Telefono</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center">{{$empleado->responsable->ci_representante}}</td>
								<td class="text-center">{{$empleado->responsable->nombre}}</td>
								<td class="text-center">{{$empleado->responsable->apellido}}</td>
								<td class="text-center">{{$empleado->responsable->telefono}}</td>
							</tr>
						</tbody>
					</table>
					@endif


				@endif


				@if ($empleado->cargo == 'farmaceutico' && isset($empleado->titulo))

				<h5 class="h5">Titulo</h5>

				<table class="table">
					<thead>
						<tr>
							<th scope="col" class="text-center">Universidad</th>
							<th scope="col" class="text-center">Fecha</th>
							<th scope="col" class="text-center">Numero Permiso</th>
							<th scope="col" class="text-center">Permiso Sanitario</th>
							<th scope="col" class="text-center">Numero Colegiatura</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-center">{{$empleado->titulo->universidad}}</td>
							<td class="text-center">{{$empleado->titulo->fecha}}</td>
							<td class="text-center">{{$empleado->titulo->n_registro}}</td>
							<td class="text-center">{{$empleado->titulo->p_sanitario}}</td>
							<td class="text-center">{{$empleado->titulo->n_colegiatura}}</td>
						</tr>
					</tbody>
				</table>
				@endif

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
		$("#showForm").modal('show');
	});

	window.addEventListener('closeShow', event => {
		$("#showForm").modal('hide');
	});
</script>