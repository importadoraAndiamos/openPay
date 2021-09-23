<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta name="csrf-token" content="{{ csrf_token()}}">
<meta charset="utf-8"/>

    <head>
        @include('Libreriascss')
        @include('libreriasjsArriba')
        <meta charset="utf-8">
        <meta http-equiv='cache-control' content='no-cache'>
        <meta http-equiv='expires' content='0'>
        <meta http-equiv='pragma' content='no-cache'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-178405915-1"></script>
          <!-- Global site tag (gtag.js) - Google Analytics -->

          <!-- texto quicksand -->
          <link rel="preconnect" href="https://fonts.gstatic.com">

          <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">

          <!-- texto Roboto -->
          <link rel="preconnect" href="https://fonts.gstatic.com">
         <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    </head>
    <body>
       
        @yield('contenido')

     
       
    </body>

   
</html>
@include('libreriasjsAbajo')
<div class="modal fade bd-example-modal-sm" id="modalTestimonio" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <H3>Se esta guardando el testimonio</H3>
    </div>
  </div>
</div>
<div class="modal fade bd-example-modal-sm" id="modalNoCalificacion" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <H3>La calificacion no puede ser 0</H3>
    </div>
  </div>
</div>