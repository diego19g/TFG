@extends('plantilla')

@section('content')
<main style="text-align:center;">
    <h2>Teléfono: 983 321 456</h2>
    <h2>Dirección: Calle Bajada de la Libertad, 15</h2>
    <h2>Valladolid, 47002</h2>
    <br><hr><br>
    <div style="position:absolute;left:40%;">
        {!!$map['html']!!}
    </div>
   
</main>
@endsection

@section('js')
<script type="text/javascript">var centreGot = false;</script>{!!$map['js']!!}
@endsection