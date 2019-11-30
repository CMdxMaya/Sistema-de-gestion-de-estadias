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

Route::get('/', function () {
    return view('welcome');
});





Route::get('/reporteentrada','entradas@reporteentrada')->name('reporteentrada');
Route::get('/buscarreporte/{idv}','entradas@buscarreporte')->name('buscre');
Route::get('/criterioreporte','entradas@criterioreporte')->name('criterioreporte');













Route::get('/venta','modulo_venta@venta')->name('venta');



route::get('/muestraReporJui/{idv}','DateRangeController@muestraReporJui')->name('muestraReporJui');






Route::post('/daterange1/fetch_data1{idv}', 'DateRangeController@fetch_data1')->name('daterange1.fetch_data1');




Route::get('/comboca','modulo_venta@comboca')->name('comboca');
Route::get('/detallep','modulo_venta@detallep')->name('detallep');
Route::get('/carrito','modulo_venta@carrito')->name('carrito');
Route::get('/borraventas','modulo_venta@borraventas')->name('borraventas');


route::get('/reporteventas','m_reporteventa@reporteventas');

Route::get('/daterange', 'DateRangeController@index');

Route::post('/daterange/fetch_data', 'DateRangeController@fetch_data')->name('daterange.fetch_data');

route::get('/reportedetalle/{idv}','DateRangeController@reportedetalle')->name('reportedetalle');


Route::get('/altaempleado','controlador_empleados@altaempleado')->name('altaempleado');;
Route::POST('/guardaempleado','controlador_empleados@guardaempleado')->name('guardaempleado');
Route::get('/reporteempleado','controlador_empleados@reporteempleado');
route::get('/eliminaempleado/{id_empleado}','controlador_empleados@eliminaempleado')->name('eliminaempleado');


Route::get('/modificaempleado/{id_empleado}','controlador_empleados@modificaempleado')->name('modificaempleado');
Route::POST('/guardaedicionempleado','controlador_empleados@guardaedicionempleado')->name('guardaedicionempleado');

route::get('/eliminaempleado1/{id_empleado}','controlador_empleados@eliminaempleado1')->name('eliminaempleado1');
route::get('/restauraempleado/{id_empleado}','controlador_empleados@restauraempleado')->name('restauraempleado');


Route::get('/altatipodeproductos','controlador_tipodeproductos@altatipodeproductos')->name('altatipodeproductos');;
Route::POST('/guardatipodeproducto','controlador_tipodeproductos@guardatipodeproducto')->name('guardatipodeproducto');
Route::get('/reportetipodeproductos','controlador_tipodeproductos@reportetipodeproductos');
route::get('/eliminatipodeproducto/{id_tipodeproducto}','controlador_tipodeproductos@eliminatipodeproducto')->name('eliminatipodeproducto');
Route::get('/modificatipodeproducto/{id_tipodeproducto}','controlador_tipodeproductos@modificatipodeproducto')->name('modificatipodeproducto');
Route::POST('/guardaediciontipodeproducto','controlador_tipodeproductos@guardaediciontipodeproducto')->name('guardaediciontipodeproducto');
route::get('/eliminatipodeproducto1/{id_tipodeproducto}','controlador_tipodeproductos@eliminatipodeproducto1')->name('eliminatipodeproducto1');
route::get('/restauratipodeproducto/{id_tipodeproducto}','controlador_tipodeproductos@restauratipodeproducto')->name('restauratipodeproducto');




Route::get('/altacliente','controlador_clientes@altacliente')->name('altacliente');;
Route::POST('/guardacliente','controlador_clientes@guardacliente')->name('guardacliente');
Route::get('/reporteclientes','controlador_clientes@reportecliente');
Route::get('/modificacliente/{id_cliente}','controlador_clientes@modificacliente')->name('modificacliente');
route::get('/eliminacliente/{id_cliente}','controlador_clientes@eliminacliente')->name('eliminacliente');
route::get('/eliminaclientes1/{id_cliente}','controlador_clientes@eliminaclientes1')->name('eliminaclientes1');
route::get('/restauraclientes/{id_cliente}','controlador_clientes@restauraclientes')->name('restauraclientes');



Route::POST('/guardaedicioncliente','controlador_clientes@guardaedicioncliente')->name('guardaedicioncliente');
Route::POST('/guardaedicioncliente','controlador_clientes@guardaedicioncliente')->name('guardaedicioncliente');




