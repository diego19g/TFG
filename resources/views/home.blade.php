@extends('plantilla')

@section('content')
<div class="p-5 mb-4 rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">COMIDA A DOMICILIO DE LA MEJOR CALIDAD</h1>
        <p class="col-md-8 fs-4">Disfruta de nuestras hamburguesas, bocadillos, burritos, raciones... ¡Todo ello sin moverte de casa!</p>
        <p class="col-md-8 fs-4">Para realizar un pedido es necesario tener una cuenta, desde la que podrás controlar todo con comodidad, ver tus pedidos anteriores, realizar uno nuevo...</p>
        <button class="btn btn-home btn-lg" type="button"><a class="enlace_login_home" href="{{ route('login') }}">Registrarse / Iniciar sesión</a></button>
      </div>
</div>
@endsection