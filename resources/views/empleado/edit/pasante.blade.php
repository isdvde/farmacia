{{-- Institucion --}}
<div class="mb-3">
	<label class="form-label">Institucion</label>
	<input type="text" class="form-control" id="institucion" name="institucion" 
	value="{{ $pasantia->institucion ?? '' }}" >
</div>

{{-- Especialidad --}}
<div class="mb-3">
	<label class="form-label">Especialidad</label>
	<input type="text" class="form-control" id="especialidad" name="especialidad" 
	value="{{ $pasantia->especialidad ?? ''}}">
</div>

{{-- Fecha Inicio--}}
<div class="mb-3">
	<label class="form-label">Fecha Inicio</label>
	<input type="date" class="form-control" id="f_inicio" name="f_inicio" 
	value="{{ $pasantia->f_inicio ?? ''}}">
</div>

{{-- Fecha Final--}}
<div class="mb-3">
	<label class="form-label">Fecha Final</label>
	<input type="date" class="form-control" id="f_final" name="f_final" 
	value="{{ $pasantia->f_final ?? ''}}">
</div>

{{-- Numero de Permiso  --}}
<div class="mb-3">
	<label class="form-label">Numero de Permiso</label>
	<input type="number" class="form-control" id="n_permiso" name="n_permiso" 
	value="{{ $pasantia->n_permiso ?? ''}}">
</div>

{{-- Minoria de Edad --}}
<div class="mb-3">
	<div class="form-check">
		<input class="form-check-input" type="checkbox" value="1" name="minoria_edad" id="minoria_edad"
		@isset($pasantia->minoria_edad) 
			@if ($pasantia->minoria_edad == true) checked @endif>
		@endisset
		<label class="form-check-label" for="minoria_edad">Menor de Edad</label>
	</div>
</div>

{{-- Activo --}}
<div class="mb-3">
	<div class="form-check">
		<input class="form-check-input" type="checkbox" value="1" name="activo" id="activo"
		@isset($pasantia->activo)
			@if ($pasantia->activo == true) checked @endif>
		@endisset
		<label class="form-check-label" for="activo">Activo</label>
	</div>
</div>


