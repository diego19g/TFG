@extends('restaurante.plantilla_restaurante')

@section('content')
<section class="flotante" style="text-align:center;position:absolute;left:40%;">
    <table class="table table-striped table-sm fondo_tabla">
        <thead>
        <tr>              
            <th>Elemento</th>
            <th>Precio</th>
            <th>Cantidad</th>
        </tr>
        </thead>
        <tbody>         
        @foreach($pedido as $ped) 
        <tr>              
            <td>{{ $ped->name }}</td>
            <td>{{ $ped->price }}</td>
            <td>{{ $ped->quantity }}</td>
        </tr>     
        @endforeach     
        </tbody>
    </table>
    <br><hr><br>
    <h4>Estado del pedido: {{$ped->estado}}</h4>
    <br><hr><br>
    <h4>Modificar estado del pedido</h4>
    <br>
    <div class="botones_pedido">
        <form method="POST" action="{{ route('pedido_confirmado',$ped->numero_pedido) }}" class="forms_pedido">
        @method('PUT')
        @csrf  
            <input type="submit" value="Pedido confirmado" class="btn pedido_confirmado">
        </form>
        <form method="POST" action="{{ route('en_cocina',$ped->numero_pedido) }}" class="forms_pedido">
        @method('PUT')
        @csrf        
            <input type="submit" value="En cocina" class="btn en_cocina">
        </form>
        <form method="POST" action="{{ route('enviado',$ped->numero_pedido) }}" class="forms_pedido">
        @method('PUT')
        @csrf    
            <input type="submit" value="Enviado" class="btn enviado">
        </form>
        <form method="POST" action="{{ route('entregado',$ped->numero_pedido) }}" class="forms_pedido">
        @method('PUT')
        @csrf    
            <input  type="submit" value="Entregado" class="btn entregado">
        </form>
    </div>
</section>

@endsection