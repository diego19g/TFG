<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PedidosController extends Controller
{
    public function MostrarPedidos(){
        $email=session('email');
        $pedidos=DB::table('pedidos')->where(['email'=>$email])->get();

        return view("cliente.pedidos_cliente")->with(['pedidos'=>$pedidos]);
    }
}
