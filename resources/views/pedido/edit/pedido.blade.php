<div id="cloned">
	@foreach ($pmedicamentos as $pmedicamento)
		<div id="clone" class="row">
			{{-- Lista de Medicamentos --}}
			<div class="mb-3 col-8">
				<select class="form-select" id="medicamento" name="medicamento[]" disabled>
					<option value="{{ $pmedicamento->medicamento->id}}" selected>
						{{ $pmedicamento->medicamento->monodroga."   -   ".$pmedicamento->medicamento->presentacion }}
					</option>
					@foreach ($medicamentos as $medicamento)
					<option value="{{ $medicamento->id }}">{{ $medicamento->monodroga."   -   ".$medicamento->presentacion }}</option>
					@endforeach
				</select>
			</div>
			{{-- Cantidad de Medicamento --}}
			<div class="mb-3 col-3">
				<input type="number" class="form-control" id="cantidad" name="cantidad[]" value="{{ $pmedicamento->cantidad }}">
			</div>
		</div>
	@endforeach

</div>


<script>
	$(document).ready(function() {
		
		$("#addMedicamento").click(function(event) {
			//$('#clone').clone().appendTo('#cloned');
			$('#cloned').append('<div id="clone" class="row"> <div class="mb-3 col-8"> <select class="form-select" id="medicamento" name="medicamento[]"> <option value="" selected>Medicamento...</option> @foreach ($medicamentos as $medicamento) <option value="{{ $medicamento->id }}"> {{ $medicamento->monodroga."   -   ".$medicamento->presentacion }} </option> @endforeach </select> </div><div class="mb-3 col-3"> <input type="number" class="form-control" id="cantidad" name="cantidad[]" placeholder="Cant..."> </div> </div>'
			);
		});
	});
</script>
