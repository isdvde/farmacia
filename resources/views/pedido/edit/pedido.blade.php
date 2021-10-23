<div class="row">
	<div id="cloned">
		@foreach ($pmedicamentos as $pmedicamento)
		<div class="form-group">


			<input type="checkbox" value="1" name="checkMedicamento[]">

			<div class="col-xs-9" {{-- style="padding-left: 0; padding-right:0; " --}}>
				<select class="form-control" id="medicamento" name="medicamento[]" disabled>
					<option value="{{ $pmedicamento->medicamento->id}}" selected>
						{{ $pmedicamento->medicamento->monodroga."   -   ".$pmedicamento->medicamento->presentacion }}
					</option>
				</select>
			</div>



			<div class="col-xs-2 form-group-sm" {{-- style="padding-right: 0;" --}}>
				<input type="number" class="form-control" id="cantidad" name="cantidad[]" value="{{ $pmedicamento->cantidad }}">
			</div>
		</div>
		@endforeach
	</div>
</div>

