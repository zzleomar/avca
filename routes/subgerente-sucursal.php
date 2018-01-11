<?php 


Route::group(['prefix' => 'sucursal','middleware' => ['auth', 'CheckRoleSubgerenteSucursal']],function(){
	/*Route::get('/', function () {
	    return view('administrador-sucursal.index');
	});*/

	Route::get('/','SucursalController@index');

	Route::get('/vuelo/{id}','SucursalController@VueloDetalles');
	Route::post('/vuelo/ejecutado/{id}','SucursalController@CulminarVuelo');



	Route::get('/reportes/ingresos', function () {
		    return view('subgerente-sucursal.reportes');
		});
	


});

 ?>