@extends('layouts.main')
@section('content')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Farmacias</h1>
	</div>
</div><!--/.row-->

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-body">
				<form action="{{url('compra/create')}}" method="POST">
					@csrf

                    <div class="mb-3">
	                   <label class="form-label col-4" for="pedido">pedido</label>
	                   <select class="form-control" id="id_pedido" name="id_pedido">
	                       <option value="" selected>Elija un pedido...</option>
	                	      @foreach ($pedidos as $pedido)
	                	   <option value="{{ $pedido->id }}">
                           <h1>id pedido-></h1>
                           {{ $pedido->id }}
                           <h1> id farmacia-></h1>
                           {{ $pedido->id_farmacia }}
                           <h1> ubicacion-></h1>
                           {{ $pedido->farmacia->ubicacion }}
                              </option>
					       
	                	      @endforeach
							
                     	</select>
						
                    </div>

					<div class="mb-3">
					   <div class="btn-group" role="group" aria-label="">
                          <button type="button" class="btn btn-primary">seleccionar producto</button>

                        </div>
					</div>
                        
					<div class="mb-3">
						<label for="" class="form-label">vencimiento</label>
						<input id="vencimiento" name="vencimiento" type="date" class="form-control">
					</div>

                    <div class="mb-3">
						<label for="" class="form-label">cancelado</label>
						<input id="cancelado" name="cancelado" type="boolean" class="form-control">
					</div>

					<div class="text-center" style="margin-top: 10px;">
						<button type="submit" class="btn btn-primary">Guardar</button>
						<a href="{{url('compra')}}" class="btn btn-danger">Cancelar</a>
					</div>

                    


					



				</form>


			</div>
		</div>
	</div>
</div>
@endsection


