@extends('layouts.main')
@section('content')


<livewire:compra-component :pid="$pid"/>


{{-- <div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Compras</h1>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">

			<div class="panel-body">
				<table class="table" id="tcompra">
					<thead >
						<tr>
						     
							<th scope="col" class="text-center">ID</th>
                            <th scope="col" class="text-center">farmacia</th>
							<th scope="col" class="text-center">pedido</th>
							<th scope="col" class="text-center">vencimiento</th>
							<th scope="col" class="text-center">cancelado</th>
						</tr>
					</thead>

					<tbody>
						@foreach ( $compras as $compra )

						<tr>
							<td class="text-center">{{$compra->id}}</td>
                            <td class="text-center">{{$compra->pedido->farmacia->id}}</td>
							<td class="text-center">{{$compra->id_pedido}}</td>
							<td class="text-center">{{$compra->vencimiento}}</td>
                            <td class="text-center">{{$compra->cancelado}}</td>

                            <th class="col-1">
                               <a href="{{url('compra/'.$compra->id.'/show')}}" class="btn btn-success">Ver</a>
                               <a href="{{url('compra/'.$compra->id.'/edit')}}" class="btn btn-info">editar</a>
                            </th>
                       </td>
						</tr>
						@endforeach
					</tbody>
				</table>

			</div>
		</div>
	</div>
</div> --}}

{{-- <script src="{{ url('lumino/js/datatables.min.js') }}"></script>
<script>
	$(document).ready( function () {
		$('#tcompra').DataTable();
	} );
</script>
 --}}
@endsection