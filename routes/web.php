<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('empleado')->group(function() {

	Route::get('/', 'EmpleadoController@index');
	Route::get('create', 'EmpleadoController@create');
	Route::post('create', 'EmpleadoController@add');
	Route::get('{id}/edit', 'EmpleadoController@edit');
	Route::post('{id}/edit', 'EmpleadoController@update');
	Route::post('delete', 'EmpleadoController@delete');

});

//farmacias
Route::get('farmacias',[farmaciaController::class,'index' ]);

Route::get('farmacias/create',[farmaciaController::class,'create' ] );

Route::get('farmacias/{farmacia}', [farmaciaController::class,'show' ]);

//pasante

//auxiliar

//administrador
