@extends('layouts.index')
@section('contenido')




    <div class="container-fluid noPad bannerProfesiones-estudiantes" id="bannerProfesiones-estudiantes">
       
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
                            <a href="{{$valueJson}}" class="noPad">    
                            @endif
                    @endforeach
                @endif    
                        @foreach (json_decode($objProfesion[0]->imagen) as $valueJson)
                            @if($actual == $loop->iteration)
                                <img src="{{$urlZaabra.$valueJson }}" class="imagen-banner-especialidades-estudiantes" alt="">
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

<div class="container-fluid text-center">
    <h1 class="ruta-especilidad-estudiante">Nuestras Universidades</h1>
</div>
    <div class="container-fluid">
            <div class=" contenedor-resultado-filtro-universidades">
                <div class="row grid">
                    @php $idArea = $objArea[0]->id @endphp 
                        @foreach ($objEspecialidades  as $item)
                            
                            <div class="element-item col-12 col-md-6 col-lg-4 col-xl-3 contenedor-imagen-text-result-filtro-univ"  id="{{$item->ruta}}">
                                @if($idArea != 5)
                                <a href="{{url('/galeriaProfesionales/'.$objArea[0]->ruta.'/'.$objProfesion[0]->ruta.'/'.$item->ruta)}}">
                                @endif
                                @if($idArea == 5)
                                <a href="{{url('/galeriaEstudiantes/'.$objArea[0]->ruta.'/'.$objProfesion[0]->ruta.'/'.$item->ruta)}}">
                                @endif
                                        <div class="col-12 noPad"> 
                                            <img src="{{$urlZaabra.$item->imagen}}" class="imagen-resultado-filtro-espec-estudiantes">
                                        </div>
                                            
                                        <div class="col-12 text-center contenedor-nombre-especialidad-estudiantes">
                                            <h1 class="color-gris-texto-Prof-estd nombre-especialidad-especialidades-estudiantes">{{$item->nombreEspecialidad}}</h1>
                                        </div>
                                </a>   
                            </div>
                            <!--Este id pertenece la caja actual-->
                            @php $boxActual = $item->ruta @endphp
                                <script>
                                $(document).ready(function(){
                                    var clasesUniversidades = "{{$item->idUniversidad}}";
                                    clasesUniversidades = clasesUniversidades.replace(/,/ig, " ");
                                    $("#{{$boxActual}}").addClass(clasesUniversidades);
                                });
                                </script>
                        @endforeach
                </div>
            </div>
    </div>

 <!--Funcion de la filtracion  por universidad, esta filtracion no se puede quitar ya que se va a utilizar mas adelante -->
   <!-- <div class=" backgraund-gris-claro contenedor-carrusel-logos-filtro-univer">
        @if(!empty($objUniversidad))
            <div id="filters">
                <div id="carrusel-universidades-profesion">
                    @foreach($objUniversidad as $item)
                    <div class="container-img-galeria-universidades">
                        <img data-filter=".{{$item->idUniversidad}}" src="{{$urlZaabra.$item->fotoBanner}}" class="imagen-filtro-carru-universidad" alt=""  >
                    </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>-->

    <div class="container-fluid backgrund-verde">
        <div class="container text-center contenedor-titulo-carrusel-especialidad-estudiante">
            <h1 class="titulo-carrusel-especialidad-estudiante color-gris-texto-Prof-estd">Descubre nuestras carreras</h1>
        </div>
       @if(!empty($objUniversidad))
            <div class="contenedor-carrusel-estudiantes" id="carrrusel-especialidades-estudiantes">
                @foreach($objUniversidad as $item)
                       <a href="www.el teimpo">
                            <img src="{{$urlZaabra.$item->fotoBanner}}" class="img-carru-univ-estudiant" alt="">
                       </a>
                @endforeach
            </div>
        @endif
    </div>
@endsection
