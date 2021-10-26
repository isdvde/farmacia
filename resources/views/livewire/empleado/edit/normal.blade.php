{{-- Lista de Farmacias --}}
<div class="mb-3">
	<label class="form-label col-4" for="farmacia">Farmacia</label>
	<select class="form-control" wire:model.defer="farmacia">
		<option selected value="{{ $farmacia ?? '' }}">
			{{ App\Models\Farmacia::find($farmacia)->nombre ?? '' }}
		</option>
		@foreach ($farmacias as $f2)
		<option value="{{ $f2->id }}">{{ $f2->nombre }}</option>
		@endforeach
	</select>
</div>

{{-- Nombre --}}
<div class="mb-3">
	<label class="form-label">Nombre</label>
	<input type="text" class="form-control" wire:model.defer="nombre">
</div>

{{-- Apellido --}}
<div class="mb-3">
	<label class="form-label">Apellido</label>
	<input type="text" class="form-control" wire:model.defer="apellido">
</div>

{{-- Edad --}}
<div class="mb-3">
	<label class="form-label">Edad</label>
	<input type="number" class="form-control" wire:model="edad">
</div>

{{-- Lista de Cargos --}}
<div class="mb-3">
	<label class="form-label col-4" for="cargo">Cargo</label>
	<select class="form-control" wire:model="cargo">
		<option value="{{ $cargo }}" selected>
			{{ ucfirst($cargo) }}
		</option>
		@foreach ($cargos as $c2)
		<option value="{{ $c2 }}">{{ ucfirst($c2) }}</option>
		@endforeach
	</select>
</div>

{{-- Telefono --}}
<div class="mb-3">
	<label class="form-label">Telefono</label>
	<input type="text" class="form-control" wire:model.defer="telefono">
</div>