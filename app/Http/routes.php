<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/', 'HomeController@index');
//Route::post('login', 'LoginController@login');
//clientes
Route::get('clientes', 'ClientsController@clients');
Route::get('clientes/{id}', 'ClientsController@details');
Route::post('clientes', 'ClientsController@search');

//cotizaciones
Route::get('cotizaciones', 'QuotesController@quotes');
Route::get('cotizaciones', 'QuotesController@quotes');
Route::get('seeQuotes', 'QuotesController@seeQuotes');
Route::post('cotizacion', 'QuotesController@setquote');
Route::get('nueva', 'QuotesController@newQuotes');
Route::get('search/{id}', 'QuotesController@getUsers');
Route::get('cotizacion/{id}', 'QuotesController@getquote');
Route::get('cotizacionP/{id}', 'QuotesController@create');
Route::get('producto/{id}', 'QuotesController@getProduct');
Route::post('cotizacionDetail', 'QuotesController@addProduct');
//Route::get('cotizacionDetail/{prd}/{so}', 'QuotesController@addProduct');
Route::get('agregarDetalle/{so}/{prd}/{cant}/{id}','QuotesController@InsertProduct');
Route::get('addcotizacion/{id}', 'QuotesController@addCotizacion');
Route::get('eliminarCotizacion/{id}','QuotesController@delete');
Route::Post('cambiarUsuario/','QuotesController@changeUser');
Route::get('cotizacionD/{id}', 'QuotesController@finish');
//Route::post('cliente', 'QuotesController@getUser');

//ordenes
Route::get('ordersWeb', 'OrdersWebController@ordersWeb');
Route::get('newOrders', 'OrdersWebController@newOrders');
Route::get('seeOrders', 'OrdersWebController@seeOrders');
Route::post('pedidos', 'OrdersWebController@setquote');
Route::get('pedido/{id}', 'OrdersWebController@getquote');
Route::get('pedidop/{id}', 'OrdersWebController@create');
Route::get('eliminarPedido/{id}','OrdersWebController@delete');
Route::Post('cambiarUsuarioP/','OrdersWebController@changeUser');
Route::get('agregarDetalleP/{so}/{prd}/{cant}/{id}','OrdersWebController@InsertProduct');
Route::get('eliminarArticulo/{id}/{articulo}','OrdersWebController@deleteA');
Route::post('cambiarcantidad','OrdersWebController@refreshCantidad');

Route::get('ordersSap', 'OrdersSapController@ordersSap');
Route::get('bills', 'BillsController@bills');



Route::auth();


