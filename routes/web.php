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

/* PDF */
Route::get('/presupuesto', 'presupuestoController@crearPDF');
Route::get('/descargar', 'presupuestoController@descargarPDF')->name('desca');

/* Telegram */
Route::get('/updated-activity', 'TelegramBotController@updatedActivity');

// Login
Route::get('login', 'loginController@interfaz');
Route::post('exito', 'loginController@verificar');

