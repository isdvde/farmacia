<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Laboratorio;
use Livewire\WithPagination;

class LaboratorioComponent extends Component
{
	use WithPagination;

    protected $paginationTheme = 'bootstrap';
	public $formType;
	public $laboratorio, $nombre, $direccion, $telefono;
	protected $rules = [
		'nombre' => 'required', 
		'direccion' => 'required', 
		'telefono' => 'required', 
	];

    public function render()
    {
        return view('livewire.laboratorio.laboratorio-component')
        ->with('laboratorios', Laboratorio::paginate(8))
        ;
    }

    public function openForm($type, Laboratorio $laboratorio = null) {
    	$this->formType = $type;
    	$this->laboratorio = $laboratorio->id;
    	$this->nombre = $laboratorio->nombre;
    	$this->direccion = $laboratorio->direccion;
    	$this->telefono = $laboratorio->telefono;
    	$this->dispatchBrowserEvent('openForm');
    }

    public function closeForm() {
    	$this->nombre = "";
    	$this->direccion = "";
    	$this->telefono = "";
    	$this->dispatchBrowserEvent('closeForm');
    }

    public function store() {
    	$val = $this->validate();

    	if($this->formType == 0) {
    		Laboratorio::create($val);

    	} else if($this->formType == 1) {
    		Laboratorio::find($this->laboratorio)->update($val);
    	}

    	$this->closeForm();
    }

    public function delete($id) {
    	Laboratorio::destroy($id);		
    }
}
