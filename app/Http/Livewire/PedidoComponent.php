<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Pedido;
use App\Models\Laboratorio;
use App\Models\Farmacia;
use App\Models\Medicamento;

class PedidoComponent extends Component
{
	use WithPagination;

	protected $paginationTheme = 'bootstrap';
	public $formType;
	public $farmacia, $nombre, $ubicacion;
	protected $rules = [
		'nombre' => 'required', 
		'ubicacion' => 'required', 
	];

	public function render()
	{
		return view('livewire.pedido.pedido-component')
		->with('pedidos', Pedido::paginate(8))
		;
	}

	public function openForm($type, Pedido $pedido = null) {
		$this->formType = $type;
		$this->pedido = $pedido->id;
		$this->nombre = $pedido->nombre;
		$this->ubicacion = $pedido->ubicacion;
		$this->dispatchBrowserEvent('openForm');
	}

	public function closeForm() {
		$this->nombre = "";
		$this->ubicacion = "";
		$this->dispatchBrowserEvent('closeForm');
	}

	public function store() {
		$val = $this->validate();

		if($this->formType == 0) {
			Pedido::create($val);

		} else if($this->formType == 1) {
			Pedido::find($this->pedido)->update($val);
		}

		$this->closeForm();
	}

	public function delete($id) {
		Pedido::destroy($id);		
	}
}
