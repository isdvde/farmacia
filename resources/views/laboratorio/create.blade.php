@extends('layouts.plantillabase');
@section('contenido')

<h2>CREAR REGISTRO</h2>

<form action="{{url('laboratorio/create')}}" method="POST">
  @csrf
  <div class="mb-3">
      <label for="" class="form-label">id </label>
      <input id="id" name="id" type="number" class="form-control">
  </div>

  <div class="mb-3">
      <label for="" class="form-label">nombre </label>
      <input id="nombre" name="nombre" type="text" class="form-control">
  </div>

  <div class="mb-3">
      <label for="" class="form-label">direccion</label>
      <input id="direccion" name="direccion" type="text" class="form-control">
  </div>

  <div class="mb-3">
      <label for="" class="form-label">telefono</label>
      <input id="telefono" name="telefono" type="text" class="form-control">
  </div>
<a href="{{url('laboratorio')}}" class="btn btn-danger"> cancelar </a>
<button type="submit" class="btn btn-primary"> guardar </button>
</form>
@endsection
