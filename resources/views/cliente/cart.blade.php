@extends('cliente.plantilla_cliente')
<link href="css/inicio.css" rel="stylesheet">
@section('content')
<section class="cart">
    <div class="container">
        @if(session()->has('success_msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        @if(session()->has('alert_msg'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session()->get('alert_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        @if(count($errors) > 0)
            @foreach($errors0>all() as $error)
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $error }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endforeach
        @endif
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <br>
                @if(\Cart::getTotalQuantity()>0)
                    <h4>{{ \Cart::getTotalQuantity()}} Producto(s) en tu pedido</h4><br>
                @else
                    <h4>No hay productos en tu pedido</h4><br>
                    <a href="{{route('shop')}}" class="btn btn-dark">Continuar pidiendo</a>
                @endif

                @foreach($cartCollection as $item)
                    <div class="row">
                        <div class="col-lg-3">
                            <img src="/images/{{ $item->attributes->image }}" class="img-thumbnail" width="200" height="200">
                        </div>
                        <div class="col-lg-5">
                            <p>
                                <b><a href="/shop/{{ $item->attributes->slug }}">{{ $item->name }}</a></b><br>
                                <b>Precio: </b>{{ $item->price }}€<br>
                                <b>Sub Total: </b>{{ \Cart::get($item->id)->getPriceSum() }}€<br>
                                {{--                                <b>With Discount: </b>{{ \Cart::get($item->id)->getPriceSumWithConditions() }}--}}
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <form action="{{ route('cart.update') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                        <input type="hidden" value="{{ $item->id}}" id="id" name="id">
                                        <input type="number" class="form-control form-control-sm" value="{{ $item->quantity }}"
                                               id="quantity" name="quantity" style="width: 70px; margin-right: 10px;">
                                        <button class="btn btn-secondary btn-sm" style="margin-right: 25px;"><i class="fa fa-edit">Cambiar cantidad</i></button>
                                    </div>
                                </form>
                                <form class="eliminar_producto" action="{{ route('cart.remove') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                    <button type="submit" class="btn btn-dark btn-sm" style="margin-right: 10px;"><i class="fa fa-trash"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"/></svg></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <hr>
                @endforeach
                @if(count($cartCollection)>0)
                    <form class="formulario_eliminar" action="{{ route('cart.clear') }}" method="POST">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-secondary btn-md">Borrar todo</button>
                    </form>
                @endif
            </div>
            @if(count($cartCollection)>0)
                <div class="col-lg-5" style="margin:auto;">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Total: </b>{{ \Cart::getTotal() }}€</li>
                        </ul>
                    </div>
                    <br><a href="{{route('shop')}}" class="btn btn-dark">Continuar pidiendo</a>
                    <form class="proceder_pagar" action="{{route('guardar_pedido')}}">
                        <button type="submit" class="btn btn-lg btn-home">Proceder a pagar</button>
                    </form>
                    
                </div>
            @endif
        </div>
        <br><br>
    </div>
</section>
@endsection

@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $('.formulario_eliminar').submit(function(e){
        e.preventDefault();

        Swal.fire({
            title: '¿Estás seguro de eliminar todo el pedido?',
            text: "¡Se eliminarán todos los productos seleccionados!",
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

    $('.eliminar_producto').submit(function(e){
        e.preventDefault();

        Swal.fire({
            title: '¿Estás seguro de eliminar este producto?',
            text: "¡Se eliminará el producto del pedido!",
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

    $('.proceder_pagar').submit(function(e){
        e.preventDefault();

        Swal.fire({
            title: '¿Estás seguro de terminar y pagar?',
            text: "¡Se te redireccionará a una página de pago!",
            icon: 'success',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, terminar y pagar'
            }).then((result) => {
            if (result.isConfirmed) {
                this.submit();
            }
        })
    });


</script>

@endsection