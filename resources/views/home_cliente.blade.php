@extends('plantilla_cliente')

@section('content')
<main class="px-3 home_cliente">
    <h1>Bienvenido, {{route('nombre')}}</h1>
    <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
    <p class="lead">
      <a href="#" class="btn btn-home btn-lg">Learn more</a>
    </p>
</main>
@endsection