<?php

use Illuminate\Http\Request;

header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Authorization,Origin, Content-Type, X-Auth-Token, X-XSRF-TOKEN');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

      Route::get('catalogos', 'CatalogosController@index');
      Route::get('catalogos/{id}', 'CatalogosController@show');
      Route::post('catalogos', 'CatalogosController@create');
      Route::put('catalogos/{id}', 'CatalogosController@update');
      Route::delete('catalogos/{id}', 'CatalogosController@destroy');
      Route::get('catalogosusuario', 'CatalogosController@indexusuario');
      
      Route::get('Imagenes', 'ImagenesController@index');
      Route::get('Imagenes/{id}', 'ImagenesController@show');
      Route::post('Imagenes', 'ImagenesController@create');
      Route::put('Imagenes/{id}', 'ImagenesController@update');
      Route::delete('Imagenes/{id}', 'ImagenesController@destroy');
	  Route::get('Imagenesusuario', 'ImagenesController@indexusuario');

