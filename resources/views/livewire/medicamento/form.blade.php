<div class="modal fade" id="medicamentoForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">
					{{ $formType == 0  ? 'Añadir' : 'Editar' }}
				</h5>
			</div>
			<div class="modal-body">


				<form>

					<div class="text-center">
						<h4 class="h4">Informacion Principal</h4>
					</div>

					<div class="mb-3">
						<label for="" class="form-label">Monodroga</label>
						<input id="monodroga" wire:model="monodroga" type="text" class="form-control">
						<span class="text-danger">
						    @error('monodroga') {{ $message }}   @enderror
						</span>
					</div>

					<div class="mb-3">
						<label for="" class="form-label">Presentacion</label>
						<input id="presentacion" wire:model="presentacion" type="text" class="form-control">
						<span class="text-danger">
						    @error('presentacion') {{ $message }}   @enderror
						</span>
					</div>

					<div class="mb-3">
						<label for="" class="form-label">Accion</label>
						<input id="accion" wire:model="accion" type="text" class="form-control">
						<span class="text-danger">
						    @error('accion') {{ $message }}   @enderror
						</span>
					</div>

					<div class="mb-3">
						<label for="" class="form-label">Precio</label>
						<input id="precio" wire:model="precio" type="number" class="form-control">
						<span class="text-danger">
						    @error('precio') {{ $message }}   @enderror
						</span>
					</div>

				</form>

			</div>
			<div class="modal-footer">
				<button wire:click.prevent="closeForm" type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
				<button wire:click.prevent="store()" type="button" class="btn btn-primary">
					{{ $formType == 0  ? 'Guardar' : 'Actualizar' }}
				</button>
			</div>
		</div>
	</div>
</div>

<script>
	window.addEventListener('openForm', event => {
		$("#medicamentoForm").modal('show');
	});

	window.addEventListener('closeForm', event => {
		$("#medicamentoForm").modal('hide');
	});
</script>