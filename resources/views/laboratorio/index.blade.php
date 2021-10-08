@extends('layouts.main')
@section('content')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Laboratorios</h1>
	</div>
</div><!--/.row-->

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			{{-- <div class="panel-heading">
				Empleados
			</div> --}}
			<div class="panel-body">

				<table class="table" id="tlaboratorio">
					<thead >
						<tr>
							<th scope="col" class="text-center">ID</th>
							<th scope="col" class="text-center">Nombre</th>
							<th scope="col" class="text-center">Direccion</th>
							<th scope="col" class="text-center">Telefono</th>
							<th scope="col" class="text-center"></th>
						</tr>
					</thead>

					<tbody>
						@foreach ( $laboratorios as $laboratorio )

						<tr>
							<td class="text-center">{{$laboratorio->id}}</td>
							<td class="text-center">{{$laboratorio->nombre}}</td>
							<td class="text-center">{{$laboratorio->direccion}}</td>
							<td class="text-center">{{$laboratorio->telefono}}</td>

							<td class="col-1 text-center">
								<form action="{{url('laboratorio/delete')}}"  method="POST">
									@csrf
									<a href="{{url('laboratorio/'.$laboratorio->id.'/edit')}}" class="btn btn-info">Editar</a>
									<input type="hidden" id="id" name="id" value="{{$laboratorio->id}}">
									<button type="submit" class="btn btn-danger">Borrar </button>
								</form>
							</td>
						</tr>

						@endforeach
					</tbody>
				</table>

			</div>
		</div>
	</div>
</div>

<script src="{{ url('lumino/js/datatables.min.js') }}"></script>
<script>
	$(document).ready( function () {
		$('#tlaboratorio').DataTable();
	} );
</script>

@endsection
