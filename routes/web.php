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
    return redirect('/login');
});


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('categorias', 'CategoriasController');

Route::resource('tipoServicios', 'TipoServiciosController');

Route::resource('servicios', 'ServiciosController');

Route::resource('elementos', 'ElementosController');

Route::resource('catElementos', 'Cat_ElementosController');

Route::resource('categoriasElementos', 'CategoriasElementosController');

Route::resource('fotos', 'FotosController');

Route::resource('serviciosElementos', 'ServiciosElementosController');

Route::resource('favoritosElementos', 'FavoritosElementosController');

Route::resource('favoritosElementos', 'FavoritosElementosController');

Route::resource('comentarios', 'ComentariosController');