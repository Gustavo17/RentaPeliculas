<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
| Metodo Http post, get, put, delete
*/

Route::get('/','FrontController@index');
Route::get('contacto','FrontController@contacto');
Route::get('reviews','FrontController@reviews');
Route::get('admin','FrontController@admin');

Route::resource('usuario','UsuarioController');
Route::resource('genero','GeneroController');
Route::get('generos','GeneroController@listing');

Route::resource('pelicula','MovieController');

Route::resource('director','DirectorController');

Route::resource('actor','ActorController');

Route::resource('cliente','ClienteController');

Route::resource('alquiler','AlquilerController');

Route::resource('tienda','TiendaController');

Route::resource('alquiler','AlquilerController');

Route::resource('log','LogController');
Route::get('logout','LogController@logout');


//LAS RUTAS PRACTICADAS DE LOS VIDEOS ANTERIORES

/*Route::get('name/{nombre}','PruebaController@NOMBRE');	
Route::get('controlador','PruebaController@index');

Route::resource('movie','MovieController');


Route::get('name/{nombre}',function($nombre){
	return 'Mi nombre es '.$nombre;
});
Route::get('edad/{edad}',function($edad){
	return 'Mi edad es : '.$edad;
});
Route::get('edad2/{edad2?}',function($edad2=23){
	return 'Mi edad es '.$edad2;
});
Route::get('prueba',function(){
	return 'Hola desde mi primer laravel app cinema';
});
Route::get('/', function () {
    return view('welcome');
});
*/
