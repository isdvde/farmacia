<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\FarmaciaController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\LaboratorioController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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

//pedido
Route::prefix('pedido')->group(function(){

    Route::get('/',[PedidoController::class,'index' ]);
    Route::get('create',[PedidoController::class,'create' ]);
    Route::post('create',[PedidoController::class,'store' ]);
    Route::get('{id}/edit',[PedidoController::class,'edit' ]);
    Route::post('{id}/edit',[PedidoController::class,'update' ]);
    Route::post('delete',[PedidoController::class,'delete' ]);

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
