@extends('layouts.main')
@section('content')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Medicamentos</h1>
	</div>
</div><!--/.row-->

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">

			<div class="panel-body">
				<table class="table" id="tmedicamento">
					<thead>
						<tr>
							<th scope="col" class="text-center">ID</th>
							<th scope="col" class="text-center">Monodroga</th>
							<th scope="col" class="text-center">Presentacion </th>
							<th scope="col" class="text-center">Accion</th>
							<th scope="col" class="text-center">Precio</th>
							<th scope="col" class="text-center"></th>
						</tr>
					</thead>

					<tbody>
						@foreach ( $medicamentos as $medicamento )

						<tr>
							<td class="text-center">{{$medicamento->id}}</td>
							<td class="text-center">{{$medicamento->monodroga}}</td>
							<td class="text-center">{{$medicamento->presentacion}}</td>
							<td class="text-center">{{$medicamento->accion}}</td>
							<td class="text-center">{{$medicamento->precio}}</td>

							<td class="col-1 text-center">
								<form action="{{url('medicamento/delete')}}"  method="POST">
									@csrf
									<a href="{{url('medicamento/'.$medicamento->id.'/edit')}}" class="btn btn-info">Editar</a>
									<input type="hidden" id="id" name="id" value="{{$medicamento->id}}">
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
		$('#tmedicamento').DataTable();
	} );
</script>

@endsection
