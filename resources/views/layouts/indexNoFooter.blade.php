<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="utf-8"/>
<meta name="csrf-token" content="{{ csrf_token() }}">

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
        @include('header')  
        @yield('contenido')

       
    </body>
    
    <!-- MODAL VERSION DESKTOP ////  MODAL POPUP DE ESPERA PARA PAGO estilos ubicados en la vista profesional-PremiunHome.scss jfk  /////-->
    <div class="modal fade" id="modalPagoEspera" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialogPopUpPremiunHome" role="document">
            <div class="modal-content modal-contentPropiedPopUpPremiunHome">
                <div class="modal-header modalHeaderPropiedPopUpPremiunHome">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="headerBtnCierrePopUpPremiunHome" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body modal-bodyPopUpPremiunHome">
                    <div class="col-md-12 modalBodyContentPrincipalPopUpPremiunHome">
                        <div class="col-5 modalBodyContentLogoPopUpPremiunHome">
                            <img class="modalBodyLogoPopUpPremiunHome" src="{{$urlZaabra}}img/footer/logo-footer-desplegable.png"> 
                        </div>

                        <div class="col-7 modalBodyContentServProfPopUpPremiunHome">
                            <h1 class="modalBodyServProfFontPopUpPremiunHome">SERVICIOS</h1>
                            <h1 class="modalBodyServProfFontPopUpPremiunHome">PROFESIONALES</h1> 
                        </div>
                    </div>

                    <div class="col-12 modalBodyContentAvisoPopUpPremiunHome">
                        <h1 class="modalBodyAvisoFontPopUpPremiunHome">Permítenos unos minutos para</h1>
                        <h1 class="modalBodyAvisoFontPopUpPremiunHome">procesar tu compra...</h1>
                    </div>
                </div>
               
                <div class="wrapper">
                    <div class="blue ball"></div>
                    <div class="red ball"></div>  
                    <div class="yellow ball"></div>  
                    <div class="green ball"></div>  
                </div>
            </div>
        </div>
    </div>

    

    <!-- MODAL VERSION CELULAR jfk -->
    <div class="modal fade" id="modalPagoEsperaCell" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialogPopUpPremiunHome" role="document">
            <div class="modal-content modal-contentPropiedPopUpPremiunHome">
                <div class="modal-header modalHeaderPropiedPopUpPremiunHome">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="headerBtnCierrePopUpPremiunHome" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body modal-bodyPopUpPremiunHome">
                    <div class="col-12 modalBodyContentPrincipalPopUpPremiunHome">
                        <div class="col-5 modalBodyContentLogoPopUpPremiunHome">
                            <img class="modalBodyLogoPopUpPremiunHome" src="{{$urlZaabra}}img/footer/logo-footer-desplegable.png"> 
                        </div>

                        <div class="col-7 modalBodyContentServProfPopUpPremiunHome">
                            <h1 class="modalBodyServProfFontPopUpPremiunHome">SERVICIOS</h1>
                            <h1 class="modalBodyServProfFontPopUpPremiunHome">PROFESIONALES</h1> 
                        </div>
                    </div>

                    <div class="col-12 modalBodyContentAvisoPopUpPremiunHome">
                        <h1 class="modalBodyAvisoFontPopUpPremiunHome">Permítenos unos minutos para</h1>
                        <h1 class="modalBodyAvisoFontPopUpPremiunHome">procesar tu compra...</h1>
                    </div>
                </div>
               
                <div class="wrapper">
                    <div class="blue ball"></div>
                    <div class="red ball"></div>  
                    <div class="yellow ball"></div>  
                    <div class="green ball"></div>  
                </div>
            </div>
        </div>
    </div>

    

</html>
@include('libreriasjsAbajo')
   