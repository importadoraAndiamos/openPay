@extends('layouts.index')
 
@section('contenido')
<div class = "container contenedorPrincipalCompra">
<hr class="lineaAmarilla2">
<div class="col-xs-12 contenedorImagenCompra">
   <img class=" row imagenCompra" src="{{ url('../img/LogoZaabraHeader.png')}}">
  </div>
  <div class="col-xs-12 contenedorTextoNegritaCompra">
    <hr class="lineaAmarilla2">
    <strong class="textoNegritaCompra col-xs-12 noPad">ERROR</strong>
     </div>
     <div class="cajasTextoCompra col-xs-12">
     <p>Se produjo un error</p>
    <div>{{$merchant_name}}</div>
    <div>{{$merchant_address}}</div>
    <div>{{ $telephone }}</div>
    <hr class="lineaAmarilla2">
</div>

  
</div>
@endsection