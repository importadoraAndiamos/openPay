@extends('layouts.indexNoCorp')
@section('contenido')
@php   @endphp

@php $newPerfil = $perfil[0]; @endphp
@if(!empty ($newPerfil->imagen))            
   @foreach (json_decode($newPerfil->imagen) as $valueJson)
      @php $tamañoimagen = $loop->iteration @endphp 
   @endforeach
@endif
@if (!empty ($newPerfil->imagen))
   @for($i = 1; $i <= $tamañoimagen; $i++)
   <style>
        .div-carrusel-landing-hijo{{$i}}{
         display:none;
        }
        .ver-imagen{{$i}}{
         z-index: 1000;
         position: absolute;
         margin-top: -100%;
        }
     </style>
     

   @endfor
@endif


<!------------------------------------------------ container vista computador --------------------------------------------------->
      <div class="container-fluid containerinfoProfesional info-visible-en-pc noPadMar">
<script>
    nombreActual='{{$newPerfil->nombre}}';
    nombreActual = nombreActual.replace(/ /ig, '-');
    apellidoActual='{{$newPerfil->apellido}}';
    apellidoActual = apellidoActual.replace(/ /ig, '-')
    urlActual =  window.location.href + '/' + nombreActual+'-'+apellidoActual;
    
   history.pushState(null, "", urlActual);
   
