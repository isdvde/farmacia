{{-- <div id="clone" style="margin-bottom: 10px;">
	<div class="form-group">
		<div class="col-xs-8">
			<select class="form-control" id="medicamento" name="medicamento[]">
				<option value="" selected>Medicamento...</option>
				@foreach ($medicamentos as $medicamento)
				<option value="{{ $medicamento->id }}">{{ $medicamento->monodroga."   -   ".$medicamento->presentacion }}</option>
				@endforeach
			</select>
		</div>
		<div class="col-xs-3 form-group-sm">
			<input type="number" class="form-control" id="cantidad" name="cantidad[]" placeholder="Cant...">
		</div>
		<div class="col-xs-1">
			<button type="button" class="btn btn-danger" id="delMedicamento" style="display: block;">x</button>
		</div>
	</div>
</div> --}}


<div id="cloned"></div>

<button type="button" class="btn btn-primary" id="addMedicamento" style="margin-top: 10px;">Añadir</button>


<script>
	$(document).ready(function() {
		
		/*$("#addMedicamento").click(function(event) {
			$('#clone').clone().appendTo('#cloned');
		});*/

		$("#addMedicamento").click(function(event) {
			//$('#clone').clone().appendTo('#cloned');
			/*$('#cloned').append('<div id="clone" class="row"> <div class="mb-3 col-8"> <select class="form-select" id="medicamento" name="medicamento[]"> <option value="" selected>Medicamento...</option> @foreach ($medicamentos as $medicamento) <option value="{{ $medicamento->id }}"> {{ $medicamento->monodroga."   -   ".$medicamento->presentacion }} </option> @endforeach </select> </div><div class="mb-3 col-3"> <input type="number" class="form-control" id="cantidad" name="cantidad[]" placeholder="Cant..."> </div> <div class="col-1"> <button type="button" class="btn btn-danger" id="delMedicamento">x</button> </div> </div>'

			);*/

			$('#cloned').append('<div id="clone"> <div class="form-group"  style="margin-bottom: 10px;"> <div class="col-xs-8"> <select class="form-control" id="medicamento" name="medicamento[]"> <option value="" selected>Medicamento...</option> @foreach ($medicamentos as $medicamento) <option value="{{ $medicamento->id }}">{{ $medicamento->monodroga."   -   ".$medicamento->presentacion }}</option> @endforeach </select> </div> <div class="col-xs-3 form-group-sm"> <input type="number" class="form-control" id="cantidad" name="cantidad[]" placeholder="Cant..."> </div> <div class="col-xs-1"> <button type="button" class="btn btn-danger" id="delMedicamento" style="display: block;">x</button> </div> </div> </div>'
			);
		});


		$("#cloned").on('click','#delMedicamento',function(event) {
			$(this).closest('#clone').remove();
			event.preventDefault();
		});
	});
</script>
