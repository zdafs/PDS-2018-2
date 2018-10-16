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

Route::redirect('/cliente', '/cliente/pedidos');

Route::get('/cliente/pedidos', function () {
    return view('cliente.content.content_pedidos');
});

Route::get('/cliente/conversas', function () {
    return view('placeholder');
});

Route::get('/cliente/config', function () {
    return view('placeholder');
});
