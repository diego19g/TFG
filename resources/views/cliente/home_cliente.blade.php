@extends('cliente.plantilla_cliente')

@section('content')
<main class="px-3 home_cliente">
    <h1>Bienvenido, {{ $nombre }}</h1>
    <p class="lead">Empieza a pedir</p>
    <p class="lead">
      <a href="#" class="btn btn-home btn-lg">Learn more</a>
    </p>
</main>
@endsection