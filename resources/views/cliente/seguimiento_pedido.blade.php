@extends('cliente.plantilla_cliente')

@section('content')

<section class="flotante" style="text-align:center;position:absolute;left:25%;">
@foreach($estado as $e)

@if($e->estado=='hola')
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>
@endif
    @if($e->estado=='Pedido confirmado')
    <div style="text-align:center;">
        <img src="gifs/pedido_confirmado.gif">
    </div>    
    <br>
    <div class="progress fondo_progreso">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 25%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">Pedido confirmado</div>
    </div>
    <br>
    <h3>{{$e->estado}}, en breve empezaremos a preparártelo</h3>
    @endif
@endforeach
</section>

@endsection