@extends('plantilla')

<link href="css/login.css" rel="stylesheet">
  
@section('content')
<div class="container">
        <div class="flat-form">
            <ul class="tabs">
                <li>
                    <a href="#login" class="active">Iniciar sesión</a>
                </li>
                <li>
                    <a href="#register">Registro</a>
                </li>                
            </ul>
            <div id="login" class="form-action show">
                <h1>Inicia sesión en FOOD GO!</h1>
                <p>
                    Es necesario tener una cuenta y acceder a ella para poder realizar pedidos, controlar el progreso del mismo, consultar pedidos anteriores... Si ya la tienes inicia sesión, si no regístrate y disfruta de nuestras ventajas.
                </p>
                <form method="POST" action="{{ route('acceso') }}">
                    <ul>
                        <li>
                            <input type="text" name="email" placeholder="Email" />
                        </li>
                        <li>
                            <input type="password" name="password" placeholder="Password" />
                        </li>
                        <li>
                            <input type="submit" name="login" value="login" class="button" />
                        </li>
                    </ul>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">        
                </form>
            </div>
            <!--/#login.form-action-->
            <div id="register" class="form-action hide">
                <h1>Registro</h1>
                <p>
                Es necesario tener una cuenta y acceder a ella para poder realizar pedidos, controlar el progreso del mismo, consultar pedidos anteriores... Si ya la tienes inicia sesión, si no regístrate y disfruta de nuestras ventajas.
                </p>
                <form method="POST" action="{{ route('registro') }}">
                @csrf
                    <ul>
                        <li>
                            <input type="text" name="nombre" placeholder="Nombre" />
                        </li>
                        <li>
                            <input type="text" name="apellido" placeholder="Apellido" />
                        </li>
                        <li>
                            <input type="text" name="email" placeholder="Email" />
                        </li>
                        <li>
                            <input type="password" name="password" placeholder="Password" />
                        </li>
                        <li>
                            <input type="submit" name="register" value="register" class="button" />
                        </li>
                    </ul>
                </form>
            </div>
            <!--/#register.form-action-->
        </div>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script src="js/login.js"></script> 