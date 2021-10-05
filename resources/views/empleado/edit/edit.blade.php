@extends('layouts.main')
@section('content')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Empleados</h1>
	</div>
</div><!--/.row-->

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			{{-- <div class="panel-heading">
				Empleados
			</div> --}}
			<div class="panel-body">
				<form action="{{url('empleado/'.$empleado->ci.'/edit')}}" method="POST">
					@csrf

					{{-- SECCION BASE --}}
					<div class="text-center">
						<h4 class="h4">Empleado</h4>
					</div>
					@include('empleado.edit.normal')
					{{-- FIN SECCION NORMAL --}}

					{{-- SECCION FARMACEUTICO --}}
					<div id="secFarma" 
					@if($empleado->cargo == 'farmaceutico')style="display: block" @else style="display: none" @endif>
					<div class="text-center">
						<h4 class="h4">Titulo</h4>
					</div>
					@include('empleado.edit.farmaceutico')
				</div>
				{{-- FIN SECCION FARMACEUTICO --}}

				{{-- SECCION PASANTE --}}
				<div id="secPasante" 
				@if($empleado->cargo == 'pasante')style="display: block" @else style="display: none" @endif>
				<div class="text-center">
					<h4 class="h4">Pasantia</h4>
				</div>
				@include('empleado.edit.pasante')
				<div class="text-center">
					<h4 class="h4">Responsable</h4>
				</div>
				@include('empleado.edit.responsable')
			</div>
			{{-- FIN SECCION PASANTE --}}

			<div class="text-center" style="margin-top: 10px;">
				<button type="submit" class="btn btn-primary">Guardar</button>
				<a href="{{url('empleado')}}" class="btn btn-danger">Cancelar</a>
			</div>
		</form>
	</div>
</div>
</div>
</div>

<script>
		$(document).ready(function() {
			$("#cargo").change(function(event) {
				$("#secFarma").hide();
				$("#secPasante").hide();

				if ($(this).val() == "farmaceutico") {
					$("#secFarma").show();
				} else if ($(this).val() == "pasante") {
					$("#secPasante").show();
				} else {
					$("#secFarma").hide();
					$("#secPasante").hide();
				}
			});	
		});
	</script>
@endsection