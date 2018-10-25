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
// acciones de los botones
Route::get('usuario','usuarioController@usuario');
Route::get('crear-usuario','usuarioController@getcrear');
Route::post('guardar','usuarioController@guardarUsuario');
// no se envia como variable $
Route::get('eliminar-usuario/{id}','usuarioController@eliminar');
Route::get('editar-usuario/{id}','usuarioController@getFormEdit');
Route::post('editar/{id}','usuarioController@update');


//adeudo
Route::get('adeudo-menu','adeudoController@getadeudo');
Route::post('guardar-adeudo','adeudoController@guardar');
Route::get('adeudo-total','adeudoController@adeudototal');
Route::get('cobranza/{id}','adeudoController@cobranza');
Route::get('eliminar-cobranza/{id}','adeudoController@eliminar');
Route::get('editar-adeudo/{id}','adeudoController@getEditar');
Route::post('edit/{id}','adeudoController@update2');