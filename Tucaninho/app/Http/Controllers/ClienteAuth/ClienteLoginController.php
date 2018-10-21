<?php

namespace App\Http\Controllers\ClienteAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ClienteLoginController extends Controller
{
    public function authenticate(Request $request){
      $credentials = $request->only('email', 'pwd');

      if(Auth::guard('cliente')->attempt(['email_cliente' => $credentials['email'], 'senha_cliente' => $credentials['pwd']])){
        return Auth::guard('cliente')->user()->nome_cliente.' logado com sucesso';
      }

      return 'Usuário não cadastrado';
    }
}
