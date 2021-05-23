<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Pedido;

class RestauranteController extends Controller
{

    public function PedidosRestaurante(){
        $pedidos=DB::table('pedidos')->orderByDesc('created_at')->get();
        $num = DB::table('pedidos')->distinct()->select('numero_pedido','created_at','estado')->orderByDesc('created_at')->get();

        return view("restaurante.pedidos_restaurante")->with(['pedidos'=>$pedidos,'num'=>$num]);
    }

    public function UltimoPedido(){
        $ped=DB::table('pedidos')->orderByDesc('created_at')->get();
        $numero = DB::table('pedidos')->select('numero_pedido','created_at','estado')->orderByDesc('created_at')->first();

        return view("restaurante.ultimo_pedido")->with(['ped'=>$ped,'numero'=>$numero]);
    }

    public function AccederPedido(Request $request){
        $numero_pedido=$request->numero_pedido;
        $pedido=DB::table('pedidos')->distinct()->where(['numero_pedido'=>$numero_pedido])->get();   
        $num = DB::table('pedidos')->distinct()->select('numero_pedido','created_at','total')->where(['numero_pedido'=>$numero_pedido])->get();

        return view("restaurante.modificar_pedido")->with(['pedido'=>$pedido,'num'=>$num]);
    }

    public function EnCocina($numero_pedido){                
        $pedido=Pedido::where('numero_pedido',$numero_pedido)->get();   
        $num = DB::table('pedidos')->distinct()->select('numero_pedido','created_at','total')->where(['numero_pedido'=>$numero_pedido])->get();
        
        foreach($pedido as $ped){
            $ped->estado='En cocina';             
            $ped->save(); 
        }                  

        return view("restaurante.modificar_pedido")->with(['pedido'=>$pedido,'num'=>$num]);
    }

    public function PedidoConfirmado($numero_pedido){                
        $pedido=Pedido::where('numero_pedido',$numero_pedido)->get();  
        $num = DB::table('pedidos')->distinct()->select('numero_pedido','created_at','total')->where(['numero_pedido'=>$numero_pedido])->get(); 
        
        foreach($pedido as $ped){
            $ped->estado='Pedido confirmado';             
            $ped->save(); 
        }                  

        return view("restaurante.modificar_pedido")->with(['pedido'=>$pedido,'num'=>$num]);
    }

    public function Enviado($numero_pedido){                
        $pedido=Pedido::where('numero_pedido',$numero_pedido)->get();   
        $num = DB::table('pedidos')->distinct()->select('numero_pedido','created_at','total')->where(['numero_pedido'=>$numero_pedido])->get();
        
        foreach($pedido as $ped){
            $ped->estado='Enviado';             
            $ped->save(); 
        }                  

        return view("restaurante.modificar_pedido")->with(['pedido'=>$pedido,'num'=>$num]);
    }

    public function Entregado($numero_pedido){                
        $pedido=Pedido::where('numero_pedido',$numero_pedido)->get();   
        $num = DB::table('pedidos')->distinct()->select('numero_pedido','created_at','total')->where(['numero_pedido'=>$numero_pedido])->get();
        
        foreach($pedido as $ped){
            $ped->estado='Entregado';             
            $ped->save(); 
        }                  

        return view("restaurante.modificar_pedido")->with(['pedido'=>$pedido,'num'=>$num]);
    }
}
