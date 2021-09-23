@extends('layouts.index')
@section('contenido')
<!--Container carrusel especialidades-->
<div class="container-fluid noPad margin-top-superior-profesionales" id="bannerProfesiones-profesionales">
            @if(!empty ($objProfesion[0]->imagen))
                    @foreach (json_decode($objProfesion[0]->imagen) as $valueJson)
                        @php $tamaño = $loop->iteration @endphp 
                    @endforeach
            @endif

            @for($i = 1; $i <= $tamaño; $i++)
                @php $actual = $i;   @endphp
                @if(!empty ($objProfesion[0]->url))
                    @foreach (json_decode($objProfesion[0]->url) as $valueJson)
                        @if($actual == $loop->iteration)
                            <a href="{{$valueJson}}" class="col-12 noPad">    
                            @endif
                    @endforeach
                @endif    
                        @foreach (json_decode($objProfesion[0]->imagen) as $valueJson)
                            @if($actual == $loop->iteration)
                            <img src="{{$urlZaabra.$valueJson }}" class="imagen-carrusel-especialidades noPad" alt="">
                            @endif
                        @endforeach
                @if(!empty ($objProfesion[0]->url))
                    @foreach (json_decode($objProfesion[0]->url) as $valueJson)
                        @if($actual == $loop->iteration)
                        </a>
                        @endif
                    @endforeach
                @endif  

            @endfor
</div>



<!--Container rutta especialidades-->
<div class="container  contenedor-titulo-ruta-especialidad">
        <h1 class="color-azul texto-bold texto-ruta-especialidades"> {{$profesion}}</h1>
</div>

<!--Container tarjeta especialidades-->
<div class="contenedor-tarjetas-especialidades">
    <div class="row">
        @php $idArea = $objArea[0]->id @endphp 
           @php $idArea = $objArea[0]->id @endphp 
           @foreach ($objEspecialidades  as $item)
               <div class=" col-12 col-md-6 col-lg-3 imagenTituloProfesional ">
                   @if($idArea != 5)
                   <a href="{{url('/galeriaProfesionales/'.$objArea[0]->ruta.'/'.$objProfesion[0]->ruta.'/'.$item->ruta)}}">
                   @endif
                   @if($idArea == 5)
                   <a href="{{url('/galeriaEstudiantes/'.$objArea[0]->ruta.'/'.$objProfesion[0]->ruta.'/'.$item->ruta)}}">
                   @endif
                   
                       <div class="col-12 text-center noPad">
                           <div class="container-imagen"> 
                               <img src="{{$urlZaabra.$item->imagen}}" class="img-tarjetas-especialidades">
                           </div>
                               
                           <div class="container-titulo-tarjeta">
                               <h5 class="nombre-titulo-tarjeta color-gris-landing-Prof">{{$item->nombreEspecialidad}}</h5>
                           </div>
                       </div>
    
                   </a>   
               </div>
           @endforeach

       @if(!empty($objEspecialidades))
         {{ $objEspecialidades->links() }}
       @endif
    </div>
</div>

<div class="contenedor-general-confian-carrusel-especialidades">

            <div class="container contenedor-confian-especialidades">
                <div class="d-flex justify-content-center">
                    <h5 class="h5-text-ellos-especialidad">Ellos confían </h5>
                    <h5 class="color-azul"> en nosotros</h5>
                </div>
            </div>

            <div class="container-carrusel-publicidad-especilaidades">
                    @if(!empty($objbannersPagoPublicidad))
                        <div class="col-12 carrusel-publicidad-Pago-especialidad " id="carrusel-publicidad-Pago-especialidad">
                            @foreach($objbannersPagoPublicidad as $item)
                                @php
                                $rutaPago ="rutaImagenMarketing".$item->aprobado
                                @endphp
                                @foreach (json_decode($item->$rutaPago) as $valueJson)
                                <div class="contenedor-img-carrusel-publicid-especia">
                                <img src="{{$urlZaabra.$valueJson }}" class="img-carrusel-publicidad-especialidad">
                                </div>
                                @endforeach
                            @endforeach
                        </div>
                    @endif
            </div>
</div>
 
@endsection


