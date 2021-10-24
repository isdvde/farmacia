<div class="bootstrap-iso" >
	@foreach ($items as $item)

	<div class="row">
		<div class="mb-3 col-8">
			<select class="form-select form-select-lg" wire:model="medicamento.{{$item}}" style="font-size: 14px">
				<option value="" selected>Medicamento...</option>
				@foreach ($medicamentos as $medicamento)
				<option value="{{ $medicamento->id }}">{{ $medicamento->monodroga."   -   ".$medicamento->presentacion }}</option>
				@endforeach
			</select>
		</div>

		<div class="mb-3 col-3">
			<input type="number" class="form-control" wire:model="cantidad.{{$item}}" style="height: 31.25px; font-size: 14px; padding: 5px 5px;"  placeholder="Cantidad">
		</div>

		<div class="col-1">
			<button  wire:click.prevent="decrement({{$item}})" type="button" class="btn btn-danger" style="height: 31.25px">X</button>
		</div>
	</div>

	@endforeach

	<div class="row">
		<div class="col-1">
			<button  wire:click.prevent="increment({{$i}})" type="button" class="btn btn-primary" style="height: 31.25px">Agregar</button>
		</div>
	</div>
</div>


{{-- 	<div id="clone" class="row">

		<div class="mb-3 col-8">
			<select class="form-select form-select-lg" id="medicamento" wire:model.defer="medicamento[]" style="font-size: 14px">
				<option value="" selected>Medicamento...</option>
				@foreach ($medicamentos as $medicamento)
				<option value="{{ $medicamento->id }}">{{ $medicamento->monodroga."   -   ".$medicamento->presentacion }}</option>
				@endforeach
			</select>
		</div>

		<div class="mb-3 col-3">
			<input type="number" class="form-control" id="cantidad" wire:model.defer="cantidad[]" style="height: 31.25px; font-size: 14px; padding: 5px 5px;">
		</div>

		<div class="col-1">
			<button type="button" class="btn btn-danger" id="delMedicamento" style="height: 31.25px">x</button>
		</div>
	</div> --}}

{{-- 	<div id="cloned"></div>

<button type="button" class="btn btn-primary" id="addMedicamento">Añadir</button> --}}



