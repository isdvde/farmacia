<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Inventario;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class InventarioComponent extends Component
{
	use WithPagination;

	protected $paginationTheme = 'bootstrap';

    public function render()
    {
    	$user = Auth::user();
    	if($user->username == 'admin'){
    		$inventarios = Inventario::paginate(8);

    	} else {
    		$inventarios = Inventario::where('id_farmacia', $user->empleado->id_farmacia)->paginate(8);
    	}

        return view('livewire.inventario-component')
        ->with('inventarios', $inventarios)
        ;
    }
}
