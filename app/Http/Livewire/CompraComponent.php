<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Pedido;
use App\Models\Laboratorio;
use App\Models\Farmacia;
use App\Models\Medicamento;
use App\Models\Compra;
use App\Models\Inventario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CompraComponent extends Component
{
	use WithPagination;

	protected $paginationTheme = 'bootstrap';
	public $medicamento, $cantidad; 
/*	public $inventario, $farmacia, $laboratorio, $empleado, $forma_pago;*/
	public $pmedicamentos = null;
	public $pid, $vencimiento, $cancelado, $isCompra, $compra, $pedido;
	public $fpago = [
		'contado' => 'Contado',
		'5d' => 'Credito 5 dias',
		'10d' => 'Credito 10 dias',
		'15d' => 'Credito 15 dias',
		'20d' => 'Credito 20 dias',
		'30d' => 'Credito 30 dias',
	];

	public function render()
	{
		$user = Auth::user();
		if($user->username == 'admin'){
			$pedidos = Pedido::paginate(8);

		} else {
			$pedidos = Pedido::where('id_farmacia', $user->empleado->id_farmacia)->paginate(8);
		}

		return view('livewire.compra.compra-component')
		->with('compras', Compra::paginate(8))
		;
	}

	public function loadData(Pedido $pedido){
		$this->reset();
		$this->pedido = $pedido;
/*		$this->forma_pago = $pedido->forma_pago;*/
		$this->cancelado = 0;
		$this->pmedicamentos = $pedido->pedidoMedicamentos;
		$this->cantidad = [];
		$this->medicamento = [];
		$this->isCompra = [];
/*		$this->inventario = [];*/
		foreach ($this->pmedicamentos as $pme) {
			array_push($this->cantidad, $pme->cantidad);
			array_push($this->medicamento, $pme->id_medicamento);
		}
	}

	public function create($pid) {
		$this->reset();
		$this->pedido = Pedido::find($pid);
		$this->loadData($this->pedido);
		$this->fpago = [
			'contado' => 'Contado',
			'5d' => 'Credito 5 dias',
			'10d' => 'Credito 10 dias',
			'15d' => 'Credito 15 dias',
			'20d' => 'Credito 20 dias',
			'30d' => 'Credito 30 dias',
		];
		$this->dispatchBrowserEvent('openCompraForm');
	}

	public function closeCreate() {
		$this->dispatchBrowserEvent('closeCompraForm');
	}

	public function store() {
		$compra = Compra::create([
			'id_pedido' =>$this->pedido->id,
			'vencimiento' => $this->vencimiento,
			'cancelado' => $this->cancelado,
		]);


		for ($i=0; $i < count($this->medicamento); $i++) {
			if(isset($this->isCompra[$i]) && $this->isCompra[$i] == "1"){
				$compra->compraMedicamentos()->create([
					'id_compra' => $compra->id,
					'id_medicamento' => $this->medicamento[$i],
					'cantidad' => $this->cantidad[$i],
				]);

				$inv = Inventario::where('id_medicamento', $this->medicamento[$i])->first();
				$oldValue = $inv->cantidad;
				$newValue = $oldValue + $this->cantidad[$i];

				$inv->update([
					'cantidad' => $newValue
				]);
			}
		}

		$this->closeCreate();
	}

	public function loadDataCompra(Compra $compra) {
		$this->reset();
		$this->compra = $compra;
		$this->pmedicamentos = $compra->compraMedicamentos;
	}

	public function show(Compra $compra) {
		$this->reset();
		$this->loadDataCompra($compra);
		$this->dispatchBrowserEvent('openShow');
	}

	public function closeShow() {
		$this->dispatchBrowserEvent('closeShow');
	}

	public function pay(Compra $c) {
		if (isset($c)) {
			if ($c->cancelado == 0) {
				$c->update([
					'cancelado' => 1
				]);
			}
		}
	}

}
