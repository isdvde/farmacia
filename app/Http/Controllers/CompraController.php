<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($pid = null)
    {
        $compras = Compra::all();
		return view('compra.index')
        ->with('compras',$compras)
        ->with('pid', $pid)
        ;
    }
}