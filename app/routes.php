<?php

/*
|--------------------------------------------------------------------------
| Rutas de la aplicacion
|--------------------------------------------------------------------------
|	Aqui es donde se registar todas las rutas de la aplicacion.
|
*/

/*
	Rutas del controlador User
*/
Route::post('/users/store','UserController@store');
Route::post('/users/update/{id}','UserController@update');
Route::get('/users/destroy/{id}','UserController@destroy');


Route::controller('/users', 'UserController');


