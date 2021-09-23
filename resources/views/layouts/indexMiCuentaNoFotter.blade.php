@extends('layouts.indexNoFooter')

@section('contenido')

<div class="container container-principal-indexMiCuenta">

    <div class="col-12 col-md-12 row seccionMiCuenta">
        <div class="col-6 col-md-3 noPad divMiCuenta">
            <h1 class="tipografiaMiCuenta "> MI CUENTA </h1>
        </div>
        <div  class="col-6 offset-md-3  col-md-6 noPad divMiUsuario">
            <h1 class="tipografiaUsuario"> {{ Auth::user()->name  }}</h1>
        </div>
    </div>

    <div class="row col-md-12 content-options-contenido-indexMiCuenta">
        <div class="col-12 col-md-3 col-lg-2 listaMisDatos">
            <ul class="margenesUlMisDatos">
                <li><a href="{{ url('miCuenta') }}">MIS DATOS</a></li>
                <li><a href="{{ url('miCuenta') }}">MIS PEDIDOS</a></li>
                <li><a href="{{ url('miCuenta') }}">SIGUE TUS PEDIDOS</a></li>
                <li><a href="{{ url('miCuenta') }}">FAVORITOS</a></li>
                <li><a href="{{ url('miCuenta') }}">DEVOLUCIONES</a></li>
                <div id="formularioPagoPremiun">         
                </div>


                @if($premiunProf ?? '' > 0)
                    <a href="{{ url('profesionales') }}">
                        <img class="imagen-botonMembresia-indexMiCuenta-noFooter" src="{{$urlZaabra}}img/imagen_membresia.png">
                    </a>
                @else
                    @if($premiunTecn ?? '' > 0)
                        <a href="{{ url('profesionales') }}">
                            <img class="imagen-botonMembresia-indexMiCuenta-noFooter" src="{{$urlZaabra}}img/imagen_membresia.png">
                        </a>
                    @else
                        @if($premiunDoce ?? '' > 0)
                            <a href="{{ url('profesionales') }}">
                                <img class="imagen-botonMembresia-indexMiCuenta-noFooter" src="{{$urlZaabra}}img/imagen_membresia.png">
                            </a>
                        @else
                            @if($premiunEstu ?? '' > 0)
                            <a href="{{ url('estudiantes') }}">
                                <img class="imagen-botonMembresia-indexMiCuenta-noFooter" src="{{$urlZaabra}}img/imagen_membresia.png">
                            </a>
                            @else
                            <a href="{{ url('premiunView') }}">
                                <img class="imagen-botonMembresia-indexMiCuenta-noFooter" src="{{$urlZaabra}}img/imagen_membresia.png">
                            </a>
                            @endif

                        @endif
                    @endif
                @endif
        
            </ul>  
        </div>
        @yield('contenidoMiCuenta')

    </div>




   

</div>

@endsection 