@extends('layouts.index')
@section('contenido')



<div class="container-fluid margen-superior-galeria backgraund-blanco">
    <div class="col-12 text-center padding-top2">
        <h4 class="color-azul titulo-ruta h4-margin-button-galeria texto-bold"> {{$especialidad}}</h4>
    </div>
</div>
 <!----------------------------- carrusel destacados ------------------------------------>
        
        @if(isset($objProfDestacados[0]))


        <!----------------------------- carrusel destacados version pc ------------------------------------>
        <div  class="container-fluid contenedor-carrusel-galeria-pc contenedor-carrusel-galeria ">
                <div id="carousel-galeria-pc"  class="contenedor-general-carrusel-galeria">
                        
                                @foreach ($objProfDestacados as $key => $item)
                                    @php $i = $loop->iteration @endphp        
                                    
                                    <div class="d-flex col-12 col-md-12 col-lg-3  noPad contenedor-carrusel-galeria ">
                                        <div class="col-6 col-md-6  col-lg-6">
                                            <img class="imagen-etiqueta-carrusel-galeria" src="{{$urlZaabra.$item->fotoperfil}}">
                                        </div>
                                        <div class="col-6 col-md-6  col-lg-6 noPad">
                                            <div class="contenedor-general-textos-extrellas-carrusel-pc">
                                                    <div class="col-12 col-md-12 col-lg-12 d-flex">
                                                           <?php
                                                                //Esto extrae el Nombre y lo pone en mayuscula
                                                                $TempNombre = explode(" ", $item->NOMBRE);
                                                                $TempApellido = explode(" ", $item->APELLIDO);
                                                                if(isset($item->APELLIDO)){
                                                                    if($TempNombre[0] == ""){
                                                                        $TempNombre[0] = $TempNombre[1];
                                                                    }
                                                                    if($TempApellido[0] == ""){
                                                                        $TempApellido[0] = $TempApellido[1];
                                                                    }
                                                                    $NameSaliente = ucwords(strtolower($TempNombre[0])).' '.ucwords(strtolower($TempApellido[0]));
                                                                }else{
                                                                    if(isset($TempNombre[1])){
                                                                        if($TempNombre[0] == ""){
                                                                            $TempNombre[0] = $TempNombre[1];  
                                                                            $TempNombre[1] = $TempNombre[2];                                                              
                                                                        }
                                                                        $NameSaliente = ucwords(strtolower($TempNombre[0])).' '.ucwords(strtolower($TempNombre[1]));
                                                                    
                                                                    }else{
                                                                        $NameSaliente = ucwords(strtolower($TempNombre[0]));
                                                                    }
                                                                
                                                                
                                                                    
                                                                }
                                                            ?>
                                                        <h4 class="span-nombre-profesional-carrusel-galeria-pc texto-bold color-gris-landing-Prof" style="margin-bottom: 0px;">{{$NameSaliente}} </h4>
                                                        <img  class="icono-verificado-galeria" src="{{$urlZaabra}}img/boton-menbresia.png">
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-12">
                                                        <span class="span-especialidad-galeria texto-bold color-gris-landing-Prof">{{$item->NombreEspecialidad}}</span> 
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-12">
                                                        <span class="ciudad-carrusel-galeria texto-bold color-gris-landing-Prof">{{$item->nombreCiudad}}</span>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-12 noPad">
                                                                    @if($item->Calificacion == 0)           
                                                                        <div class="col-12 col-md-12 col-lg-12">
                                                                            <span class="estrellas">
                                                                                <i class="far fa-star"></i>   
                                                                                <i class="far fa-star"></i>   
                                                                                <i class="far fa-star"></i>   
                                                                                <i class="far fa-star"></i>   
                                                                                <i class="far fa-star"></i>                        
                                                                            </span>
                                                                        </div>
                                                                    @endif
                                                                    @if($item->Calificacion >= 0.1 AND $item->Calificacion <= 0.5)           
                                                                        <div class="col-12 col-md-12 col-lg-12">
                                                                            <span class="estrellas">
                                                                            <i class="fas fa-star-half-alt"></i> <!-- MEDIA--> 
                                                                                <i class="far fa-star"></i>   
                                                                                <i class="far fa-star"></i>   
                                                                                <i class="far fa-star"></i>   
                                                                                <i class="far fa-star"></i>                        
                                                                            </span>
                                                                        </div>
                                                                    @endif
                                                                    @if($item->Calificacion >= 0.6 AND $item->Calificacion <=1)           
                                                                        <div class="col-12 col-md-12 col-lg-12">
                                                                            <span class="estrellas">
                                                                                <i class="fas fa-star"></i> <!--1 LLENA-->
                                                                                <i class="far fa-star"></i>   
                                                                                <i class="far fa-star"></i>   
                                                                                <i class="far fa-star"></i>   
                                                                                <i class="far fa-star"></i>                        
                                                                            </span>
                                                                        </div>
                                                                    @endif
                                                                    @if($item->Calificacion >= 1.1 AND $item->Calificacion <=1.5)           
                                                                        <div class="col-12 col-md-12 col-lg-12">
                                                                            <span class="estrellas">
                                                                                <i class="fas fa-star"></i> <!--1 LLENA-->
                                                                                <i class="fas fa-star-half-alt"></i> <!-- MEDIA--> 
                                                                                <i class="far fa-star"></i>   
                                                                                <i class="far fa-star"></i>   
                                                                                <i class="far fa-star"></i>                        
                                                                            </span>
                                                                        </div>
                                                                    @endif
                                                                    @if($item->Calificacion >= 1.6 AND $item->Calificacion <=2)           
                                                                        <div class="col-12 col-md-12 col-lg-12">
                                                                            <span class="estrellas">
                                                                                <i class="fas fa-star"></i> <!--1 LLENA-->
                                                                                <i class="fas fa-star"></i> <!--2 LLENA--> 
                                                                                <i class="far fa-star"></i>   
                                                                                <i class="far fa-star"></i>   
                                                                                <i class="far fa-star"></i>                        
                                                                            </span>
                                                                        </div>
                                                                    @endif
                                                                    @if($item->Calificacion >= 2.1 AND $item->Calificacion <=2.5)           
                                                                        <div class="col-12 col-md-12 col-lg-12">
                                                                            <span class="estrellas">
                                                                                <i class="fas fa-star"></i> <!--1 LLENA-->
                                                                                <i class="fas fa-star"></i> <!--2 LLENA--> 
                                                                                <i class="fas fa-star-half-alt"></i> <!-- MEDIA-->  
                                                                                <i class="far fa-star"></i>   
                                                                                <i class="far fa-star"></i>                        
                                                                            </span>
                                                                        </div>
                                                                    @endif
                                                                    @if($item->Calificacion >= 2.6 AND $item->Calificacion <=3)           
                                                                        <div class="col-12 col-md-12 col-lg-12">
                                                                            <span class="estrellas">
                                                                                <i class="fas fa-star"></i> <!--1 LLENA-->
                                                                                <i class="fas fa-star"></i> <!--2 LLENA--> 
                                                                                <i class="fas fa-star"></i> <!--3 LLENA--> 
                                                                                <i class="far fa-star"></i>   
                                                                                <i class="far fa-star"></i>                        
                                                                            </span>
                                                                        </div>
                                                                    @endif
                                                                    @if($item->Calificacion >= 3.1 AND $item->Calificacion <=3.5)           
                                                                        <div class="col-12 col-md-12 col-lg-12">
                                                                            <span class="estrellas">
                                                                                <i class="fas fa-star"></i> <!--1 LLENA-->
                                                                                <i class="fas fa-star"></i> <!--2 LLENA--> 
                                                                                <i class="fas fa-star"></i> <!--3 LLENA--> 
                                                                                <i class="fas fa-star-half-alt"></i> <!-- MEDIA-->   
                                                                                <i class="far fa-star"></i>                        
                                                                            </span>
                                                                        </div>
                                                                    @endif
                                                                    @if($item->Calificacion >= 3.6 AND $item->Calificacion <= 4)           
                                                                        <div class="col-12 col-md-12 col-lg-12">
                                                                            <span class="estrellas">
                                                                                <i class="fas fa-star"></i> <!--1 LLENA-->
                                                                                <i class="fas fa-star"></i> <!--2 LLENA--> 
                                                                                <i class="fas fa-star"></i> <!--3 LLENA--> 
                                                                                <i class="fas fa-star"></i> <!--4 LLENA-->   
                                                                                <i class="far fa-star"></i>                        
                                                                            </span>
                                                                        </div>
                                                                    @endif
                                                                    @if($item->Calificacion >= 4.1 AND $item->Calificacion <= 4.5)           
                                                                        <div class="col-12 col-md-12 col-lg-12">
                                                                            <span class="estrellas">
                                                                                <i class="fas fa-star"></i> <!--1 LLENA-->
                                                                                <i class="fas fa-star"></i> <!--2 LLENA--> 
                                                                                <i class="fas fa-star"></i> <!--3 LLENA--> 
                                                                                <i class="fas fa-star"></i> <!--4 LLENA-->   
                                                                                <i class="fas fa-star-half-alt"></i> <!-- MEDIA-->                       
                                                                            </span>
                                                                        </div>
                                                                    @endif
                                                                    @if($item->Calificacion >= 4.6 AND $item->Calificacion <= 5)           
                                                                        <div class="col-12 col-md-12 col-lg-12">
                                                                            <span class="estrellas">
                                                                                <i class="fas fa-star"></i> <!--1 LLENA-->
                                                                                <i class="fas fa-star"></i> <!--2 LLENA--> 
                                                                                <i class="fas fa-star"></i> <!--3 LLENA--> 
                                                                                <i class="fas fa-star"></i> <!--4 LLENA-->   
                                                                                <i class="fas fa-star"></i> <!--5 LLENA-->                  
                                                                            </span>
                                                                        </div>
                                                                    @endif
                                                    </div>                
                                             </div>
                                            <div class="col-12 col-md-12 col-lg-12 contenedor-descripcion-carrusel-galeria">
                                                <span class="texto-descripcion-galeria-carrusel 
                                                ">
                                                    {{$item->descripcion}}
                                                </span>
                                            </div>
                                            <div class="col-12 col-md-12 col-lg-12 margin-top5">
                                                <span class="color-azul texto-bold texto-vermas-galeria" onclick="window.location.href= '{{$urlZaabra}}infoProfesional/{{$item->idUser}}'">Ver Más<i class="fas fa-chevron-down"></i></span>
                                            </div>
                                            <div class="col-12 d-flex contenedor-botones-carrusel-galeria  botton-abajo">
                                                <button class=" boton-agendar-carrusel-galeria-pc texto-bold">AGENDAR CITA</button>
                                                <button class=" boton-pagar-carrusel-galeria-pc texto-bold">PAGAR CITA</button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                        
            
                </div>
        </div>

        @endif                                                            
        @if(!empty($objProfDestacados))
               <!----------------------------- carrusel destacados version cel ------------------------------------>
               <div id="carousel-galeria" class=" container-fluid contenedor-carrusel-galeria  noPad contenedor-carrusel-galeria-cel ">
                                @foreach ($objProfDestacados as $key => $item)
                                    @php $i = $loop->iteration @endphp
                                    <div class="col-12 text-center noPad">
                                            <img class="imagen-etiqueta-carrusel-galeria" src="{{$urlZaabra.$item->fotoperfil}}">
                                                <div class="col-12  margin-top5 noPad">
                                                    <span class="span-nombre-profesional-carrusel-galeria-cel texto-bold color-gris-landing-Prof">{{$item->NOMBRE}} {{$item->APELLIDO}}</span>
                                                </div>
                                                <div class="col-12 ">
                                                    <span class="span-especialidad-galeria texto-bold color-gris-landing-Prof">{{$item->NombreEspecialidad}}</span> 
                                                </div>
                                                @if($item->Calificacion == 0)           
                                                        <div class="col-12 col-md-12 col-lg-12">
                                                            <span class="estrellas">
                                                                <i class="far fa-star"></i>   
                                                                <i class="far fa-star"></i>   
                                                                <i class="far fa-star"></i>   
                                                                <i class="far fa-star"></i>   
                                                                <i class="far fa-star"></i>                        
                                                            </span>
                                                        </div>
                                                    @endif
                                                    @if($item->Calificacion >= 0.1 AND $item->Calificacion <= 0.5)           
                                                        <div class="col-12 col-md-12 col-lg-12">
                                                            <span class="estrellas">
                                                            <i class="fas fa-star-half-alt"></i> <!-- MEDIA--> 
                                                                <i class="far fa-star"></i>   
                                                                <i class="far fa-star"></i>   
                                                                <i class="far fa-star"></i>   
                                                                <i class="far fa-star"></i>                        
                                                            </span>
                                                        </div>
                                                    @endif
                                                    @if($item->Calificacion >= 0.6 AND $item->Calificacion <=1)           
                                                        <div class="col-12 col-md-12 col-lg-12">
                                                            <span class="estrellas">
                                                                <i class="fas fa-star"></i> <!--1 LLENA-->
                                                                <i class="far fa-star"></i>   
                                                                <i class="far fa-star"></i>   
                                                                <i class="far fa-star"></i>   
                                                                <i class="far fa-star"></i>                        
                                                            </span>
                                                        </div>
                                                    @endif
                                                    @if($item->Calificacion >= 1.1 AND $item->Calificacion <=1.5)           
                                                        <div class="col-12 col-md-12 col-lg-12">
                                                            <span class="estrellas">
                                                                <i class="fas fa-star"></i> <!--1 LLENA-->
                                                                <i class="fas fa-star-half-alt"></i> <!-- MEDIA--> 
                                                                <i class="far fa-star"></i>   
                                                                <i class="far fa-star"></i>   
                                                                <i class="far fa-star"></i>                        
                                                            </span>
                                                        </div>
                                                    @endif
                                                    @if($item->Calificacion >= 1.6 AND $item->Calificacion <=2)           
                                                        <div class="col-12 col-md-12 col-lg-12">
                                                            <span class="estrellas">
                                                                <i class="fas fa-star"></i> <!--1 LLENA-->
                                                                <i class="fas fa-star"></i> <!--2 LLENA--> 
                                                                <i class="far fa-star"></i>   
                                                                <i class="far fa-star"></i>   
                                                                <i class="far fa-star"></i>                        
                                                            </span>
                                                        </div>
                                                    @endif
                                                    @if($item->Calificacion >= 2.1 AND $item->Calificacion <=2.5)           
                                                        <div class="col-12 col-md-12 col-lg-12">
                                                            <span class="estrellas">
                                                                <i class="fas fa-star"></i> <!--1 LLENA-->
                                                                <i class="fas fa-star"></i> <!--2 LLENA--> 
                                                                <i class="fas fa-star-half-alt"></i> <!-- MEDIA-->  
                                                                <i class="far fa-star"></i>   
                                                                <i class="far fa-star"></i>                        
                                                            </span>
                                                        </div>
                                                    @endif
                                                    @if($item->Calificacion >= 2.6 AND $item->Calificacion <=3)           
                                                        <div class="col-12 col-md-12 col-lg-12">
                                                            <span class="estrellas">
                                                                <i class="fas fa-star"></i> <!--1 LLENA-->
                                                                <i class="fas fa-star"></i> <!--2 LLENA--> 
                                                                <i class="fas fa-star"></i> <!--3 LLENA--> 
                                                                <i class="far fa-star"></i>   
                                                                <i class="far fa-star"></i>                        
                                                            </span>
                                                        </div>
                                                    @endif
                                                    @if($item->Calificacion >= 3.1 AND $item->Calificacion <=3.5)           
                                                        <div class="col-12 col-md-12 col-lg-12">
                                                            <span class="estrellas">
                                                                <i class="fas fa-star"></i> <!--1 LLENA-->
                                                                <i class="fas fa-star"></i> <!--2 LLENA--> 
                                                                <i class="fas fa-star"></i> <!--3 LLENA--> 
                                                                <i class="fas fa-star-half-alt"></i> <!-- MEDIA-->   
                                                                <i class="far fa-star"></i>                        
                                                            </span>
                                                        </div>
                                                    @endif
                                                    @if($item->Calificacion >= 3.6 AND $item->Calificacion <= 4)           
                                                        <div class="col-12 col-md-12 col-lg-12">
                                                            <span class="estrellas">
                                                                <i class="fas fa-star"></i> <!--1 LLENA-->
                                                                <i class="fas fa-star"></i> <!--2 LLENA--> 
                                                                <i class="fas fa-star"></i> <!--3 LLENA--> 
                                                                <i class="fas fa-star"></i> <!--4 LLENA-->   
                                                                <i class="far fa-star"></i>                        
                                                            </span>
                                                        </div>
                                                    @endif
                                                    @if($item->Calificacion >= 4.1 AND $item->Calificacion <= 4.5)           
                                                        <div class="col-12 col-md-12 col-lg-12">
                                                            <span class="estrellas">
                                                                <i class="fas fa-star"></i> <!--1 LLENA-->
                                                                <i class="fas fa-star"></i> <!--2 LLENA--> 
                                                                <i class="fas fa-star"></i> <!--3 LLENA--> 
                                                                <i class="fas fa-star"></i> <!--4 LLENA-->   
                                                                <i class="fas fa-star-half-alt"></i> <!-- MEDIA-->                       
                                                            </span>
                                                        </div>
                                                    @endif
                                                    @if($item->Calificacion >= 4.6 AND $item->Calificacion <= 5)           
                                                        <div class="col-12 col-md-12 col-lg-12">
                                                            <span class="estrellas">
                                                                <i class="fas fa-star"></i> <!--1 LLENA-->
                                                                <i class="fas fa-star"></i> <!--2 LLENA--> 
                                                                <i class="fas fa-star"></i> <!--3 LLENA--> 
                                                                <i class="fas fa-star"></i> <!--4 LLENA-->   
                                                                <i class="fas fa-star"></i> <!--5 LLENA-->                  
                                                            </span>
                                                        </div>
                                                    @endif
                                        <div class="col-12 d-flex contenedor-botones-carrusel-galeria padding-button5">
                                            <button class=" boton-agendar-carrusel-galeria texto-bold">AGENDAR CITA</button>
                                            <button class=" boton-ver-carrusel-galeria texto-bold" onclick="window.location.href= '{{$urlZaabra}}infoProfesional/{{$item->idUser}}'">Ver Más</button>
                                        </div>
                                    </div>
                        @endforeach

                </div>
        @endif
