<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClienteController extends Controller {
  public function logout(){
    Auth::guard('cliente')->logout();
    return redirect('/');
  }
}
