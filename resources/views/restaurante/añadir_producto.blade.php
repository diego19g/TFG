@extends('restaurante.plantilla_restaurante')

@section('content')
<section class="flotante" style="text-align:center;position:absolute;left:25%;">

@if ($message = Session::get('success'))
<div style="text-align:center;" class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
</div>
@endif

    <h3>Rellena los siguientes campos para añadir el producto a la carta</h3>
    <br>
    <form action="{{route('añadir_producto')}}" method="POST">
    @csrf
        <div>
            <strong>Nombre:</strong>
            <input type="text" name="nombre">
            <label>
                @if($errors->first('nombre'))
                    <p>{{$errors->first('nombre')}}</p>
                @endif
            </label>
        </div>
        <hr>
        <div>
            <strong>Precio:</strong>
            <input type="text" name="precio">
            <label>
                @if($errors->first('precio'))
                    <p>{{$errors->first('precio')}}</p>
                @endif
            </label>
        </div>
        <hr>
        <div>
            <strong>ID Categoría:</strong>
            <input type="text" name="categoria">
            <label>
                @if($errors->first('categoria'))
                    <p>{{$errors->first('categoria')}}</p>
                @endif
            </label>
        </div>
        <hr>
        <div>
            <strong>Imagen:</strong>
            <input type="file" name="imagen">
            <label>
                @if($errors->first('imagen'))
                    <p>{{$errors->first('imagen')}}</p>
                @endif
            </label>
        </div>
        <hr>
        <input type="submit" class="btn btn-lg btn-home enlace_login_home" value="Añadir a la carta">
    </form>                                           
</section>
@endsection