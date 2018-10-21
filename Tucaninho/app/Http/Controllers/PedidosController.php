<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pedido;

class PedidosController extends Controller {
  public function listaPedidos(){
    $user = Auth::guard('cliente')->user();
    $pedidos = Pedido::where('email_cliente', $user->email_cliente)
                          ->orderBy('pedido_id', 'desc')
                          ->get();
    return view('cliente.content.content_pedidos')->with('pedidos', $pedidos);
  }
}
