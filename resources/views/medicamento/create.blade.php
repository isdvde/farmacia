@extends('layouts.plantillabase');
@section('contenido')

<h2>CREAR REGISTRO</h2>

<form action="{{url('medicamento/create')}}" method="POST">
  @csrf
  <div class="mb-3">
      <label for="" class="form-label">id </label>
      <input id="id" name="id" type="number" class="form-control">
  </div>

  <div class="mb-3">
      <label for="" class="form-label">monodroga </label>
      <input id="monodroga" name="monodroga" type="text" class="form-control">
  </div>

  <div class="mb-3">
      <label for="" class="form-label">presentacion</label>
      <input id="presentacion" name="presentacion" type="text" class="form-control">
  </div>

   <div class="mb-3">
      <label for="" class="form-label">accion</label>
      <input id="accion" name="accion" type="text" class="form-control">
  </div>

  <div class="mb-3">
      <label for="" class="form-label">precio</label>
      <input id="precio" name="precio" type="text" class="form-control">
  </div>
<a href="{{url('medicamento')}}" class="btn btn-danger"> cancelar </a>
<button type="submit" class="btn btn-primary"> guardar </button>
</form>
@endsection
