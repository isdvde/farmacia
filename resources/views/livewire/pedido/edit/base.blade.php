<div class="mb-3">
	<label class="form-label col-4" for="forma_pago">Forma de pago</label>
	<select class="form-control" wire:model.defer="forma_pago">
		<option value="{{ $forma_pago }}" selected>
			{{ $fpago[$forma_pago] ?? '' }}
		</option>
		@foreach ($fpago as $key => $value)
			<option value="{{ $key }}">{{ $value }}</option>
		@endforeach
	</select>
</div>
