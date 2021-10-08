@extends('layouts.plantillabase')
@section('contenido')

<h2> editar registros </h2>

<form action="{{url('laboratorio/'.$laboratorio->id.'/edit')}}" method="POST">
  @csrf
 
  <div class="mb-3">
      <label for="" class="form-label">id </label>
      <input id="id" name="id" type="number" class="form-control"  value="{{$laboratorio->id}}">
  </div>

  <div class="mb-3">
      <label for="" class="form-label">nombre </label>
      <input id="nombre" name="nombre" type="text" class="form-control" value="{{$laboratorio->nombre}}">
  </div>

  <div class="mb-3">
      <label for="" class="form-label">direccion</label>
      <input id="direccion" name="direccion" type="text" class="form-control" value="{{$laboratorio->direccion}}">
  </div>

  <div class="mb-3">
      <label for="" class="form-label">telefono</label>
      <input id="telefono" name="telefono" type="text" class="form-control" value="{{$laboratorio->telefono}}">
  </div>
<a href="{{url('laboratorio')}}" class="btn btn-danger"> cancelar </a>
<button type="submit" class="btn btn-primary"> guardar </button>
</form>

@endsection
