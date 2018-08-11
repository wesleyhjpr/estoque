<?php

namespace estoque\Http\Controllers;

use estoque\Http\Requests;
use Request;
use Auth;

class LoginController extends Controller
{
    //
    public function login()
    {
        $credenciais = Request::only('email', 'password');
        if( Auth::attempt($credenciais) ) {
        return "Usuário ".  Auth::user()->name  ." logado com sucesso";        
        }
        return "As credencias não são válidas";
    }
}
