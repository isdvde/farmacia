{{-- Lista de Farmacias --}}
<div class="mb-3">
	<label class="form-label col-4" for="farmacia">Farmacia</label>
	<select class="form-control" id="farmacia" wire:model.defer="farmacia">
		<option selected value="{{ $farmacia ?? '' }}">
			{{ App\Models\Farmacia::find($farmacia)->nombre ?? '' }}
		</option>
		@foreach ($farmacias as $farma)
		<option value="{{ $farma->id }}">{{ $farma->nombre }}</option>
		@endforeach
	</select>
</div>

{{-- Nombre --}}
<div class="mb-3">
	<label class="form-label">Nombre</label>
	<input type="text" class="form-control" id="nombre" wire:model.defer="nombre" 
	value="{{ $nombre }}">
</div>

{{-- Apellido --}}
<div class="mb-3">
	<label class="form-label">Apellido</label>
	<input type="text" class="form-control" id="apellido" wire:model.defer="apellido" 
	value="{{ $apellido }}">
</div>

{{-- Edad --}}
<div class="mb-3">
	<label class="form-label">Edad</label>
	<input type="number" class="form-control" id="edadE" wire:model.defer="edad" 
	value="{{ $edad }}">
</div>

{{-- Lista de Cargos --}}
<div class="mb-3">
	<label class="form-label col-4" for="cargo">Cargo</label>
	<select class="form-control" id="cargoE" wire:model.defer="cargo">
		<option value="{{ $cargo }}" selected>
			{{ ucfirst($cargo) }}
		</option>
		@foreach ($cargos as $carg)
		<option value="{{ $carg }}">{{ ucfirst($carg) }}</option>
		@endforeach
	</select>
</div>

{{-- Telefono --}}
<div class="mb-3">
	<label class="form-label">Telefono</label>
	<input type="text" class="form-control" id="telefono" wire:model.defer="telefono">
</div>