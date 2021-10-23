<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Empleado;
use App\Models\Farmacia;
use App\Models\User;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;

class EmpleadoComponent extends Component
{
	use WithPagination;

	protected $paginationTheme = 'bootstrap';
	public $formType;
	public $ci, $farmacia, $nombre, $apellido, $edad, $cargo, $telefono;
	public $institucion, $especialidad, $f_inicio, $n_permiso, $activo, $minoria;
	public $ci_r, $nombre_r, $apellido_r, $telefono_r;
	public $universidad, $fecha, $n_registro, $p_sanitario, $n_colegiatura;
	public $cargos = ["pasante", "administrativo", "farmaceutico", "vigilante", "analista",];

	public function render()
	{
		return view('livewire.empleado.empleado-component')
		->with('empleados', Empleado::paginate(8))
		->with('farmacias', Farmacia::all())
		;
	}

	public function create() {
		$this->reset();
		$this->formType = 0;
		$this->cargos = ["pasante", "administrativo", "farmaceutico", "vigilante", "analista",];
		$this->dispatchBrowserEvent('openCreateForm');
	}

	public function closeCreate() {
		$this->reset();
		$this->dispatchBrowserEvent('closeCreateForm');
	}

	public function edit(Empleado $empleado) {
		$this->formType = 1;
		if($empleado != null) $this->loadData($empleado);
		$this->dispatchBrowserEvent('openEditForm');
	}

	public function closeEdit() {
		$this->reset();
		$this->dispatchBrowserEvent('closeEditForm');
	}

	public function loadData(Empleado $empleado){

		$this->ci = $empleado->ci;
		$this->farmacia = $empleado->farmacia->id;
		$this->nombre = $empleado->nombre;
		$this->apellido = $empleado->apellido;
		$this->edad = $empleado->edad;
		$this->cargo = $empleado->cargo;
		$this->telefono = $empleado->telefono;

		if($empleado->cargo == 'pasante') {
			if(isset($empleado->pasantia)) {
				$this->institucion = $empleado->pasantia->institucion;
				$this->especialidad = $empleado->pasantia->especialidad;
				$this->f_inicio = $empleado->pasantia->f_inicio;
				$this->n_permiso = $empleado->pasantia->n_permiso;
				$this->activo = $empleado->pasantia->activo;
			}

			if(isset($empleado->responsable)) {
				if($empleado->edad < 18) {
					$this->ci_r = $empleado->responsable->ci_representante;
					$this->nombre_r = $empleado->responsable->nombre;
					$this->apellido_r = $empleado->responsable->apellido;
					$this->telefono_r = $empleado->responsable->telefono;
				}
			}

		} else if($empleado->cargo == 'farmaceutico') {
			if(isset($empleado->titulo)) {
				$this->universidad = $empleado->titulo->universidad;
				$this->fecha = $empleado->titulo->fecha;
				$this->n_registro = $empleado->titulo->n_registro;
				$this->p_sanitario = $empleado->titulo->p_sanitario;
				$this->n_colegiatura = $empleado->titulo->n_colegiatura;
			}
		}

		$this->cargos = ["pasante", "administrativo", "farmaceutico", "vigilante", "analista"];
	}

	public function store() {

		if($this->formType == 0) {
			Empleado::create([
				'ci' => $this->ci,
				'id_farmacia' => $this->farmacia,
				'nombre' => $this->nombre,
				'apellido' => $this->apellido,
				'edad' => $this->edad,
				'cargo' => $this->cargo,
				'telefono' => $this->telefono,
			]);

			if($this->cargo == "farmaceutico") {
				Empleado::find($this->ci)->titulo()->create([
					'ci' => $this->ci, 
					'universidad' => $this->universidad,
					'fecha' => $this->fecha,
					'n_registro' => $this->n_registro,
					'p_sanitario' => $this->p_sanitario,
					'n_colegiatura' => $this->n_colegiatura,
				]);
			}

			if($this->cargo == "pasante") {
				$this->edad < 18 ? $minoria = true : $minoria = false;
				$this->activo == "1" ? $activo = true : $activo = false;
				Empleado::find($this->ci)->pasantia()->create([
					'ci' => $this->ci,
					'institucion' => $this->institucion,
					'especialidad' => $this->especialidad,
					'f_inicio' => $this->f_inicio,
					'n_permiso' => $this->n_permiso, 
					'minoria_edad' => $minoria,
					'activo' => $activo
				]);

				if($this->edad < 18) {
					Empleado::find($this->ci)->responsable()->create([
						'ci' => $this->ci,
						'ci_representante' => $this->ci_r,
						'nombre' => $this->nombre_r,
						'apellido' => $this->apellido_r,
						'telefono' => $this->telefono_r
					]);
				}
			}

			for($i=1;; $i++) { 
				$username = strtolower(substr($this->nombre, 0, $i).$this->apellido);
				if (!(User::where('username',$username)->first())) {
					break;
				}
			}

			Empleado::find($this->ci)->user()->create([
				'ci' => $this->ci,
				'username' => $username,
				'password' => Hash::make($username),
			]);

			$this->closeCreate();

		} else if($this->formType == 1) {
			Empleado::find($this->ci)->update([
				'id_farmacia' => $this->farmacia,
				'nombre' => $this->nombre,
				'apellido' => $this->apellido,
				'edad' => $this->edad,
				'cargo' => $this->cargo,
				'telefono' => $this->telefono,
			]);

			if($this->cargo == "farmaceutico") {
				Empleado::find($this->ci)->titulo()->update([
					'universidad' => $this->universidad,
					'fecha' => $this->fecha,
					'n_registro' => $this->n_registro,
					'p_sanitario' => $this->p_sanitario,
					'n_colegiatura' => $this->n_colegiatura,
				]);
			}

			if($this->cargo == "pasante") {
				$this->edad < 18 ? $minoria = true : $minoria = false;
				$this->activo == "1" ? $activo = true : $activo = false;
				Empleado::find($this->ci)->pasantia()->update([
					'institucion' => $this->institucion,
					'especialidad' => $this->especialidad,
					'f_inicio' => $this->f_inicio,
					'n_permiso' => $this->n_permiso, 
					'minoria_edad' => $minoria,
					'activo' => $activo
				]);

				Empleado::find($this->ci)->responsable()->update([
					'ci_representante' => $this->ci_r,
					'nombre' => $this->nombre_r,
					'apellido' => $this->apellido_r,
					'telefono' => $this->telefono_r
				]);
			}

			$this->closeEdit();
		}
	}

	public function delete($id) {
		Empleado::destroy($id);		
	}
}
