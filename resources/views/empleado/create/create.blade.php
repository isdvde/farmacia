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
				<form action="{{url('empleado/create')}}" method="POST">
					@csrf

					{{-- SECCION BASE --}}
					<div class="text-center">
						<h4 class="h4">Informacion Principal</h4>
					</div>
					@include('empleado.create.normal')
					{{-- FIN SECCION NORMAL --}}

					{{-- SECCION FARMACEUTICO --}}
					<div id="secFarma" style="display: none">
						<div class="text-center">
							<h4 class="h4">Informacion de Titulo</h4>
						</div>
						@include('empleado.create.farmaceutico')
					</div>
					{{-- FIN SECCION FARMACEUTICO --}}

					{{-- SECCION PASANTE --}}
					<div id="secPasante" style="display: none" class="mb-3">
						<div class="text-center">
							<h4 class="h4">Informacion de Pasantia</h4>
						</div>
						@include('empleado.create.pasante')
					</div>
					<div id="secResp" style="display: none" class="mb-3">
						<div class="text-center">
							<h4 class="h4">Informacion de Responsable</h4>
						</div>
						@include('empleado.create.responsable')
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
		$('#cargo').change(function(event) {
			var f = $('#secFarma');
			var p = $('#secPasante');
			var r = $('#secResp');
			var e = $('#edad');
			f.hide();
			p.hide();
			r.hide();

			if($(this).val() == 'farmaceutico') {
				f.show();
			} else if($(this).val() == 'pasante') {
				p.show();
				if(e.val() != '' && e.val() <= 17) {
					r.show();
				}
				e.change(function(event) {
					if($(this).val() != '' && $(this).val() <= 17) {
						r.show();
					} else {
						r.hide();
					}
				});
			} else {
				f.hide();
				p.hide();
				r.hide();
			}
		});
	});
</script>

@endsection