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

/* Empleados */
Route::resource('/empleados', 'empleadosController');
Route::get('ocultar_empleado/{id}', 'empleadosController@ocultar');
Route::get('ver_ocultosE', 'empleadosController@ver_ocultosE');

// Productos
Route::resource('/productos', 'productosController');
Route::get('ocultar_producto/{id}', 'productosController@ocultar');
Route::get('ver_ocultosP', 'productosController@ver_ocultosP');

// Ventas
Route::get('/ventas', 'ventasController@vista');
Route::get('/ventitas/{nombre}', 'ventasController@primera_seleccion');
Route::get('/ventitas_marca/{marca}', 'ventasController@segunda_seleccion');
Route::post('/insertar_venta', 'ventasController@insertar');
Route::get('ver_ventas', 'ventasController@ver_ventasR');

// Compras
Route::get('/compras', 'comprasController@vista');
Route::get('/compritas/{nombre}', 'comprasController@primera_seleccion');
Route::get('/compritas_marca/{marca}', 'comprasController@segunda_seleccion');
Route::post('/insertar_compra', 'comprasController@insertar');
Route::get('ver_compras', 'comprasController@ver_comprasR');

Route::get('/mirarPDF', 'presupuestosController@verPDF')->name('verPDF');
Route::get('/descargarPDF', 'presupuestosController@descargarPDF')->name('descaPDF');

/* Telegram */


Route::get('/', 'TelegramBotController@sendMessage');
Route::post('/send-message', 'TelegramBotController@storeMessage');
Route::get('/send-photo', 'TelegramBotController@sendPhoto');
Route::post('/store-photo', 'TelegramBotController@storePhoto');
/* PDF */
Route::get('/presupuesto', 'presupuestoController@crearPDF');
Route::get('/descargar', 'presupuestoController@descargarPDF')->name('desca');

/* Telegram */
Route::get('/updated-activity', 'TelegramBotController@updatedActivity');

/* Presupuesto */

Route::get('/crearPresupuesto', 'presupuestosController@index');
Route::post('/crearPresu', 'presupuestosController@store');
Route::put('/editarPresu/{id}', 'presupuestosController@update');
Route::get('/creado', 'presupuestosController@index2');
