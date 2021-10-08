@extends('layouts.main')
@section('content')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Pedidos</h1>
	</div>
</div><!--/.row-->

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			{{-- <div class="panel-heading">
				Empleados
			</div> --}}
			<div class="panel-body">
				<form action="{{url('pedido/'.$pedido->id.'/edit')}}" method="POST">
					@csrf

					{{-- SECCION BASE --}}
					<div class="text-center">
						<h4 class="mb-3 h4">Pedido</h4>
					</div>
					@include('pedido.edit.base')
					{{-- FIN SECCION BASE --}}

					{{-- SECCION PEDIDO --}}
					<div class="text-center">
						<h4 class="mb-3 h4">Medicamentos</h4>
					</div>
					@include('pedido.edit.pedido')
					{{-- FIN SECCION PEDIDO --}}

					<div class="text-center">
						<button id="send" type="submit" class="btn btn-primary">Guardar</button>
						<a href="{{url('pedido')}}" class="btn btn-danger">Cancelar</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection