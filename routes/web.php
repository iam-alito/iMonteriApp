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


Route::resource('roles', 'RolesController');

Route::resource('usuariosRols', 'UsuariosRolController');

Route::resource('usuarios', 'UsuariosController');

Route::resource('estados', 'EstadosController');

Route::resource('tipoConceptos', 'TipoConceptosController');

Route::resource('conceptos', 'ConceptosController');

Route::resource('permisos', 'PermisosController');

Route::resource('valoresConceptos', 'ValoresConceptoController');

Route::resource('tipoIdentificacions', 'TipoIdentificacionController');

Route::resource('personas', 'PersonasController');

Route::resource('combos', 'CombosController');