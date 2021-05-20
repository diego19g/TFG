@extends('plantilla')
<link href="css/inicio.css" rel="stylesheet">
<script src="js/bootstrap.bundle.min.js"></script>
@section('content')
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img class="bd-placeholder-img" width="100%" height="100%" src="images/hamburguesa_home.png">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Hamburguesas de la mejor calidad</h1>
            <p>Disfruta de nuestra mejor carne de vacuno acompañada de los mejores ingredientes</p>
            <p><a class="btn btn-lg btn-home enlace_login_home" href="{{ route('login') }}">Registrarse / Iniciar sesión</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img class="bd-placeholder-img" width="100%" height="100%" src="images/burrito_home.png">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Burritos receta 100% mexicana</h1>
            <p>Nuestros burritos se elaboran con productos traídos de México</p>
            <p><a class="btn btn-lg btn-home enlace_login_home" href="{{ route('login') }}">Registrarse / Iniciar sesión</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">        
        <img class="bd-placeholder-img" width="100%" height="100%" src="images/patatas_home.png">
        
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Complementos</h1>
            <p>¿Te has quedado con hambre? Disfruta de nuestros acompañamientos, patatas, alitas...</p>
            <p><a class="btn btn-lg btn-home enlace_login_home" href="{{ route('login') }}">Registrarse / Iniciar sesión</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<!--<div class="p-5 mb-4 rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">COMIDA A DOMICILIO DE LA MEJOR CALIDAD</h1>
        <p class="col-md-8 fs-4">Disfruta de nuestras hamburguesas, bocadillos, burritos, raciones... ¡Todo ello sin moverte de casa!</p>
        <p class="col-md-8 fs-4">Para realizar un pedido es necesario tener una cuenta, desde la que podrás controlar todo con comodidad, ver tus pedidos anteriores, realizar uno nuevo...</p>
        <button class="btn btn-home btn-lg" type="button"><a class="enlace_login_home" href="{{ route('login') }}">Registrarse / Iniciar sesión</a></button>
      </div>
</div>-->
@endsection