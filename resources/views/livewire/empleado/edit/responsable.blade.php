{{-- CI Responsable --}}
<div class="mb-3">
	<label class="form-label">CI</label>
	<input type="number" class="form-control" id="ci_r" wire:model.defer="ci_r" 
	value="{{ $ci_representante ?? '' }}">
</div>

{{-- Nombre empleado->Responsable --}}<div class="mb-3">
	<label class="form-label">Nombre</label>
	<input type="text" class="form-control" id="nombre_r" wire:model.defer="nombre_r" 
	value="{{ $nombre ?? ''}}">
</div>

{{-- Apellido empleado->Responsable--}}
<div class="mb-3">
	<label class="form-label">Apellido</label>
	<input type="text" class="form-control" id="apellido_r" wire:model.defer="apellido_r" 
	value="{{ $apellido ?? ''}}">
</div>

{{-- Telefono empleado->Responsable  --}}
<div class="mb-3">
	<label class="form-label">Telefono</label>
	<input type="number" class="form-control" id="telefono_r" wire:model.defer="telefono_r" 
	value="{{ $telefono ?? ''}}">
</div>

