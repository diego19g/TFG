@extends('cliente.plantilla_cliente')

@section('content')

<section class="flotante centrado">
@foreach($estado as $e)
<div></div>
<p>{{$e->estado}}</p>
@endforeach
</section>

@endsection