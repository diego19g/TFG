@extends('restaurante.plantilla_restaurante')

@section('content')
<main class="px-3 home_cliente">
    <h1>Bienvenido</h1>
    <p class="lead">
      <a href="{{route('pedidos_restaurante')}}" class="btn btn-home btn-lg">Consultar pedidos</a>
    </p>
</main>
@endsection