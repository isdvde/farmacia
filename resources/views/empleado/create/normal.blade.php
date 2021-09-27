{{-- Cedula --}}
<div class="mb-3">
	<label class="form-label col-4">CI</label>
	<input type="number" class="form-control col-8" id="ci" name="ci" >
</div>

{{-- Lista de Farmacias --}}
<div class="mb-3">
	<label class="form-label col-4" for="farmacia">Farmacia</label>
	<select class="form-select" id="farmacia" name="farmacia">
		<option selected>Elija un farmacia...</option>
		@foreach ($farmacias as $farmacia)
		<option value="{{ $farmacia->id }}">{{ $farmacia->nombre }}</option>
		@endforeach
	</select>
</div>

{{-- Nombre --}}
<div class="mb-3">
	<label class="form-label">Nombre</label>
	<input type="text" class="form-control" id="nombre" name="nombre" >
</div>

{{-- Apellido --}}
<div class="mb-3">
	<label class="form-label">Apellido</label>
	<input type="text" class="form-control" id="apellido" name="apellido" >
</div>

{{-- Edad --}}
<div class="mb-3">
	<label class="form-label">Edad</label>
	<input type="number" class="form-control" id="edad" name="edad" >
</div>

{{-- Lista de Cargos --}}
<div class="mb-3">
	<label class="form-label col-4" for="cargo">Cargo</label>
	<select class="form-select" id="cargo" name="cargo">
		<option selected>Elija un cargo...</option>
		<option value="pasante">Pasante</option>
		<option value="administrativo">Administrativo</option>
		<option value="farmaceutico">Farmaceutico</option>
		<option value="vigilante">Vigilante</option>
		<option value="analista">Analista</option>
	</select>
</div>

{{-- Telefono --}}
<div class="mb-3">
	<label class="form-label">Telefono</label>
	<input type="number" class="form-control" id="telefono" name="telefono" >
</div>