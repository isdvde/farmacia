<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InventarioController;
use App\Http\Controllers\FarmaciaController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\LaboratorioController;
use App\Http\Controllers\CompraController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::prefix('/')->middleware('auth')->group(function() {

	Route::get('/', function(){
		return view('home');
	});

// EMPLEADOS
	Route::get('empleado', 'EmpleadoController@index')
	->middleware('role:admin|administrativo');

// PEDIDOS
	Route::get('pedido', 'PedidoController@index')
	->middleware('role:admin|analista');

//laboratorio
	Route::get('laboratorio',[LaboratorioController::class,'index' ])
	->middleware('role:admin|analista');

//inventario
	Route::get('inventario',[InventarioController::class,'index' ])
	->middleware('role:admin|administrativo|farmaceutico|analista|pasante');

//medicamento
	Route::get('medicamento',[MedicamentoController::class,'index' ])
	->middleware('role:admin|analista|administrativo|farmaceutico|pasante');

//farmacia
	Route::get('farmacia',[FarmaciaController::class,'index' ])
	->middleware('role:admin|analista|farmaceutico|administrativo');

	//compra
	Route::get('compra/{pid?}',[CompraController::class,'index' ])
	->middleware('role:admin|administrativo|analista');
});