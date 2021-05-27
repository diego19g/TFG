@extends('cliente.plantilla_cliente')

@section('content')
<section class="flotante texto_cuenta">
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

    <div>
            <h2>Mis datos</h2>
            <br>
            <p>Para modificar sus datos escriba sobre los siguientes campos y pulse en "Actualizar datos"</p>
    </div>

        <div>
         <form class="actualizar_datos" action="{{ route('modificar_datos') }}" method="POST">
            @method('PUT')
             @csrf
            <div>            
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nombre</span>
                    <input type="text" name="nombre" class="form-control" placeholder="{{ $datos->name }}" aria-label="Nombre" aria-describedby="basic-addon1">             
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Apellido</span>
                    <input type="text" name="apellido" class="form-control" placeholder="{{ $datos->surname }}" aria-label="Apellido" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Email</span>
                    <input type="text" name="email" class="form-control" placeholder="{{ $datos->email }}" aria-label="Email" aria-describedby="basic-addon1" disabled> 
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Contraseña</span>
                    <input type="password" name="password" class="form-control" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Confirmar contraseña</span>
                    <input type="password" name="password2" class="form-control" placeholder="Confirmar contraseña" aria-label="Confirmar contraseña" aria-describedby="basic-addon1">
                </div>
            </div>
            <input type="submit" name="modificar" value="Actualizar datos" class="btn btn-lg btn-home" />
            </form>
    </div>
</section>
@if($errors->any())
<div class="alert alert-danger flotante" style="text-align:center;">
    <p>No es posible actualizar tus datos,</p><p>por favor corrige los siguientes errores:</p>
    <ul>
        @foreach($errors->all() as $error)           
            <li>- {{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

@endsection

@section('js')

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

    $('.actualizar_datos').submit(function(e){
            e.preventDefault();

            Swal.fire({
                title: '¿Estás seguro de actualizar tus datos?',
                text: "¡Tus datos de usuario se cambiarán!",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, actualizar mis datos'
                }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });
</script>


@endsection