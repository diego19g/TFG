@extends('cliente.plantilla_cliente')

@section('content')
<section class="flotante texto_cuenta">
    <div>
            <h2>Mis datos</h2>
            <br>
            <p>Para modificar sus datos escriba sobre los siguientes campos y pulse en "Actualizar datos"</p>
    </div>

        <div>
            <div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nombre</span>
                    <input type="text" class="form-control" placeholder="Nombre"   aria-label="Nombre" aria-describedby="basic-addon1">{{ $datos->name }}
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Apellido</span>
                    <input type="text" class="form-control" placeholder="Apellido" aria-label="Apellido" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Email</span>
                    <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Contraseña</span>
                    <input type="text" class="form-control" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Confirmar contraseña</span>
                    <input type="text" class="form-control" placeholder="Confirmar contraseña" aria-label="Confirmar contraseña" aria-describedby="basic-addon1">
                </div>
            </div>
    </div>
    <a href="#" class="btn btn-home btn-lg">Actualizar datos</a>
</section>


@endsection