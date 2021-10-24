<?php

namespace App\Http\Controllers;

use App\Models\Farmacia;
use App\Models\Empleado;
use App\Models\Pedido;
use App\Models\Laboratorio;
use Illuminate\Http\Request;

class FarmaciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $farmacia = Farmacia::all();
        return view('farmacia.index')->with('farmacias',$farmacia);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('farmacia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $farmacias= new Farmacia();

        $farmacias->nombre = $request->get('nombre');
        $farmacias->ubicacion= $request->get('ubicacion');

        $farmacias->save();

        return redirect('/farmacia');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('farmacia.show')
		->with('farmacia',Farmacia::find($id))
		->with('empleados',Farmacia::find($id)->empleados)
        ->with('pedidos',Farmacia::find($id)->pedidos)
        ->with('laboratorios',Farmacia::find($id)->laboratorios)
        ;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Farmacia  $farmacia
     * @return \Illuminate\Http\Response
     */

    public function edit( $id)
    {
        $farmacia = Farmacia::find($id);
        return view('farmacia.edit')->with('farmacia',$farmacia);
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
        $farmacia= Farmacia::find($id);

        $farmacia->nombre = $request->get('nombre');
        $farmacia->ubicacion= $request->get('ubicacion');

        $farmacia->save();

        return redirect('/farmacia');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $farmacia = Farmacia::find($request->id);
		$farmacia->delete();
		return redirect('farmacia');
    }
}
