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
      
      Route::get('imagenes', 'ImagenesController@index');
      Route::get('imagenes/{id}', 'ImagenesController@show');
      Route::get('imagenes2/{id}', 'ImagenesController@show2');
      Route::post('imagenes', 'ImagenesController@create');
      Route::put('imagenes/{id}', 'ImagenesController@update');
      Route::delete('imagenes/{id}', 'ImagenesController@destroy');
	  Route::get('imagenesusuario', 'ImagenesController@indexusuario');

