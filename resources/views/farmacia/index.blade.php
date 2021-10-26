@extends('layouts.main')
@section('content')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Farmacias</h1>
	</div>
</div><!--/.row-->

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">

			<div class="panel-body">
				<table class="table" id="tfarmacia">
					<thead >
						<tr>
							<th scope="col" class="text-center">ID</th>
							<th scope="col" class="text-center">Nombre</th>
							<th scope="col" class="text-center">Ubicacion</th>
							<th scope="col" class="text-center"></th>
						</tr>
					</thead>

					<tbody>
						@foreach ( $farmacias as $farmacia )

						<tr>
							<td class="text-center">{{$farmacia->id}}</td>
							<td class="text-center">{{$farmacia->nombre}}</td>
							<td class="text-center">{{$farmacia->ubicacion}}</td>

							<td class="col-1 text-center">

								<form action="{{url('farmacia/delete')}}"  method="POST">
									@csrf
                                    
                                    <a href="{{url('farmacia/'.$farmacia->id.'/show')}}" class="btn btn-success">Ver</a>
									<a href="{{url('farmacia/'.$farmacia->id.'/edit')}}" class="btn btn-info">Editar</a>
									<input type="hidden" id="id" name="id" value="{{$farmacia->id}}">
									<button type="submit" class="btn btn-danger">Borrar</button>
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
		$('#tfarmacia').DataTable();
	} );
</script>
@endsection
