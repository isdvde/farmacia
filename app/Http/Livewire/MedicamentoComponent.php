<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Medicamento;
use Livewire\WithPagination;

class MedicamentoComponent extends Component
{
	use WithPagination;

    protected $paginationTheme = 'bootstrap';
	public $formType;
	public $medicamento, $monodroga, $presentacion, $accion, $precio;
	protected $rules = [
		'monodroga' => 'required', 
		'presentacion' => 'required', 
		'accion' => 'required', 
		'precio' => 'required', 
	];

    public function render()
    {
        return view('livewire.medicamento.medicamento-component')
        ->with('medicamentos', Medicamento::paginate(8))
        ;
    }

    public function openForm($type, Medicamento $medicamento = null) {
    	$this->formType = $type;
    	$this->medicamento = $medicamento->id;
    	$this->monodroga = $medicamento->monodroga;
    	$this->presentacion = $medicamento->presentacion;
    	$this->accion = $medicamento->accion;
    	$this->precio = $medicamento->precio;
    	$this->dispatchBrowserEvent('openForm');
    }

    public function closeForm() {
    	$this->dispatchBrowserEvent('closeForm');
        $this->reset();
    }

    public function store() {
    	$val = $this->validate();

    	if($this->formType == 0) {
    		Medicamento::create($val);

    	} else if($this->formType == 1) {
    		Medicamento::find($this->medicamento)->update($val);
    	}

    	$this->closeForm();
    }

    public function delete($id) {
    	Medicamento::destroy($id);		
    }
}
