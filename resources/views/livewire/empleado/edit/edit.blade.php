<div class="modal fade" id="editEmpleadoForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Editar</h5>
			</div>
			<div class="modal-body">


				<form>
					{{-- SECCION BASE --}}
					<div class="text-center">
						<h4 class="h4">Empleado</h4>
					</div>
					@include('livewire.empleado.edit.normal')
					{{-- FIN SECCION NORMAL --}}

					{{-- SECCION FARMACEUTICO --}}
					<div id="secEFarma" @if($cargo == 'farmaceutico')style="display: block" @else style="display: none" @endif>
						<div class="text-center">
							<h4 class="h4">Titulo</h4>
						</div>
						@include('livewire.empleado.edit.farmaceutico')
					</div>
					{{-- FIN SECCION FARMACEUTICO --}}

					{{-- SECCION PASANTE --}}
					<div id="secEPasante" @if($cargo == 'pasante')style="display: block" @else style="display: none" @endif>
						<div class="text-center">
							<h4 class="h4">Pasantia</h4>
						</div>
						@include('livewire.empleado.edit.pasante')
					</div>
					<div id="secEResp" @if($cargo == 'pasante' && $edad < 18)style="display: block" @else style="display: none" @endif>
						<div class="text-center">
							<h4 class="h4">Responsable</h4>
						</div>
						@include('livewire.empleado.edit.responsable')
					</div>
					{{-- FIN SECCION PASANTE --}}

				</form>
			</div>
			<div class="modal-footer">
				<button wire:click.prevent="closeEdit" type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
				<button wire:click.prevent="store()" type="button" class="btn btn-primary">
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

<script>
	$(document).ready(function() {
		$('#cargoE').change(function(event) {
			var f = $('#secEFarma');
			var p = $('#secEPasante');
			var r = $('#secEResp');
			var e = $('#edadE');
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


{{-- <script>
	$(document).ready(function() {
		$("#cargo").change(function(event) {
			$("#secFarma").hide();
			$("#secPasante").hide();

			if ($(this).val() == "farmaceutico") {
				$("#secFarma").show();
			} else if ($(this).val() == "pasante") {
				$("#secPasante").show();
			} else {
				$("#secFarma").hide();
				$("#secPasante").hide();
			}
		});	
	});
</script> --}}

