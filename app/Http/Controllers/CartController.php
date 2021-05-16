<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Pedido;

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
        $pedido->id=rand(1,1000);
        foreach($productos as $pro){
            $pedido->name=$pro->name;
            $pedido->price=$pro->price;
            $pedido->quantity=$pro->quantity;
            $pedido->email=session('email');
    
            //$pedido->save();
        }

        return view('cliente.pedidos_cliente')->with(['prod'=>$pedido]);
    }
}
