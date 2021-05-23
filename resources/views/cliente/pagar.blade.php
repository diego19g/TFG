@extends('cliente.plantilla_cliente')

<link href="css/pagar.css" rel="stylesheet">

@section('content')
<section class="flotante pagar">
    <div>
            <h1>
            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="75px" viewBox="0 0 24 24" width="75px" fill="#FFFFFF"><g><rect fill="none" height="24" width="24"/></g><g><g><path d="M19,7c0-1.1-0.9-2-2-2h-3v2h3v2.65L13.52,14H10V9H6c-2.21,0-4,1.79-4,4v3h2c0,1.66,1.34,3,3,3s3-1.34,3-3h4.48L19,10.35V7 z M4,14v-1c0-1.1,0.9-2,2-2h2v3H4z M7,17c-0.55,0-1-0.45-1-1h2C8,16.55,7.55,17,7,17z"/><rect height="2" width="5" x="5" y="6"/><path d="M19,13c-1.66,0-3,1.34-3,3s1.34,3,3,3s3-1.34,3-3S20.66,13,19,13z M19,17c-0.55,0-1-0.45-1-1s0.45-1,1-1s1,0.45,1,1 S19.55,17,19,17z"/></g></g></svg>
            Datos de envío y pago
            </h1>
  
    </div>
    <div>
        <form action="">                                             
            Dirección <input type="text" name="direccion" style="margin:5px;"><br>
            Población <input type="text" name="poblacion" style="margin:5px;"><br>
            Provincia <input type="text" name="provincia" style="margin:5px;"><br>                             
        </form>
    </div>

    <div id="wrapper">
<div class="row">
    <div>
        <div id="cards">
            <img src="images/visa.png" style="width:70px;height:40px;margin:5px;">
            <img src="images/mastercard.png" style="width:70px;height:40px;margin:5px;">
        </div><!--#cards end-->
    <div class="form-check">
        <label class="form-check-label" for='card'>
            <input id="card" class="form-check-input" type="checkbox" value="">
            Pagar con tarjeta de crédito
        </label>
    </div>
</div><!--col-xs-5 end-->
    <div>
      <div id="cards">
        <img src="images/paypal.png" style="width:70px;height:40px;">
      </div><!--#cards end-->
      <div class="form-check">
  <label class="form-check-label" for='paypal'>
    <input id="paypal" class="form-check-input" type="checkbox" value="">
    Pagar con PayPal
  </label>
</div>
    </div><!--col-xs-5 end-->
  </div><!--row end-->
  <hr>
  <div class="row">
    <div class="col-xs-5">     
      <label for="cardnumber">Número de tarjeta</label>
      <input type="text" id="cardnumber">
    </div><!--col-xs-5-->
  </div><!--row end-->
  <br>
  <div class="row">
    <div class="col-xs-2">
      <label for="date">Fecha de caducidad</label>
      <input type="text" placeholder="MM/YY" id="date">
    </div><!--col-xs-3-->
    <div class="col-xs-2">
      <label for="date">CVV / CVC </label>
      <input type="text">
    </div><!--col-xs-3-->
  </div><!--row end-->
</div><!--wrapper end-->
<br>
<a class="btn btn-lg btn-home enlace_login_home" href="#">Realizar el pago</a>
</section>
@endsection