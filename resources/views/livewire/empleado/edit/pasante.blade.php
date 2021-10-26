<div class="mb-3">
	<label class="form-label">Institucion</label>
	<input type="text" class="form-control" wire:model.defer="institucion">
</div>
<div class="mb-3">
	<label class="form-label">Especialidad</label>
	<input type="text" class="form-control" wire:model.defer="especialidad">
</div>

<div class="mb-3">
	<label class="form-label">Fecha Inicio</label>
	<input type="date" class="form-control" wire:model.defer="f_inicio">
</div>

<div class="mb-3">
	<label class="form-label">Fecha Final</label>
	<input type="date" class="form-control" wire:model.defer="f_final">
</div>

<div class="mb-3">
	<label class="form-label">Numero de Permiso</label>
	<input type="number" class="form-control" wire:model.defer="n_permiso">
</div>


<div class="mb-3">
	<div class="checkbox">
		<label class="form-label" for="activo">
			<input class="form-check-input" type="checkbox" value="1" wire:model.defer="activo" @isset($activo) @if ($activo == 1) checked @endif @endisset> 
			Activo
		</label>
	</div>
</div>


