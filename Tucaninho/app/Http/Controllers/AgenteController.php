<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgenteController extends Controller
{
    public function logout(){
        Auth::guard('agente')->logout();
        return redirect('/');
    }
}