<!----------------------------- continer premiun ------------------------------------>
<div class="container-fluid backgraund-gris-claro">
                <div class="container-general-premiun  padding-top5">
                    <div class="row">
                        @foreach ($objProfPremiun as $key => $item)
                                    @php $i = $loop->iteration @endphp
                                        <div class="col-12 col-md-6  col-lg-3 text-center  contenedor-etiqueta-premiun-galeria">
                                            <div class="col-12 col-md-12 col-lg-12 etiquetas-premiun backgraund-blanco ">
                                                   <div class="col-12 col-md-12 col-lg-12 margin-top5">
                                                                <img class="imagen-etiqueta margin-top5" src="{{$urlZaabra.$item->fotoperfil}}">
                                                    </div>
                                                    <?php
                                                        //Esto extrae el Nombre y lo pone en mayuscula
                                                        $TempNombre = explode(" ", $item->NOMBRE);
                                                        $TempApellido = explode(" ", $item->APELLIDO);
                                                        if(!isset($item->APELLIDO)){
                                                            if($TempNombre[0] == ""){
                                                                $TempNombre[0] = $TempNombre[1];
                                                            }
                                                            if($TempApellido[0] == ""){
                                                                $TempApellido[0] = $TempApellido[1];
                                                            }
                                                            $NameSaliente = ucwords(strtolower($TempNombre[0])).' '.ucwords(strtolower($TempApellido[0]));
                                                        }else{
                                                            if($TempNombre[0] == ""){
                                                                $TempNombre[0] = $TempNombre[1];
                                                                $TempNombre[1] = $TempNombre[2];
                                                            }
                                                            $NameSaliente = ucwords(strtolower($TempNombre[0])).' '.ucwords(strtolower($TempNombre[1]));
                                                        }
                                                    ?>
                                                 <div class="col-12 col-md-12 col-lg-12 margin-top5 display-gri contenedor-preminu-texto-estrellas-galeria">
                                                        <span class="span-nombre-profesional-galeria texto-bold color-gris-landing-Prof">{{$NameSaliente}}</span>
                                                        <span class="span-especialidad-galeria texto-bold color-gris-landing-Prof">{{$item->NombreEspecialidad}}</span>
                                                        @if($item->Calificacion == 0)           
                                                        
                                                            <span class="estrellas">
                                                                <i class="far fa-star"></i>   
                                                                <i class="far fa-star"></i>   
                                                                <i class="far fa-star"></i>   
                                                                <i class="far fa-star"></i>   
                                                                <i class="far fa-star"></i>                        
                                                            </span>
                                                        
                                                    @endif
                                                    @if($item->Calificacion >= 0.1 AND $item->Calificacion <= 0.5)           
                                                        
                                                            <span class="estrellas">
                                                            <i class="fas fa-star-half-alt"></i> <!-- MEDIA--> 
                                                                <i class="far fa-star"></i>   
                                                                <i class="far fa-star"></i>   
                                                                <i class="far fa-star"></i>   
                                                                <i class="far fa-star"></i>                        
                                                            </span>
                                                        
                                                    @endif
                                                    @if($item->Calificacion >= 0.6 AND $item->Calificacion <=1)           
                                                        
                                                            <span class="estrellas">
                                                                <i class="fas fa-star"></i> <!--1 LLENA-->
                                                                <i class="far fa-star"></i>   
                                                                <i class="far fa-star"></i>   
                                                                <i class="far fa-star"></i>   
                                                                <i class="far fa-star"></i>                        
                                                            </span>
                                                        
                                                    @endif
                                                    @if($item->Calificacion >= 1.1 AND $item->Calificacion <=1.5)           
                                                        
                                                            <span class="estrellas">
                                                                <i class="fas fa-star"></i> <!--1 LLENA-->
                                                                <i class="fas fa-star-half-alt"></i> <!-- MEDIA--> 
                                                                <i class="far fa-star"></i>   
                                                                <i class="far fa-star"></i>   
                                                                <i class="far fa-star"></i>                        
                                                            </span>
                                                        
                                                    @endif
                                                    @if($item->Calificacion >= 1.6 AND $item->Calificacion <=2)           
                                                        
                                                            <span class="estrellas">
                                                                <i class="fas fa-star"></i> <!--1 LLENA-->
                                                                <i class="fas fa-star"></i> <!--2 LLENA--> 
                                                                <i class="far fa-star"></i>   
                                                                <i class="far fa-star"></i>   
                                                                <i class="far fa-star"></i>                        
                                                            </span>
                                                        
                                                    @endif
                                                    @if($item->Calificacion >= 2.1 AND $item->Calificacion <=2.5)           
                                                        
                                                            <span class="estrellas">
                                                                <i class="fas fa-star"></i> <!--1 LLENA-->
                                                                <i class="fas fa-star"></i> <!--2 LLENA--> 
                                                                <i class="fas fa-star-half-alt"></i> <!-- MEDIA-->  
                                                                <i class="far fa-star"></i>   
                                                                <i class="far fa-star"></i>                        
                                                            </span>
                                                        
                                                    @endif
                                                    @if($item->Calificacion >= 2.6 AND $item->Calificacion <=3)           
                                                        
                                                            <span class="estrellas">
                                                                <i class="fas fa-star"></i> <!--1 LLENA-->
                                                                <i class="fas fa-star"></i> <!--2 LLENA--> 
                                                                <i class="fas fa-star"></i> <!--3 LLENA--> 
                                                                <i class="far fa-star"></i>   
                                                                <i class="far fa-star"></i>                        
                                                            </span>
                                                        
                                                    @endif
                                                    @if($item->Calificacion >= 3.1 AND $item->Calificacion <=3.5)           
                                                        
                                                            <span class="estrellas">
                                                                <i class="fas fa-star"></i> <!--1 LLENA-->
                                                                <i class="fas fa-star"></i> <!--2 LLENA--> 
                                                                <i class="fas fa-star"></i> <!--3 LLENA--> 
                                                                <i class="fas fa-star-half-alt"></i> <!-- MEDIA-->   
                                                                <i class="far fa-star"></i>                        
                                                            </span>
                                                        
                                                    @endif
                                                    @if($item->Calificacion >= 3.6 AND $item->Calificacion <= 4)           
                                                        
                                                            <span class="estrellas">
                                                                <i class="fas fa-star"></i> <!--1 LLENA-->
                                                                <i class="fas fa-star"></i> <!--2 LLENA--> 
                                                                <i class="fas fa-star"></i> <!--3 LLENA--> 
                                                                <i class="fas fa-star"></i> <!--4 LLENA-->   
                                                                <i class="far fa-star"></i>                        
                                                            </span>
                                                        
                                                    @endif
                                                    @if($item->Calificacion >= 4.1 AND $item->Calificacion <= 4.5)           
                                                        
                                                            <span class="estrellas">
                                                                <i class="fas fa-star"></i> <!--1 LLENA-->
                                                                <i class="fas fa-star"></i> <!--2 LLENA--> 
                                                                <i class="fas fa-star"></i> <!--3 LLENA--> 
                                                                <i class="fas fa-star"></i> <!--4 LLENA-->   
                                                                <i class="fas fa-star-half-alt"></i> <!-- MEDIA-->                       
                                                            </span>
                                                        
                                                    @endif
                                                    @if($item->Calificacion >= 4.6 AND $item->Calificacion <= 5)           
                                                        
                                                            <span class="estrellas">
                                                                <i class="fas fa-star"></i> <!--1 LLENA-->
                                                                <i class="fas fa-star"></i> <!--2 LLENA--> 
                                                                <i class="fas fa-star"></i> <!--3 LLENA--> 
                                                                <i class="fas fa-star"></i> <!--4 LLENA-->   
                                                                <i class="fas fa-star"></i> <!--5 LLENA-->                  
                                                            </span>
                                                        
                                                    @endif                                     
                                                </div>
                                                    <div class="col-12 col-md-12 col-lg-12 noPad descripcion-tarjeta-premiun-pc">
                                                        <span class="texto-descripcion-galeria text-left color-gris-landing-Prof">
                                                            {{$item->descripcion}}
                                                         </span>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-12 noPad justify-content-center d-flex contenedor-botones-galeria">
                                                        <button class=" boton-agendar-carrusel-galeria texto-bold">AGENDAR CITA</button>
                                                        <button class=" boton-ver-galeria texto-bold" onclick="window.location.href= '{{$urlZaabra}}infoProfesional/{{$item->idUser}}'"> VER MÁS</button>
                                                    </div>
                                            </div>
                                        </div>
                                    
                                @endforeach
                                <div class="col-md-12  container-paginador-galeria">
                                    @if(!empty($objProfPremiun))
                                        {{ $objProfPremiun->links() }}
                                    @endif
                                </div>
                               
                    </div>
                </div>
