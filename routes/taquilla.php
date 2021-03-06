<?php 
Route::group(['prefix' => 'taquilla','middleware' => ['auth', 'CheckRoleOperador', 'CheckRoleSucursal']],function(){
	Route::get('/','TaquillaController@index');
	Route::get('inicio','TaquillaController@index');

	Route::get('vuelo/disponibilidad/{a}/{b}', 'TaquillaController@ajaxVueloDisp');
	Route::get('/vuelo/{origen}/{destino}', 'TaquillaController@ajaxVuelo');
	Route::get('/vuelo/pasajero/{b}/{n}/{id}/{auxB}', 'TaquillaController@ajaxVueloPasajero');

	Route::post('/accion/{a}','TaquillaController@Accion');

	Route::get('confirmar-boleto','TaquillaController@ContenidoChequear');	
	Route::get('confirmar-boleto/','TaquillaController@ContenidoChequear');	
	Route::get('confirmar/boleto/{id}/{vuelo}','TaquillaController@ChequearBoletoAjax');
	Route::post('confirmar-boleto','TaquillaController@ChequearBoleto');

	Route::get('listachequeo','ListaChequeo@ajaxInicio');
	Route::post('listaimprimir','ListaChequeo@listaimprimir');
	



});


 ?>