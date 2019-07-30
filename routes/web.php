<?php

use App\Http\Controllers\principalController;


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


Route::get('/index', 'principalController@vista');

/* Clientes */

Route::resource('/clientes', 'clientesController');
Route::get('ocultar_cliente/{id}', 'clientesController@ocultar');
Route::get('ver_ocultosC', 'clientesController@ver_OcultosC');

/* Elientes */

Route::resource('/empleados', 'empleadosController');
Route::get('ocultar_empleado/{id}', 'empleadosController@ocultar');
Route::get('ver_ocultosE', 'empleadosController@ver_ocultosE');

/* PDF */

Route::get('/mirarPDF', 'presupuestosController@verPDF')->name('verPDF');
Route::get('/descargarPDF', 'presupuestosController@descargarPDF')->name('descaPDF');

/* Telegram */


Route::get('/', 'TelegramBotController@sendMessage');
Route::post('/send-message', 'TelegramBotController@storeMessage');
Route::get('/send-photo', 'TelegramBotController@sendPhoto');
Route::post('/store-photo', 'TelegramBotController@storePhoto');
Route::get('/updated-activity', 'TelegramBotController@updatedActivity');

/* Presupuesto */

Route::get('/crearPresupuesto', 'presupuestosController@index');
Route::post('/crearPresu', 'presupuestosController@store');
Route::put('/editarPresu/{id}', 'presupuestosController@update');
Route::get('/creado', 'presupuestosController@index2');
