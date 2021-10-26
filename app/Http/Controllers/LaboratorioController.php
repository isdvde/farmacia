<?php

namespace App\Http\Controllers;
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
}