<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Ingreso;
/*		Codigo Simple de rutas
Route::get('/', function () {
	$ingresos = Ingreso::all();
    return view('administracion');
});
Route::get('capturar', function(){
	return view('capturar');
});
Route::post('capturar', function(){
	return "Aqui va el codigo para registrar con elloquent";
});
*/
Route::get('/', 'IngresoController@index');
Route::post('/', 'IngresoController@remove');
Route::get('capturar', 'IngresoController@create');
Route::post('capturar', 'IngresoController@store');
