{{-- Universidad --}}
<div class="mb-3">
	<label class="form-label">Universidad</label>
	<input type="text" class="form-control" id="Universidad" name="universidad" 
	value="{{ $empleado->titulo->universidad ?? '' }}">
</div>

{{-- Fecha --}}
<div class="mb-3">
	<label class="form-label">Fecha</label>
	<input type="date" class="form-control" id="fecha" name="fecha"
	value="{{ $empleado->titulo->fecha ?? '' }}">
</div>

{{-- Numero de Registro  --}}
<div class="mb-3">
	<label class="form-label">Numero de Registro</label>
	<input type="number" class="form-control" id="n_registro" name="n_registro" 
	value="{{ $empleado->titulo->n_registro ?? '' }}">
</div>

{{-- Permiso Sanitario --}}
<div class="mb-3">
	<label class="form-label">Permiso Sanitario</label>
	<input type="number" class="form-control" id="p_sanitario" name="p_sanitario" 
	value="{{ $empleado->titulo->p_sanitario ?? '' }}">
</div>

{{-- Numero Colegiatura --}}
<div class="mb-3">
	<label class="form-label">Numero de Colegiatura</label>
	<input type="number" class="form-control" id="n_colegiatura" name="n_colegiatura" 
	value="{{ $empleado->titulo->n_colegiatura ?? '' }}">
</div>
