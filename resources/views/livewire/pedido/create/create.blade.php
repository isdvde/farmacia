<div class="modal fade" id="pedidoCreateForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">
					{{ $formType == 0  ? 'Añadir' : 'Editar' }}
				</h5>
			</div>
			<div class="modal-body">

				<form>
					{{-- SECCION BASE --}}
					<div class="text-center">
						<h4 class="mb-3 h4">Pedido</h4>
					</div>
					@include('livewire.pedido.create.base')
					{{-- FIN SECCION BASE --}}

					{{-- SECCION PEDIDO --}}
					<div class="text-center">
						<h4 class="mb-3 h4">Medicamentos</h4>
					</div>
					@include('livewire.pedido.create.pedido')
					{{-- FIN SECCION PEDIDO --}}
				</form>

			</div>
			<div class="modal-footer">
				<button wire:click.prevent="closeCreate" type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
				<button wire:click.prevent="store()" type="button" class="btn btn-primary">
					{{ $formType == 0  ? 'Guardar' : 'Actualizar' }}
				</button>
			</div>
		</div>
	</div>
</div>

<script>
	window.addEventListener('openCreateForm', event => {
		$("#pedidoCreateForm").modal('show');
	});

	window.addEventListener('closeCreateForm', event => {
		$("#pedidoCreateForm").modal('hide');
	});
</script>