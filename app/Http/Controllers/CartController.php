<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Pedido;
use DB;

class CartController extends Controller
{
    public function shop(){
        $products=Product::all();
        //dd($products);
        return view('cliente.shop')->withTitle('E-COMMERCE STORE | SHOP')->with(['products'=>$products]);
    }

    public function cart(){
        $cartCollection=\Cart::getContent();
        //dd($cartCollection);
        return view('cliente.cart')->with(['cartCollection'=>$cartCollection]);
    }

    public function add(Request $request){
        \Cart::add(array(
            'id'=>$request->id,
            'name'=>$request->name,
            'price'=>$request->price,
            'quantity'=>$request->quantity,
            'attributes'=>array(
                'image'=>$request->img,
                'slug'=>$request->slug
            )
        ));
        return redirect()->route('cart.index')->withTitle('E-COMMERCE STORE | SHOP');
    }

    public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->withTitle('E-COMMERCE STORE | SHOP');
    }

    public function update(Request $request){
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index');
    }

    public function clear(){
        \Cart::clear();
        return redirect()->route('cart.index');
    }

    public function GuardarPedido(){
        $productos=\Cart::getContent();

        $pedido=new Pedido();
        $id=rand(1,1000);
        foreach($productos as $pro){            
            $pedido->email=session('email');
            $pedido->numero_pedido=$id;            
            $pedido->name=$pro->name;
            $pedido->price=$pro->price;
            $pedido->quantity=$pro->quantity;
            
            //$pedido->save();
            DB::table('pedidos')->insert([
                'email' => $pedido->email,
                'numero_pedido'=>$pedido->numero_pedido,
                'name'=>$pedido->name,
                'price'=>$pedido->price,
                'quantity'=>$pedido->quantity,
                'created_at'=>date("Y-m-d H:i:s"),
                'estado'=>"Pedido confirmado",
            ]);
        }
    
        return redirect()->route('mostrar_pedidos');
        
    }
}
