@extends('cliente.plantilla_cliente')

@section('content')
<section class="flotante" style="text-align:center;position:absolute;left:40%;">
<h1 style="text-align:center;">Último pedido</h1>
<br><hr><br>
      <div class="table-responsive tabla_pedido">    
      <h4>ID Pedido: {{$num->numero_pedido}}</h4>      
        <table class="table table-striped table-sm fondo_tabla">
          <thead>
            <tr>              
              <th>Elemento</th>
              <th>Precio</th>
              <th>Cantidad</th>
            </tr>
          </thead>
          <tbody>          
          @foreach($pedidos as $item)
          @if($num->numero_pedido==$item->numero_pedido)
            <tr>              
              <td>{{ $item->name }}</td>
              <td>{{ $item->price }}</td>
              <td>{{ $item->quantity }}</td>
            </tr>
            @endif
            @endforeach
          
          </tbody>
        </table>
        <h4>Realizado: {{$num->created_at}}</h4>
        <h4>Estado: {{$num->estado}}</h4>                    
      </div>
      <br><hr><br>
</section>

@endsection