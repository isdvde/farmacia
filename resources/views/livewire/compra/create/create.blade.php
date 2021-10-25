<div class="modal fade" id="compraForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">
					Compra
				</h5>
			</div>
			<div class="modal-body">

				<form>
					
					<div class="mb-3">
						<label for="" class="form-label">Vencimiento</label>
						<input wire:model.defer="vencimiento" type="date" class="form-control">
					</div>

					<div class="mb-3">
						<div class="checkbox">
							<label class="form-label" for="activo"><input type="checkbox" value="1" wire:model.defer="cancelado">Cancelado</label>
						</div>
					</div>


					{{-- SECCION BASE --}}
					<div class="text-center">
						<h4 class="mb-3 h4">Pedido</h4>
					</div>
					@include('livewire.compra.create.base')
					{{-- FIN SECCION BASE --}}

					{{-- SECCION PEDIDO --}}
					<div class="text-center">
						<h4 class="mb-3 h4">Medicamentos</h4>
					</div>
					@include('livewire.compra.create.compra')
					{{-- FIN SECCION PEDIDO --}}

				</form>
			</div>
			<div class="modal-footer">
				<button wire:click.prevent="closeCreate" type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
				<button wire:click.prevent="store" type="button" class="btn btn-primary">
					Guardar
				</button>
			</div>
		</div>
	</div>
</div>

<script>
	window.addEventListener('openCompraForm', event => {
		$("#compraForm").modal('show');
	});

	window.addEventListener('closeCompraForm', event => {
		$("#compraForm").modal('hide');
	});
</script>

