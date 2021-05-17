<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RestauranteController extends Controller
{

    public function PedidosRestaurante(){
        $pedidos=DB::table('pedidos')->orderByDesc('created_at')->get();
        $num = DB::table('pedidos')->distinct()->select('numero_pedido','created_at','estado')->orderByDesc('created_at')->get();

        return view("restaurante.pedidos_restaurante")->with(['pedidos'=>$pedidos,'num'=>$num]);
    }

    public function UltimoPedido(){
        $pedidos=DB::table('pedidos')->orderByDesc('created_at')->get();
        $num = DB::table('pedidos')->select('numero_pedido','created_at','estado')->orderByDesc('created_at')->first();

        return view("restaurante.ultimo_pedido")->with(['pedidos'=>$pedidos,'num'=>$num]);
    }
}
