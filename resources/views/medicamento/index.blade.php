@extends('layouts.plantillabase');
@section('contenido')

<a href="medicamento/create" class="btn btn-primary">CREAR</a>


<div class="row justify-content-center">

<table class="table table-dark table-striped mr-4">
<thead>

 <tr>
        <th scope="col">id </th>
        <th scope="col">monodroga</th>
        <th scope="col">presentacion </th>
        <th scope="col">accion </th>
         <th scope="col">precio </th>

    </tr>

</thead>

<tbody>
 @foreach ( $medicamentos as $medicamento )

 <tr>
    <td>{{$medicamento->id}}</td>
    <td>{{$medicamento->monodroga}}</td>
    <td>{{$medicamento->presentacion}}</td>
    <td>{{$medicamento->accion}}</td>
    <td>{{$medicamento->precio}}</td>

    <td>
       <th class="col-1">
        <a href="{{url('medicamento/'.$medicamento->id.'/edit')}}" class="btn btn-info">editar</a>
       </th>

       <th class="col-1">
           <form action="{{url('medicamento/delete')}}"  method="POST">
                @csrf
                <input type="hidden" id="id" name="id" value="{{$medicamento->id}}">
                <button type="submit" class="btn btn-danger">borrar </button>
            </form>
        </th>

    </td>
 </tr>

 @endforeach
</tbody>
</table>
</div>
@endsection
