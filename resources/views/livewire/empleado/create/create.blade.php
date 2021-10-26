<div class="modal fade" id="createEmpleadoForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Añadir</h5>
			</div>
			<div class="modal-body">

				@if ($formType == 0)

				<form>
					{{-- SECCION BASE --}}
					<div class="text-center">
						<h4 class="h4">Informacion Principal</h4>
					</div>
					@include('livewire.empleado.create.normal')
					{{-- FIN SECCION NORMAL --}}

					{{-- SECCION FARMACEUTICO --}}




					@if($cargo == 'farmaceutico')
					<div>
						<div class="text-center">
							<h4 class="h4">Informacion de Titulo</h4>
						</div>
						@include('livewire.empleado.create.farmaceutico')
					</div>
					@endif
					{{-- FIN SECCION FARMACEUTICO --}}

					{{-- SECCION PASANTE --}}
					@if($cargo == 'pasante')
					<div>
						<div class="text-center">
							<h4 class="h4">Informacion de Pasantia</h4>
						</div>
						@include('livewire.empleado.create.pasante')
					</div>

					@isset ($edad)
					@if($edad < 18)
					<div>
						<div class="text-center">
							<h4 class="h4">Informacion de Responsable</h4>
						</div>
						@include('livewire.empleado.create.responsable')
					</div>
					@endif
					@endisset

					@endif
					{{-- FIN SECCION PASANTE --}}
					@endif
				</form>

			</div>
			<div class="modal-footer">
				<button wire:click.prevent="closeCreate" type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
				<button wire:click.prevent="store()" type="button" class="btn btn-primary">
					Guardar
				</button>
			</div>
		</div>
	</div>
</div>

<script>
	window.addEventListener('openCreateForm', event => {
		$("#createEmpleadoForm").modal('show');
	});

	window.addEventListener('closeCreateForm', event => {
		$("#createEmpleadoForm").modal('hide');
	});
</script>
