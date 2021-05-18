@extends('restaurante.plantilla_restaurante')

@section('content')

<section class="flotante" style="text-align:center;position:absolute;left:40%;">
<h1 style="text-align:center;">Pedidos</h1>
<br><hr><br>
@foreach($num as $numero)
      <div class="table-responsive">          
        <table class="table table-striped table-sm fondo_tabla">
          <tbody>                 
            <tr>              
              <td>ID Pedido: {{$numero->numero_pedido}}</td>
              <td>Realizado: {{$numero->created_at}}</td>
              <td>Estado: {{$numero->estado}}</td>
            </tr>                    
          </tbody>
        </table>               
      </div><br>
      <form method="POST" action="{{ route('acceder_pedido') }}">
      @csrf
      <input type="hidden" name="numero_pedido" value="{{$numero->numero_pedido}}">
      <input type="submit" name="acceder_pedido" value="Acceder al pedido" class="btn btn-lg btn-home" />
      </form>
      <br><hr><br>
      @endforeach
</section>

@endsection