@extends('restaurante.plantilla_restaurante')

@section('content')
<section class="flotante texto_cuenta">
    <div>
            <h2>Cambiar contraseña</h2>
            <br>
            <p>Para cambiar la contraseña escribela en los siguientes campos y pulsa en "Actualizar datos"</p>
    </div>

        <div>
         <form class="actualizar_datos" action="{{ route('datos_restaurante') }}" method="POST">
            @method('PUT')
             @csrf
            <div>            
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Contraseña</span>
                    <input type="password" name="password" class="form-control" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1">
                    <label>
                        @if($errors->first('password'))
                            <p>{{$errors->first('password')}}</p>
                        @endif
                    </label>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Confirmar contraseña</span>
                    <input type="password" name="password2" class="form-control" placeholder="Confirmar contraseña" aria-label="Confirmar contraseña" aria-describedby="basic-addon1">
                    <label>
                        @if($errors->first('password2'))
                            <p>{{$errors->first('password2')}}</p>
                        @endif
                    </label>
                </div>
            </div>
            <input type="submit" name="modificar" value="Actualizar contraseña" class="btn btn-lg btn-home" />
            </form>
    </div>
</section>
@endsection