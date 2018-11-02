<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pedido;
use App\Oferta;
use App\Url;
use Carbon\Carbon;

class PedidosController extends Controller {
    public function listaPedidosCliente(){
        $user = Auth::guard('cliente')->user();
        $pedidos = Pedido::where('email_cliente', $user->email_cliente)
                      ->orderBy('pedido_id', 'desc')
                      ->get();
        return view('cliente.content.content_pedidos')->with('pedidos', $pedidos);
    }

    public function listaPedidosAgente(){
        $pedidos = Pedido::orderBy('pedido_id', 'desc')->orderBy('email_cliente', 'asc')->get();
        return view('agente.content.content_pedidos')->with('pedidos', $pedidos);
    }

    public function cadastraPedido(Request $request){
        $user = Auth::guard('cliente')->user();
        $pedido_id = Carbon::now('America/Sao_Paulo');

        $dados = ['pedido_id' => $pedido_id, 'email_cliente' => $user->email_cliente, 'descricao' => $request->descricao, 'qnt_adultos' => $request->qnt_adultos, 'qnt_criancas' => $request->qnt_criancas, 'qnt_bebes' => $request->qnt_bebes, 'tipo_viagem' => $request->tipo_viagem, 'tipo_passagem' => $request->tipo_passagem, 'preferencia'=> $request->preferencia, 'preco' => $request->preco];
        Pedido::create($dados);

        $link = 'link';
        $i = 0;
        while (true) {
            if(!isset($request[$link.$i]))
                break;
            $dados = ['pedido_id' => $pedido_id, 'email_cliente' => $user->email_cliente, 'url' => $request[$link.$i]];
            Url::create($dados);
            $i++;
        }

        return redirect()->action('PedidosController@listaPedidosCliente');
    }

    public function detalhesPedidoCliente($id){
        $user = Auth::guard('cliente')->user();
        $match = ['pedido_id' => decrypt($id), 'email_cliente' => $user->email_cliente];
        $pedido = Pedido::where($match)->first();
        $links = Url::where($match)->get();
        $ofertas = Oferta::where($match)->get();

        return view('cliente.content.content_detalhes_pedidos')->with(['pedido' => $pedido, 'links' => $links, 'ofertas' => $ofertas]);
    }

    public function detalhesPedidoAgente($id, $email){
        $match = ['pedido_id' => decrypt($id), 'email_cliente' => decrypt($email)];
        $pedido = Pedido::where($match)->first();
        $links = Url::where($match)->get();

        $user = Auth::guard('agente')->user();
        $match['email_agente'] = $user->email_agente;
        $oferta = Oferta::where($match)->first();

        return view('agente.content.content_detalhes_pedidos')->with(['pedido' => $pedido, 'links' => $links, 'oferta' => $oferta]);
    }
}
