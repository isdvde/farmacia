<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicamento;

class MedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicamentos = Medicamento::all();
        return view('medicamento.index')->with('medicamentos',$medicamentos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicamento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medicamentos= new Medicamento();

        $medicamentos->id = $request->get('id');
        $medicamentos->monodroga = $request->get('monodroga');
        $medicamentos->presentacion= $request->get('presentacion');
        $medicamentos->accion= $request->get('accion');
        $medicamentos->precio = $request->get('precio');

        $medicamentos->save();

        return redirect('/medicamento');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicamento = Medicamento::find($id);
        return view('medicamento.edit')->with('medicamento',$medicamento);
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
        $medicamento= Medicamento::find($id);

        $medicamento->monodroga = $request->get('monodroga');
        $medicamento->presentacion= $request->get('presentacion');
        $medicamento->accion= $request->get('accion');
        $medicamento->precio = $request->get('precio');

        $medicamento->save();

        return redirect('/medicamento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $medicamento = Medicamento::find($request->id);
		$medicamento->delete();
		return redirect('medicamento');
    }
}
