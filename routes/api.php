<?php

use Illuminate\Http\Request;




Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

      Route::get('catalogos', 'catalogosController@index');
      Route::get('catalogos/{id}', 'catalogosController@show');
      Route::post('catalogos', 'catalogosController@create');
      Route::put('catalgogos/{id}', 'catalogosController@update');
      Route::delete('catalogos/{id}', 'catalogosController@destroy');
	Route::get('catalogosusuario', 'catalogosController@indexusuario');

