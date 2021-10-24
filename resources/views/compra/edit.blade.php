@extends('layouts.main')
@section('content')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Compra</h1>
	</div>
</div><!--/.row-->

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-body">
				<form action="{{url('compra/'.$compra->id.'/edit')}}" method="POST">
					@csrf

				

					<div class="mb-3">
						<label for="" class="form-label">vencimiento</label>
						<input id="vencimiento" name="vencimiento" type="date" class="form-control" value="{{$compra->vencimiento}}">
					</div>

                    <div class="mb-3">
						<label for="" class="form-label">cancelado</label>
						<input id="cancelado" name="cancelado" type="boolean" class="form-control" value="{{$compra->cancelado}}">
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
