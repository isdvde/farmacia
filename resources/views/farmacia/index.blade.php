@extends('layouts.plantillabase');
@section('contenido')

<div class="row justify-content-center">



    <table class="table table-dark table-striped mr-4">
<thead >

    <tr>
        <th scope="col">id </th>
        <th scope="col">nombre</th>
        <th scope="col">ubicacion</th>

    </tr>

</thead>

<tbody>
 @foreach ( $farmacias as $farmacia )

 <tr>
    <td>{{$farmacia->id}}</td>
    <td>{{$farmacia->nombre}}</td>
    <td>{{$farmacia->ubicacion}}</td>

    <td>
       <th class="col-1">
        <a href="{{url('farmacia/'.$farmacia->id.'/edit')}}" class="btn btn-info">editar</a>
       </th>

       <th class="col-1">
           <form action="{{url('farmacia/delete')}}"  method="POST">
                @csrf
                <input type="hidden" id="id" name="id" value="{{$farmacia->id}}">
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
<a href="farmacia/create" class="btn btn-primary">CREAR</a>
</div>
@endsection
