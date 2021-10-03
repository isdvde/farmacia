@extends('layouts.plantillabase')
@section('contenido')

<h2>EDITAR REGISTRO</h2>

<form action="{{url('medicamento/'.$medicamento->id.'/edit')}}" method="POST">
  @csrf
  <div class="mb-3">
      <label for="" class="form-label">id </label>
      <input id="id" name="id" type="number" class="form-control" value="{{$medicamento->id}}">
  </div>

  <div class="mb-3">
      <label for="" class="form-label">monodroga </label>
      <input id="monodroga" name="monodroga" type="text" class="form-control" value="{{$medicamento->monodroga}}">
  </div>

  <div class="mb-3">
      <label for="" class="form-label">presentacion</label>
      <input id="presentacion" name="presentacion" type="text" class="form-control" value="{{$medicamento->presentacion}}">
  </div>

   <div class="mb-3">
      <label for="" class="form-label">accion</label>
      <input id="accion" name="accion" type="text" class="form-control" value="{{$medicamento->accion}}">
  </div>

  <div class="mb-3">
      <label for="" class="form-label">precio</label>
      <input id="precio" name="precio" type="text" class="form-control" value="{{$medicamento->precio}}">
  </div>
<a href="{{url('medicamento')}}" class="btn btn-danger"> cancelar </a>
<button type="submit" class="btn btn-primary"> guardar </button>
</form>
@endsection
