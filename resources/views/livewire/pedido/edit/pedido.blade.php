<div class="bootstrap-iso" >

{{-- <div class="row">
		@foreach ($pmedicamentos as $pmedicamento)
		<div class="form-group">
			<div class="col-xs-9">
				<select class="form-control" id="medicamento" name="medicamento[]" disabled>
					<option value="{{ $pmedicamento->medicamento->id}}" selected>
						{{ $pmedicamento->medicamento->monodroga."   -   ".$pmedicamento->medicamento->presentacion }}
					</option>
				</select>
			</div>



			<div class="col-xs-2 form-group-sm">
				<input type="number" class="form-control" id="cantidad" name="cantidad[]" value="{{ $pmedicamento->cantidad }}">
			</div>
		</div>
		@endforeach
</div>
</div> --}}


@isset ($pmedicamentos)
@php $n = 0 @endphp

@foreach ($pmedicamentos as $pmedicamento)

<div class="row">
	<div class="mb-3 col-9">
		<select class="form-select form-select-lg" style="font-size: 14px">
			<option value="" selected>
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
