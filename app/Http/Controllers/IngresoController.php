<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DB;
use App\Ingreso as Ingreso;

class IngresoController extends Controller
{
	public function index()
	{
		#$ingresos = Ingreso::all();
		$ingresos = Ingreso::orderBy('id_ingreso', 'DESC')->get();
    	return view('administracion', compact('ingresos'));
	}
	public function create()
	{
   		return view('capturar');
	}
    public function store()
	{
		$this->validate(request(), [
			'concepto' => ['required', 'max:100'],
			'monto' => ['required', 'numeric']
		]);
		$datos = request()->all();
		Ingreso::create($datos);
		/*
    	$ingreso = new Ingreso;
    	$ingreso->concepto = $request->concepto;
    	$ingreso->monto = $request->monto;
    	$ingreso->save();
    	return redirect('/');
    	*/
    	return redirect()->to('/');
	}
	public function remove()
	{
		$valor = request()->only('id_ingreso');
		$deletedRows = Ingreso::where('Id_ingreso', $valor)->delete();
		return redirect()->to('/');
	}
}
