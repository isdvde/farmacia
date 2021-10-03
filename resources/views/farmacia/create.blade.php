@extends('layouts.plantillabase')
@section('contenido')

<h2>CREAR REGISTRO</h2>

<form action="{{url('farmacia/create')}}" method="POST">
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
      <label for="" class="form-label">ubicacion</label>
      <input id="ubicacion" name="ubicacion" type="text" class="form-control">
  </div>


<a href="{{url('farmacia')}}" class="btn btn-danger"> cancelar </a>
<button type="submit" class="btn btn-primary"> guardar </button>
</form>
@endsection
