{{-- CI Responsable --}}
<div class="mb-3">
	<label class="form-label">CI</label>
	<input type="number" class="form-control" id="ci_r" name="ci_r" 
	value="{{ $empleado->responsable->ci_representante ?? '' }}">
</div>

{{-- Nombre empleado->Responsable --}}
<div class="mb-3">
	<label class="form-label">Nombre</label>
	<input type="text" class="form-control" id="nombre_r" name="nombre_r" 
	value="{{ $empleado->responsable->nombre ?? ''}}">
</div>

{{-- Apellido empleado->Responsable--}}
<div class="mb-3">
	<label class="form-label">Apellido</label>
	<input type="text" class="form-control" id="apellido_r" name="apellido_r" 
	value="{{ $empleado->responsable->apellido ?? ''}}">
</div>

{{-- Telefono empleado->Responsable  --}}
<div class="mb-3">
	<label class="form-label">Telefono</label>
	<input type="number" class="form-control" id="telefono_r" name="telefono_r" 
	value="{{ $empleado->responsable->telefono ?? ''}}">
</div>

