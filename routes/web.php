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
	Route::prefix('empleado')->group(function() {
		Route::get('/', 'EmpleadoController@index');
		Route::get('create', 'EmpleadoController@create');
		Route::post('create', 'EmpleadoController@add');
		Route::get('{ci}/edit', 'EmpleadoController@edit');
		Route::post('{ci}/edit', 'EmpleadoController@update');
		Route::post('delete', 'EmpleadoController@delete');
	});

// PEDIDOS
	Route::prefix('pedido')->group(function() {
		Route::get('/', 'PedidoController@index');
		Route::get('create', 'PedidoController@create');
		Route::post('create', 'PedidoController@add');
		Route::get('{id}/edit', 'PedidoController@edit');
		Route::post('{id}/edit', 'PedidoController@update');
		Route::get('{id}/show', 'PedidoController@show');
		Route::post('delete', 'PedidoController@delete');
	});

//laboratorio
	Route::prefix('laboratorio')->group(function(){

		Route::get('/',[LaboratorioController::class,'index' ]);
		Route::get('create',[LaboratorioController::class,'create' ]);
		Route::post('create',[LaboratorioController::class,'store' ]);
		Route::get('{id}/edit',[LaboratorioController::class,'edit' ]);
		Route::post('{id}/edit',[LaboratorioController::class,'update' ]);
		Route::post('delete',[LaboratorioController::class,'delete' ]);

	});

//inventario
	Route::prefix('inventario')->group(function(){
		Route::get('/',[InventarioController::class,'index' ]);
	});

//medicamento
	Route::prefix('medicamento')->group(function(){

		Route::get('/',[MedicamentoController::class,'index' ]);
		Route::get('create',[MedicamentoController::class,'create' ]);
		Route::post('create',[MedicamentoController::class,'store' ]);
		Route::get('{id}/edit',[MedicamentoController::class,'edit' ]);
		Route::post('{id}/edit',[MedicamentoController::class,'update' ]);
		Route::post('delete',[MedicamentoController::class,'delete' ]);

	});

//farmacia
	Route::prefix('farmacia')->group(function(){
		Route::get('/',[FarmaciaController::class,'index' ]);
		Route::get('create',[FarmaciaController::class,'create' ] );
		Route::post('create',[FarmaciaController::class,'store' ]);
		Route::get('{id}/edit',[FarmaciaController::class,'edit' ]);
		Route::post('{id}/edit',[FarmaciaController::class,'update' ]);
		Route::post('delete',[FarmaciaController::class,'delete' ]);

	});

	//compra
	Route::prefix('compra')->group(function(){

	    Route::get('/',[CompraController::class,'index' ]);
	    Route::get('{id}/create',[CompraController::class,'create' ] );
	    Route::post('create',[CompraController::class,'store' ]);
	    Route::get('{id}/edit',[CompraController::class,'edit' ]);
	    Route::post('{id}/edit',[CompraController::class,'update' ]);
	    Route::get('{id}/show', [CompraController::class,'show' ]);    
	});

});
