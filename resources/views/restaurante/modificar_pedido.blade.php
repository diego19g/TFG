@extends('restaurante.plantilla_restaurante')

@section('content')
<section class="flotante" style="text-align:center;position:absolute;left:40%;">
    <table class="table table-striped table-sm fondo_tabla">
        <thead>
        <tr>              
            <th>Elemento</th>
            <th>Precio</th>
            <th>Cantidad</th>
        </tr>
        </thead>
        <tbody>         
        @foreach($pedido as $ped) 
        <tr>              
            <td>{{ $ped->name }}</td>
            <td>{{ $ped->price }}</td>
            <td>{{ $ped->quantity }}</td>
        </tr>     
        @endforeach     
        </tbody>
    </table>
    <br><hr><br>
    <h4>Estado del pedido: {{$ped->estado}}</h4>
    <br><hr><br>
    <h4>Modificar estado del pedido</h4>
    <br>
    <div>
        <a href="" class="btn pedido_confirmado">Pedido confirmado</a>
        <a href="" class="btn en_cocina">En cocina</a>
        <a href="" class="btn enviado">Enviado</a>
        <a href="" class="btn entregado">Entregado</a>
    </div>
</section>

@endsection