{{-- Lista de Farmacias --}}
{{-- <div class="mb-3">
	<label class="form-label col-4" for="farmacia">Farmacia</label>
	<select class="form-control" id="farmacia" wire:model.refer="farmacia">
		<option value="" selected></option>
		@foreach ($farmacias as $farma)
		<option value="{{ $farma->id }}">{{ $farma->nombre }}</option>
		@endforeach
	</select>
</div> --}}

{{-- Lista de Laboratorios --}}
<div class="mb-3">
	<label class="form-label col-4" for="laboratorio">Laboratorio</label>
	<select class="form-control" id="laboratorio" wire:model.refer="laboratorio">
		<option value="" selected></option>
		@foreach ($laboratorios as $lab)
		<option value="{{ $lab->id }}">{{ $lab->nombre }}</option>
		@endforeach
	</select>
</div>

{{-- Forma de Pago --}}
<div class="mb-3">
	<label class="form-label col-4" for="forma_pago">Forma de Pago</label>
	<select class="form-control" id="forma_pago" wire:model.refer="forma_pago">
		<option value="" selected></option>
		@foreach ($fpago as $key => $value)
			<option value="{{ $key }}">{{ $value }}</option>
		@endforeach
	</select>
</div>

{{-- VALORES DE PRUEBA --}}
{{-- <input type="hidden" wire:model.refer="empleado" value="8"> --}}
