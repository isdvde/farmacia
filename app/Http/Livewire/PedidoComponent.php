<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Pedido;
use App\Models\Laboratorio;
use App\Models\Farmacia;
use App\Models\Medicamento;
use Illuminate\Support\Facades\Auth;

class PedidoComponent extends Component
{
	use WithPagination;

	protected $paginationTheme = 'bootstrap';
	public $formType, $show;
	public $farmacia, $laboratorio, $empleado, $forma_pago;
	public $medicamento, $cantidad;
	public $pmedicamentos = null;
	public $pedido;
	public $fpago = [
		'contado' => 'Contado',
		'5d' => 'Credito 5 dias',
		'10d' => 'Credito 10 dias',
		'15d' => 'Credito 15 dias',
		'20d' => 'Credito 20 dias',
		'30d' => 'Credito 30 dias',
	];
	public $items = [];
	public $i = 0;

	public function render()
	{
		$user = Auth::user();
		if($user->username == 'admin'){
			$pedidos = Pedido::paginate(8);

		} else {
			$pedidos = Pedido::where('id_farmacia', $user->empleado->id_farmacia)->paginate(8);
		}

		return view('livewire.pedido.pedido-component')
		->with('pedidos', $pedidos)
		->with('farmacias', Farmacia::all())
		->with('laboratorios', Laboratorio::all())
		->with('medicamentos', Medicamento::all())
		;
	}

	public function increment() {
		array_push($this->items ,$this->i);
		$this->i++;
	}

	public function decrement($i) {
		unset($this->items[$i]);
	}

	public function create() {
		$this->reset();
		$this->fpago = [
			'contado' => 'Contado',
			'5d' => 'Credito 5 dias',
			'10d' => 'Credito 10 dias',
			'15d' => 'Credito 15 dias',
			'20d' => 'Credito 20 dias',
			'30d' => 'Credito 30 dias',
		];
		$this->formType = 0;
		$this->empleado = Auth::user()->empleado->ci;
		$this->farmacia = Auth::user()->empleado->id_farmacia;
		/*		$this->empleado = 1;*/
		$this->dispatchBrowserEvent('openCreateForm');
	}

	public function closeCreate() {
		$this->reset();
		$this->dispatchBrowserEvent('closeCreateForm');
	}

	public function edit(Pedido $pedido, $show = 0) {
		$this->reset();
		if($pedido != null) $this->loadData($pedido);
		$this->pedido = $pedido;
		$this->fpago = [
			'contado' => 'Contado',
			'5d' => 'Credito 5 dias',
			'10d' => 'Credito 10 dias',
			'15d' => 'Credito 15 dias',
			'20d' => 'Credito 20 dias',
			'30d' => 'Credito 30 dias',
		];
		$this->formType = 1;
		$this->show = $show;
		if($this->show == 1) $this->closeShow();
		$this->dispatchBrowserEvent('openEditForm');
	}

	public function closeEdit() {
		$pedido = $this->pedido;
		if($this->show == 1) $this->show($pedido);
		$this->dispatchBrowserEvent('closeEditForm');
	}

	public function loadData(Pedido $pedido){
		$this->reset();
		$this->pedido = $pedido;
		$this->forma_pago = $pedido->forma_pago;
		$this->pmedicamentos = $pedido->pedidoMedicamentos;
		$this->cantidad = [];
		foreach ($this->pmedicamentos as $pme) {
			array_push($this->cantidad, $pme->cantidad);
		}
	}

	public function store() {
		if($this->formType == 0) {
			$pedido = Pedido::create([
				'id_farmacia' => $this->farmacia,
				'id_laboratorio' => $this->laboratorio,
				'id_empleado' => $this->empleado,
				'forma_pago' => $this->forma_pago,
			]);

			for ($i=0; $i < count($this->medicamento); $i++) { 
				$pedido->pedidoMedicamentos()->create([
					'id_pedido' => $pedido->id,
					'id_medicamento' => $this->medicamento[$i],
					'cantidad' => $this->cantidad[$i],
				]);
			}

			$this->closeCreate();

		} else if($this->formType == 1) {
			$pedido = $this->pedido;
			$pedido->update([
				'forma_pago' => $this->forma_pago,
			]);

			$i = 0;
			foreach($pedido->pedidoMedicamentos as $medicamento) {
				$medicamento->update([
					'cantidad' => $this->cantidad[$i],
				]);
				$i++;
			}

			$this->closeEdit();
		}
	}

	public function delete($id) {
		Pedido::destroy($id);		
	}

	public function show(Pedido $pedido) {
		$this->reset();
		$this->loadData($pedido);
		$this->dispatchBrowserEvent('openShow');
	}

	public function closeShow() {
		$this->dispatchBrowserEvent('closeShow');
	}

	public function compra($id) {
		return redirect('compra/'.$id);
	}
}
