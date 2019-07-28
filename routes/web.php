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

Route::get('/PDF', function () {

    $pdf = PDF::loadHTML('<h1>Test</h1>');
    return $pdf->stream();
});

Route::get('principal', 'principalController@index');

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

/* PDF */
Route::get('/presupuesto', 'presupuestoController@crearPDF');
Route::get('/descargar', 'presupuestoController@descargarPDF')->name('desca');

/* Telegram */
Route::get('/updated-activity', 'TelegramBotController@updatedActivity');
