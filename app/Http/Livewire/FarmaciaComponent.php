<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Farmacia;
use Livewire\WithPagination;

class FarmaciaComponent extends Component
{
	use WithPagination;

	protected $paginationTheme = 'bootstrap';
	public $formType;
	public $farmacia, $nombre, $ubicacion, $total, $totalCompra;
	protected $rules = [
		'nombre' => 'required', 
		'ubicacion' => 'required', 
	];

	public function render()
	{
		return view('livewire.farmacia.farmacia-component')
		->with("farmacias", Farmacia::paginate(8))
		;
	}

	public function openForm($type, Farmacia $farmacia = null) {
		$this->reset();
		$this->formType = $type;
		$this->farmacia = $farmacia;
		$this->nombre = $farmacia->nombre;
		$this->ubicacion = $farmacia->ubicacion;
		$this->dispatchBrowserEvent('openForm');
	}

	public function closeForm() {
		$this->dispatchBrowserEvent('closeForm');
		$this->reset();
	}

	public function store() {
		$val = $this->validate();

		if($this->formType == 0) {
			Farmacia::create($val);

		} else if($this->formType == 1) {
			$this->farmacia->update($val);
		}

		$this->closeForm();
	}

	public function delete($id) {
		Farmacia::destroy($id);		
	}

	public function show(Farmacia $f) {
		$this->reset();
		$this->farmacia = $f;
		$this->total = 0;
		$this->totalCompra = [];
		$this->total();
		$this->dispatchBrowserEvent('openShow');
	}

	public function closeShow() {
		$this->dispatchBrowserEvent('closeShow');
		$this->reset();
	}

	public function total() {
		foreach ($this->farmacia->compras as $c) {
			$tc = 0;
			if ($c->cancelado == 1) {
				foreach ($c->compraMedicamentos as $cm) {
					$tc += ($cm->cantidad * $cm->medicamento->precio);
				}
			}

			array_push($this->totalCompra, $tc);
			$this->total += $tc;
		}
	}
}
