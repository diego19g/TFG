@extends('restaurante.plantilla_restaurante')

@section('content')
<section class="flotante" style="text-align:center;position:absolute;left:40%;">
<h1 style="text-align:center;">Último pedido</h1>
<br><hr><br>
@if($numero!='')
      <div class="table-responsive tabla_pedido">       
      <h4>ID Pedido: {{$numero->numero_pedido}}</h4>        
        <table class="table table-striped table-sm fondo_tabla">
          <thead>
            <tr>              
              <th>Elemento</th>
              <th>Precio</th>
              <th>Cantidad</th>
            </tr>
          </thead>
          <tbody>          
          @foreach($ped as $item)
          @if($numero->numero_pedido==$item->numero_pedido)
            <tr>              
              <td>{{ $item->name }}</td>
              <td>{{ $item->price }}</td>
              <td>{{ $item->quantity }}</td>
            </tr>
            @endif
            @endforeach
          
          </tbody>
        </table>
        <h4>Realizado: {{$numero->created_at}}</h4>
        <h4>Estado: {{$numero->estado}}</h4>                         
      </div>
      <br><hr><br>
      @endif         
</section>

@endsection