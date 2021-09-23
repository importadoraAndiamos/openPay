@extends('layouts.index')
 
@section('contenido')
<div class = "containercontenedorPrincipalCompra">
<hr class="lineaAmarilla2">
<div class="col-xs-12 contenedorImagenCompra">
   <img class=" row imagenCompra" src="{{ url('../img/LogoZaabraHeader.png')}}">
  </div>
    <hr>
    <h2>!Gracias por tu Compra! </h2>
    <p>La transacción ha sido aprobada y tu compra ha sido realizada, los detalles del pedido y la fecha de entrega se indicarán a continuación. 
    puedes ver el estado de tu pedido en <a href="">Mis pedidos</a></p>
    <hr>
    <div>Estado de la transacción: Aprobada</div>
    <div>Código de referencia: {{ $referenceCode }}</div>
    <div>Empresa: {{ $merchant_name }}</div>
    <div>Descripción: {{ $description }}</div>
    
    <div>Valor de la transacción: {{ $TX_VALUE }}</div>
    <div>Fecha de transacción: {{ $processingDate }}</div>
    <hr>
    <h2>Datos del envío</h2>
    <div>Teléfono: {{ $telephone }}</div>
    <div>Dirección {{$merchant_address}}</div>
    <hr class="lineaAmarilla22">
</div>
   
    
</div>
@endsection