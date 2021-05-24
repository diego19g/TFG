@extends('restaurante.plantilla_restaurante')

@section('content')
<section class="flotante" style="text-align:center;position:absolute;left:25%;">
    <h3>Rellena los siguientes campos para añadir el producto a la carta</h3>
    <br>
    <form action="" enctype="multipart/form-data" method="POST">
        <div>
            <strong>Nombre:</strong>
            <input type="text" name="nombre">
        </div>
        <hr>
        <div>
            <strong>Precio:</strong>
            <input type="text" name="nombre">
        </div>
        <hr>
        <div>
            <strong>ID Categoría:</strong>
            <input type="text" name="nombre">
        </div>
        <hr>
        <div>
            <strong>Imagen:</strong>
            <input type="file" name="urlfoto">
        </div>
        <hr>
        <input type="submit" class="btn btn-lg btn-home enlace_login_home" value="Añadir a la carta">
    </form>                                           
</section>
@endsection