</script>                 
            <!----- contenido right------->
            <div class="col-12 noPadMar">
                        <div class="col-12 row noPadMar contains-cabecera">
                        <div class="col-8 row noPadMar contains-left">
                           <div class="col-3 noPad">
                              <img src="{{$urlZaabra}}img/infoProfesionales/logo-medico.svg" alt="" class="logomedico">
                           </div>
                           <div class="col-9 margin-rightnone">

                              <div class="col-md-10 noPad d-flex noPadMar">
                              <?php
                                             //Esto extrae el Nombre y lo pone en mayuscula
                                             $TempNombre = explode(" ", $perfil[0]->nombre);
                                             $TempApellido = explode(" ", $perfil[0]->apellido);
                                             if(!empty($perfil[0]->apellido)){
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
                                 <h1 class="nombre-profesional-landing nombre-profesional-vs-port color-gris-landing-Prof">{{$NameSaliente }}</h1>
                                 @if(($perfil[0]->aprobado==1))
                                       <img  class="icono-verificado" src="{{$urlZaabra}}img/boton-menbresia.png">
                                    @endif
                              </div>
                              <input type="hidden" name="" id="usuarioLandingPage" name="usuarioLandingPage" value="{{$perfil[0]->idUser}}">
                              @csrf
                              @foreach ($especialidades as $item)
                                 <div class="col-md-12 noPad">
                                    <h6 class="especialidad-profesional-vs-port color-gris-landing-Prof">{{$item->nombreEspecialidad}}</h6>
                                 </div>
                              @endforeach
                              <div class="col-12 noPad">
                                 <h5 class="direccion-landing"><img src="{{$urlZaabra}}img/landing/icono-ubicacion.svg" alt="" class="logo-ubicacion">{{ (!empty ($perfil[0]->direccion) ? $perfil[0]->direccion : '' )}}</h5>
                              </div> 
                              <div class="col-md-12 noPad d-flex">
                              <h6 class="ciudad-profesional-landing font-weight-bold color-gris-landing-Prof">{{ (!empty ($perfil[0]->ciudad) ? $perfil[0]->ciudad : '' )}}</h6>
                           
                              </div>


                              @if($perfil[0]->Calificacion == 0)           
                              <div class="col-12 col-md-12 col-lg-12 noPad">
                                 <span class="estrellas">
                                       <i class="far fa-star"></i>   
                                       <i class="far fa-star"></i>   
                                       <i class="far fa-star"></i>   
                                       <i class="far fa-star"></i>   
                                       <i class="far fa-star"></i>                        
                                 </span>
                              </div>
                              @endif
                              @if($perfil[0]->Calificacion >= 0.1 AND $perfil[0]->Calificacion <= 0.5)           
                              <div class="col-12 col-md-12 col-lg-12 noPad">
                                 <span class="estrellas">
                                 <i class="fas fa-star-half-alt"></i> <!-- MEDIA--> 
                                       <i class="far fa-star"></i>   
                                       <i class="far fa-star"></i>   
                                       <i class="far fa-star"></i>   
                                       <i class="far fa-star"></i>                        
                                 </span>
                              </div>
                              @endif
                              @if($perfil[0]->Calificacion >= 0.6 AND $perfil[0]->Calificacion <=1)           
                              <div class="col-12 col-md-12 col-lg-12 noPad">
                                 <span class="estrellas">
                                       <i class="fas fa-star"></i> <!--1 LLENA-->
                                       <i class="far fa-star"></i>   
                                       <i class="far fa-star"></i>   
                                       <i class="far fa-star"></i>   
                                       <i class="far fa-star"></i>                        
                                 </span>
                              </div>
                              @endif
                              @if($perfil[0]->Calificacion >= 1.1 AND $perfil[0]->Calificacion <=1.5)           
                              <div class="col-12 col-md-12 col-lg-12 noPad">
                                 <span class="estrellas">
                                       <i class="fas fa-star"></i> <!--1 LLENA-->
                                       <i class="fas fa-star-half-alt"></i> <!-- MEDIA--> 
                                       <i class="far fa-star"></i>   
                                       <i class="far fa-star"></i>   
                                       <i class="far fa-star"></i>                        
                                 </span>
                              </div>
                              @endif
                              @if($perfil[0]->Calificacion >= 1.6 AND $perfil[0]->Calificacion <=2)           
                              <div class="col-12 col-md-12 col-lg-12 noPad">
                                 <span class="estrellas">
                                       <i class="fas fa-star"></i> <!--1 LLENA-->
                                       <i class="fas fa-star"></i> <!--2 LLENA--> 
                                       <i class="far fa-star"></i>   
                                       <i class="far fa-star"></i>   
                                       <i class="far fa-star"></i>                        
                                 </span>
                              </div>
                              @endif
                              @if($perfil[0]->Calificacion >= 2.1 AND $perfil[0]->Calificacion <=2.5)           
                              <div class="col-12 col-md-12 col-lg-12 noPad">
                                 <span class="estrellas">
                                       <i class="fas fa-star"></i> <!--1 LLENA-->
                                       <i class="fas fa-star"></i> <!--2 LLENA--> 
                                       <i class="fas fa-star-half-alt"></i> <!-- MEDIA-->  
                                       <i class="far fa-star"></i>   
                                       <i class="far fa-star"></i>                        
                                 </span>
                              </div>
                              @endif
                              @if($perfil[0]->Calificacion >= 2.6 AND $perfil[0]->Calificacion <=3)           
                              <div class="col-12 col-md-12 col-lg-12 noPad">
                                 <span class="estrellas">
                                       <i class="fas fa-star"></i> <!--1 LLENA-->
                                       <i class="fas fa-star"></i> <!--2 LLENA--> 
                                       <i class="fas fa-star"></i> <!--3 LLENA--> 
                                       <i class="far fa-star"></i>   
                                       <i class="far fa-star"></i>                        
                                 </span>
                              </div>
                              @endif
                              @if($perfil[0]->Calificacion >= 3.1 AND $perfil[0]->Calificacion <=3.5)           
                              <div class="col-12 col-md-12 col-lg-12 noPad">
                                 <span class="estrellas">
                                       <i class="fas fa-star"></i> <!--1 LLENA-->
                                       <i class="fas fa-star"></i> <!--2 LLENA--> 
                                       <i class="fas fa-star"></i> <!--3 LLENA--> 
                                       <i class="fas fa-star-half-alt"></i> <!-- MEDIA-->   
                                       <i class="far fa-star"></i>                        
                                 </span>
                              </div>
                              @endif
                              @if($perfil[0]->Calificacion >= 3.6 AND $perfil[0]->Calificacion <= 4)           
                              <div class="col-12 col-md-12 col-lg-12 noPad">
                                 <span class="estrellas">
                                       <i class="fas fa-star"></i> <!--1 LLENA-->
                                       <i class="fas fa-star"></i> <!--2 LLENA--> 
                                       <i class="fas fa-star"></i> <!--3 LLENA--> 
                                       <i class="fas fa-star"></i> <!--4 LLENA-->   
                                       <i class="far fa-star"></i>                        
                                 </span>
                              </div>
                              @endif
                              @if($perfil[0]->Calificacion >= 4.1 AND $perfil[0]->Calificacion <= 4.5)           
                              <div class="col-12 col-md-12 col-lg-12 noPad">
                                 <span class="estrellas">
                                       <i class="fas fa-star"></i> <!--1 LLENA-->
                                       <i class="fas fa-star"></i> <!--2 LLENA--> 
                                       <i class="fas fa-star"></i> <!--3 LLENA--> 
                                       <i class="fas fa-star"></i> <!--4 LLENA-->   
                                       <i class="fas fa-star-half-alt"></i> <!-- MEDIA-->                       
                                 </span>
                              </div>
                              @endif
                              @if($perfil[0]->Calificacion >= 4.6 AND $perfil[0]->Calificacion <= 5)           
                              <div class="col-12 col-md-12 col-lg-12 noPad">
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
                              <div class="col-10 noPadMar d-flex btnInferiorLanding">
                                    <button class="col-6 margin-right-btn-landing btn-agendar font-weight-bold">AGENDA TU CITA</button>
                                    <button class="col-6 btn-pagar font-weight-bold">PAGA TU CITA</button>
                              </div>   
                              </div>
                              <div class="col-4 contImgPrincipalLanding-pc noPad">
                                 <div class="contenedor-img-info-profesional-pc">
                                    <i class="fas fa-heart logo-corazon"></i>
                                    <div class="triangulo">
                                       <img class="img-info-profesional-pc" src="http://localhost:8000/img/user/102/pexels-andrea-piacquadio-3776969.jpg" id="banner-landing-Page-cel">
                                    </div>
                                 </div>
                              </div>
                        </div>

                                
                        <div class="col-12 noPad row contenedor-procedimientos-pc">
                              <div class="col-4 d-flex text-center">
                                 <h6 class="color-azul-landing-Prof">Tipo de Consulta</h6>
                              </div>
                                    <div class="col-5 opcionTipoLaborLanding">
                                          <ul>
                                             
                                             @if (!empty ($perfil[0]->valorConsultaPresencial))
                                             <div class="col-6 contains-tipo-consulta">
                                             <i class="far fa-circle icono-ubicacion-landin"></i>
                                             <h6>Presencial</h6> <span> {{number_format($perfil[0]->valorConsultaPresencial, 0)}}</span>                       
                                             </div>
                                                @endif
                                             @if (!empty ($perfil[0]->valorConsultaVirtual))
                                             <div class="col-6 contains-tipo-consulta">
                                             <i class="far fa-circle icono-ubicacion-landin"></i>
                                             <h6>Virtual</h6><span> {{number_format($perfil[0]->valorConsultaVirtual, 0)}}</span>
                                             </div>
                                                
                                             @endif

                                          </ul>
                                    </div>

                        </div>
                        <div class="col-12 contains-menu-landing">
                           <ul>
                              <li class="icon-perfil"><span>Perfil Profesional</span></li>
                              <li class="icon-educacion"><span>Educación</span></li>
                              <li class="icon-publicaciones"><span>Publicaciones</span></li>
                              <li class="icon-galeria"><span>Galería</span></li>
                              <li class="icon-testimonios"><span>Testimonios</span></li>
                           </ul>
                        </div>
                              
                        
                   <div class="contenedor-general-carrusel-estudios">

                        <!-- carrusel estudios -->
                        <div class="col-md-12 contenedor-carrusel-estudios-pc noPad" id="contenedor-estudios">
                              @if(!empty ($perfil[0]->estudios))
                                 @foreach (json_decode($perfil[0]->estudios) as $valueJson)
                                       @php $tamañoEstudios = $loop->iteration @endphp 
                                 @endforeach
                              @endif
                              @if(!empty ($perfil[0]->titulos))
                                 @foreach (json_decode($perfil[0]->titulos) as $valueJson)
                                       @php $tamañoCertificaciones = $loop->iteration @endphp 
                                 @endforeach
                              @endif
                           <div id="carousel-estudios"  class="contenedor-carruseles">
                              @if(!empty ($perfil[0]->estudios))
                                 @for($i = 1; $i <= $tamañoEstudios; $i++)
                                 <div class="">
                                 <div class="col-md-12 row noPad">  
                                       @php $padreEstudios = $i;
                                       @endphp
                                       <div class="col-md-6 margin-top10">
                                          
                                             @if (!empty ($perfil[0]->nivelEstudios))   
                                                @foreach ($perfil as $item)
                                                   @foreach (json_decode($item->nivelEstudios) as $valueJson)
                                                      @if($padreEstudios == $loop->iteration)
                                                      <div class="col-md-6">
                                                      <label class="text-uppercase color-gris-landing-Prof">{{ $valueJson}}</label >
                                                      <br>
                                                      </div>
                                                      @endif        
                                                   @endforeach
                                                @endforeach
                                             @endif
                                             @if (!empty ($perfil[0]->nombreEstudios))   
                                                   @foreach ($perfil as $item)
                                                      @foreach (json_decode($item->nombreEstudios) as $valueJson)
                                                         @if($padreEstudios == $loop->iteration)
                                                         <div class="col-md-6">
                                                            <label class="text-uppercase color-gris-landing-Prof">{{ $valueJson}}</label >
                                                            <br> </div>
                                                         @endif        
                                                      @endforeach
                                                   @endforeach
                                             @endif
                                          </div>
                                          @if (!empty ($perfil[0]->estudios))   
                                             @foreach ($perfil as $item)
                                                @foreach (json_decode($item->estudios) as $valueJson)
                                                   @if($padreEstudios == $loop->iteration)
                                                   <div class="col-md-6 noPad">
                                                         <img src="{{ $urlZaabra.$valueJson}}" class="imagen-carrusel noPad">
                                                      </div>
                                                   @endif        
                                                @endforeach
                                             @endforeach
                                          @endif
                                          
                                          </div>
                                    </div>
                                    @endfor 
                                 @endif
                           @if(!empty ($perfil[0]->titulos))
                              @for($i = 1; $i <= $tamañoCertificaciones; $i++)
                                 <div class="">
                                    <div class="col-md-12 row noPad">
                                          @php $padreCertificado = $i;
                                          @endphp
                                          <div class="col-md-6 margin-top10">
                                                @if (!empty ($perfil[0]->entidadCertificado))   
                                                   @foreach ($perfil as $item)
                                                      @foreach (json_decode($item->entidadCertificado) as $valueJson)
                                                         @if($padreCertificado == $loop->iteration)
                                                         <div class="col-md-6">
                                                            <label class="text-uppercase color-gris-landing-Prof">{{ $valueJson}}</label >
                                                            <br>
                                                         </div>
                                                         @endif        
                                                      @endforeach
                                                   @endforeach
                                                @endif
                                                @if (!empty ($perfil[0]->nombreCertificado))   
                                                      @foreach ($perfil as $item)
                                                         @foreach (json_decode($item->nombreCertificado) as $valueJson)
                                                            @if($padreCertificado == $loop->iteration)
                                                            <div class="col-md-6">
                                                               <label class="text-uppercase color-gris-landing-Prof">{{ $valueJson}}</label >
                                                               <br> 
                                                            </div>
                                                            @endif        
                                                         @endforeach
                                                      @endforeach
                                                @endif
                                          </div>
                                             @if (!empty ($perfil[0]->titulos))   
                                                @foreach ($perfil as $item)
                                                   @foreach (json_decode($item->titulos) as $valueJson)
                                                   @if($padreCertificado == $loop->iteration)
                                                      <div class="col-md-6 noPad">
                                                         <img src="{{ $urlZaabra.$valueJson}}" class="imagen-carrusel noPad">
                                                      </div>
                                                      @endif        
                                                   @endforeach
                                                @endforeach
                                             @endif
                                    </div>
                                 </div>
                              @endfor 
                           @endif
                              </div>
                        </div> 

                        <!-- carrusel publicaciones -->
                        <div class="col-md-12 contenedor-carrusel-estudios-pc noPad" id="contenedor-publicaciones">
                           @if(!empty ($perfil[0]->Publicaciones))
                                    @foreach (json_decode($perfil[0]->Publicaciones) as $valueJson)
                                          @php $tamañoPublicaciones = $loop->iteration @endphp 
                                    @endforeach
                           @endif
                                       
                              <div id="carousel-publicaciones"  class="contenedor-carruseles">
                                       @if(!empty ($perfil[0]->Publicaciones))
                                       @for($i = 1; $i <= $tamañoPublicaciones; $i++)
                                             <div class="">
                                                <div class="col-md-12 row noPad">
                                                   @php $padrePublicaciones = $i;
                                                   @endphp
                                                      <div class="col-md-6 margin-top10">
                                                         @if (!empty ($perfil[0]->nombrePublicacion))   
                                                            @foreach ($perfil as $item)
                                                               @foreach (json_decode($item->nombrePublicacion) as $valueJson)
                                                                     @if($padrePublicaciones == $loop->iteration)
                                                                           <div class="col-md-6">
                                                                              <label class="text-uppercase color-gris-landing-Prof">{{ $valueJson}}</label >
                                                                              <br>
                                                                           </div>
                                                                     @endif        
                                                               @endforeach
                                                            @endforeach
                                                         @endif
                                                         @if (!empty ($perfil[0]->linksPublicacion))   
                                                            @foreach ($perfil as $item)
                                                                  @foreach (json_decode($item->linksPublicacion) as $valueJson)
                                                                        @if($padrePublicaciones == $loop->iteration)
                                                                              <div class="col-md-6">
                                                                                 <label class="text-uppercase color-gris-landing-Prof">{{ $valueJson}}</label >
                                                                                 <br> 
                                                                              </div>
                                                                        @endif        
                                                                  @endforeach
                                                            @endforeach
                                                         @endif
                                                      </div>
                                                         @if (!empty ($perfil[0]->Publicaciones))   
                                                            @foreach ($perfil as $item)
                                                               @foreach (json_decode($item->Publicaciones) as $valueJson)
                                                                  @if($padrePublicaciones == $loop->iteration)
                                                                     <div class="col-md-6 noPad">
                                                                           <img src="{{ $urlZaabra.$valueJson}}" class="imagen-carrusel noPad">
                                                                        </div>
                                                                  @endif        
                                                               @endforeach
                                                            @endforeach
                                                         @endif
                                                </div>
                                             </div>
                                          @endfor 
                                       @endif
                              </div>
                        </div>

                        <div class="col-md-12" id="contenedor-asociaciones">
                           <span>asociaciones</span>
                        </div>

                        <div  class="col-md-12" id="contenedor-procedimientos">
                           <span>procedimiento</span>
                        </div>

                        <div  class="col-md-12" id="contenedor-trataminetos">
                           <span>tratamientos</span>
                        </div>

                        <div  class="col-md-12 row contTestimonLanding" id="contenedor-testimonios">
                           <div class="col-md-12 noPad comentarios contComentTestimonLanding">
                              <form action="{{ url ('/guardarTestimonio') }}" method="POST" id="guardarTestimonio">
                                 {{ csrf_field() }} 
                                
                                 <input type="hidden" id="usuario"  name="usuario" value="{{$perfil[0]->id}}"/>
                                 <input type="hidden" id="Perfil" name="Perfil" value="{{$valorIdPerfilActual}}"/>
                                 <input type="hidden" id="calificacion" name="calificacion" value="0"/>

                                 <input type="hidden" id="dataruta2"  name="dataruta2"  />
                                 
                                    <div class="col-md-12 noPad textAreaComentarios">
                                       <textarea class="textTareaTestimonLanding" name="txtComentario" id="txtComentario" required placeholder="Escribe Aqui"></textarea>
                                    </div>

                                    <div class="review__rating">
                                       
                                       <input type=radio checked value='0' id='star-0' name='rating' />

                                       <label for='star-1'>★</label>
                                       <input type=radio value='1' id='star-1' name='rating' onclick="CambioValorCalificacion(1)" />

                                       <label for='star-2'>★</label>
                                       <input type=radio value='2' id='star-2' name='rating' onclick="CambioValorCalificacion(2)"  />

                                       <label for='star-3'>★</label>
                                       <input type=radio value='3' id='star-3' name='rating'  onclick="CambioValorCalificacion(3)" />

                                       <label for='star-4'>★</label>
                                       <input type=radio value='4' id='star-4' name='rating' onclick="CambioValorCalificacion(4)"  />

                                       <label for='star-5'>★</label>
                                       <input type=radio value='5' id='star-5' name='rating' onclick="CambioValorCalificacion(5)" />

                                    </div>  

                                 <input type="submit" value="Agregar comentario" class="agregarComentario">
                              </form>
                           </div>

                           <br>
                           <div class="col-md-12 itemsCompraSegura contComentarioHechoLanding" id="bloqueComentarios">
                              <div class="ContendTestiInfoProf" id="tempBloqueComentarios">
                                 @foreach ($objTestimonios as $item2)
                                    @if($loop->iteration > 1 )

                                    <div  class="collapse multi-collapse" id="bloqueComentarios">
                                    @endif
                                       
                                          <div class="col-md-12 row comentario noPadMar">
                                             @if(empty($item2->calificacion) OR $item2->calificacion == 0)
                                             <span  class="far fa-star color-verde "></span>
                                             <span  class="far fa-star color-verde "></span>
                                             <span  class="far fa-star color-verde "></span>
                                             <span  class="far fa-star color-verde "></span>
                                             <span  class="far fa-star color-verde "></span>
                                             @endif
                                             @if($item2->calificacion == 1)
                                             <span  class="fas fa-star color-verde "></span>
                                             <span  class="far fa-star color-verde "></span>
                                             <span  class="far fa-star color-verde "></span>
                                             <span  class="far fa-star color-verde "></span>
                                             <span  class="far fa-star color-verde "></span>
                                             
                                             @endif
                                             @if($item2->calificacion == 2)
                                             <span  class="fas fa-star color-verde "></span>
                                             <span  class="fas fa-star color-verde "></span>
                                             <span  class="far fa-star color-verde "></span>
                                             <span  class="far fa-star color-verde "></span>
                                             <span  class="far fa-star color-verde "></span>
                                             
                                             @endif
                                             @if($item2->calificacion == 3)
                                             <span  class="fas fa-star color-verde "></span>
                                             <span  class="fas fa-star color-verde "></span>
                                             <span  class="fas fa-star color-verde "></span>
                                             <span  class="far fa-star color-verde "></span>
                                             <span  class="far fa-star color-verde "></span>
                                             
                                             @endif
                                             @if($item2->calificacion == 4)
                                             <span  class="fas fa-star color-verde "></span>
                                             <span  class="fas fa-star color-verde "></span>
                                             <span  class="fas fa-star color-verde "></span>
                                             <span  class="fas fa-star color-verde "></span>
                                             <span  class="far fa-star color-verde " ></span>
                                             
                                             @endif
                                             @if($item2->calificacion == 5)
                                             <span  class="fas fa-star color-verde "></span>
                                             <span  class="fas fa-star color-verde "></span>
                                             <span  class="fas fa-star color-verde "></span>
                                             <span  class="fas fa-star color-verde "></span>
                                             <span  class="fas fa-star color-verde "></span>
                                             @endif
                                          </div>
                                          <div class="col-md-12 usuarioComentario noPadMar" >
                                             <h5 class="">{{$item2->name}}</h5>
                                          </div>
                                          <div class="col-md-12 comentario noPadMar">
                                             <span class="">{{$item2->comentario}}</span>
                                          </div>
                                          
                                      
                                       @if( $loop->iteration > 1)
                                       </div>
                                       @endif
                                       <br>
                                 @endforeach
                                 
                              </div>
                              @if(!empty($objTestimonios[0]))
                                    <button type="button" class="agregarComentario2" data-toggle="collapse" data-target=".multi-collapse">Más comentarios</button>
                                 @endif
                              
                           </div>
                        </div>


                     </div>

                         <!-- esto solo aplica a la vista mayor 1440 -->
                        <div class="col-md-12  row contIconsBtnBottLanding">
                                 <div class="col-md-5 row contenedor-iconos-redes">
                                             <div class="col-md-2" >
                                                   <a href=" {{!empty ($perfil[0]->whatsapp) ? $perfil[0]->whatsapp : ''  }}">
                                                      <img  class="lista-iconos" src="{{$urlZaabra}}img/landing/WhatsappBusiness-Icono.png">
                                                   </a> 
                                             </div>
                                             <div class="col-md-2" >
                                                   <a href=" {{!empty ($perfil[0]->facebook) ? $perfil[0]->facebook : ''  }}">
                                                      <img  class="lista-iconos" src="{{$urlZaabra}}img/landing/Facebook-Icono.png">
                                                   </a> 
                                             </div>
                                             <div class="col-md-2" >
                                                <a href=" {{!empty ($perfil[0]->instagram) ? $perfil[0]->instagram : ''  }}">
                                                   <img  class="lista-iconos" src="{{$urlZaabra}}img/landing/Instagram-Icono.png">
                                                </a> 
                                             </div>
                                             <div class="col-md-2" >
                                                   <img  class="lista-iconos" src="{{$urlZaabra}}img/landing/Twitter-Icono.png">
                                             </div>
                                             <div class="col-md-2" >
                                                   <img  class="lista-iconos" src="{{$urlZaabra}}img/landing/Youtube-Icono.png">
                                             </div>
                                             <div class="col-md-2" >
                                                   <img  class="lista-iconos" src="{{$urlZaabra}}img/landing/Correo-Icono.png">
                                             </div>
                                 </div>
                        </div>

                  </div>
            </div>

            <div class="col-12 contains-perfil-profesional">
                  <div class="col-md-12">
                        <h4 class=""> Perfil Profesional</h4>
                  </div>
                  <div class="col-md-12">
                        <p class="">{{ (!empty ($perfil[0]->descripcion) ? $perfil[0]->descripcion : '' ) }}</>
                  </div>
                  @if(!empty ($perfil[0]->expertoEn))
                                @php $arrExpertoEn = explode(";",$perfil[0]->expertoEn);@endphp
                                @foreach ($arrExpertoEn as $item)	
                                <div style="display: inline-flex;" class="col-md-3">
                                    <li>
                                        <span class="list-group-item list-group-item-success contenido" id="expertoEn{{$loop->iteration}}">{{$item}}</span>
                                    </li>
                                    <button type="button" class="btn btn-dark remove_listaExpertoEn">x</button>
                                </div>
                                    <script>
                                        if(localStorage.getItem("varListaExpertoEn") != null){
                                            localStorage.removeItem('varListaExpertoEn');
                                            localStorage.setItem('varListaExpertoEn',{{$loop->iteration}});
                                        }else{
                                            localStorage.setItem('varListaExpertoEn',{{$loop->iteration}});
                                        }
                                        
                                    </script>
                                @endforeach
                                @else
                                 <script>
                                        if(localStorage.getItem("varListaExpertoEn") != null){
                                            localStorage.removeItem('varListaExpertoEn');
                                            localStorage.setItem('varListaExpertoEn', 1);
                                        }else{
                                            localStorage.setItem('varListaExpertoEn',1);
                                        }
                                        
                                    </script>
                            @endif
            </div>    
             
      <button id="toggle" style="position:absolute; top: 120px;opacity: 0;">Targeta</button>
                              <div class="col-md-12 noPad">
                                 <div class="contenedor-span-landing col-md-12" id="contenedor-span-landing">
                                    @if(!empty ($perfil[0]->expertoEn))
                                       @php $arrExpertoEn = explode(";",$perfil[0]->expertoEn);@endphp
                                       @foreach ($arrExpertoEn as $item)	
                                       <div class=" span-procedimientos tamano-fuente16 color-gris-landing-Prof">{{$item}}</div>

                                       @endforeach
                                       @else
                                    @endif
                              </div>
</div>




<!------------------------------------------------ conainer vista celular --------------------------------------------------->
<div class="container-fluid info-visible-en-cel margin-top-info">
   <div class="col-12 contImgPrincipalLanding noPad">
      <div class="contenedor-img-info-profesional-cel">
         <i class="fas fa-heart logo-corazon"></i>
         <div class="triangulo">
            <img class="img-info-profesional-cel" src="{{$urlZaabra.(!empty ($perfil[0]->fotoperfil) ? $perfil[0]->fotoperfil : '' )}}" id="banner-landing-Page-cel">
         </div>
      </div>
   </div>   
   <div class="col-12 d-flex seccDatosPersonLanding">
      <div class="col-3">
         <img src="{{$urlZaabra}}img/infoProfesionales/logo-medico.svg" alt="" class="logomedico">
      </div>
      <div class="col-9">

         <div class="col-12 noPad contenedor-nombre">
                     <?php
                        //Esto extrae el Nombre y lo pone en mayuscula
                        $TempNombre = explode(" ", $perfil[0]->nombre);
                        $TempApellido = explode(" ", $perfil[0]->apellido);
                        if(!empty($perfil[0]->apellido)){
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
            <h2 class="col-12   noPadMar nombre-profesional-landin">{{ $NameSaliente}}
            @if(($perfil[0]->aprobado==1))
                  <img  class="icono-verificado" src="{{$urlZaabra}}img/boton-menbresia.png">
            @endif
            </h2>
         </div>
         <div class="col-12 noPadMar">
            @foreach ($especialidades as $item)
               <h6 class="especialidad-landing">{{$item->nombreEspecialidad}}</h6>
            @endforeach 
         </div>
         <div class="col-12 noPad">
            <h5 class="direccion-landing"><img src="{{$urlZaabra}}img/landing/icono-ubicacion.svg" alt="" class="logo-ubicacion">{{ (!empty ($perfil[0]->direccion) ? $perfil[0]->direccion : '' )}}</h5>
         </div>
         <div class="col-12 noPad  ">
            <h5 class="ciudad-landing">{{ (!empty ($perfil[0]->ciudad) ? $perfil[0]->ciudad : '' )}}</h5>
         </div>
         <div class="col-md-12 noPad">
               <span class="col-md-12 estrellas noPad">
                  <i class="far fa-star"></i>
                  <i class="far fa-star"></i>
                  <i class="far fa-star"></i>
                  <i class="far fa-star"></i>
                  <i class="far fa-star"></i>                                       
               </span>
         </div>

      </div>
   </div>
   <div class="col-10 d-flex  btnInferiorLanding">
      <button class="col-6 margin-right-btn-landing btn-agendar font-weight-bold">AGENDA TU CITA</button>
      <button class="col-6 btn-pagar font-weight-bold">PAGA TU CITA</button>
   </div>
   <div class="container contenedor-procedimientos contenedor-redes">
         <div class="col-12  text-center">
            <h6 class="color-azul-landing-Prof">Tipo de Consulta</h6>
         </div>
               <div class="col-12 opcionTipoLaborLanding">
                     <ul>
                        
                        @if (!empty ($perfil[0]->valorConsultaPresencial))
                        <div class="col-6 contains-tipo-consulta">
                        <i class="far fa-circle icono-ubicacion-landin"></i>
                        <h6>Presencial</h6> <span> {{number_format($perfil[0]->valorConsultaPresencial, 0)}}</span>                       
                        </div>
                           @endif
                        @if (!empty ($perfil[0]->valorConsultaVirtual))
                        <div class="col-6 contains-tipo-consulta">
                        <i class="far fa-circle icono-ubicacion-landin"></i>
                        <h6>Virtual</h6><span> {{number_format($perfil[0]->valorConsultaVirtual, 0)}}</span>
                        </div>
                           
                        @endif

                     </ul>
               </div>

   </div>
   <div class="col-12 contains-menu-landing">
      <ul>
         <li class="icon-perfil"><span>Perfil Profesional</span></li>
         <li class="icon-educacion"><span>Educación</span></li>
         <li class="icon-publicaciones"><span>Publicaciones</span></li>
         <li class="icon-galeria"><span>Galería</span></li>
         <li class="icon-testimonios"><span>Testimonios</span></li>
      </ul>
   </div>
   <div class="col-12 contains-perfil-profesional">
         <div class="col-md-12">
               <h4 class=""> Perfil Profesional</h4>
         </div>
         <div class="col-md-12">
               <p class="">{{ (!empty ($perfil[0]->descripcion) ? $perfil[0]->descripcion : '' ) }}</>
         </div>
   </div>
   <div class="container contains-publicaciones">
      <div class="row px-4">
                  @if(!empty ($perfil[0]->Publicaciones))
                        @for($i = 1; $i <= $tamañoPublicaciones; $i++)
                                    @php $padrePublicaciones = $i;
                                    @endphp
                                          @if (!empty ($perfil[0]->Publicaciones))   
                                             @foreach ($perfil as $item)
                                                @foreach (json_decode($item->Publicaciones) as $valueJson)
                                                   @if($padrePublicaciones == $loop->iteration)
                                                   <div class="col-6 noPad">
                                                      <div class="col-12 noPad">
                                                            <img src="{{ $urlZaabra.$valueJson}}" class="imagen-carrusel-cel noPad">
                                                         </div>
                                                   </div>
                                                   @endif        
                                                @endforeach
                                             @endforeach
                                          @endif
                           @endfor 
                  @endif
            
      </div>
   </div>
   <div class="container contains-galeria">
            <div class="row px-4">
               @if (!empty ($newPerfil->imagen))
                     @for($i = 1; $i <= $tamañoimagen; $i++)
                        @php $padreEstudios = $i;  @endphp
                           @foreach (json_decode($newPerfil->imagen) as $valueJson)
                           @if($padreEstudios == $loop->iteration)
                              <div class="col-6 noPad contenedor-img-carrusel-info" id="div-carrusel-lending-padre{{$i}}">
                                 <img src="{{ $urlZaabra.$valueJson }}" class="card-img-top" alt="" id="img-carrusel-landing{{$i}}" >
                              </div>
                           @endif    
                        @endforeach
                     @endfor
               @endif
            </div>
   </div>

   <div class="col-md-12 contTestimonLanding" id="contains-testimonios">
                           <div class="col-md-12 noPad comentarios contComentTestimonLanding">
                              <form action="{{ url ('/guardarTestimonio') }}" method="POST" id="guardarTestimonio">
                                 {{ csrf_field() }} 
                                
                                 <input type="hidden" id="usuario"  name="usuario" value="{{$perfil[0]->id}}"/>
                                 <input type="hidden" id="Perfil" name="Perfil" value="{{$valorIdPerfilActual}}"/>
                                 <input type="hidden" id="calificacion" name="calificacion" value="0"/>

                                 <input type="hidden" id="dataruta2"  name="dataruta2"  />
                                 
                                    <div class="col-md-12 textAreaComentarios">
                                       <textarea class="col-12 textTareaTestimonLanding" name="txtComentario" id="txtComentario" required placeholder="Escribe Aqui"></textarea>
                                    </div>
                                    <div class="col-12 contains-stars">
                                          <div class="col-6 comentario noPadMar">
                                             <span  class="far fa-star color-verde"></span>
                                             <span  class="far fa-star color-verde"></span>
                                             <span  class="far fa-star color-verde"></span>
                                             <span  class="far fa-star color-verde"></span>
                                             <span  class="far fa-star color-verde"></span>
                                          </div>
                                          <input type="submit" value="Agregar comentario" class="col-6 noPad agregarComentario">
                                    </div>
                              </form>
                           </div>

                           <br>
                           <div class="col-md-12 itemsCompraSegura contComentarioHechoLanding" id="bloqueComentarios">
                              <div class="ContendTestiInfoProf" id="tempBloqueComentarios">
                                 @foreach ($objTestimonios as $item2)
                                    @if($loop->iteration > 1 )

                                    <div  class="collapse multi-collapse" id="bloqueComentarios">
                                    @endif
                                       
                                          <div class="col-md-12 row comentario noPadMar">
                                             @if(empty($item2->calificacion) OR $item2->calificacion == 0)
                                             <span  class="far fa-star color-verde "></span>
                                             <span  class="far fa-star color-verde "></span>
                                             <span  class="far fa-star color-verde "></span>
                                             <span  class="far fa-star color-verde "></span>
                                             <span  class="far fa-star color-verde "></span>
                                             @endif
                                             @if($item2->calificacion == 1)
                                             <span  class="fas fa-star color-verde "></span>
                                             <span  class="far fa-star color-verde "></span>
                                             <span  class="far fa-star color-verde "></span>
                                             <span  class="far fa-star color-verde "></span>
                                             <span  class="far fa-star color-verde "></span>
                                             
                                             @endif
                                             @if($item2->calificacion == 2)
                                             <span  class="fas fa-star color-verde "></span>
                                             <span  class="fas fa-star color-verde "></span>
                                             <span  class="far fa-star color-verde "></span>
                                             <span  class="far fa-star color-verde "></span>
                                             <span  class="far fa-star color-verde "></span>
                                             
                                             @endif
                                             @if($item2->calificacion == 3)
                                             <span  class="fas fa-star color-verde "></span>
                                             <span  class="fas fa-star color-verde "></span>
                                             <span  class="fas fa-star color-verde "></span>
                                             <span  class="far fa-star color-verde "></span>
                                             <span  class="far fa-star color-verde "></span>
                                             
                                             @endif
                                             @if($item2->calificacion == 4)
                                             <span  class="fas fa-star color-verde "></span>
                                             <span  class="fas fa-star color-verde "></span>
                                             <span  class="fas fa-star color-verde "></span>
                                             <span  class="fas fa-star color-verde "></span>
                                             <span  class="far fa-star color-verde " ></span>
                                             
                                             @endif
                                             @if($item2->calificacion == 5)
                                             <span  class="fas fa-star color-verde "></span>
                                             <span  class="fas fa-star color-verde "></span>
                                             <span  class="fas fa-star color-verde "></span>
                                             <span  class="fas fa-star color-verde "></span>
                                             <span  class="fas fa-star color-verde "></span>
                                             @endif
                                          </div>
                                          <div class="col-md-12 usuarioComentario noPadMar" >
                                             <h5 class="">{{$item2->name}}</h5>
                                          </div>
                                          <div class="col-md-12 comentario noPadMar">
                                             <span class="">{{$item2->comentario}}</span>
                                          </div>
                                          
                                      
                                       @if( $loop->iteration > 1)
                                       </div>
                                       @endif
                                       <br>
                                 @endforeach
                                 
                              </div>
                              <div class="col-md-12 text-center">
                              @if(!empty($objTestimonios[0]))
                                    <button type="button" class="agregarComentario2" data-toggle="collapse" data-target=".multi-collapse">Más comentarios</button>
                                 @endif
                                 </div>  
                           </div>
                        </div>
   <!-- <div class="col-12 contains-tratamientos">
         <div class="col-12 contenedor-procedimientos noPad">
            <div class="col-12 text-center text-uppercase color-gris-landing-Prof titulo-procedimiento margin-top-info">
               <h6 class="fontTituloCajaTextLanding">Procedimientos y tratamientos</h6>
            </div>
            <div class="col-md-12 noPad">
                  <div class="contenedor-span-landing col-md-12" id="contenedor-span-landing">
                        <div class=" span-procedimientos"> Financiero</div> 
                        <div class=" span-procedimientos">Consejero</div> 
                        <div class=" span-procedimientos">Guru</div>
                        <div class=" span-procedimientos">Guia Espiritual</div> 
                        <div class=" span-procedimientos">Director de Recursos Humano</div> 
                  </div>
            </div>
         </div>
   </div> -->


        
              <!-- carrusel estudios -->
              <div class="col-12 alturacontenedorcarrusel-cel noPad" id="contenedor-estudios-cel">
                     @if(!empty ($perfil[0]->estudios))
                        @foreach (json_decode($perfil[0]->estudios) as $valueJson)
                              @php $tamañoEstudios = $loop->iteration @endphp 
                        @endforeach
                     @endif
                     @if(!empty ($perfil[0]->titulos))
                        @foreach (json_decode($perfil[0]->titulos) as $valueJson)
                              @php $tamañoCertificaciones = $loop->iteration @endphp 
                        @endforeach
                     @endif
                  <div id="carousel-estudios-cel"  class="alturacontenedorcarrusel-cel">
                     @if(!empty ($perfil[0]->estudios))
                        @for($i = 1; $i <= $tamañoEstudios; $i++)
                        <div class="">
                        <div class="col-12  noPad">  
                              @php $padreEstudios = $i;
                              @endphp
                              <div class="col-12 contains-texto-educacion">
                                          <span>
                                             <div class="col-12 noPad">
                                             @if (!empty ($perfil[0]->nombreEstudios))   
                                          @foreach ($perfil as $item)
                                             @foreach (json_decode($item->nombreEstudios) as $valueJson)
                                                @if($padreEstudios == $loop->iteration)
                                                <div class="col-12 noPad">
                                                   <i class="far fa-circle icono-ubicacion-landin"></i>
                                                   <strong class="text-uppercase color-gris-landing-Prof">{{ $valueJson}}</strong >
                                                   <br> 
                                                </div>
                                                @endif        
                                             @endforeach
                                          @endforeach
                                    @endif
                                    @if (!empty ($perfil[0]->nivelEstudios))   
                                       @foreach ($perfil as $item)
                                          @foreach (json_decode($item->nivelEstudios) as $valueJson)
                                             @if($padreEstudios == $loop->iteration)
                                             <div class="col-12 noPad">
                                             <label class="text-uppercase color-gris-landing-Prof">{{ $valueJson}}</label >
                                             <br>
                                             </div>
                                             @endif        
                                          @endforeach
                                       @endforeach
                                    @endif
                                   
                                  </div>
										</span>
                                    </div>
                                 @if (!empty ($perfil[0]->estudios))   
                                    @foreach ($perfil as $item)
                                       @foreach (json_decode($item->estudios) as $valueJson)
                                       @if($padreEstudios == $loop->iteration)
                                       <div class="col-12 noPad">
                                             <img src="{{ $urlZaabra.$valueJson}}" class="imagen-carrusel-cel noPad">
                                          </div>
                                          @endif        
                                       @endforeach
                                    @endforeach
                                 @endif
                                 
                                 </div>
                           </div>
                           @endfor 
                        @endif
                        @if(!empty ($perfil[0]->titulos))
                        @for($i = 1; $i <= $tamañoCertificaciones; $i++)
                        <div class="">
                              <div class="col-12  noPad">
                                    @php $padreCertificado = $i;
                                    @endphp
                                          <span>
                                          @if (!empty ($perfil[0]->nombreCertificado))   
                                                @foreach ($perfil as $item)
                                                   @foreach (json_decode($item->nombreCertificado) as $valueJson)
                                                      @if($padreCertificado == $loop->iteration)
                                                      <div class="col-12 noPad">
                                                         <div class="col-12 contains-texto-educacion">
                                                         <i class="far fa-circle icono-ubicacion-landin"></i>
                                                         <strong class="text-uppercase color-gris-landing-Prof">{{ $valueJson}}</strong >
                                                         <br> 
                                                      </div>
                                                      @endif        
                                                   @endforeach
                                                @endforeach
                                          @endif
										            @if (!empty ($perfil[0]->entidadCertificado))   
                                             @foreach ($perfil as $item)
                                                @foreach (json_decode($item->entidadCertificado) as $valueJson)
                                                   @if($padreCertificado == $loop->iteration)
                                                   <div class="col-12 noPad">
                                                   <label class="text-uppercase color-gris-landing-Prof">{{ $valueJson}}</label >
                                                   <br>
                                                   </div>
                                                   @endif        
                                                @endforeach
                                             @endforeach
                                          @endif
										            </span>
                                    </div>
                                       @if (!empty ($perfil[0]->titulos))   
                                          @foreach ($perfil as $item)
                                             @foreach (json_decode($item->titulos) as $valueJson)
                                             @if($padreCertificado == $loop->iteration)
                                             <div class="col-12 noPad">
                                                   <img src="{{ $urlZaabra.$valueJson}}" class="imagen-carrusel-cel noPad">
                                                </div>
                                                @endif        
                                             @endforeach
                                          @endforeach
                                       @endif
                              </div>
                        </div>
                           @endfor 
                        @endif
                 
                     </div>
               </div> 



               <!-- carrusel publicaciones -->
            <div class="col-12 alturacontenedorcarrusel-cel noPad" id="contenedor-publicaciones-cel">
               @if(!empty ($perfil[0]->Publicaciones))
                        @foreach (json_decode($perfil[0]->Publicaciones) as $valueJson)
                              @php $tamañoPublicaciones = $loop->iteration @endphp 
                        @endforeach
               @endif
                        
               <div id="carousel-publicaciones-cel"  class="alturacontenedorcarrusel-cel">
                     @if(!empty ($perfil[0]->Publicaciones))
                     @for($i = 1; $i <= $tamañoPublicaciones; $i++)
                           <div class="">
                              <div class="col-12 row noPad">
                                 @php $padrePublicaciones = $i;
                                 @endphp
                                    <div class="col-6 margin-top10">
                                       @if (!empty ($perfil[0]->nombrePublicacion))   
                                          @foreach ($perfil as $item)
                                             @foreach (json_decode($item->nombrePublicacion) as $valueJson)
                                                   @if($padrePublicaciones == $loop->iteration)
                                                         <div class="col-6">
                                                            <label class="text-uppercase color-gris-landing-Prof">{{ $valueJson}}</label >
                                                            <br>
                                                         </div>
                                                   @endif        
                                             @endforeach
                                          @endforeach
                                       @endif
                                       @if (!empty ($perfil[0]->linksPublicacion))   
                                          @foreach ($perfil as $item)
                                                @foreach (json_decode($item->linksPublicacion) as $valueJson)
                                                      @if($padrePublicaciones == $loop->iteration)
                                                            <div class="col-6">
                                                               <label class="text-uppercase color-gris-landing-Prof">{{ $valueJson}}</label >
                                                               <br> 
                                                            </div>
                                                      @endif        
                                                @endforeach
                                          @endforeach
                                       @endif
                                    </div>
                                       @if (!empty ($perfil[0]->Publicaciones))   
                                          @foreach ($perfil as $item)
                                             @foreach (json_decode($item->Publicaciones) as $valueJson)
                                                @if($padrePublicaciones == $loop->iteration)
                                                   <div class="col-6 noPad">
                                                         <img src="{{ $urlZaabra.$valueJson}}" class="imagen-carrusel-cel noPad">
                                                      </div>
                                                @endif        
                                             @endforeach
                                          @endforeach
                                       @endif
                              </div>
                           </div>
                        @endfor 
                     @endif
               </div>
            </div>
            
               <div class="col-12" id="contenedor-asociaciones-cel">
                  <span>asociaciones</span>
               </div>

               <div  class="col-12" id="contenedor-procedimientos-cel">
                  <span>procedimiento</span>
               </div>

               <div  class="col-12" id="contenedor-trataminetos-cel">
                  <span>tratamientos</span>
               </div>

               <div  class="col-12" id="contenedor-testimonios-cel">
                  <span>testimonios</span>
               </div>
         </div>
  
                                 <div class="container-cel-landin d-flex contenedor-iconos-redes">
                                             <div class="icono-redes-cel" >
                                                   <a href=" {{!empty ($perfil[0]->whatsapp) ? $perfil[0]->whatsapp : ''  }}">
                                                      <img  class="lista-iconos" src="{{$urlZaabra}}img/landing/WhatsappBusiness-Icono.png">
                                                   </a> 
                                             </div>
                                             <div class="icono-redes-cel" >
                                                   <a href=" {{!empty ($perfil[0]->facebook) ? $perfil[0]->facebook : ''  }}">
                                                      <img  class="lista-iconos" src="{{$urlZaabra}}img/landing/Facebook-Icono.png">
                                                   </a> 
                                             </div>
                                             <div class="icono-redes-cel" >
                                                <a href=" {{!empty ($perfil[0]->instagram) ? $perfil[0]->instagram : ''  }}">
                                                   <img  class="lista-iconos" src="{{$urlZaabra}}img/landing/Instagram-Icono.png">
                                                </a> 
                                             </div>
                                             <div class="icono-redes-cel" >
                                                   <img  class="lista-iconos" src="{{$urlZaabra}}img/landing/Twitter-Icono.png">
                                             </div>
                                             <div class="icono-redes-cel" >
                                                   <img  class="lista-iconos" src="{{$urlZaabra}}img/landing/Youtube-Icono.png">
                                             </div>
                                             <div class="icono-redes-cel" >
                                                   <img  class="lista-iconos" src="{{$urlZaabra}}img/landing/Correo-Icono.png">
                                             </div>
                                 </div>



</div>
@endsection