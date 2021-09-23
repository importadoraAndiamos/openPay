@extends('layouts.index')

@section('contenido')
<div class="container contenedorPrincipalCompra">
<hr class="lineaAmarilla2">
<div class="col-xs-12 contenedorImagenCompra">
   <img class=" row imagenCompra" src="{{ url('../img/LogoZaabraHeader.png')}}">
  </div>

  <div class="col-xs-12 contenedorTextoNegritaCompra">
    <hr class="lineaAmarilla2">
    <strong class="textoNegritaCompra col-xs-12 noPad">!Transacción Rechazada! </strong>
     </div>
     <div class="cajasTextoCompra col-xs-12">
     <p>La transacción ha sido rechazada, por el momento no se puede hacer la operación. Puedes ver el estado de tu pedido en <a href="">Mis pedidos</a></p>
    <hr>
    <div>Estado de la transacción: Rechazada</div>
    <div>Código de referencia: {{ $referenceCode }}</div>
    <div>Empresa: {{ $merchant_name }}</div>
    <div>Descripción: {{ $description }}</div>
    <div>Valor de la transacción: {{ $TX_VALUE }}</div>
    <div>Fecha de transacción: {{ $processingDate }}</div>
    @php echo time(); @endphp
    <hr class="lineaAmarilla2">
</div>

   
</div>
@endsection