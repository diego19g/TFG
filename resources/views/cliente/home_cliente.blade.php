@extends('cliente.plantilla_cliente')

@section('content')
<main class="px-3 home_cliente">
    <h1>Bienvenido, {{ $nombre }}</h1>
    <hr>
    <p class="lead">Empieza a pedir</p>
    <p class="lead">
      <a href="{{route('shop')}}" class="btn btn-home btn-lg">Realizar pedido</a>
    </p>
</main>
@endsection