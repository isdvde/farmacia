<div class="bootstrap-iso" >

@isset ($pmedicamentos)
@php $n = 0 @endphp

@foreach ($pmedicamentos as $pmedicamento)

<div class="row">
	<div class="mb-3 col-1">
		<div class="form-check">
			<input class="form-check-input" type="checkbox" value="1" wire:model="isCompra.{{$n}}">
		</div>
	</div>

	<div class="mb-3 col-8">
		<select class="form-select form-select-lg" style="font-size: 14px" wire:model="medicamento.{{ $n }}">
			<option value="{{ $pmedicamento->id_medicamento }}" selected>
				{{ $pmedicamento->medicamento->monodroga."   -   ".$pmedicamento->medicamento->presentacion }}
			</option>
		</select>
	</div>

	<div class="mb-3 col-3">
		<input type="number" class="form-control" wire:model="cantidad.{{$n}}" style="height: 31.25px; font-size: 14px; padding: 5px 5px;"  placeholder="Cantidad">
	</div>

</div>

@php $n++ @endphp
@endforeach
@endisset


</div>