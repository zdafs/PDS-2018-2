<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pedido;
use Carbon\Carbon;

class PedidosController extends Controller {
  public function listaPedidos(){
    $user = Auth::guard('cliente')->user();
    $pedidos = Pedido::where('email_cliente', $user->email_cliente)
                          ->orderBy('pedido_id', 'desc')
                          ->get();
    return view('cliente.content.content_pedidos')->with('pedidos', $pedidos);
  }

  public function cadastraPedido(Request $request){
    $user = Auth::guard('cliente')->user();
    $dados = ['pedido_id' => Carbon::now(), 'email_cliente' => $user->email_cliente, 'url' => $request->link, 'descricao' => $request->descricao, 'qnt_adultos' => $request->qnt_adultos, 'qnt_criancas' => $request->qnt_criancas, 'qnt_bebes' => $request->qnt_bebes, 'tipo_viagem' => $request->tipo_viagem, 'tipo_passagem' => $request->tipo_passagem, 'preferencia'=> $request->preferencia, 'preco' => $request->preco];

    Pedido::create($dados);
    return redirect()->action('PedidosController@listaPedidos');
  }
}
