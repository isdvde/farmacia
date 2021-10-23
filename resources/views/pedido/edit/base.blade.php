
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

{{-- Forma de Pago --}}
<div class="mb-3">
	<label class="form-label col-4" for="forma_pago">Forma de pago</label>
	<select class="form-control" id="forma_pago" name="forma_pago">
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
