<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurante</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/plantilla.css" rel="stylesheet">      
  <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/menu_pc.js"></script>
</head>
<body>
<header class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
    <a href="{{ route('home') }}" class="d-flex align-items-center text-dark text-decoration-none">    
      <img src="images/logo.png" width="100px" height="100px">
      <span class="fs-4">FOOD GO!</span>
    </a>

    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
      <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('home') }}">SOBRE NOSOTROS</a>
      <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('carta_inicio') }}">CARTA</a>
      <a class="me-3 py-2 text-dark text-decoration-none" href="{{route('gmaps')}}">CONTACTO</a>
    </nav>

    <a class="btn btn-sm btn-outline-secondary" href="{{ route('login') }}">INICIAR SESIÓN</a>
  </header>

  @yield('content')
  @yield('js')
</body>
</html>