@extends('layouts.main')
@section('content')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Inventario</h1>
	</div>
</div><!--/.row-->

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">

			<div class="panel-body">
				<table class="table" id="tinventario">
					<thead>
						<tr>
							<th scope="col" class="text-center">ID</th>
							<th scope="col" class="text-center">nombre</th>
							<th scope="col" class="text-center">monodroga</th>
							<th scope="col" class="text-center">Cantidad</th>
							<th scope="col" class="text-center"></th>
						</tr>
					</thead>

					<tbody>
						@foreach ( $inventarios as $inventario )

						<tr>
							<td class="text-center">{{$inventario->medicamento->id}}</td>
							<td class="text-center">{{$inventario->medicamento->nombre}}</td>
							<td class="text-center">{{$inventario->medicamento->monodroga}}</td>
							<td class="text-center">{{$inventario->cantidad}}</td>

							<td class="col-1 text-center">
								<a class="btn btn-info">Editar</a>
								<button class="btn btn-danger">Borrar</button>
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
		$('#tinventario').DataTable();
	} );
</script>

@endsection
