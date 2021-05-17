<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PedidosController extends Controller
{
    public function MostrarPedidos(){
        $email=session('email');
        $pedidos=DB::table('pedidos')->where(['email'=>$email])->orderByDesc('created_at')->get();

        return view("cliente.pedidos_cliente")->with(['pedidos'=>$pedidos]);
    }

    public function TotalPedidos(){
        $email=session('email');
        $pedidos=DB::table('pedidos')->where(['email'=>$email])->orderByDesc('created_at')->get();

        return view("cliente.pedidos_cliente")->with(['pedidos'=>$pedidos]);
    }
}
