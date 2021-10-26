<div class="modal fade" id="farmaciaForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">
					{{ $formType == 0  ? 'Añadir' : 'Editar' }}
				</h5>
			</div>
			<div class="modal-body">

				<form>
					@csrf

					<div class="mb-3">
						<label for="" class="form-label">Nombre</label>
						<input id="nombre" wire:model="nombre" type="text" class="form-control">
						<span class="text-danger">
						    @error('nombre') {{ $message }}   @enderror
						</span>
					</div>

					<div class="mb-3">
						<label for="" class="form-label">Ubicacion</label>
						<input id="ubicacion" wire:model="ubicacion" type="text" class="form-control">
						<span class="text-danger">
						    @error('ubicacion') {{ $message }}   @enderror
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
		$("#farmaciaForm").modal('show');
	});

	window.addEventListener('closeForm', event => {
		$("#farmaciaForm").modal('hide');
	});
</script>