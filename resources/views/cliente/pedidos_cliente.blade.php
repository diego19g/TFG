@extends('cliente.plantilla_cliente')

@section('content')

<h2 style="text-align:center;">Pedidos</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm fondo_tabla">
          <thead>
            <tr>
              <th>Nº Pedido</th>
              <th>Elemento</th>
              <th>Precio</th>
              <th>Cantidad</th>
              <th>Estado</th>
              <th>Fecha</th>
            </tr>
          </thead>
          <tbody>
          @foreach($pedidos as $item)
            <tr>
              <td>{{ $item->numero_pedido }}</td>
              <td>{{ $item->name }}</td>
              <td>{{ $item->price }}</td>
              <td>{{ $item->quantity }}</td>
              <td>{{ $item->estado }}</td>
              <td>{{ $item->created_at }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection