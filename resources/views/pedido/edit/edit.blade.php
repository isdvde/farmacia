@extends('layouts.base')
@section('content')

<div class="row justify-content-center">
	<div class="col-4 ">
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

@endsection