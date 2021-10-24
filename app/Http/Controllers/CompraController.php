<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\Pedido;
use App\Models\Inventario;
use App\Models\PedidoMedicamento;
use App\Models\Medicamento;
use App\Models\Empleado;
use App\Models\CompraMedicamento;
use App\Models\Laboratorio;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compras = Compra::all();
		return view('compra.index')->with('compras',$compras);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('compra.create.create')
		->with('pedido', Pedido::find($id))
        ->with('pedidoMedicamento', pedidoMedicamento::all())
        ->with('pmedicamentos',Pedido::find($id)->pedidoMedicamentos)
        ->with('medicamentos', Medicamento::all())
        ;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        $compra = Compra::create([
            'id_pedido' =>$request->id_pedido,
			'vencimiento' => $request->vencimiento,
			'cancelado' => $request->cancelado,
		]);
        for ($i=0; $i < count($request->medicamento); $i++) {
            if($request->checkMedicamento[$i]==1){
                
			$compra->compraMedicamentos()->create([
              
				'id_compra' => $compra->id,
				'id_medicamento' => $request->medicamento[$i],
				// 'cantidad' => $request->cantidad[$i],
			]);

           }
		}

		

		return redirect('/compra');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        return view('compra.show')
		->with('compra',Compra::find($id))
        ->with('medicamentos',Compra::find($id)->compraMedicamentos)
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
        $compra = Compra::find($id);
        return view('compra.edit')
        ->with('compra',$compra);
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
        $compra= Compra::find($id);

		$compra->vencimiento= $request->get('vencimiento');
		$compra->cancelado = $request->get('cancelado');

		$compra->save();

		return redirect('/compra');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
