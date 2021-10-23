<div class="modal fade" id="createEmpleadoForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Añadir</h5>
			</div>
			<div class="modal-body">


				<form>
					{{-- SECCION BASE --}}
					<div class="text-center">
						<h4 class="h4">Informacion Principal</h4>
					</div>
					@include('livewire.empleado.create.normal')
					{{-- FIN SECCION NORMAL --}}

					{{-- SECCION FARMACEUTICO --}}
					<div id="secFarma" style="display: none">
						<div class="text-center">
							<h4 class="h4">Informacion de Titulo</h4>
						</div>
						@include('livewire.empleado.create.farmaceutico')
					</div>
					{{-- FIN SECCION FARMACEUTICO --}}

					{{-- SECCION PASANTE --}}
					<div id="secPasante" style="display: none" class="mb-3">
						<div class="text-center">
							<h4 class="h4">Informacion de Pasantia</h4>
						</div>
						@include('livewire.empleado.create.pasante')
					</div>
					<div id="secResp" style="display: none" class="mb-3">
						<div class="text-center">
							<h4 class="h4">Informacion de Responsable</h4>
						</div>
						@include('livewire.empleado.create.responsable')
					</div>
					{{-- FIN SECCION PASANTE --}}
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

<script>
	$(document).ready(function() {
		$('#cargo').change(function(event) {
			var f = $('#secFarma');
			var p = $('#secPasante');
			var r = $('#secResp');
			var e = $('#edad');
			f.hide();
			p.hide();
			r.hide();

			if($(this).val() == 'farmaceutico') {
				f.show();
			} else if($(this).val() == 'pasante') {
				p.show();
				if(e.val() != '' && e.val() < 18) {
					r.show();
				}
				e.change(function(event) {
					if($(this).val() != '' && $(this).val() < 18) {
						r.show();
					} else {
						r.hide();
					}
				});
			} else {
				f.hide();
				p.hide();
				r.hide();
			}
		});
	});
</script>