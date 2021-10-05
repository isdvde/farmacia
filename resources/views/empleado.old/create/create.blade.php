@extends('layouts.base')
@section('content')

<div class="row justify-content-center">
	<div class="col-4 ">
		<form action="{{url('empleado/create')}}" method="POST">
			@csrf

			{{-- SECCION BASE --}}
			<div class="text-center">
				<h4 class="h4">Empleado</h4>
			</div>
			@include('empleado.create.normal')
			{{-- FIN SECCION NORMAL --}}

			{{-- SECCION FARMACEUTICO --}}
			<div id="secFarma" style="display: none">
				<div class="text-center">
					<h4 class="h4">Titulo</h4>
				</div>
				@include('empleado.create.farmaceutico')
			</div>
			{{-- FIN SECCION FARMACEUTICO --}}

			{{-- SECCION PASANTE --}}
			<div id="secPasante" style="display: none">
				<div class="text-center">
					<h4 class="h4">Pasantia</h4>
				</div>
				@include('empleado.create.pasante')
				<div class="text-center">
					<h4 class="h4">Responsable</h4>
				</div>
				@include('empleado.create.responsable')
			</div>
			{{-- FIN SECCION PASANTE --}}

			<div class="text-center">
				<button type="submit" class="btn btn-primary">Guardar</button>
				<a href="{{url('empleado')}}" class="btn btn-danger">Cancelar</a>
			</div>
		</form>
	</div>
</div>

<script>
	var c = document.getElementById("cargo");
	c.addEventListener("change", function() {
		var f = document.getElementById("secFarma");
		var p = document.getElementById("secPasante");
		f.style.display = "none";
		p.style.display = "none";
		if(c.value == "farmaceutico") {
			f.style.display = "block";
		} else if( c.value == "pasante") {
			p.style.display = "block";
		} else {
			f.style.display = "none";
			p.style.display = "none";
		}
	});
</script>

@endsection