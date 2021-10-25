<table class="table">
	<thead>
		<tr>
			<th scope="col" class="text-center">Farmacia</th>
			<th scope="col" class="text-center">Laboratorio</th>
			<th scope="col" class="text-center">Metodo de Pago</th>
			<th scope="col" class="text-center">Analista</th>
		</tr>
	</thead>
	<tbody>
		@isset ($pedido)
		<tr>
			<td class="text-center">{{$pedido->farmacia->nombre}}</td>
			<td class="text-center">{{$pedido->laboratorio->nombre}}</td>
			<td class="text-center">{{$fpago[$forma_pago]}}</td>
			<td class="text-center">{{$pedido->empleado->nombre.' '.$pedido->empleado->apellido}}</td>
		</tr>
		@endisset
	</tbody>
</table>
