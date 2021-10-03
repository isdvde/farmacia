@extends('layouts.plantillabase')
@section('contenido')

<div class="row justify-content-center">



    <table class="table table-dark table-striped mr-4">
<thead >

    <tr>
        <th scope="col">id </th>
        <th scope="col">nombre</th>
        <th scope="col">direccion </th>
        <th scope="col">telefono </th>

    </tr>

</thead>

<tbody>
 @foreach ( $laboratorios as $laboratorio )

 <tr>
    <td>{{$laboratorio->id}}</td>
    <td>{{$laboratorio->nombre}}</td>
    <td>{{$laboratorio->direccion}}</td>
    <td>{{$laboratorio->telefono}}</td>

    <td>
       <th class="col-1">
        <a href="{{url('laboratorio/'.$laboratorio->id.'/edit')}}" class="btn btn-info">editar</a>
       </th>

       <th class="col-1">
           <form action="{{url('laboratorio/delete')}}"  method="POST">
                @csrf
                <input type="hidden" id="id" name="id" value="{{$laboratorio->id}}">
                <button type="submit" class="btn btn-danger">borrar </button>
            </form>
        </th>
    </td>
 </tr>

 @endforeach
</tbody>
</table>

</div>

<div class="row justify-content-center">
<a href="laboratorio/create" class="btn btn-primary">CREAR</a>
</div>
@endsection
