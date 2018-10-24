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
    return view('home');
});

Route::middleware('clienteAuth')->group(function(){
  Route::get('/cliente/pedidos', 'PedidosController@listaPedidos');

  Route::get('/cliente/logout', 'ClienteController@logout');

  Route::get('/cliente/conversas', function () {
      return view('placeholder');
  });

  Route::get('/cliente/config', function () {
      return view('placeholder');
  });

  Route::get('/cliente/pedidos/detalhes/{id}', 'PedidosController@detalhesPedido');

  Route::get('/cliente/novo', function(){
      return view('cliente.content.content_novo_pedido');
  });

  Route::post('/cliente/novo', 'PedidosController@cadastraPedido');
});

Route::post('/login', 'ClienteAuth\ClienteLoginController@authenticate');

Route::post('/register', 'ClienteAuth\ClienteRegisterController@create');
