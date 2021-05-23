@extends('cliente.plantilla_cliente')

@section('content')

<section class="flotante" style="text-align:center;position:absolute;left:40%;">
@foreach($estado as $e)

    @if($e->estado=='Pedido confirmado')
    <div style="text-align:center;position:relative;right:20%;">
        <img src="gifs/pedido_confirmado.gif" width="300px" height="300px">
    </div>    
    <br>
    <div class="progress fondo_progreso" style="position:relative;right:20%;">
        <div class="progress-bar progress-bar-striped progress-bar-animated pedido_confirmado" role="progressbar" style="width: 25%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">Pedido confirmado</div>
    </div>
    <br>
    <h3 style="position:relative;right:20%;">{{$e->estado}}, en breve empezaremos a preparártelo</h3>
    <br><br>
    <a href="{{route('refresh')}}" class="btn btn-lg btn-home enlace_login_home" style="position:relative;right:20%;"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M17.65 6.35C16.2 4.9 14.21 4 12 4c-4.42 0-7.99 3.58-7.99 8s3.57 8 7.99 8c3.73 0 6.84-2.55 7.73-6h-2.08c-.82 2.33-3.04 4-5.65 4-3.31 0-6-2.69-6-6s2.69-6 6-6c1.66 0 3.14.69 4.22 1.78L13 11h7V4l-2.35 2.35z"/></svg> Refrescar</a>
    <a href="{{route('imprimir')}}" class="btn btn-lg btn-home enlace_login_home">Descargar pedido en PDF</a>
    @endif
    @if($e->estado=='En cocina')
    <div style="text-align:center;">
        <img src="gifs/en_cocina.gif" width="500px" height="300px">
    </div>    
    <br>
    <div class="progress fondo_progreso">
        <div class="progress-bar progress-bar-striped progress-bar-animated en_cocina" role="progressbar" style="width: 50%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">En cocina</div>
    </div>
    <br>
    <h3>{{$e->estado}}, estamos preparando tu pedido</h3>
    <br><hr><br>
    <a href="{{route('refresh')}}" class="btn btn-lg btn-home enlace_login_home"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M17.65 6.35C16.2 4.9 14.21 4 12 4c-4.42 0-7.99 3.58-7.99 8s3.57 8 7.99 8c3.73 0 6.84-2.55 7.73-6h-2.08c-.82 2.33-3.04 4-5.65 4-3.31 0-6-2.69-6-6s2.69-6 6-6c1.66 0 3.14.69 4.22 1.78L13 11h7V4l-2.35 2.35z"/></svg> Refrescar</a>
    <a href="{{route('imprimir')}}" class="btn btn-lg btn-home enlace_login_home">Descargar pedido en PDF</a>
    @endif
    @if($e->estado=='Enviado')
    <div style="text-align:center;">
        <img src="gifs/enviado.gif" width="500px" height="300px">
    </div>    
    <br>
    <div class="progress fondo_progreso">
        <div class="progress-bar progress-bar-striped progress-bar-animated enviado" role="progressbar" style="width: 75%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">Enviado</div>
    </div>
    <br>
    <h3>{{$e->estado}}, tu pedido está en camino</h3>
    <br><hr><br>
    <a href="{{route('refresh')}}" class="btn btn-lg btn-home enlace_login_home"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M17.65 6.35C16.2 4.9 14.21 4 12 4c-4.42 0-7.99 3.58-7.99 8s3.57 8 7.99 8c3.73 0 6.84-2.55 7.73-6h-2.08c-.82 2.33-3.04 4-5.65 4-3.31 0-6-2.69-6-6s2.69-6 6-6c1.66 0 3.14.69 4.22 1.78L13 11h7V4l-2.35 2.35z"/></svg> Refrescar</a>
    <a href="{{route('imprimir')}}" class="btn btn-lg btn-home enlace_login_home">Descargar pedido en PDF</a>
    @endif
    @if($e->estado=='Entregado')
    <div style="text-align:center;">
        <img src="gifs/entregado.gif" width="500px" height="300px">
    </div>    
    <br>
    <div class="progress fondo_progreso">
        <div class="progress-bar progress-bar-striped progress-bar-animated entregado" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">Entregado</div>
    </div>
    <br>
    <h3>{{$e->estado}}, que aproveche!</h3>
    <br><hr><br>
    <a href="{{route('refresh')}}" class="btn btn-lg btn-home enlace_login_home"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M17.65 6.35C16.2 4.9 14.21 4 12 4c-4.42 0-7.99 3.58-7.99 8s3.57 8 7.99 8c3.73 0 6.84-2.55 7.73-6h-2.08c-.82 2.33-3.04 4-5.65 4-3.31 0-6-2.69-6-6s2.69-6 6-6c1.66 0 3.14.69 4.22 1.78L13 11h7V4l-2.35 2.35z"/></svg> Refrescar</a>
    <a href="{{route('imprimir')}}" class="btn btn-lg btn-home enlace_login_home">Descargar pedido en PDF</a>
    @endif

@endforeach
</section>

@endsection