{{-- Cedula --}}
<div class="mb-3">
	<label class="form-label col-4">CI</label>
	<input type="number" class="form-control col-8" id="ci" wire:model.defer="ci" >
</div>

{{-- Lista de Farmacias --}}
<div class="mb-3">
	<label class="form-label col-4" for="farmacia">Farmacia</label>
	<select class="form-control" id="farmacia" wire:model.defer="farmacia">
		<option selected></option>
		@foreach ($farmacias as $farmacia)
		<option value="{{ $farmacia->id }}">{{ $farmacia->nombre }}</option>
		@endforeach
	</select>
</div>

{{-- Nombre --}}
<div class="mb-3">
	<label class="form-label">Nombre</label>
	<input type="text" class="form-control" id="nombre" wire:model.defer="nombre" >
</div>

{{-- Apellido --}}
<div class="mb-3">
	<label class="form-label">Apellido</label>
	<input type="text" class="form-control" id="apellido" wire:model.defer="apellido" >
</div>

{{-- Edad --}}
<div class="mb-3">
	<label class="form-label">Edad</label>
	<input type="number" class="form-control" id="edad" wire:model.defer="edad" >
</div>

<div class="mb-3">
	<label class="form-label col-4" for="cargo">Cargo</label>
	<select class="form-control" id="cargo" wire:model.defer="cargo">
		<option selected></option>
		@foreach ($cargos as $carg)
			<option value="{{ $carg }}">{{ ucfirst($carg) }}</option>
		@endforeach
	</select>
</div>

{{-- Telefono --}}
<div class="mb-3">
	<label class="form-label">Telefono</label>
	<input type="number" class="form-control" id="telefono" wire:model.defer="telefono" >
</div>