<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laboratorio;

class LaboratorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laboratorios = Laboratorio::all();
        return view('laboratorio.index')->with('laboratorios',$laboratorios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laboratorio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $laboratorios= new Laboratorio();

        $laboratorios->id = $request->get('id');
        $laboratorios->nombre = $request->get('nombre');
        $laboratorios->direccion= $request->get('direccion');
        $laboratorios->telefono = $request->get('telefono');

        $laboratorios->save();

        return redirect('/laboratorio');
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
        $laboratorio = Laboratorio::find($id);
        return view('laboratorio.edit')->with('laboratorio',$laboratorio);
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
        $laboratorio= Laboratorio::find($id);

        $laboratorio->id = $request->get('id');
        $laboratorio->nombre = $request->get('nombre');
        $laboratorio->direccion= $request->get('direccion');
        $laboratorio->telefono = $request->get('telefono');

        $laboratorio->save();

        return redirect('/laboratorio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
	{
		$laboratorio = laboratorio::find($request->id);
		$laboratorio->delete();
		return redirect('laboratorio');
	}
}
