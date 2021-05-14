@extends('cliente.plantilla_cliente')

@section('content')
<section class="flotante">
    <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
            <h3>Input group</h3>
            <a class="d-flex align-items-center" href="../forms/input-group/">Documentation</a>
        </div>

        <div>
            <div class="bd-example">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nombre</span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Nombre" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Apellido</span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Apellido" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Email</span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Email" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Contraseña</span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Contraseña" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Confirmar contraseña</span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Confirmar contraseña" aria-describedby="basic-addon1">
                </div>
            </div>
    </div>
</section>


@endsection