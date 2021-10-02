@extends('layouts.plantillabase');
@section('contenido')
<a href="inventario/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mr-4">
<thead>

 <tr>
        <th scope="col">id </th>
        <th scope="col">id_farmacia</th>
        <th scope="col">id_medicamento </th>
        <th scope="col">cantidad </th>

    </tr>

</thead>

<tbody>
 @foreach ( $inventarios as $inventario )

 <tr>
    <td>{{$inventario->id}}</td>
    <td>{{$inventario->id_farmacia}}</td>
    <td>{{$inventario->id_medicamento}}</td>
    <td>{{$inventario->cantidad}}</td>

    <td>
        <a class="btn btn-info">editar</a>
        <button class="btn btn-danger">borrar </button>
    </td>
 </tr>

 @endforeach
</tbody>
</table>
@endsection
