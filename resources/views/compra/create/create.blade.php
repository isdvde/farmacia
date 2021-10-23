@extends('layouts.main')
@section('content')


<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">compra</h1>
	</div>
</div><!--/.row-->

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			{{-- <div class="panel-heading">
				Empleados
			</div> --}}
			<div class="panel-body">
			

				<form action="{{url('compra/create')}}" method="POST">
					@csrf

					
					<input type="hidden" name="id_pedido" value="{{$pedido->id}}">

					<div class="mb-3">
						<label for="" class="form-label">vencimiento</label>
						<input id="vencimiento" name="vencimiento" type="date" class="form-control">
					</div>

                    <div class="mb-3">
						<label for="" class="form-label">cancelado</label>
						<input id="cancelado" name="cancelado" type="boolean" class="form-control">
					</div>

			

					{{-- SECCION BASE --}}
					<div class="text-center">
						<h4 class="mb-3 h4">pedido</h4>
					</div>
					@include('compra.create.base')
					{{-- FIN SECCION BASE --}}

					{{-- SECCION PEDIDO --}}
					<div class="text-center">
						<h4 class="mb-3 h4">Medicamentos</h4>
					</div>
					@include('compra.create.compra')
					{{-- FIN SECCION PEDIDO --}}

					<div class="text-center">
						<button id="send" type="submit" class="btn btn-primary">Guardar</button>
						<a href="{{url('compra')}}" class="btn btn-danger">Cancelar</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection