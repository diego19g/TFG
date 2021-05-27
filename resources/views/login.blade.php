@extends('plantilla')

<link href="css/login.css" rel="stylesheet">
  
@section('content')
@if ($message = Session::get('error'))
<div style="text-align:center;" class="alert alert-danger alert-block">
        <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('success'))
<div style="text-align:center;" class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
</div>
@endif

@if($errors->any())
<div class="alert alert-danger flotante" style="text-align:center;">
    <p>No es posible registrarse,</p><p>por favor corrige los siguientes errores:</p>
    <ul>
        @foreach($errors->all() as $error)           
            <li>- {{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="container">
        <div class="flat-form">
            <ul class="tabs">
                <li>
                    <a href="#login">Iniciar sesión</a>
                </li>
                <li>
                    <a href="#register" class="active">Registro</a>
                </li>                
            </ul>
            <div id="login" class="form-action hide">
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
                            <input type="submit" name="login" value="Login" class="button" />
                        </li>
                    </ul>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">        
                </form>
            </div>
            <!--/#login.form-action-->
            <div id="register" class="form-action show">
                <h1>Registro</h1>
                <p>
                Es necesario tener una cuenta y acceder a ella para poder realizar pedidos, controlar el progreso del mismo, consultar pedidos anteriores... Si ya la tienes inicia sesión, si no regístrate y disfruta de nuestras ventajas.
                </p>
                <form method="POST" action="{{ route('registro') }}">
                @csrf
                    <ul>
                        <li>                    
                            <input type="text" name="nombre" placeholder="Nombre"/>
                        </li>
                        <li>
                            <input type="text" name="apellido" placeholder="Apellido"/>    
                        </li>
                        <li>
                            <input type="text" name="email" placeholder="Email"/>         
                        </li>
                        <li>
                            <input type="password" name="password" placeholder="Password"/>           
                        </li>
                        <li>
                            <input type="submit" name="register" value="Register" class="button" />
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