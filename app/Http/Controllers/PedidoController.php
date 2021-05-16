<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function GuardarPedido(){
        return view('cliente.pedidos_cliente');
    }
}
