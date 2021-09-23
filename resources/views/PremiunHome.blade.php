@extends('layouts.indexNoFooter')

@section('contenido')

<div  class="text-center noPad margenHeader container-fluid container-inicial-PremiunHome">
    <div class="offset-md-1 col-md-10 offset-xl-2 col-xl-8 noPad content-sections-cabecera-tarjetas-PremiunHome targets-premiunHome-visible-en-pc"> 
        <div class="row col-md-12 noPadMar">

            <div class="col-md-12 mt-5 noPad">
                <h1 class="section-titulo-cabecera-font-PremiunHome">Escoge tu perfil para ver la membresía</h1>
            </div>
            <div class="col-12 col-md-9 seccion-checkbox-margen-tarjetas-PremiunHome">
                <h3 class="seccion-checkRadio-sectionTexto-tarjetas-PremiunHome"><input type="radio" class="seccion-checkRadio-input-tarjetas-PremiunHome" id="cboxProf" value="first_checkbox" checked="true"> Profesional</h3>
                <h3 class="seccion-checkRadio-sectionTexto-tarjetas-PremiunHome"><input type="radio" class="seccion-checkRadio-input-tarjetas-PremiunHome" id="cboxTec" value="first_checkbox"> Tecnólogo</h3>
                <h3 class="seccion-checkRadio-sectionTexto-tarjetas-PremiunHome"><input type="radio" class="seccion-checkRadio-input-tarjetas-PremiunHome" id="cboxDoc" value="first_checkbox"> Docente</h3>
                <h3 class="seccion-checkRadio-sectionTexto-tarjetas-PremiunHome"><input type="radio" class="seccion-checkRadio-input-tarjetas-PremiunHome" id="cboxEst" value="first_checkbox"> Estudiante</h3>
            </div>
            <div class="col-md-12 noPad">
                <h1 class="section-titulo2-cabecera-font-PremiunHome">¡Selecciona tu plan!</h1>
                <h2 class="section-SubTitulo-cabecera-PremiunHome">Herramienta a la medida para profesionales de Colombia</h2>
            </div>

        </div>    
       
        <div class="targets-premiunHome-visible-en-pc container-principal-tarjetas-PremiunHome">
            <div class ="col-md-11 row contenedor-principal-tarjetas-premiunHome">
                <div class="col-11 col-md-5 content-tarjeta-planInicial-PremiunHome">
                    <h4 class="tarjeta-planInicial-titulo-PremiunHome">Plan inicial</h4>
                    <h2 class="tarjeta-planInicial-valor-PremiunHome">$ 0</h2>
                    <h5 class="tarjeta-planInicial-subTitulo-sinCosto-PremiunHome">Sin ningún costo</h5>
                    <button type="button" class="boton-seleccionar-PlanIncial-PremiunHome" id="btnPagarPremium1" data-toggle="modal" data-target="#modalPagoEspera" onclick="window.location.href= '{{ url('miCuenta') }}'">Seleccionar</button>
                    <div class="col-md-12 row noPad content-planInicial-imgOption-PremiunHome">
                        <div class="col-1 col-md-1 col-lg-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>
                        <div class="col-11 col-md-11 col-lg-11 contPerfilPremiunHome">    
                            <h6 class="option-planInicial-titulo-textoInfo-PremiunHome">Perfil con información básica</h6>
                        </div>
                        <div class="col-md-12 option-planInicial-content-textoInfo-PremiunHome">
                            <p class="option-planInicial-textoInfo-PremiunHome">Muestre información importante como: Teléfono de contacto, 
                                Profesión, Universidad y una fotografía
                            </p>
                        </div>  
                    </div>
                </div>             

                <div class="col-11 col-md-5 margen-entre-tarjetas-PremiunHome center content-tarjeta-membresia-PremiunHome">
                    <h4 class="tarjeta-membresia-titulo-PremiunHome">Membresía</h4>
                    <h6 class="noPadMar tarjeta-membresia-texto-inferior-titulo-PremiunHome" id="valorTipoMenbresia">Profesional</h6>   
                    <h2 class="tarjeta-membresia-valor-PremiunHome" id="valorMenbresia">$ 1.190.000</h2>
                    <h5 class="tarjeta-membresia-subTitulo-planAnual-PremiunHome" id="valorTipoPlan">Plan anual</h5>                    		
                    @if (auth()->check())
                    <button type="button" class="btn-membresia-PremiunHome" id="btnPagarPremium2" data-toggle="modal" data-target="#modalPagoEspera">Seleccionar</button>
                    
                    @else
                        <a href="{{ url('/login?redirect_to='.url()->current()) }}">
                            <button class=" btn-membresia-PremiunHome"> Seleccionar</button>
                        </a>
                    @endif

                    <div id="Profesional" class="content-membresia-imgOption-PremiunHome">
                        <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                            <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                                <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                            </div>

                            <div class="col-11 col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#1" aria-expanded="false" aria-controls="politicas">
                                    <H6 class="tipografiaPerefilPremiumHome">Landing Page Profesional<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                                </button>
                            </div>
                            <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="1">
                                <p class="option-membresia-textoInfo-PremiunHome">Muestre en un solo lugar profesional toda la información
                                    importante como: Formación académica, Servicios,
                                    Opciones de contacto, Horario de atención, fotografías,
                                    Instituciones y Universidades, Certificados y
                                    publicaciones.
                                </p>
                            </div>    
                        </div>
                        <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                            <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                                <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                            </div>

                            <div class="col-11 col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#2" aria-expanded="false" aria-controls="politicas">
                                    <H6 class="tipografiaPerefilPremiumHome">Agenda Online<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                                </button>
                            </div>
                            <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="2">
                                <p class="option-membresia-textoInfo-PremiunHome">Gestione con facilidad su día a día, agenda y visita de usuarios, 
                                    conectando su calendario con nuestra plataforma, así podrá ver todo en el mismo lugar y sin confusiones.
                                </p>
                            </div>    
                        </div>
                        <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                            <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                                <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                            </div>

                            <div class="col-11 col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#3" aria-expanded="false" aria-controls="politicas">
                                    <H6 class="tipografiaPerefilPremiumHome">Calificación y opiniones<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>  
                                </button>
                            </div>
                            <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="3">
                                <p class="option-membresia-textoInfo-PremiunHome">Mejore su posicionamiento: en Zaabra Profesional los usuarios pueden calificar su servicio, 
                                    colocando estrellas y comentarios en su perfil, entre mejor puntuación su perfil será más visible.
                                </p>
                            </div>    
                        </div>
                        <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                            <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                                <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                            </div>

                            <div class="col-11 col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#4" aria-expanded="false" aria-controls="politicas">
                                    <H6 class="tipografiaPerefilPremiumHome">Registro constante de usuarios <i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                                </button>
                            </div>
                            <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="4">
                                <p class="option-membresia-textoInfo-PremiunHome">Al ser una plataforma a disposición del usuario las 24 horas del día, 
                                    este puede agendar citas con usted a cualquier hora sin molestarlo, evitando que pierda contactos.
                                </p>
                            </div>    
                        </div>
                        <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                            <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                                <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                            </div>

                            <div class="col-11 col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#5" aria-expanded="false" aria-controls="politicas">
                                    <H6 class="tipografiaPerefilPremiumHome">Comunicación constante<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                                </button>
                            </div>
                            <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="5">
                                <p class="option-membresia-textoInfo-PremiunHome">A través de Zaabra Profesional pueden conectar sus redes sociales profesionales 
                                    ya sea para mostrar un portafolio o conectarse constantemente.

                                </p>
                            </div>    
                        </div>
                        <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                            <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                                <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                            </div>

                            <div class="col-11 col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#6" aria-expanded="false" aria-controls="politicas">
                                    <H6 class="tipografiaPerefilPremiumHome">Análisis y métricas de la Landing Page<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                                </button>
                            </div>
                            <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="6">
                                <p class="option-membresia-textoInfo-PremiunHome">Con Zaabra Profesional tiene la posibilidad de pedir cuantas veces desee las métricas y mediciones de su perfil, 
                                    donde podrá observar la cantidad de usuarios, clics y citas que obtuvo su perfil en un periodo de tiempo determinado.
                                </p>
                            </div>    
                        </div>
                        <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                            <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                                <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                            </div>

                            <div class="col-11 col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#7" aria-expanded="false" aria-controls="politicas">
                                    <H6 class="tipografiaPerefilPremiumHome">Asesoramiento personalizado de la Landing Page<i class="fas fa-angle-right positionChevronMemHome rotacion chevron-option7-prof-position-PremiunHome"></i></H6> 
                                </button>
                            </div>
                            <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="7">
                                <p class="option-membresia-textoInfo-PremiunHome">En Zaabra Profesional trabajamos para usted, por eso le brindamos un asesor para que este pendiente de su perfil, 
                                    estando a disposición de lo que necesite.
                                </p>
                            </div>    
                        </div>
                        <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                            <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                                <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                            </div>

                            <div class="col-11 col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#8" aria-expanded="false" aria-controls="politicas">
                                    <H6 class="tipografiaPerefilPremiumHome">Asesoramiento de Marketing y publicidad<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                                </button>
                            </div>
                            <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="8">
                                <p class="option-membresia-textoInfo-PremiunHome">En Zaabra profesional contamos con un equipo altamente calificado en Marketing y publicidad,
                                    quien te acompañara a sacar el máximo provecho de nuestros espacios y campañas publicitarias.
                                </p>
                            </div>    
                        </div>
                        <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                            <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                                <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                            </div>

                            <div class="col-11 col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#9" aria-expanded="false" aria-controls="politicas">
                                    <H6 class="tipografiaPerefilPremiumHome">Publicidad sin límite<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                                </button>
                            </div>
                            <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="9">
                                <p class="option-membresia-textoInfo-PremiunHome">Por ser parte de Zaabra Profesional tienes acceso total a nuestros espacios y campañas publicitarias.
                                </p>
                            </div>    
                        </div>
                        <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                            <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                                <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                            </div>

                            <div class="col-11 col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#10" aria-expanded="false" aria-controls="politicas">
                                    <H6 class="tipografiaPerefilPremiumHome">Posicionamiento web<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6> 
                                </button>
                            </div>
                            <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="10">
                                <p class="option-membresia-textoInfo-PremiunHome">Estamos enfocados a que usted sea reconocido, por esto buscamos la forma de posicionar su perfil de manera orgánica, 
                                    para que aparezca en las primeras posiciones, cuando lo busquen Por su nombre, especialidad o profesión.
                                </p>
                            </div>    
                        </div>
                        <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                            <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                                <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                            </div>
                            <div class="col-11 col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#11" aria-expanded="false" aria-controls="politicas">
                                    <H6 class="tipografiaPerefilPremiumHome">Cambios y Reformas<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                                </button>
                            </div>
                            <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="11">
                                <p class="option-membresia-textoInfo-PremiunHome">
                                Cuentas con cinco cambios mensuales si en algún momento deseas modificar o agregar información de tu landing page, 
                                solo nos dices y nosotros lo hacemos por ti.
                                </p>
                            </div>
                        </div>    
                    </div >

                    <div id="Tecnolgo" class="content-membresia-imgOption-PremiunHome">                     
                        <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                            <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                                <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                            </div>

                            <div class="col-11 col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#12" aria-expanded="false" aria-controls="politicas">
                                    <H6 class="tipografiaPerefilPremiumHome">Landing Page Profesional<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                                </button>
                            </div>
                            <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="12">
                                <p class="option-membresia-textoInfo-PremiunHome">Muestre en un solo lugar profesional toda la información
                                importante como: Formación académica, Servicios,
                                Opciones de contacto, Horario de atención, fotografías,
                                Instituciones y Universidades, Certificados y
                                publicaciones.
                                </p>
                            </div>    
                        </div>
                        <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                            <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                                <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                            </div>

                            <div class="col-11 col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#13" aria-expanded="false" aria-controls="politicas">
                                    <H6 class="tipografiaPerefilPremiumHome">Agenda Online<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>  
                                </button>
                            </div>
                            <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="13">
                                <p class="option-membresia-textoInfo-PremiunHome">
                                    Gestione con facilidad su día a día, agenda y visita de usuarios, 
                                    conectando su calendario con nuestra plataforma, así podrá ver todo en el mismo lugar y sin confusiones.
                                </p>
                            </div>    
                        </div>
                        <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                            <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                                <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                            </div>

                            <div class="col-11 col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#14" aria-expanded="false" aria-controls="politicas">
                                    <H6 class="tipografiaPerefilPremiumHome">Calificación y opiniones<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6> 
                                </button>
                            </div>
                            <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="14">
                                <p class="option-membresia-textoInfo-PremiunHome">Mejore su posicionamiento: en Zaabra Profesional los usuarios pueden calificar su servicio, 
                                    colocando estrellas y comentarios en su perfil, entre mejor puntuación su perfil será más visible.
                                </p>
                            </div>    
                        </div>
                        <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                            <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                                <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                            </div>

                            <div class="col-11 col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#15" aria-expanded="false" aria-controls="politicas">
                                    <H6 class="tipografiaPerefilPremiumHome">Registro constante de usuarios<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                                </button>
                            </div>
                            <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="15">
                                <p class="option-membresia-textoInfo-PremiunHome">
                                    Al ser una plataforma a disposición del usuario las 24 horas del día, 
                                    este puede agendar citas con usted a cualquier hora sin molestarlo, evitando que pierda contactos.
                                </p>
                            </div>    
                        </div>
                        <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                            <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                                <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                            </div>

                            <div class="col-11 col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#16" aria-expanded="false" aria-controls="politicas">
                                    <H6 class="tipografiaPerefilPremiumHome">Comunicación constante<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>  
                                </button>
                            </div>
                            <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="16">
                                <p class="option-membresia-textoInfo-PremiunHome">
                                    A través de Zaabra Profesional pueden conectar sus redes sociales profesionales ya sea para mostrar un portafolio o conectarse constantemente.
                                </p>
                            </div>    
                        </div>
                        <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                            <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                                <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                            </div>

                            <div class="col-11 col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#17" aria-expanded="false" aria-controls="politicas">
                                    <H6 class="tipografiaPerefilPremiumHome">Análisis y métricas de la Landing Page<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                                </button>
                            </div>
                            <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="17">
                                <p class="option-membresia-textoInfo-PremiunHome">Con Zaabra Profesional tiene la posibilidad de pedir cuantas veces desee las métricas
                                    y mediciones de su perfil, donde podrá observar la cantidad de usuarios, 
                                    clics y citas que obtuvo su perfil en un periodo de tiempo determinado.
                                </p>
                            </div>    
                        </div>
                        <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                            <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                                <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                            </div>

                            <div class="col-11 col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#18" aria-expanded="false" aria-controls="politicas">
                                    <H6 class="tipografiaPerefilPremiumHome">Asesoramiento personalizado de la Landing Page Profesional<i class="fas fa-angle-right positionChevronMemHome chevron-option7-tecno-position-PremiunHome rotacion"></i></H6>
                                </button>
                            </div>
                            <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="18">
                                <p class="option-membresia-textoInfo-PremiunHome">
                                    En Zaabra Profesional trabajamos para usted, 
                                    por eso le brindamos un asesor para que este pendiente de su perfil, 
                                    estando a disposición de lo que necesite.
                                </p>
                            </div>    
                        </div>
                        <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                            <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                                <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                            </div>

                            <div class="col-11 col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#19" aria-expanded="false" aria-controls="politicas">
                                    <H6 class="tipografiaPerefilPremiumHome">Asesoramiento de Marketing y publicidad<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                                </button>
                            </div>
                            <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="19">
                                <p class="option-membresia-textoInfo-PremiunHome">
                                    En Zaabra profesional contamos con un equipo altamente calificado en Marketing y publicidad,
                                    quien te acompañara a sacar el máximo provecho de nuestros espacios y campañas publicitarias.
                                </p>
                            </div>    
                        </div>
                    </div>      

                    <div id="Docente" class="content-membresia-imgOption-PremiunHome">                          
                        <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                            <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                                <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                            </div>

                            <div class="col-11 col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#20" aria-expanded="false" aria-controls="politicas">
                                <H6 class="tipografiaPerefilPremiumHome">Landing Page Profesional<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                                
                                </button>
                            </div>
                            <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="20">
                                <p class="option-membresia-textoInfo-PremiunHome">Muestre en un solo lugar profesional toda la información
                                    importante como: Formación académica, Servicios,
                                    Opciones de contacto, Horario de atención, fotografías,
                                    Instituciones y Universidades, Certificados y
                                    publicaciones.
                                </p>
                            </div>    
                        </div>
                        <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                            <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                                <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                            </div>

                            <div class="col-11 col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#21" aria-expanded="false" aria-controls="politicas">
                                <H6 class="tipografiaPerefilPremiumHome">Agenda Online<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                                
                                </button>
                            </div>
                            <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="21">
                                <p class="option-membresia-textoInfo-PremiunHome">Gestione con facilidad su día a día, 
                                    agenda y visita de usuarios, conectando su calendario con nuestra plataforma, así podrá ver todo en el mismo lugar y sin confusiones.
                                </p>
                            </div>    
                        </div>
                        <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                            <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                                <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                            </div>

                            <div class="col-11 col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#22" aria-expanded="false" aria-controls="politicas">
                                <H6 class="tipografiaPerefilPremiumHome">Calificación y opiniones<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                                
                                </button>
                            </div>
                            <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="22">
                                <p class="option-membresia-textoInfo-PremiunHome">Calificación y opiniones
                                importante como: Formación académica, Servicios,
                                Opciones de contacto, Horario de atención, fotografías,
                                Instituciones y Universidades, Certificados y
                                publicaciones.
                                </p>
                            </div>    
                        </div>
                        <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                            <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                                <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                            </div>

                            <div class="col-11 col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#23" aria-expanded="false" aria-controls="politicas">
                                <H6 class="tipografiaPerefilPremiumHome">Registro constante de usuarios<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                                
                                </button>
                            </div>
                            <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="23">
                                <p class="option-membresia-textoInfo-PremiunHome">Al ser una plataforma a disposición del usuario las 24 horas del día, 
                                    este puede agendar citas con usted a cualquier hora sin molestarlo, evitando que pierda contactos.
                                </p>
                            </div>    
                        </div>
                        <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                            <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                                <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                            </div>

                            <div class="col-11 col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#24" aria-expanded="false" aria-controls="politicas">
                                <H6 class="tipografiaPerefilPremiumHome">Comunicación constante<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                                
                                </button>
                            </div>
                            <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="24">
                                <p class="option-membresia-textoInfo-PremiunHome">A través de Zaabra Profesional pueden conectar sus redes sociales profesionales ya sea para mostrar 
                                    un portafolio o conectarse constantemente.
                                </p>
                            </div>    
                        </div>
                        <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                            <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                                <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                            </div>

                            <div class="col-11 col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#25" aria-expanded="false" aria-controls="politicas">
                                <H6 class="tipografiaPerefilPremiumHome">Análisis y métricas de la Landing Page<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                                
                                </button>
                            </div>
                            <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="25">
                                <p class="option-membresia-textoInfo-PremiunHome">Con Zaabra Profesional tiene la posibilidad de pedir cuantas veces desee las métricas y mediciones de su perfil, 
                                    donde podrá observar la cantidad de usuarios, clics y citas que obtuvo su perfil en un periodo de tiempo determinado.
                                </p>
                            </div>    
                        </div>
                        <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                            <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                                <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                            </div>

                            <div class="col-11 col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#26" aria-expanded="false" aria-controls="politicas">
                                <H6 class="tipografiaPerefilPremiumHome">Asesoramiento personalizado de la Landing Page<i class="fas fa-angle-right positionChevronMemHome chevron-option7-doc-position-PremiunHome rotacion"></i></H6>
                                
                                </button>
                            </div>
                            <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="26">
                                <p class="option-membresia-textoInfo-PremiunHome">En Zaabra Profesional trabajamos para usted, por eso le brindamos un asesor para que este pendiente de su perfil, 
                                    estando a disposición de lo que necesite.
                                </p>
                            </div>    
                        </div>
                        <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                            <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                                <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                            </div>

                            <div class="col-11 col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#27" aria-expanded="false" aria-controls="politicas">
                                    <H6 class="tipografiaPerefilPremiumHome">Asesoramiento de Marketing y publicidad<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6> 
                                </button>
                            </div>
                            <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="27">
                                <p class="option-membresia-textoInfo-PremiunHome">En Zaabra profesional contamos con un equipo altamente calificado en Marketing y publicidad,
                                    quien te acompañara a sacar el máximo provecho de nuestros espacios y campañas publicitarias.
                                </p>
                            </div>    
                        </div>
                    </div>

                    <div id="Estudiante" class="content-membresia-imgOption-PremiunHome">
                        <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                            <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                                <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                            </div>

                            <div class="col-11 col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#28" aria-expanded="false" aria-controls="politicas">
                                <H6 class="tipografiaPerefilPremiumHome">Landing Page Profesional<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                                
                                </button>
                            </div>
                            <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="28">
                                <p class="option-membresia-textoInfo-PremiunHome">Muestre en un solo lugar toda la información importante como: Formación académica, 
                                    Opciones de contacto, portafolio,
                                    Certificados y publicaciones.
                                </p>
                            </div>    
                        </div>
                        <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                            <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                                <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                            </div>

                            <div class="col-11 col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#29" aria-expanded="false" aria-controls="politicas">
                                <H6 class="tipografiaPerefilPremiumHome">Registro constante de usuarios<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                                
                                </button>
                            </div>
                            <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="29">
                                <p class="option-membresia-textoInfo-PremiunHome">Al ser una plataforma a disposición del usuario las 24 horas del día, 
                                    las corporaciones puede ver su perfil a cualquier hora sin molestarlo, evitando que pierda oportunidades de contacto.
                                </p>
                            </div>    
                        </div>
                        <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                            <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                                <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                            </div>

                            <div class="col-11 col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#30" aria-expanded="false" aria-controls="politicas">
                                <H6 class="tipografiaPerefilPremiumHome">Comunicación constante<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                                
                                </button>
                            </div>
                            <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="30">
                                <p class="option-membresia-textoInfo-PremiunHome">A través de Zaabra Profesional pueden conectar sus redes sociales profesionales ya sea para mostrar un portafolio o conectarse constantemente.
                                </p>
                            </div>    
                        </div>
                        <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                            <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                                <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                            </div>

                            <div class="col-11 col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#31" aria-expanded="false" aria-controls="politicas">
                                <H6 class="tipografiaPerefilPremiumHome">Asesoramiento personalizado de la Landing Page<i class="fas fa-angle-right positionChevronMemHome chevron-option7-stdent-position-PremiunHome rotacion"></i></H6>
                                
                                </button>
                            </div>
                            <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="31">
                                <p class="option-membresia-textoInfo-PremiunHome">En Zaabra Profesional trabajamos para usted, 
                                    por eso le brindamos un asesor para que este pendiente de su perfil, estando a disposición de lo que necesite.
                                </p>
                            </div>    
                        </div>
                        <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                            <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                                <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                            </div>

                            <div class="col-11 col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#32" aria-expanded="false" aria-controls="politicas">
                                <H6 class="tipografiaPerefilPremiumHome">Asesoramiento de Marketing y publicidad<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                                
                                </button>
                            </div>
                            <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="32">
                                <p class="option-membresia-textoInfo-PremiunHome">En Zaabra profesional contamos con un equipo altamente calificado en Marketing y publicidad, 
                                    quien te acompañara a sacar el máximo provecho de nuestros espacios y campañas publicitarias.
                                </p>
                            </div>    
                        </div>
                    </div>
                
                </div>
            </div>
            <div class="col-md-10 container-general-footer-PremiunHome">
                <div class="col-lg-12 container-principal-footer-PremiunHome">
                    <div class="col-md-8 content-mediosdPagos-style-PremiunHome">

                        <div class="col-md-6 noPad">
                            <div class="col-md-12 noPad">
                                <h1 class="noPadMar seccion-mediosdPagos-titulo-PremiunHome">MEDIOS DE PAGO</h1>
                                <h2 class="noPadMar seccion-mediosdPagos-subTitulo-PremiunHome">Transferencia bancaria</h2>
                            </div>
                            <div class="col-md-12 noPad seccion-mediosdPagos-content-imgCelulares-PremiunHome">
                                <img class="seccion-mediosdPagos-content-imgCelulares-style-PremiunHome" src="img/pagoPremiun/tranferenciaBancaria.png"> 
                            </div>
                        </div> 
                        
                        <div class="col-md-6 noPad">
                            <div class="col-md-12 noPad mb-2">
                                <h2 class="noPadMar seccion-mediosdPagos-subTitulo-bancos-PremiunHome">BBVA</h2>
                                <h3 class="noPadMar seccion-mediosdPagos-cuenta-texto-PremiunHome">Cuenta corriente<br>00130724000100022264</h3>
                            </div>
                            <div class="col-md-12 noPad mb-2">
                                <h2 class="noPadMar seccion-mediosdPagos-subTitulo-bancos-PremiunHome">BANCOLOMBIA</h2>
                                <h3 class="noPadMar seccion-mediosdPagos-cuenta-texto-PremiunHome">Ahorros<br>30000028513</h3>
                            </div>
                            <div class="col-md-12 noPad">
                                <h3 class="noPadMar seccion-mediosdPagos-cuenta-texto-PremiunHome"><b>Importadora Andiamo S.A.S</b></h3>
                                <h3 class="noPadMar seccion-mediosdPagos-cuenta-texto-PremiunHome"><b>NIT 901294385-1</b></h3>
                            </div>
                        </div> 
                    
                    </div> 
                    <div class="col-md-4 content-puntosdPago-imgs-PremiunHome">
                        <div class="section-icons-mediosdPago-PremiunHome">
                            <div class="col-md-12 content-puntosdPago-img-PremiunHome">
                                <h3 class="section-puntosdPago-texto-style-PremiunHome">Pagos electrónicos</h3>
                                <img class="section-puntosdPago-img-inferior-style-PremiunHome" src="{{$urlZaabra}}img/tarjetas-de-Pago/logosdepagos2.png"> 
                            </div>

                        </div>
                    </div> 
                </div>
            </div>

        </div>
    </div>    

    <!-- /////   VERSION CELULAR   ////// -->
    <div class="col-12 targets-premiunHome-visible-en-cel margen-respecto-header-PremiunHomeCell" >
        <div class="row col-md-12 noPadMar">

            <div class="col-md-12 section-cabecera-titulosPrincipales-PremiunHomeCell">
                <h1 class="section-titulo-cabecera-h1Top-PremiunHomeCell">Escoge tu perfil</h1>
                <h1 class="section-titulo-cabecera-h1bottom-PremiunHomeCell">para ver la membresía</h1>
            </div>

            <div class="col-6 seccion-checkbox-prof-margen-tarjetas-PremiunHomeCell">
                <h3 class="seccion-checkRadio-sectionTexto-tarjetas-PremiunHome"><input type="radio" class="seccion-checkRadio-sectionTexto-styleInput-tarjetas-PremiunHome"  id="cboxProf-cell" value="first_checkbox" checked="true"> Profesional</h3>
            </div>
            <div class="col-6 seccion-checkbox-tecno-margen-tarjetas-PremiunHomeCell">
                <h3 class="seccion-checkRadio-sectionTexto-tarjetas-PremiunHome"><input type="radio" class="seccion-checkRadio-sectionTexto-styleInput-tarjetas-PremiunHome"  id="cboxTec-cell" value="first_checkbox"> Tecnólogo</h3>
            </div>
            <div class="col-6 seccion-checkbox-docent-margen-tarjetas-PremiunHomeCell">
                <h3 class="seccion-checkRadio-sectionTexto-tarjetas-PremiunHome"><input type="radio" class="seccion-checkRadio-sectionTexto-styleInput-tarjetas-PremiunHome"  id="cboxDoc-cell" value="first_checkbox"> Docente</h3>
            </div>
            <div class="col-6 seccion-checkbox-estud-margen-tarjetas-PremiunHomeCell">
                <h3 class="seccion-checkRadio-sectionTexto-tarjetas-PremiunHome"><input type="radio" class="seccion-checkRadio-sectionTexto-styleInput-tarjetas-PremiunHome"  id="cboxEst-cell" value="first_checkbox"> Estudiante</h3>
            </div>

            <div class="col-md-12 noPad">
                <h1 class="section-titulo2-cabecera-PremiunHomeCell">¡Selecciona tu plan!</h1>
                <h2 class="section-SubTitulo-cabecera-PremiunHomeCell">Herramienta a la medida para</h2>
                <h2 class="section-SubTitulo-cabecera-PremiunHomeCell">profesionales de Colombia</h2>
            </div>

        
            <div class="col-12 contenedor-principal-tarjetas-planIni-memb-PremiunHome">    
                <div class="col-11 col-md-11 content-tarjeta-membresia-PremiunHome">
                <H4 class="tarjeta-membresia-titulo-PremiunHome">Membresía</H4>
                <h6 class="noPadMar tarjeta-membresia-texto-inferior-titulo-PremiunHome" id="valorTipoMenbresia-cell">Profesional</h6>   
                <H2 class="tarjeta-membresia-valor-PremiunHome" id="valorMenbresia-cell">$ 1.190.000</H2>
                <H5 class="tarjeta-membresia-subTitulo-planAnual-PremiunHome" id="valorTipoPlan-cell">Plan anual</H5>                    		
                @if (auth()->check())
                <button type="button" class="btn btn-membresia-PremiunHome" id="btnPagarPremium2-cell" data-toggle="modal" data-target="#modalPagoEsperaCell">Seleccionar</button>
                
                @else
                    <a href="{{ url('/login?redirect_to='.url()->current()) }}" class="btn btn-membresia-PremiunHome">Seleccionar</a>
                @endif

                
                <div id="Profesional-cell" class="content-membresia-imgOption-PremiunHome">
                    <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                        <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>

                        <div class="col-11 col-md-11 contPerfilPremiunHome">
                            <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#1-cell" aria-expanded="false" aria-controls="politicas">
                            <H6 class="tipografiaPerefilPremiumHome">Landing Page Profesional<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                            
                            </button>
                        </div>
                        <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="1-cell">
                            <p class="option-membresia-textoInfo-PremiunHome">Muestre en un solo lugar profesional toda la información

                            importante como: Formación académica, Servicios,
                            Opciones de contacto, Horario de atención, fotografías,
                            Instituciones y Universidades, Certificados y
                            publicaciones.
                            </p>
                        </div>    
                    </div>
                    <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                        <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>

                        <div class="col-11 col-md-11 contPerfilPremiunHome">
                            <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#2-cell" aria-expanded="false" aria-controls="politicas">
                            <H6 class="tipografiaPerefilPremiumHome">Agenda Online<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                            
                            </button>
                        </div>
                        <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="2-cell">
                            <p class="option-membresia-textoInfo-PremiunHome">Gestione con facilidad su día a día, agenda y visita de usuarios, 
                                conectando su calendario con nuestra plataforma, así podrá ver todo en el mismo lugar y sin confusiones.
                            </p>
                        </div>    
                    </div>
                    <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                        <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>

                        <div class="col-11 col-md-11 contPerfilPremiunHome">
                            <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#3-cell" aria-expanded="false" aria-controls="politicas">
                            <H6 class="tipografiaPerefilPremiumHome">Calificación y opiniones<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                            
                            </button>
                        </div>
                        <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="3-cell">
                            <p class="option-membresia-textoInfo-PremiunHome">Mejore su posicionamiento: en Zaabra Profesional los usuarios pueden calificar su servicio, 
                                colocando estrellas y comentarios en su perfil, entre mejor puntuación su perfil será más visible.
                            </p>
                        </div>    
                    </div>
                    <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                        <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>

                        <div class="col-11 col-md-11 contPerfilPremiunHome">
                            <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#4-cell" aria-expanded="false" aria-controls="politicas">
                            <H6 class="tipografiaPerefilPremiumHome">Registro constante de usuarios <i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                            
                            </button>
                        </div>
                        <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="4-cell">
                            <p class="option-membresia-textoInfo-PremiunHome">Al ser una plataforma a disposición del usuario las 24 horas del día, 
                                este puede agendar citas con usted a cualquier hora sin molestarlo, evitando que pierda contactos.
                            </p>
                        </div>    
                    </div>
                    <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                        <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>

                        <div class="col-11 col-md-11 contPerfilPremiunHome">
                            <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#5-cell" aria-expanded="false" aria-controls="politicas">
                            <H6 class="tipografiaPerefilPremiumHome">Comunicación constante<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                            
                            </button>
                        </div>
                        <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="5-cell">
                            <p class="option-membresia-textoInfo-PremiunHome">A través de Zaabra Profesional pueden conectar sus redes sociales profesionales 
                                ya sea para mostrar un portafolio o conectarse constantemente.

                            </p>
                        </div>    
                    </div>
                    <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                        <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>

                        <div class="col-11 col-md-11 contPerfilPremiunHome">
                            <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#6-cell" aria-expanded="false" aria-controls="politicas">
                            <H6 class="tipografiaPerefilPremiumHome">Análisis y métricas de la Landing Page<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                            
                            </button>
                        </div>
                        <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="6-cell">
                            <p class="option-membresia-textoInfo-PremiunHome">Con Zaabra Profesional tiene la posibilidad de pedir cuantas veces desee las métricas y mediciones de su perfil, 
                                donde podrá observar la cantidad de usuarios, clics y citas que obtuvo su perfil en un periodo de tiempo determinado.
                            </p>
                        </div>    
                    </div>
                    <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                        <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>

                        <div class="col-11 col-md-11 contPerfilPremiunHome">
                            <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#7-cell" aria-expanded="false" aria-controls="politicas">
                            <H6 class="tipografiaPerefilPremiumHome">Asesoramiento personalizado de la Landing Page<i class="fas fa-angle-right positionChevronMemHome rotacion margen-top-chevron-option-prof-PremiunHomeCell"></i></H6>
                            
                            </button>
                        </div>
                        <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="7-cell">
                            <p class="option-membresia-textoInfo-PremiunHome">En Zaabra Profesional trabajamos para usted, por eso le brindamos un asesor para que este pendiente de su perfil, 
                                estando a disposición de lo que necesite.
                            </p>
                        </div>    
                    </div>
                    <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                        <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>

                        <div class="col-11 col-md-11 contPerfilPremiunHome">
                            <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#8-cell" aria-expanded="false" aria-controls="politicas">
                            <H6 class="tipografiaPerefilPremiumHome">Asesoramiento de Marketing y publicidad<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                            
                            </button>
                        </div>
                        <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="8-cell">
                            <p class="option-membresia-textoInfo-PremiunHome">En Zaabra profesional contamos con un equipo altamente calificado en Marketing y publicidad,
                                quien te acompañara a sacar el máximo provecho de nuestros espacios y campañas publicitarias.
                            </p>
                        </div>    
                    </div>
                    <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                        <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>

                        <div class="col-11 col-md-11 contPerfilPremiunHome">
                            <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#9-cell" aria-expanded="false" aria-controls="politicas">
                            <H6 class="tipografiaPerefilPremiumHome">Publicidad sin límite<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                            
                            </button>
                        </div>
                        <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="9-cell">
                            <p class="option-membresia-textoInfo-PremiunHome">Por ser parte de Zaabra Profesional tienes acceso total a nuestros espacios y campañas publicitarias.
                            </p>
                        </div>    
                    </div>
                    <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                        <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>

                        <div class="col-11 col-md-11 contPerfilPremiunHome">
                            <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#10-cell" aria-expanded="false" aria-controls="politicas">
                            <H6 class="tipografiaPerefilPremiumHome">Posicionamiento web<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                            
                            </button>
                        </div>
                        <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="10-cell">
                            <p class="option-membresia-textoInfo-PremiunHome">Estamos enfocados a que usted sea reconocido, por esto buscamos la forma de posicionar su perfil de manera orgánica, 
                                para que aparezca en las primeras posiciones, cuando lo busquen Por su nombre, especialidad o profesión.
                            </p>
                        </div>    
                    </div>
                    <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                        <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>
                        <div class="col-11 col-md-11 contPerfilPremiunHome">
                            <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#11-cell" aria-expanded="false" aria-controls="politicas">
                                <H6 class="tipografiaPerefilPremiumHome">Cambios y Reformas<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                            </button>

                        </div>
                        <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="11-cell">
                            <p class="option-membresia-textoInfo-PremiunHome">
                            Cuentas con cinco cambios mensuales si en algún momento deseas modificar o agregar información de tu landing page, 
                            solo nos dices y nosotros lo hacemos por ti.
                            </p>
                        </div>
                    </div>    
                </div >

                <div id="Tecnolgo-cell" class="content-membresia-imgOption-PremiunHome">
                    <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                        <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>

                        <div class="col-11 col-md-11 contPerfilPremiunHome">
                            <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#12-cell" aria-expanded="false" aria-controls="politicas">
                            <H6 class="tipografiaPerefilPremiumHome">Landing Page Profesional<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                            
                            </button>
                        </div>
                        <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="12-cell">
                            <p class="option-membresia-textoInfo-PremiunHome">Muestre en un solo lugar profesional toda la información
                            importante como: Formación académica, Servicios,
                            Opciones de contacto, Horario de atención, fotografías,
                            Instituciones y Universidades, Certificados y
                            publicaciones.
                            </p>
                        </div>    
                    </div>
                    <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                        <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>

                        <div class="col-11 col-md-11 contPerfilPremiunHome">
                            <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#13-cell" aria-expanded="false" aria-controls="politicas">
                            <H6 class="tipografiaPerefilPremiumHome">Agenda Online<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                            
                            </button>
                        </div>
                        <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="13-cell">
                            <p class="option-membresia-textoInfo-PremiunHome">
                                Gestione con facilidad su día a día, agenda y visita de usuarios, 
                                conectando su calendario con nuestra plataforma, así podrá ver todo en el mismo lugar y sin confusiones.

                            </p>
                        </div>    
                    </div>
                    <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                        <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>

                        <div class="col-11 col-md-11 contPerfilPremiunHome">
                            <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#14-cell" aria-expanded="false" aria-controls="politicas">
                            <H6 class="tipografiaPerefilPremiumHome">Calificación y opiniones<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                            
                            </button>
                        </div>
                        <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="14-cell">
                            <p class="option-membresia-textoInfo-PremiunHome">Mejore su posicionamiento: en Zaabra Profesional los usuarios pueden calificar su servicio, 
                                colocando estrellas y comentarios en su perfil, entre mejor puntuación su perfil será más visible.

                            </p>
                        </div>    
                    </div>
                    <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                        <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>

                        <div class="col-11 col-md-11 contPerfilPremiunHome">
                            <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#15-cell" aria-expanded="false" aria-controls="politicas">
                            <H6 class="tipografiaPerefilPremiumHome">Registro constante de usuarios<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                            
                            </button>
                        </div>
                        <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="15-cell">
                            <p class="option-membresia-textoInfo-PremiunHome">
                                Al ser una plataforma a disposición del usuario las 24 horas del día, 
                                este puede agendar citas con usted a cualquier hora sin molestarlo, evitando que pierda contactos.
                            </p>
                        </div>    
                    </div>
                    <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                        <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>

                        <div class="col-11 col-md-11 contPerfilPremiunHome">
                            <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#16-cell" aria-expanded="false" aria-controls="politicas">
                            <H6 class="tipografiaPerefilPremiumHome">Comunicación constante<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                            
                            </button>
                        </div>
                        <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="16-cell">
                            <p class="option-membresia-textoInfo-PremiunHome">
                                A través de Zaabra Profesional pueden conectar sus redes sociales profesionales ya sea para mostrar un portafolio o conectarse constantemente.

                            </p>
                        </div>    
                    </div>
                    <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                        <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>

                        <div class="col-11 col-md-11 contPerfilPremiunHome">
                            <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#17-cell" aria-expanded="false" aria-controls="politicas">
                            <H6 class="tipografiaPerefilPremiumHome">Análisis y métricas de la Landing Page<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                            
                            </button>
                        </div>
                        <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="17-cell">
                            <p class="option-membresia-textoInfo-PremiunHome">Con Zaabra Profesional tiene la posibilidad de pedir cuantas veces desee las métricas
                                y mediciones de su perfil, donde podrá observar la cantidad de usuarios, 
                                clics y citas que obtuvo su perfil en un periodo de tiempo determinado.

                            </p>
                        </div>    
                    </div>
                    <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                        <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>

                        <div class="col-11 col-md-11 contPerfilPremiunHome">
                            <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#18-cell" aria-expanded="false" aria-controls="politicas">
                            <H6 class="tipografiaPerefilPremiumHome">Asesoramiento personalizado de la Landing Page Profesional<i class="fas fa-angle-right positionChevronMemHome rotacion margen-top-chevron-option-tecn-PremiunHomeCell"></i></H6>
                            
                            </button>
                        </div>
                        <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="18-cell">
                            <p class="option-membresia-textoInfo-PremiunHome">
                                En Zaabra Profesional trabajamos para usted, 
                                por eso le brindamos un asesor para que este pendiente de su perfil, 
                                estando a disposición de lo que necesite.

                            </p>
                        </div>    
                    </div>
                    <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                        <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>

                        <div class="col-11 col-md-11 contPerfilPremiunHome">
                            <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#19-cell" aria-expanded="false" aria-controls="politicas">
                            <H6 class="tipografiaPerefilPremiumHome">Asesoramiento de Marketing y publicidad<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                            
                            </button>
                        </div>
                        <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="19-cell">
                            <p class="option-membresia-textoInfo-PremiunHome">
                                En Zaabra profesional contamos con un equipo altamente calificado en Marketing y publicidad,
                                quien te acompañara a sacar el máximo provecho de nuestros espacios y campañas publicitarias.

                            </p>
                        </div>    
                    </div>
                </div>      

                <div id="Docente-cell" class="content-membresia-imgOption-PremiunHome">
                    <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                        <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>

                        <div class="col-11 col-md-11 contPerfilPremiunHome">
                            <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#20-cell" aria-expanded="false" aria-controls="politicas">
                            <H6 class="tipografiaPerefilPremiumHome">Landing Page Profesional<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                            
                            </button>
                        </div>
                        <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="20-cell">
                            <p class="option-membresia-textoInfo-PremiunHome">Muestre en un solo lugar profesional toda la información
                                importante como: Formación académica, Servicios,
                                Opciones de contacto, Horario de atención, fotografías,
                                Instituciones y Universidades, Certificados y
                                publicaciones.
                            </p>
                        </div>    
                    </div>
                    <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                        <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>

                        <div class="col-11 col-md-11 contPerfilPremiunHome">
                            <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#21-cell" aria-expanded="false" aria-controls="politicas">
                            <H6 class="tipografiaPerefilPremiumHome">Agenda Online<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                            
                            </button>
                        </div>
                        <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="21-cell">
                            <p class="option-membresia-textoInfo-PremiunHome">Gestione con facilidad su día a día, 
                                agenda y visita de usuarios, conectando su calendario con nuestra plataforma, así podrá ver todo en el mismo lugar y sin confusiones.
                            </p>
                        </div>    
                    </div>
                    <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                        <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>

                        <div class="col-11 col-md-11 contPerfilPremiunHome">
                            <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#22-cell" aria-expanded="false" aria-controls="politicas">
                            <H6 class="tipografiaPerefilPremiumHome">Calificación y opiniones<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                            
                            </button>
                        </div>
                        <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="22-cell">
                            <p class="option-membresia-textoInfo-PremiunHome">Calificación y opiniones
                            importante como: Formación académica, Servicios,
                            Opciones de contacto, Horario de atención, fotografías,
                            Instituciones y Universidades, Certificados y
                            publicaciones.
                            </p>
                        </div>    
                    </div>
                    <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                        <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>

                        <div class="col-11 col-md-11 contPerfilPremiunHome">
                            <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#23-cell" aria-expanded="false" aria-controls="politicas">
                            <H6 class="tipografiaPerefilPremiumHome">Registro constante de usuarios<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                            
                            </button>
                        </div>
                        <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="23-cell">
                            <p class="option-membresia-textoInfo-PremiunHome">Al ser una plataforma a disposición del usuario las 24 horas del día, 
                                este puede agendar citas con usted a cualquier hora sin molestarlo, evitando que pierda contactos.
                            </p>
                        </div>    
                    </div>
                    <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                        <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>

                        <div class="col-11 col-md-11 contPerfilPremiunHome">
                            <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#24-cell" aria-expanded="false" aria-controls="politicas">
                            <H6 class="tipografiaPerefilPremiumHome">Comunicación constante<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                            
                            </button>
                        </div>
                        <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="24-cell">
                            <p class="option-membresia-textoInfo-PremiunHome">A través de Zaabra Profesional pueden conectar sus redes sociales profesionales ya sea para mostrar 
                                un portafolio o conectarse constantemente.
                            </p>
                        </div>    
                    </div>
                    <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                        <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>

                        <div class="col-11 col-md-11 contPerfilPremiunHome">
                            <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#25-cell" aria-expanded="false" aria-controls="politicas">
                            <H6 class="tipografiaPerefilPremiumHome">Análisis y métricas de la Landing Page<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                            
                            </button>
                        </div>
                        <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="25-cell">
                            <p class="option-membresia-textoInfo-PremiunHome">Con Zaabra Profesional tiene la posibilidad de pedir cuantas veces desee las métricas y mediciones de su perfil, 
                                donde podrá observar la cantidad de usuarios, clics y citas que obtuvo su perfil en un periodo de tiempo determinado.
                            </p>
                        </div>    
                    </div>
                    <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                        <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>

                        <div class="col-11 col-md-11 contPerfilPremiunHome">
                            <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#26-cell" aria-expanded="false" aria-controls="politicas">
                            <H6 class="tipografiaPerefilPremiumHome">Asesoramiento personalizado de la Landing Page<i class="fas fa-angle-right positionChevronMemHome rotacion margen-top-chevron-option-docent-PremiunHomeCell"></i></H6>
                            
                            </button>
                        </div>
                        <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="26-cell">
                            <p class="option-membresia-textoInfo-PremiunHome">En Zaabra Profesional trabajamos para usted, por eso le brindamos un asesor para que este pendiente de su perfil, 
                                estando a disposición de lo que necesite.
                            </p>
                        </div>    
                    </div>
                    <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                        <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>

                        <div class="col-11 col-md-11 contPerfilPremiunHome">
                            <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#27-cell" aria-expanded="false" aria-controls="politicas">
                            <H6 class="tipografiaPerefilPremiumHome">Asesoramiento de Marketing y publicidad<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                            
                            </button>
                        </div>
                        <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="27-cell">
                            <p class="option-membresia-textoInfo-PremiunHome">En Zaabra profesional contamos con un equipo altamente calificado en Marketing y publicidad,
                                quien te acompañara a sacar el máximo provecho de nuestros espacios y campañas publicitarias.
                            </p>
                        </div>    
                    </div>
                </div>

                <div id="Estudiante-cell" class="content-membresia-imgOption-PremiunHome">
                    <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                        <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>

                        <div class="col-11 col-md-11 contPerfilPremiunHome">
                            <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#28-cell" aria-expanded="false" aria-controls="politicas">
                            <H6 class="tipografiaPerefilPremiumHome">Landing Page Profesional<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                            
                            </button>
                        </div>
                        <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="28-cell">
                            <p class="option-membresia-textoInfo-PremiunHome">Muestre en un solo lugar toda la información importante como: Formación académica, 
                                Opciones de contacto, portafolio,
                                Certificados y publicaciones.
                            </p>
                        </div>    
                    </div>
                    <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                        <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>

                        <div class="col-11 col-md-11 contPerfilPremiunHome">
                            <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#29-cell" aria-expanded="false" aria-controls="politicas">
                            <H6 class="tipografiaPerefilPremiumHome">Registro constante de usuarios<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                            
                            </button>
                        </div>
                        <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="29-cell">
                            <p class="option-membresia-textoInfo-PremiunHome">Al ser una plataforma a disposición del usuario las 24 horas del día, 
                                las corporaciones puede ver su perfil a cualquier hora sin molestarlo, evitando que pierda oportunidades de contacto.
                            </p>
                        </div>    
                    </div>
                    <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                        <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>

                        <div class="col-11 col-md-11 contPerfilPremiunHome">
                            <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#30-cell" aria-expanded="false" aria-controls="politicas">
                            <H6 class="tipografiaPerefilPremiumHome">Comunicación constante<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                            
                            </button>
                        </div>
                        <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="30-cell">
                            <p class="option-membresia-textoInfo-PremiunHome">A través de Zaabra Profesional pueden conectar sus redes sociales profesionales ya sea para mostrar un portafolio o conectarse constantemente.
                            </p>
                        </div>    
                    </div>
                    <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                        <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>

                        <div class="col-11 col-md-11 contPerfilPremiunHome">
                            <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#31-cell" aria-expanded="false" aria-controls="politicas">
                            <H6 class="tipografiaPerefilPremiumHome">Asesoramiento personalizado de la Landing Page<i class="fas fa-angle-right positionChevronMemHome rotacion margen-top-chevron-option-student-PremiunHomeCell"></i></H6>
                            
                            </button>
                        </div>
                        <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="31-cell">
                            <p class="option-membresia-textoInfo-PremiunHome">En Zaabra Profesional trabajamos para usted, 
                                por eso le brindamos un asesor para que este pendiente de su perfil, estando a disposición de lo que necesite.
                            </p>
                        </div>    
                    </div>
                    <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                        <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                            <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                        </div>

                        <div class="col-11 col-md-11 contPerfilPremiunHome">
                            <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#32-cell" aria-expanded="false" aria-controls="politicas">
                            <H6 class="tipografiaPerefilPremiumHome">Asesoramiento de Marketing y publicidad<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                            
                            </button>
                        </div>
                        <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="32-cell">
                            <p class="option-membresia-textoInfo-PremiunHome">En Zaabra profesional contamos con un equipo altamente calificado en Marketing y publicidad, 
                                quien te acompañara a sacar el máximo provecho de nuestros espacios y campañas publicitarias.
                            </p>
                        </div>    
                    </div>
                </div>

            </div>
                
            <div class="col-11 col-md-11 content-tarjeta-planInicial-PremiunHome">
                <H4 class="tarjeta-planInicial-titulo-PremiunHome">Plan inicial</H4>
                <H2 class="tarjeta-planInicial-valor-PremiunHome">$ 0</H2>
                <H5 class="tarjeta-planInicial-subTitulo-sinCosto-PremiunHome">Sin ningun costo</H5>
                <button type="button" class="boton-seleccionar-PlanIncial-PremiunHome" id="btnPagarPremium1-cell" data-toggle="modal" data-target="#modalPagoEsperaCell" onclick="window.location.href= '{{ route('miCuenta') }}'">Seleccionar</button>
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                    <div class="col-1 col-md-1 col-lg-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                    </div>
                    <div class="col-11 col-md-11 col-lg-11 contPerfilPremiunHome">    
                            <H6 class="option-planInicial-titulo-textoInfo-PremiunHome">Perfil con información básica</H6>
                    </div>
                    <div class="col-md-12 option-membresia-content-textoInfo-PremiunHome">
                        <p class="option-membresia-textoInfo-PremiunHome">Muestre información importante como: Teléfono de contacto, 
                            Profesión, Universidad y una fotografía
                        </p>
                    </div>   
                </div>
                
            </div>
        </div>                                                      

        <div class="col-12 col-md-12 container-principal-footer-PremiunHome">
            <div class=" row col-11 content-mediosdPagos-style-PremiunHome">

                <div class="col-6 noPad">
                    <div class="col-12 noPad">
                        <h1 class="noPadMar seccion-mediosdPagos-titulo-PremiunHome">MEDIOS DE PAGO</h1>
                        <h2 class="noPadMar seccion-mediosdPagos-subTitulo-PremiunHome">Transferencia bancaría</h2>
                    </div>
                    <div class="col-12 noPad seccion-mediosdPagos-content-imgCelulares-PremiunHome">
                        <img class="seccion-mediosdPagos-content-imgCelulares-style-PremiunHome" src="img/pagoPremiun/tranferenciaBancaria.png"> 
                    </div>
                </div> 
                
                <div class="col-6 content-mediosdPagos-bancosCuentas-PremiunHome">
                    <div class="col-12 noPad mb-2">
                        <h2 class="noPadMar seccion-mediosdPagos-subTitulo-bancos-PremiunHome">BBVA</h2>
                        <h3 class="noPadMar seccion-mediosdPagos-cuenta-texto-PremiunHome">Cuenta corriente<br>00130724000100022264</h3>
                    </div>
                    <div class="col-12 noPad mb-2">
                        <h2 class="noPadMar seccion-mediosdPagos-subTitulo-bancos-PremiunHome">BANCOLOMBIA</h2>
                        <h3 class="noPadMar seccion-mediosdPagos-cuenta-texto-PremiunHome">Ahorros<br>30000028513</h3>
                    </div>
                    
                </div> 
                <div class="col-12 seccion-mediosdPagos-cuenta-nameNit-PremiunHome">
                    <h3 class="noPadMar seccion-mediosdPagos-cuenta-nameNit-texto-PremiunHome">Importadora Andiamo S.A.S</h3>
                    <h3 class="noPadMar seccion-mediosdPagos-cuenta-nameNit-texto-PremiunHome">NIT 901294385-1</h3>
                </div>
            
            </div> 

            <div class="col-12 content-puntosdPago-imgs-PremiunHome">
                <div class="col-md-12 section-icons-mediosdPago-PremiunHome">
                    <div class="col-md-12 content-puntosdPago-img-PremiunHome">
                        <h3 class="section-puntosdPago-texto-style-PremiunHome">Pagos electrónicos</h3>
                        <img class="section-puntosdPago-img-inferior-style-PremiunHome" src="{{$urlZaabra}}img/tarjetas-de-Pago/logosdepagos2.png"> 
                    </div>
                </div>
            </div> 

        </div>
           
        
    </div>    
</div>

   

<div class="formularioPagoPremiun">         
</div>

@endsection 