<div class="modal fade" id="editEmpleadoForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Editar</h5>
			</div>
			<div class="modal-body">


				@if ($formType == 1)


				<form>
					{{-- SECCION BASE --}}
					<div class="text-center">
						<h4 class="h4">Empleado</h4>
					</div>
					@include('livewire.empleado.edit.normal')
					{{-- FIN SECCION NORMAL --}}


					{{-- SECCION FARMACEUTICO --}}
					@if($cargo == 'farmaceutico')
					<div>
						<div class="text-center">
							<h4 class="h4">Titulo</h4>
						</div>
						@include('livewire.empleado.edit.farmaceutico')
					</div>
					@endif
					{{-- FIN SECCION FARMACEUTICO --}}

					{{-- SECCION PASANTE --}}
					@if ($cargo == 'pasante')
					<div>
						<div class="text-center">
							<h4 class="h4">Pasantia</h4>
						</div>
						@include('livewire.empleado.edit.pasante')
					</div>


					@isset ($edad)
					@if ($edad < 18)
					<div class="mb-3">
						<div class="text-center">
							<h4 class="h4">Responsable</h4>
						</div>
						@include('livewire.empleado.edit.responsable')
					</div>

					@endif
					@endisset

					@endif
					{{-- FIN SECCION PASANTE --}}

				</form>

				@endif
			</div>
			<div class="modal-footer">
				<button wire:click="closeEdit" type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
				<button wire:click="store" type="button" class="btn btn-primary">
					Actualizar
				</button>

			</div>
		</div>
	</div>
</div>

<script>
	window.addEventListener('openEditForm', event => {
		$("#editEmpleadoForm").modal('show');
	});

	window.addEventListener('closeEditForm', event => {
		$("#editEmpleadoForm").modal('hide');
	});
</script>