</div>
<!----------------------------- container normal ------------------------------------>

<div class="container-general-normal  padding-top5 contenedor-carrusel-galeria">
    <div class="row">
            @foreach ($objProfNormal as $key => $item)
                @php $i = $loop->iteration @endphp
                <div class="col-12 col-md-12 col-lg-3 text-center contenedor-etiqueta-normal-galeria">
                    <div class="col-12 col-md-12 col-lg-12 container-principal-profesional-normal display-gri">
                        <?php
                                        //Esto extrae el Nombre y lo pone en mayuscula
                                        $TempNombre = explode(" ", $item->NOMBRE);
                                        $TempApellido = explode(" ", $item->APELLIDO);
                                        if(!isset($item->APELLIDO)){
                                            if($TempNombre[0] == ""){
                                                $TempNombre[0] = $TempNombre[1];
                                            }
                                            if($TempApellido[0] == ""){
                                                $TempApellido[0] = $TempApellido[1];
                                            }
                                            $NameSaliente = ucwords(strtolower($TempNombre[0])).' '.ucwords(strtolower($TempApellido[0]));
                                        }else{
                                            if(isset($TempNombre[1])){
                                                if($TempNombre[0] == ""){
                                                    $TempNombre[0] = $TempNombre[1];  
                                                    $TempNombre[1] = $TempNombre[2];                                                              
                                                }
                                                $NameSaliente = ucwords(strtolower($TempNombre[0])).' '.ucwords(strtolower($TempNombre[1]));
                                                
                                            }else{
                                                $NameSaliente = ucwords(strtolower($TempNombre[0]));
                                            }   
                                        }
                                    ?>
                            <span class="span-nombre-profesional-normal-galeria texto-bold color-gris-landing-Prof">{{$NameSaliente}}</span>
                            <span class="span-especialidad-normal-galeria texto-bold color-gris-landing-Prof">{{$item->nombreProfesion}}</span>
                            @if($item->Calificacion == 0)           
                                    <span class="estrellas">
                                        <i class="far fa-star"></i>   
                                        <i class="far fa-star"></i>   
                                        <i class="far fa-star"></i>   
                                        <i class="far fa-star"></i>   
                                        <i class="far fa-star"></i>                        
                                    </span>
                            @endif
                            @if($item->Calificacion >= 0.1 AND $item->Calificacion <= 0.5)           
                                
                                    <span class="estrellas">
                                    <i class="fas fa-star-half-alt"></i> <!-- MEDIA--> 
                                        <i class="far fa-star"></i>   
                                        <i class="far fa-star"></i>   
                                        <i class="far fa-star"></i>   
                                        <i class="far fa-star"></i>                        
                                    </span>
                                
                            @endif
                            @if($item->Calificacion >= 0.6 AND $item->Calificacion <=1)           
                                
                                    <span class="estrellas">
                                        <i class="fas fa-star"></i> <!--1 LLENA-->
                                        <i class="far fa-star"></i>   
                                        <i class="far fa-star"></i>   
                                        <i class="far fa-star"></i>   
                                        <i class="far fa-star"></i>                        
                                    </span>
                                
                            @endif
                            @if($item->Calificacion >= 1.1 AND $item->Calificacion <=1.5)           
                                
                                    <span class="estrellas">
                                        <i class="fas fa-star"></i> <!--1 LLENA-->
                                        <i class="fas fa-star-half-alt"></i> <!-- MEDIA--> 
                                        <i class="far fa-star"></i>   
                                        <i class="far fa-star"></i>   
                                        <i class="far fa-star"></i>                        
                                    </span>
                                
                            @endif
                            @if($item->Calificacion >= 1.6 AND $item->Calificacion <=2)           
                                
                                    <span class="estrellas">
                                        <i class="fas fa-star"></i> <!--1 LLENA-->
                                        <i class="fas fa-star"></i> <!--2 LLENA--> 
                                        <i class="far fa-star"></i>   
                                        <i class="far fa-star"></i>   
                                        <i class="far fa-star"></i>                        
                                    </span>
                                
                            @endif
                            @if($item->Calificacion >= 2.1 AND $item->Calificacion <=2.5)           
                                
                                    <span class="estrellas">
                                        <i class="fas fa-star"></i> <!--1 LLENA-->
                                        <i class="fas fa-star"></i> <!--2 LLENA--> 
                                        <i class="fas fa-star-half-alt"></i> <!-- MEDIA-->  
                                        <i class="far fa-star"></i>   
                                        <i class="far fa-star"></i>                        
                                    </span>
                                
                            @endif
                            @if($item->Calificacion >= 2.6 AND $item->Calificacion <=3)           
                                
                                    <span class="estrellas">
                                        <i class="fas fa-star"></i> <!--1 LLENA-->
                                        <i class="fas fa-star"></i> <!--2 LLENA--> 
                                        <i class="fas fa-star"></i> <!--3 LLENA--> 
                                        <i class="far fa-star"></i>   
                                        <i class="far fa-star"></i>                        
                                    </span>
                                
                            @endif
                            @if($item->Calificacion >= 3.1 AND $item->Calificacion <=3.5)           
                                
                                    <span class="estrellas">
                                        <i class="fas fa-star"></i> <!--1 LLENA-->
                                        <i class="fas fa-star"></i> <!--2 LLENA--> 
                                        <i class="fas fa-star"></i> <!--3 LLENA--> 
                                        <i class="fas fa-star-half-alt"></i> <!-- MEDIA-->   
                                        <i class="far fa-star"></i>                        
                                    </span>
                                
                            @endif
                            @if($item->Calificacion >= 3.6 AND $item->Calificacion <= 4)           
                                
                                    <span class="estrellas">
                                        <i class="fas fa-star"></i> <!--1 LLENA-->
                                        <i class="fas fa-star"></i> <!--2 LLENA--> 
                                        <i class="fas fa-star"></i> <!--3 LLENA--> 
                                        <i class="fas fa-star"></i> <!--4 LLENA-->   
                                        <i class="far fa-star"></i>                        
                                    </span>
                                
                            @endif
                            @if($item->Calificacion >= 4.1 AND $item->Calificacion <= 4.5)           
                                    <span class="estrellas">
                                        <i class="fas fa-star"></i> <!--1 LLENA-->
                                        <i class="fas fa-star"></i> <!--2 LLENA--> 
                                        <i class="fas fa-star"></i> <!--3 LLENA--> 
                                        <i class="fas fa-star"></i> <!--4 LLENA-->   
                                        <i class="fas fa-star-half-alt"></i> <!-- MEDIA-->                       
                                    </span>
                            @endif
                            @if($item->Calificacion >= 4.6 AND $item->Calificacion <= 5)           
                                    <span class="estrellas">
                                        <i class="fas fa-star"></i> <!--1 LLENA-->
                                        <i class="fas fa-star"></i> <!--2 LLENA--> 
                                        <i class="fas fa-star"></i> <!--3 LLENA--> 
                                        <i class="fas fa-star"></i> <!--4 LLENA-->   
                                        <i class="fas fa-star"></i> <!--5 LLENA-->                  
                                    </span>
                            @endif 
                    </div>
                </div>
                @endforeach
                
                <div class="col-md-12 container-paginador-galeria">

                    @if(!empty($objProfNormal))
                        {{ $objProfNormal->links() }}
                    @endif
                </div>                                        
                
    </div>
</div>
<!----------------------------- div solo representativo no quitar  ------------------------------------>
<div class="col-12 backgraund-blanco div-representativo-galeria "></div>
@endsection