Route::get('/altapelicula','controlador_peliculas@altapelicula')->name('altapelicula');;
Route::POST('/guardapelicula','controlador_peliculas@guardapelicula')->name('guardapelicula');
Route::get('/reportepeliculas','controlador_peliculas@reportepeliculas');
Route::get('/modificapelicula/{id_pelicula}','controlador_peliculas@modificapelicula')->name('modificapelicula');
route::get('/eliminapelicula/{id_pelicula}','controlador_peliculas@eliminapelicula')->name('eliminapelicula');

Route::POST('/guardaedicionpelicula','controlador_peliculas@guardaedicionpelicula')->name('guardaedicionpelicula');




Route::get('/altamesa','curso@altamesa');
Route::POST('/guardamesa','curso@guardamesa')->name('guardamesa');
Route::get('/reportemesa','curso@reportemesa');
Route::get('/modificam/{idm}','curso@modificam')->name('modificam');
Route::POST('/guardaedicionm','curso@guardaedicionm')->name('guardaedicionm');
route::get('/eliminamesa/{id_mesa}','curso@eliminamesa')->name('eliminamesa');
route::get('/eliminamesa1/{id_mesa}','curso@eliminamesa1')->name('eliminamesa1');
route::get('/restaurarmesa/{id_mesa}','curso@restaurarmesa')->name('restaurarmesa');




Route::get('/altazona','zona@altazona');
Route::POST('/guardazona','zona@guardazona')->name('guardazona');
Route::get('/reportezona','zona@reportezona');
Route::get('/eliminazona/{id_zona}','zona@eliminazona')->name('eliminazona');
Route::get('/modificazona/{id_zona}','zona@modificazona')->name('modificazona');
Route::POST('/guardaedicionzona','zona@guardaedicionzona')->name('guardaedicionzona');
route::get('/eliminazona1/{id_zona}','zona@eliminazona1')->name('eliminazona1');
route::get('/restaurazona/{id_zona}','zona@restaurazona')->name('restaurazona');





route::get('/altausuarios','c_usuarios@altausuarios');
route::POST('/guardausuarios','c_usuarios@guardausuarios')->name('guardausuarios');
route::get('/reporteusuarios','c_usuarios@reporteusuarios');
route::get('/eliminausuarios/{id_usuario}','c_usuarios@eliminausuarios')->name('eliminausuarios');
route::get('/modificausuarios/{id_usuario}','c_usuarios@modificausuarios')->name('modificausuarios');
Route::POST('/guardaedicionusuario','c_usuarios@guardaedicionusuario')->name('guardaedicionusuario');
route::get('/eliminausuarios1/{id_usuario}','c_usuarios@eliminausuarios1')->name('eliminausuarios1');
route::get('/restaurausuarios/{id_usuario}','c_usuarios@restaurausuarios')->name('restaurausuarios');


route::get('/altaproductos','c_productos@altaproductos');
route::POST('/guardaproductos','c_productos@guardaproductos')->name('guardaproductos');
route::get('/reporteproductos','c_productos@reporteproductos');
route::get('/eliminaproductos/{id_producto}','c_productos@eliminaproductos')->name('eliminaproductos');
route::get('/modificaproductos/{id_producto}','c_productos@modificaproductos')->name('modificaproductos');
Route::POST('/guardaedicionproducto','c_productos@guardaedicionproducto')->name('guardaedicionproducto');
route::get('/eliminaproductos1/{id_producto}','c_productos@eliminaproductos1')->name('eliminaproductos1');
route::get('/restauraproductos/{id_producto}','c_productos@restauraproductos')->name('restauraproductos');


	   Route::get('/principal','controlador_clientes@principal');
	   Route::get('/principal','controlador_tipodeproductos@principal');
	   Route::get('/principal','controlador_empleados@principal');
	   Route::get('/principal','c_productos@principal');
	   Route::get('/principal','c_usuarios@principal');
	   Route::get('/principal','zona@principal');
	   Route::get('/principal','curso@principal');

	   	   Route::get('/principal1','contro_principal@principal1');
	   	   	   	   Route::get('/pago_realizado','modulo_venta@pago_realizado');


Route::get('/login1','accesoc@login')->name('login');
Route::POST('/valida','accesoc@valida')->name('valida');
Route::get('/principal','accesoc@principal')->name('principal');

Route::get('/cerrarsesion','accesoc@cerrarsesion')->name('cerrarsesion');



Route::auth();

Route::get('/home', 'HomeController@index');






