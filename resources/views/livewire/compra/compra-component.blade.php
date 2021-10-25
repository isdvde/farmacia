<div>

	@isset ($pid)
	@if (App\Models\Compra::where('id_pedido', $pid)->exists())
	<div class="bootstrap-iso" ></div>
	<div class="alert alert-info" role="alert" style="margin-top: 15px;">
		<span class="sr-only">Error:</span>
		La compra ya existe
	</div>
	@else
	<div wire:init="create({{$pid}})" ></div>
	@endif
	@endisset

	<div class="row">

		<div class="col-lg-12">
			<h1 class="page-header">Compras</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">

				<div class="panel-body">
					<table class="table" id="tcompra">
						<thead >
							<tr>

								<th scope="col" class="text-center">ID</th>
								<th scope="col" class="text-center">Farmacia</th>
								<th scope="col" class="text-center">Pedido</th>
								<th scope="col" class="text-center">Vencimiento</th>
								<th scope="col" class="text-center">Cancelado</th>
							</tr>
						</thead>

						<tbody>
							@foreach($compras as $compra)

							<tr>
								<td class="text-center">{{$compra->id}}</td>
								<td class="text-center">{{$compra->pedido->farmacia->nombre}}</td>
								<td class="text-center">{{$compra->id_pedido}}</td>
								<td class="text-center">{{$compra->vencimiento}}</td>
								<td class="text-center">
									{{$compra->cancelado == 0 ? 'No' : 'Si' }}
								</td>

								<td class="text-center" class="col-1 text-center">
									<button wire:click.prevent="show({{$compra}})" class="btn btn-success" >Ver</button>
									<button wire:click.prevent="edit({{$compra}})" class="btn btn-info" >Editar</button>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>

					<div class="col-2 text-center">
						<div class="bootstrap-iso">
							<div class="col-2 text-right">
								{{ $compras->links() }}
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	@include('livewire.compra.create.create')
	@include('livewire.compra.show')



</div>
