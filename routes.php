<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/ajax/get/day/{dia}', function($dia){

	if (Request::ajax()) {
		return View::make('cronograma.dia'.$dia)->with("dia",$dia);
	}
});

Route::get('/informacion-util/', function(){
	
	return View::make('informacion-util')->with('activo','informacion-util');
});
Route::get('/cronograma', function()
{
	$viajes = array(
		array("salida"=> "BS AS","destino"=> ""),
		array("salida"=> "ROMA","destino"=> ""),
		array("salida"=> "ROMA","destino"=> ""),
		array("salida"=> "ROMA","destino"=> ""),
		array("salida"=> "ROMA","destino"=> "Atenas"),
		array("salida"=> "ATENAS","destino"=> ""),
		array("salida"=> "ATENAS","destino"=> "Creta"),
		array("salida"=> "Creta","destino"=> "Santorini"),
		array("salida"=> "Creta","destino"=> ""),
		array("salida"=> "ROMA","destino"=> "BS AS"),
		array("salida"=> "BS AS","destino"=> "")
	);
	return View::make('cronograma')->with('activo','cronograma')->with("viajes",$viajes);
});



Route::get('/resumen-de-traslados', function(){
	return View::make('resumen-de-traslados')->with('activo','resumen-de-traslados');
});

Route::get("/acreditacion", function(){
	return Redirect::to('/acreditaciones/convencionhf/acreditacion/');
});

Route::get('/', function()
{
	return Redirect::to('/informacion-util/');
});
