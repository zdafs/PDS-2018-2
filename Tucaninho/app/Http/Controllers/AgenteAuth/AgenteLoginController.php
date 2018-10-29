<?php

namespace App\Http\Controllers\AgenteAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AgenteLoginController extends Controller {
    public function authenticate(Request $request){
      $credentials = ['email_agente' => $request->email, 'password' => $request->pwd];

      if(Auth::guard('agente')->attempt($credentials)) {
        return redirect('/agente/pedidos');
      }

      return redirect('/');
    }
}
