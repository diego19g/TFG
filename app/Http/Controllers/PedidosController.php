<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PedidosController extends Controller
{
    public function MostrarPedidos(){
        $email=session('email');
        $pedidos=DB::table('pedidos')->where(['email'=>$email])->orderByDesc('created_at')->get();
        $num = DB::table('pedidos')->distinct()->select('numero_pedido','created_at','estado')->where(['email'=>$email])->orderByDesc('created_at')->get();

        return view("cliente.pedidos_cliente")->with(['pedidos'=>$pedidos,'num'=>$num]);
    }

    public function TotalPedidos(){
        $email=session('email');
        $pedidos=DB::table('pedidos')->where(['email'=>$email])->orderByDesc('created_at')->get();
        $num = DB::table('pedidos')->distinct()->select('numero_pedido','created_at','estado')->where(['email'=>$email])->orderByDesc('created_at')->get();

        return view("cliente.pedidos_cliente")->with(['pedidos'=>$pedidos,'num'=>$num]);
    }

    public function SeguimientoPedido(Request $request){
        $email=session('email');
        $numero_pedido=$request->numero_pedido;
        $estado = DB::table('pedidos')->distinct()->select('estado')->where(['email'=>$email,'numero_pedido'=>$numero_pedido])->get();

        return view("cliente.seguimiento_pedido")->with(['estado'=>$estado]);
    }
}
