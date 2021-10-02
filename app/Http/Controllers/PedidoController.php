<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Laboratorio;
use App\Models\Farmacia;
use App\Models\Medicamento;

class PedidoController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('pedido.index')
		->with('pedidos', Pedido::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('pedido.create.create')
		->with('laboratorios', Laboratorio::all())
		->with('farmacias', Farmacia::all())
		->with('medicamentos', Medicamento::all());
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function add(Request $request)
	{
		$pedido = Pedido::create([
			'id_farmacia' => $request->farmacia,
			'id_laboratorio' => $request->laboratorio,
			'id_empleado' => $request->id_empleado,
			'forma_pago' => $request->forma_pago,
		]);

		for ($i=0; $i < count($request->medicamento); $i++) { 
			
			$pedido->pedidoMedicamentos()->create([
				'id_pedido' => $pedido->id,
				'id_medicamento' => $request->medicamento[$i],
				'cantidad' => $request->cantidad[$i],
			]);
		}
		//return $request->all();
		return redirect('pedido');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		return view('pedido.show')
		->with('pedido',Pedido::find($id))
		->with('medicamentos',Pedido::find($id)->pedidoMedicamentos)
		;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		return view('pedido.edit.edit')
		->with('laboratorios', Laboratorio::all())
		->with('farmacias', Farmacia::all())
		->with('medicamentos', Medicamento::all())
		->with('pedido',Pedido::find($id))
		->with('pmedicamentos',Pedido::find($id)->pedidoMedicamentos)
		;	

		//return Pedido::find($id)->pedidoMedicamentos;

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$pedido = Pedido::find($id); 

		$pedido->update([
			'forma_pago' => $request->forma_pago,
		]);

		//for ($i=0; $i < count($request->cantidad); $i++) { 
		$i = 0;
		foreach($pedido->pedidoMedicamentos as $medicamento) {
			$medicamento->update([
				'cantidad' => $request->cantidad[$i],
			]);
			$i++;
		}

		return redirect('pedido');
		//return $pedido->pedidoMedicamentos;

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function delete(Request $request)
	{
		$pedido = Pedido::find($request->id);
		$pedido->delete();
		return redirect('pedido');
	}
}
