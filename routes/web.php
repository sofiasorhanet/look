<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/peliculas', 'MovieController@lista');
Route::get('/pelicula/{id}', 'MovieController@descripcion');

Route::get('/agregarPelicula', 'MovieController@mostrarFormulario');
Route::post('/agregarPelicula', 'MovieController@agregarPelicula');

Route::get('/editaPelicula/{id}', 'MovieController@editar');
Route::get('/editaPelicula', 'MovieController@actualizar')->name('editaPelicula');

Route::get('/borrarPelicula/{id}', 'MovieController@destroy');
// Ruta :: get ( '/ borrarPelicula / {id}' , 'MovieController @ destroy' );

Route::get('/actores','ActorsController@listar');
Route::get('/actores/{id}','ActorsController@describirse');

Route::get('/agregarActor', 'ActorsController@mostrar');
Route::post('/agregarActor', 'ActorsController@agregarActor');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
