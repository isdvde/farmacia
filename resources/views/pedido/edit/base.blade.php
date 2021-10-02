{{-- Lista de Farmacias --}}
{{-- <div class="mb-3">
	<label class="form-label col-4" for="farmacia">Farmacia</label>
	<select class="form-select" id="farmacia" name="farmacia">
		<option selected>Elija un farmacia...</option>
		@foreach ($farmacias as $farmacia)
		<option value="{{ $farmacia->id }}">{{ $farmacia->nombre }}</option>
		@endforeach
	</select>
</div> --}}


{{-- <input type="hidden" name="id_farmacia" value="{{ Auth::user()->empleado->id_farmacia }}"> --}}
{{-- <input type="hidden" name="id_empleado" value="{{ Auth::user()->empleado->ci }}"> --}}

@php
$forma_pago = array(
	'contado' => 'Contado',
	'5d' => 'Credito 5 dias',
	'10d' => 'Credito 10 dias',
	'15d' => 'Credito 15 dias',
	'20d' => 'Credito 20 dias',
	'30d' => 'Credito 30 dias',
)
@endphp


{{-- Lista de Farmacias --}}
{{-- <div class="mb-3">
	<label class="form-label col-4" for="farmacia">Farmacia</label>
	<select class="form-select" id="farmacia" name="farmacia">
		<option selected value="{{ $pedido->farmacia->id }}">
			{{ $pedido->farmacia->nombre }}
		</option>
		@foreach ($farmacias as $farmacia)
		<option value="{{ $farmacia->id }}">{{ $farmacia->nombre }}</option>
		@endforeach
	</select>
</div> --}}

{{-- Lista de Laboratorios --}}
{{-- <div class="mb-3">
	<label class="form-label col-4" for="laboratorio">Laboratorio</label>
	<select class="form-select" id="laboratorio" name="laboratorio">
		<option value="{{ $pedido->laboratorio->id }}" selected>
			{{ $pedido->laboratorio->nombre }}
		</option>
		@foreach ($laboratorios as $laboratorio)
		<option value="{{ $laboratorio->id }}">{{ $laboratorio->nombre }}</option>
		@endforeach
	</select>
</div> --}}

{{-- Forma de Pago --}}
<div class="mb-3">
	<label class="form-label col-4" for="forma_pago">Cargo</label>
	<select class="form-select" id="forma_pago" name="forma_pago">
		<option value="{{ $pedido->forma_pago }}" selected>
			{{ $forma_pago[$pedido->forma_pago] }}
		</option>
		@foreach ($forma_pago as $key => $value)
			<option value="{{ $key }}">{{ $value }}</option>
		@endforeach
	</select>
</div>

{{-- VALORES DE PRUEBA --}}
<input type="hidden" name="id_empleado" value="764">
