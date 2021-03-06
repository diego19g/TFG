@extends('cliente.plantilla_cliente')
<link href="css/inicio.css" rel="stylesheet">
@section('content')
<section class="flotante shop">
<h1 class="titulo_carta" id="titulo_carta">ENTRANTES</h1> 
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
                <div class="row">
                    <div>
                        <h4>Products In Our Store</h4>
                    </div>
                </div>
                <hr>
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
                                    <p>{{ $pro->price }}???</p>
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                        <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                        <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
                                        <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug">
                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                        <div class="card-footer" style="background-color: white;">
                                              <div class="row">
                                                <button class="btn btn-lg btn-home btn-sm" class="tooltip-test" title="add to cart">
                                                    <i class="fa fa-shopping-cart"></i> A??adir al pedido
                                                </button>
                                            </div>
                                        </div>
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
                                    <p>{{ $pro->price }}???</p>
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                        <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                        <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
                                        <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug">
                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                        <div class="card-footer" style="background-color: white;">
                                              <div class="row">
                                                <button class="btn btn-lg btn-home btn-sm" class="tooltip-test" title="add to cart">
                                                    <i class="fa fa-shopping-cart"></i> A??adir al pedido
                                                </button>
                                            </div>
                                        </div>
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
                                    <p>{{ $pro->price }}???</p>
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                        <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                        <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
                                        <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug">
                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                        <div class="card-footer" style="background-color: white;">
                                              <div class="row">
                                                <button class="btn btn-lg btn-home btn-sm" class="tooltip-test" title="add to cart">
                                                    <i class="fa fa-shopping-cart"></i> A??adir al pedido
                                                </button>
                                            </div>
                                        </div>
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