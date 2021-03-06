@extends('restaurante.plantilla_restaurante')
<link href="css/inicio.css" rel="stylesheet">
@section('content')
<section class="flotante shop">
@if ($message = Session::get('success'))
<div style="text-align:center;" class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
</div>
@endif
<h1 style="text-align:center;" id="titulo_carta">ENTRANTES</h1> 
<hr>
<div style="text-align:center;">
    <a class="btn btn-lg btn-home enlace_login_home" href="{{ route('vista_añadir')}}">Añadir a la carta</a>   
</div>
<hr>
    <div class="album py-5">
    
        <div class="container">
            
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">   
            
            <div class="carousel-indicators">
                
                <button id="carta_1" onclick="cambiar_boton('carta_1','carta_2','carta_3');mostrar_comida('entrantes','comidas','bebidas');" style="background-color:red;padding:5px;margin:5px;" type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button id="carta_2" onclick="cambiar_boton('carta_2','carta_1','carta_3');mostrar_comida('comidas','entrantes','bebidas');" style="background-color:black;padding:5px;margin:5px;" type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" class="active" aria-label="Slide 2"></button>
                <button id="carta_3" onclick="cambiar_boton('carta_3','carta_2','carta_1');mostrar_comida('bebidas','entrantes','comidas');" style="background-color:black;padding:5px;margin:5px;" type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" class="active" aria-label="Slide 3"></button>
            </div>
        </div>
    <div class="container" style="text-align:center;">
        <div class="row justify-content-center">
            <div class="col-lg-12">                
                <div id="entrantes" class="row">
                    @foreach($products as $pro)
                    @if(($pro->category_id)==1)
                        <div class="col-lg-3">
                            <div class="card" style="margin-bottom: 20px; height: auto;">
                                <img src="/images/{{ $pro->image_path }}"
                                     class="card-img-top mx-auto"
                                     style="height: 150px; width: 150px;display: block;"
                                     alt="{{ $pro->image_path }}"
                                >
                                <div class="card-body">
                                    <h6 class="card-title">{{ $pro->name }}</h6>
                                    <div class="card-footer" style="background-color: white;">
                                      <p class="precio_carta">{{ $pro->price }}€</p>
                                    </div>                                   
                                    <form class="eliminar_producto" action="{{route('eliminar_producto')}}" method="POST">                                    
                                        {{ csrf_field() }}
                                        @method('DELETE')
                                        <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                        <button type="submit" class="btn btn-dark btn-sm" style="margin-right: 10px;"><i class="fa fa-trash"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"/></svg></i></button>
                                    </form>
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                        <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                        <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
                                        <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug">
                                        <input type="hidden" value="1" id="quantity" name="quantity">              
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif
                    @endforeach
                </div>
                <div id="comidas" style="display:none;" class="row">
                    @foreach($products as $pro)
                    @if(($pro->category_id)==2)
                        <div class="col-lg-3">
                            <div class="card" style="margin-bottom: 20px; height: auto;">
                                <img src="/images/{{ $pro->image_path }}"
                                     class="card-img-top mx-auto"
                                     style="height: 150px; width: 150px;display: block;"
                                     alt="{{ $pro->image_path }}"
                                >
                                <div class="card-body">
                                    <h6 class="card-title">{{ $pro->name }}</h6>
                                    <div class="card-footer" style="background-color: white;">
                                      <p class="precio_carta">{{ $pro->price }}€</p>
                                    </div>      
                                    <form class="eliminar_producto" action="{{route('eliminar_producto')}}" method="POST">
                                        {{ csrf_field() }}
                                        @method('DELETE')
                                        <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                        <button type="submit" class="btn btn-dark btn-sm" style="margin-right: 10px;"><i class="fa fa-trash"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"/></svg></i></button>
                                    </form>   
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                        <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                        <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
                                        <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug">
                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif
                    @endforeach
                </div>
                <div class="row" id="bebidas" style="display:none;">
                    @foreach($products as $pro)
                    @if(($pro->category_id)==3)
                        <div class="col-lg-3">
                            <div class="card" style="margin-bottom: 20px; height: auto;">
                                <img src="/images/{{ $pro->image_path }}"
                                     class="card-img-top mx-auto"
                                     style="height: 150px; width: 150px;display: block;"
                                     alt="{{ $pro->image_path }}"
                                >
                                <div class="card-body">
                                    <h6 class="card-title">{{ $pro->name }}</h6>
                                    <div class="card-footer" style="background-color: white;">
                                      <p class="precio_carta">{{ $pro->price }}€</p>
                                    </div>      
                                    <form class="eliminar_producto" action="{{route('eliminar_producto')}}" method="POST">
                                        {{ csrf_field() }}
                                        @method('DELETE')
                                        <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                        <button type="submit" class="btn btn-dark btn-sm" style="margin-right: 10px;"><i class="fa fa-trash"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"/></svg></i></button>
                                    </form>   
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                        <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                        <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
                                        <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug">
                                        <input type="hidden" value="1" id="quantity" name="quantity">          
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

    $('.eliminar_producto').submit(function(e){
        e.preventDefault();

        Swal.fire({
            title: '¿Estás seguro de eliminar este producto?',
            text: "¡Se eliminará el producto de la carta!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminar'
            }).then((result) => {
            if (result.isConfirmed) {
                this.submit();
            }
        })
    });


</script>

@endsection