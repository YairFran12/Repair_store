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

Route::get('principal', 'principalController@index');

/* Clientes */

Route::resource('/clientes', 'clientesController');
Route::get('ocultar_cliente/{id}', 'clientesController@ocultar');
Route::get('ver_ocultosC', 'clientesController@ver_OcultosC');

/* Elientes */

Route::resource('/empleados', 'empleadosController');
Route::get('ocultar_empleado/{id}', 'empleadosController@ocultar');
Route::get('ver_ocultosE', 'empleadosController@ver_ocultosE');
