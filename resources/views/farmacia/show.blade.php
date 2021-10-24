@extends('layouts.main')
@section('content')


<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">farmacia</h1>
	</div>
</div><!--/.row-->

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			{{-- <div class="panel-heading">
				Empleados
			</div> --}}
			<div class="panel-body">

                <table class="table" id="templeado">

					<thead>

						<tr>
                        <h1 class= "text-center"> empleados </h1>
                            <th scope="col" class="text-center">cedula</th>
                            <th scope="col" class="text-center">nombre</th>
                            <th scope="col" class="text-center">apellido</th>
                            <th scope="col" class="text-center">edad</th>
                            <th scope="col" class="text-center">cargo</th>
                            <th scope="col" class="text-center">telefono</th>


						</tr>
					</thead>
					<tbody>
                        @foreach($empleados as $empleado)
                        <tr>
                            <td class="text-center">{{$empleado->ci}}</th>
                            <td class="text-center">{{$empleado->nombre}}</th>
                            <td class="text-center">{{$empleado->apellido}}</th>
                            <td class="text-center">{{$empleado->edad}}</th>
                            <td class="text-center">{{$empleado->cargo}}</th>
                            <td class="text-center">{{$empleado->telefono}}</th>
                        </tr>
                        @endforeach


					</tbody>
				</table>

                <table class="table" id="tpedido">

					<thead>

						<tr>
                        <h1 class= "text-center"> pedidos </h1>
                            <th scope="col" class="text-center">id</th>
                            <th scope="col" class="text-center">laboratorio</th>
                            <th scope="col" class="text-center">empleado</th>
                            <th scope="col" class="text-center">pago</th>


						</tr>
					</thead>
					<tbody>
                        @foreach($pedidos as $pedido)
                        <tr>
                            <td class="text-center">{{$pedido->id}}</th>
                            <td class="text-center">{{$pedido->laboratorio->id}}</th>
                            <td class="text-center">{{$pedido->empleado->nombre}}</th>
                            <td class="text-center">{{$pedido->pago}}</th>

                        </tr>
                        @endforeach


					</tbody>
				</table>

                <table class="table" id="tlaboratorio">

					<thead>

						<tr>
                        <h1 class= "text-center"> laboratorio</h1>
                            <th scope="col" class="text-center">id</th>
                            <th scope="col" class="text-center">nombre</th>
                            <th scope="col" class="text-center">direccion</th>
                            <th scope="col" class="text-center">telefono</th>


						</tr>
					</thead>
					<tbody>
                      



					</tbody>
				</table>




					<div class="col-2">
						<a href="{{url('farmacia/'.$farmacia->id.'/edit')}}" class="btn btn-primary">Editar</a>

						<a href="{{url('farmacia')}}" class="btn btn-danger">Regresar</a>
					</div>
			</div>
		</div>

	</div>

</div>

<script src="{{ url('lumino/js/datatables.min.js') }}"></script>
<script>
	$(document).ready( function () {
		$('#templeado').DataTable();
	} );
$(document).ready( function () {
		$('#tpedido').DataTable();
	} );

    $(document).ready( function () {
		$('#tlaboratorio').DataTable();
	} );

</script>


@endsection
