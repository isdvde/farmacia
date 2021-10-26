<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Pasantia;
use App\Models\Responsable;
use App\Models\Titulo;
use App\Models\Farmacia;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmpleadoController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('empleado.index');
	}
}