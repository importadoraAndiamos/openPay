
@extends('layouts.indexMiCuentaNoFotter')

@section('contenidoMiCuenta')

<div  class="col-lg-10 container-principal-tarjetasdPago-PremiunView tarjetas-premiunView-visible-Desktop">

    <!-- SECCION CABECERA TARJETAS DE PAGO codigo copiado de la vista premiunHome estilos ubicados en profesionales-PremiunView.scss jfk -->
    <div class="row col-md-12 noPadMar">
        <div class="col-md-12 mt-5 noPad">
            <h1 class="section-titulo-cabecera-font-PremiunView">Escoge tu perfil para ver la membresía</h1>
        </div>
        <div class="col-12 col-md-12 seccion-checkbox-margen-tarjetas-PremiunView">
            <h3 class="seccion-checkRadio-sectionTexto-tarjetas-PremiunView"><input type="radio" class="seccion-checkRadio-input-tarjetas-PremiunView" id="cboxProf" value="first_checkbox" checked="true"> Profesional</h3>
            <h3 class="seccion-checkRadio-sectionTexto-tarjetas-PremiunView"><input type="radio" class="seccion-checkRadio-input-tarjetas-PremiunView" id="cboxTec" value="first_checkbox"> Tecnólogo</h3>
            <h3 class="seccion-checkRadio-sectionTexto-tarjetas-PremiunView"><input type="radio" class="seccion-checkRadio-input-tarjetas-PremiunView" id="cboxDoc" value="first_checkbox"> Docente</h3>
            <h3 class="seccion-checkRadio-sectionTexto-tarjetas-PremiunView"><input type="radio" class="seccion-checkRadio-input-tarjetas-PremiunView" id="cboxEst" value="first_checkbox"> Estudiante</h3>
        </div>
        <div class="col-md-12 noPad">
            <h1 class="section-titulo2-cabecera-font-PremiunView">¡Selecciona tu plan!</h1>
            <h2 class="section-SubTitulo-cabecera-PremiunView">Herramienta a la medida para profesionales de Colombia</h2>
        </div>
    </div>  
    <!-- final del codigo de la SECCION CABECERA TARJETAS DE PAGO jfk -->

    <div class ="row col-md-12 content-principal-tarjeta-planInicial-PremiunView">

        <div class="col-md-5 content-tarjeta-planInicial-PremiunView">  
            <H4 class="tarjeta-planInicial-titulo-PremiunView">Plan inicial</H4>
            <H2 class="tarjeta-planInicial-valor-PremiunView">$ 0</H2>
            <H5 class="tarjeta-planInicial-subTitulo-sinCosto-PremiunView">Sin ningun costo</H5>
            <button type="button" class="boton-seleccionar-PlanIncial-PremiunView" id="btnPagarPremium1" data-toggle="modal" data-target="#modalPagoEspera" onclick="window.location.href= '{{ url('miCuenta') }}'" >SELECCIONAR</button>
            <div class="row col-md-12 content-planInicial-imgOption-PremiunView">
                <div class="col-1 col-md-1 content-planInicial-section-img-PremiunView">
                    <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">
                </div>
                <div class="col-11 col-md-11 section-option-planTarjeta-PremiunView">
                    <H6 class="option-planInicial-titulo-textoInfo-PremiunView">Perfil con información básica</H6>
                </div>
            </div>
            <p class="option-planInicial-textoInfo-PremiunView">Muestre información importante como: Teléfono de contacto, 
                Profesión, Universidad y una fotografía
            </p>     
        </div>

        <div class="col-md-5 margen-entre-tarjetas-PremiunView center content-tarjeta-membresia-PremiunView">
            <H4 class="tarjeta-membresia-titulo-PremiunView">Membresía</H4>
            <h6 class="tarjeta-membresia-texto-inferior-titulo-PremiunView" id="valorTipoMenbresia">Profesional</h6>   
            <H2 class="tarjeta-membresia-valor-PremiunView" id="valorMenbresia">$ 1.190.000</H2>
            <H5 class="tarjeta-membresia-subTitulo-planAnual-PremiunVew" id="valorTipoPlan">Plan Anual</H5>
            <button type="button" class="btn-membresia-PremiunView" id="btnPagarPremium2" data-toggle="modal" data-target="#modalPagoEspera">PAGAR AQUÍ</button>         
            
            <div id="Profesional" class="content-membresia-imgOption-PremiunView">
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunView">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">  <!--estilos de Clase (contImgOpcionPremiunHome) esta compartida con la vista PremiunHome en PremiunHome.scss -->
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">  
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">  <!--estilos de Clase (contPerfilPremiunHome) esta compartida con la vista PremiunHome en PremiunHome.scss -->
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#1" aria-expanded="false" aria-controls="politicas">  <!--estilos de Clase (propiedadesBtnCollapseMemHome) esta compartida con la vista PremiunHome en PremiunHome.scss -->
                            <H6 class="options-botonCollapse-texto-PremiumView">Landing Page Profesional<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunView" id="1">
                        <p class="option-membresia-textoInfo-PremiunView">Muestre en un solo lugar profesional toda la información
                            importante como: Formación académica, Servicios,
                            Opciones de contacto, Horario de atención, fotografías,
                            Instituciones y Universidades, Certificados y
                            publicaciones.
                        </p>
                    </div>    
                </div>
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunView">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#2" aria-expanded="false" aria-controls="politicas">
                            <H6 class="options-botonCollapse-texto-PremiumView">Agenda Online<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunView" id="2">
                        <p class="option-membresia-textoInfo-PremiunView">Gestione con facilidad su día a día, agenda y visita de usuarios, 
                            conectando su calendario con nuestra plataforma, así podrá ver todo en el mismo lugar y sin confusiones.
                        </p>
                    </div>    
                </div>
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunView">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#3" aria-expanded="false" aria-controls="politicas">
                            <H6 class="options-botonCollapse-texto-PremiumView">Calificación y opiniones<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>  
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunView" id="3">
                        <p class="option-membresia-textoInfo-PremiunView">Mejore su posicionamiento: en Zaabra Profesional los usuarios pueden calificar su servicio, 
                            colocando estrellas y comentarios en su perfil, entre mejor puntuación su perfil será más visible.
                        </p>
                    </div>    
                </div>
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunView">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#4" aria-expanded="false" aria-controls="politicas">
                            <H6 class="options-botonCollapse-texto-PremiumView">Registro constante de usuarios <i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>  
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunView" id="4">
                        <p class="option-membresia-textoInfo-PremiunView">Al ser una plataforma a disposición del usuario las 24 horas del día, 
                            este puede agendar citas con usted a cualquier hora sin molestarlo, evitando que pierda contactos.
                        </p>
                    </div>    
                </div>
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunView">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#5" aria-expanded="false" aria-controls="politicas">
                            <H6 class="options-botonCollapse-texto-PremiumView">Comunicación constante<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunView" id="5">
                        <p class="option-membresia-textoInfo-PremiunView">A través de Zaabra Profesional pueden conectar sus redes sociales profesionales 
                            ya sea para mostrar un portafolio o conectarse constantemente.
                        </p>
                    </div>    
                </div>
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunView">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#6" aria-expanded="false" aria-controls="politicas">
                            <H6 class="options-botonCollapse-texto-PremiumView">Análisis y métricas de la Landing Page<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunView" id="6">
                        <p class="option-membresia-textoInfo-PremiunView">Con Zaabra Profesional tiene la posibilidad de pedir cuantas veces desee las métricas y mediciones de su perfil, 
                            donde podrá observar la cantidad de usuarios, clics y citas que obtuvo su perfil en un periodo de tiempo determinado.
                        </p>
                    </div>    
                </div>
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunView">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#7" aria-expanded="false" aria-controls="politicas">
                            <H6 class="options-botonCollapse-texto-PremiumView">Asesoramiento personalizado de la Landing Page<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunView" id="7">
                        <p class="option-membresia-textoInfo-PremiunView">En Zaabra Profesional trabajamos para usted, por eso le brindamos un asesor para que este pendiente de su perfil, 
                            estando a disposición de lo que necesite.
                        </p>
                    </div>    
                </div>
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunView">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#8" aria-expanded="false" aria-controls="politicas">
                            <H6 class="options-botonCollapse-texto-PremiumView">Asesoramiento de Marketing y publicidad<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunView" id="8">
                        <p class="option-membresia-textoInfo-PremiunView">En Zaabra profesional contamos con un equipo altamente calificado en Marketing y publicidad,
                            quien te acompañara a sacar el máximo provecho de nuestros espacios y campañas publicitarias.
                        </p>
                    </div>    
                </div>
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunView">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#9" aria-expanded="false" aria-controls="politicas">
                            <H6 class="options-botonCollapse-texto-PremiumView">Publicidad sin límite<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunView" id="9">
                        <p class="option-membresia-textoInfo-PremiunView">Por ser parte de Zaabra Profesional tienes acceso total a nuestros espacios y campañas publicitarias.
                        </p>
                    </div>    
                </div>
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunView">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#10" aria-expanded="false" aria-controls="politicas">
                            <H6 class="options-botonCollapse-texto-PremiumView">Posicionamiento web<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunView" id="10">
                        <p class="option-membresia-textoInfo-PremiunView">Estamos enfocados a que usted sea reconocido, por esto buscamos la forma de posicionar su perfil de manera orgánica, 
                            para que aparezca en las primeras posiciones, cuando lo busquen Por su nombre, especialidad o profesión.
                        </p>
                    </div>    
                </div>
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunView padInferiorOpcionAsesoramientoMemHome">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">
                    </div>
                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#11" aria-expanded="false" aria-controls="politicas">
                            <H6 class="options-botonCollapse-texto-PremiumView">Cambios y Reformas<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunView" id="11">
                        <p class="option-membresia-textoInfo-PremiunView">
                        Cuentas con cinco cambios mensuales si en algún momento deseas modificar o agregar información de tu landing page, 
                        solo nos dices y nosotros lo hacemos por ti.
                        </p>
                    </div>
                </div>    
            </div >

            <div id="Tecnolgo" class="content-membresia-imgOption-PremiunView">
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunView">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#12" aria-expanded="false" aria-controls="politicas">
                            <H6 class="options-botonCollapse-texto-PremiumView">Landing Page Profesional<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6> 
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunView" id="12">
                        <p class="option-membresia-textoInfo-PremiunView">Muestre en un solo lugar profesional toda la información
                            importante como: Formación académica, Servicios,
                            Opciones de contacto, Horario de atención, fotografías,
                            Instituciones y Universidades, Certificados y
                            publicaciones.
                        </p>
                    </div>    
                </div>
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunView">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#13" aria-expanded="false" aria-controls="politicas">
                            <H6 class="options-botonCollapse-texto-PremiumView">Agenda Online<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunView" id="13">
                        <p class="option-membresia-textoInfo-PremiunView">
                            Gestione con facilidad su día a día, agenda y visita de usuarios, 
                            conectando su calendario con nuestra plataforma, así podrá ver todo en el mismo lugar y sin confusiones.
                        </p>
                    </div>    
                </div>
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunView">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#14" aria-expanded="false" aria-controls="politicas">
                            <H6 class="options-botonCollapse-texto-PremiumView">Calificación y opiniones<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>                       
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunView" id="14">
                        <p class="option-membresia-textoInfo-PremiunView">Mejore su posicionamiento: en Zaabra Profesional los usuarios pueden calificar su servicio, 
                            colocando estrellas y comentarios en su perfil, entre mejor puntuación su perfil será más visible.
                        </p>
                    </div>    
                </div>
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunView">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#15" aria-expanded="false" aria-controls="politicas">
                            <H6 class="options-botonCollapse-texto-PremiumView">Registro constante de usuarios<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>                    
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunView" id="15">
                        <p class="option-membresia-textoInfo-PremiunView">
                            Al ser una plataforma a disposición del usuario las 24 horas del día, 
                            este puede agendar citas con usted a cualquier hora sin molestarlo, evitando que pierda contactos.
                        </p>
                    </div>    
                </div>
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunView">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#16" aria-expanded="false" aria-controls="politicas">
                            <H6 class="options-botonCollapse-texto-PremiumView">Comunicación constante<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>                       
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunView" id="16">
                        <p class="option-membresia-textoInfo-PremiunView">
                            A través de Zaabra Profesional pueden conectar sus redes sociales profesionales ya sea para mostrar un portafolio o conectarse constantemente.
                        </p>
                    </div>    
                </div>
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunView">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#17" aria-expanded="false" aria-controls="politicas">
                            <H6 class="options-botonCollapse-texto-PremiumView">Análisis y métricas de la Landing Page<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>                     
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunView" id="17">
                        <p class="option-membresia-textoInfo-PremiunView">Con Zaabra Profesional tiene la posibilidad de pedir cuantas veces desee las métricas
                            y mediciones de su perfil, donde podrá observar la cantidad de usuarios, 
                            clics y citas que obtuvo su perfil en un periodo de tiempo determinado.
                        </p>
                    </div>    
                </div>
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunView">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#18" aria-expanded="false" aria-controls="politicas">
                            <H6 class="options-botonCollapse-texto-PremiumView">Asesoramiento personalizado de la Landing Page Profesional<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunView" id="18">
                        <p class="option-membresia-textoInfo-PremiunView">
                            En Zaabra Profesional trabajamos para usted, 
                            por eso le brindamos un asesor para que este pendiente de su perfil, 
                            estando a disposición de lo que necesite.
                        </p>
                    </div>    
                </div>
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunView">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#19" aria-expanded="false" aria-controls="politicas">
                            <H6 class="options-botonCollapse-texto-PremiumView">Asesoramiento de Marketing y publicidad<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>  
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunView" id="19">
                        <p class="option-membresia-textoInfo-PremiunView">
                            En Zaabra profesional contamos con un equipo altamente calificado en Marketing y publicidad,
                            quien te acompañara a sacar el máximo provecho de nuestros espacios y campañas publicitarias.
                        </p>
                    </div>    
                </div>
            </div>      

            <div id="Docente" class="content-membresia-imgOption-PremiunView">
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunView">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#20" aria-expanded="false" aria-controls="politicas">
                            <H6 class="options-botonCollapse-texto-PremiumView">Landing Page Profesional<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunView" id="20">
                        <p class="option-membresia-textoInfo-PremiunView">Muestre en un solo lugar profesional toda la información
                            importante como: Formación académica, Servicios,
                            Opciones de contacto, Horario de atención, fotografías,
                            Instituciones y Universidades, Certificados y
                            publicaciones.
                        </p>
                    </div>    
                </div>
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunView">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#21" aria-expanded="false" aria-controls="politicas">
                            <H6 class="options-botonCollapse-texto-PremiumView">Agenda Online<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>                       
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunView" id="21">
                        <p class="option-membresia-textoInfo-PremiunView">Gestione con facilidad su día a día, 
                            agenda y visita de usuarios, conectando su calendario con nuestra plataforma, así podrá ver todo en el mismo lugar y sin confusiones.
                        </p>
                    </div>    
                </div>
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunView">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#22" aria-expanded="false" aria-controls="politicas">
                            <H6 class="options-botonCollapse-texto-PremiumView">Calificación y opiniones<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>                       
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunView" id="22">
                        <p class="option-membresia-textoInfo-PremiunView">Calificación y opiniones
                            importante como: Formación académica, Servicios,
                            Opciones de contacto, Horario de atención, fotografías,
                            Instituciones y Universidades, Certificados y
                            publicaciones.
                        </p>
                    </div>    
                </div>
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunView">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#23" aria-expanded="false" aria-controls="politicas">
                            <H6 class="options-botonCollapse-texto-PremiumView">Registro constante de usuarios<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>                       
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunView" id="23">
                        <p class="option-membresia-textoInfo-PremiunView">Al ser una plataforma a disposición del usuario las 24 horas del día, 
                            este puede agendar citas con usted a cualquier hora sin molestarlo, evitando que pierda contactos.
                        </p>
                    </div>    
                </div>
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunView">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#24" aria-expanded="false" aria-controls="politicas">
                            <H6 class="options-botonCollapse-texto-PremiumView">Comunicación constante<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>                      
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunView" id="24">
                        <p class="option-membresia-textoInfo-PremiunView">A través de Zaabra Profesional pueden conectar sus redes sociales profesionales ya sea para mostrar 
                            un portafolio o conectarse constantemente.
                        </p>
                    </div>    
                </div>
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunView">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#25" aria-expanded="false" aria-controls="politicas">
                            <H6 class="options-botonCollapse-texto-PremiumView">Análisis y métricas de la Landing Page<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>                    
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunView" id="25">
                        <p class="option-membresia-textoInfo-PremiunView">Con Zaabra Profesional tiene la posibilidad de pedir cuantas veces desee las métricas y mediciones de su perfil, 
                            donde podrá observar la cantidad de usuarios, clics y citas que obtuvo su perfil en un periodo de tiempo determinado.
                        </p>
                    </div>    
                </div>
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunView">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#26" aria-expanded="false" aria-controls="politicas">
                            <H6 class="options-botonCollapse-texto-PremiumView">Asesoramiento personalizado de la Landing Page<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>                       
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunView" id="26">
                        <p class="option-membresia-textoInfo-PremiunView">En Zaabra Profesional trabajamos para usted, por eso le brindamos un asesor para que este pendiente de su perfil, 
                            estando a disposición de lo que necesite.
                        </p>
                    </div>    
                </div>
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunView">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#27" aria-expanded="false" aria-controls="politicas">
                            <H6 class="options-botonCollapse-texto-PremiumView">Asesoramiento de Marketing y publicidad<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>                       
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunView" id="27">
                        <p class="option-membresia-textoInfo-PremiunView">En Zaabra profesional contamos con un equipo altamente calificado en Marketing y publicidad,
                             quien te acompañara a sacar el máximo provecho de nuestros espacios y campañas publicitarias.
                        </p>
                    </div>    
                </div>
            </div>

            <div id="Estudiante" class="content-membresia-imgOption-PremiunView">
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunView">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#28" aria-expanded="false" aria-controls="politicas">
                            <H6 class="options-botonCollapse-texto-PremiumView">Landing Page Profesional<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunView" id="28">
                        <p class="option-membresia-textoInfo-PremiunView">Muestre en un solo lugar toda la información importante como: Formación académica, 
                            Opciones de contacto, portafolio,
                            Certificados y publicaciones.
                        </p>
                    </div>    
                </div>
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunView">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#29" aria-expanded="false" aria-controls="politicas">
                            <H6 class="options-botonCollapse-texto-PremiumView">Registro constante de usuarios<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunView" id="29">
                        <p class="option-membresia-textoInfo-PremiunView">Al ser una plataforma a disposición del usuario las 24 horas del día, 
                            las corporaciones puede ver su perfil a cualquier hora sin molestarlo, evitando que pierda oportunidades de contacto.
                        </p>
                    </div>    
                </div>
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunView">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#30" aria-expanded="false" aria-controls="politicas">
                            <H6 class="options-botonCollapse-texto-PremiumView">Comunicación constante<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunView" id="30">
                        <p class="option-membresia-textoInfo-PremiunView">A través de Zaabra Profesional pueden conectar sus redes sociales profesionales ya sea para mostrar un portafolio o conectarse constantemente.
                        </p>
                    </div>    
                </div>
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunView">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#31" aria-expanded="false" aria-controls="politicas">
                            <H6 class="options-botonCollapse-texto-PremiumView">Asesoramiento personalizado de la Landing Page<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>                       
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunView" id="31">
                        <p class="option-membresia-textoInfo-PremiunView">En Zaabra Profesional trabajamos para usted, 
                            por eso le brindamos un asesor para que este pendiente de su perfil, estando a disposición de lo que necesite.
                        </p>
                    </div>    
                </div>
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunView">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="element-img-icon-PremiunView">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#32" aria-expanded="false" aria-controls="politicas">
                            <H6 class="options-botonCollapse-texto-PremiumView">Asesoramiento de Marketing y publicidad<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>                       
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunView" id="32">
                        <p class="option-membresia-textoInfo-PremiunView">En Zaabra profesional contamos con un equipo altamente calificado en Marketing y publicidad, 
                            quien te acompañara a sacar el máximo provecho de nuestros espacios y campañas publicitarias.
                        </p>
                    </div>    
                </div>
            </div>
        </div>
    </div>

    <!-- SECCION FOOTER TARJETAS DE PAGO codigo copiado de la vista premiunHome estilos ubicados en profesionales-PremiunHome.scss jfk -->
    <div class="col-lg-11 dimenciones-footer-tarjetas-premiun-view container-general-footer-PremiunView">
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
                        <h3 class="noPadMar seccion-mediosdPagos-cuenta-texto-PremiunHome">Importadora Andiamo S.A.S</h3>
                        <h3 class="noPadMar seccion-mediosdPagos-cuenta-texto-PremiunHome">NIT 901294385-1</h3>
                    </div>
                </div> 
            
            </div> 
            <div class="col-md-4 content-puntosdPago-imgs-PremiunHome">

                <div class="col-md-12 section-icons-mediosdPago-PremiunHome">
                    <div class="col-md-12 content-puntosdPago-img-PremiunHome">
                        <h3 class="section-puntosdPago-texto-style-PremiunHome">Pagos electrónicos</h3>
                        <img class="section-puntosdPago-img-inferior-style-PremiunHome" src="{{$urlZaabra}}img/tarjetas-de-Pago/logosdepagos2.png"> 
                    </div>

                </div>
            </div> 
        </div>
    </div>
    <!-- Final de la SECCION FOOTER TARJETAS DE PAGO jfk -->

</div>
<div  class="col-12 col-md-9 container-principal-tarjetasdPago-PremiunView tarjetas-premiunView-visible-celular">

    <!-- /////   VERSION CELULAR   ////// -->
    <div class="col-12 margen-respecto-header-PremiunViewCell" >
        <div class="row col-md-12 noPadMar">

            <div class="col-md-12 noPad">
                <h1 class="section-titulo-cabecera-h1Top-PremiunViewCell">Escoge tu perfil</h1>
                <h1 class="section-titulo-cabecera-h1bottom-PremiunViewCell">para ver la membresía</h1>
            </div>

            <div class="col-6 seccion-checkbox-prof-margen-tarjetas-PremiunViewCell">
                <h3 class="seccion-checkRadio-sectionTexto-tarjetas-PremiunViewCell"><input type="radio" class="seccion-checkRadio-sectionTexto-styleInput-tarjetas-PremiunViewCell"  id="cboxProf-cell" value="first_checkbox" checked="true"> Profesional</h3>
            </div>
            <div class="col-6 seccion-checkbox-tecno-margen-tarjetas-PremiunViewCell">
                <h3 class="seccion-checkRadio-sectionTexto-tarjetas-PremiunViewCell"><input type="radio" class="seccion-checkRadio-sectionTexto-styleInput-tarjetas-PremiunViewCell"  id="cboxTec-cell" value="first_checkbox"> Tecnólogo</h3>
            </div>
            <div class="col-6 seccion-checkbox-docent-margen-tarjetas-PremiunViewCell">
                <h3 class="seccion-checkRadio-sectionTexto-tarjetas-PremiunViewCell"><input type="radio" class="seccion-checkRadio-sectionTexto-styleInput-tarjetas-PremiunViewCell"  id="cboxDoc-cell" value="first_checkbox"> Docente</h3>
            </div>
            <div class="col-6 seccion-checkbox-student-margen-tarjetas-PremiunViewCell">
                <h3 class="seccion-checkRadio-sectionTexto-tarjetas-PremiunViewCell"><input type="radio" class="seccion-checkRadio-sectionTexto-styleInput-tarjetas-PremiunViewCell"  id="cboxEst-cell" value="first_checkbox"> Estudiante</h3>
            </div>
            <div class="col-md-12 noPad">
                <h1 class="section-titulo2-cabecera-PremiunViewCell">¡Selecciona tu plan!</h1>
                <h2 class="section-SubTitulo-cabecera-PremiunViewCell">Herramienta a la medida para</h2>
                <h2 class="section-SubTitulo-cabecera-PremiunViewCell">profesionales de Colombia</h2>
            </div>

        </div>
            
        <div class="col-11 col-md-12 content-tarjeta-membresia-PremiunHome">
            <H4 class="tarjeta-membresia-titulo-Premiunview">Membresía</H4>
            <h6 class="tarjeta-membresia-texto-inferior-titulo-PremiunView " id="valorTipoMenbresia-cell">Profesional</h6>   
            <H2 class="tarjeta-membresia-valor-PremiunView" id="valorMenbresia-cell">$ 1.190.000</H2>
            <H5 class="tarjeta-membresia-subTitulo-planAnual-PremiunVew" id="valorTipoPlan-cell">Plan anual</H5>                    		
            @if (auth()->check())
            <button type="button" class="btn btn-membresia-PremiunViewCell" id="btnPagarPremium2-cell" data-toggle="modal" data-target="#modalPagoEsperaCell">Seleccionar</button>
            
            @else
                <a href="{{ url('/login?redirect_to='.url()->current()) }}" class="btn btn-membresia-PremiunViewCell">Seleccionar</a>
            @endif

            
            <div id="Profesional-cell" class="content-membresia-imgOption-PremiunHome">
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#1-cell" aria-expanded="false" aria-controls="politicas">
                        <H6 class="tipografiaPerefilPremiumView">Landing Page Profesional<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="1-cell">
                        <p class="option-membresia-textoInfo-PremiunView">Muestre en un solo lugar profesional toda la información

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
                        <H6 class="tipografiaPerefilPremiumView">Agenda Online<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="2-cell">
                        <p class="option-membresia-textoInfo-PremiunView">Gestione con facilidad su día a día, agenda y visita de usuarios, 
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
                        <H6 class="tipografiaPerefilPremiumView">Calificación y opiniones<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="3-cell">
                        <p class="option-membresia-textoInfo-PremiunView">Mejore su posicionamiento: en Zaabra Profesional los usuarios pueden calificar su servicio, 
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
                        <H6 class="tipografiaPerefilPremiumView">Registro constante de usuarios <i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="4-cell">
                        <p class="option-membresia-textoInfo-PremiunView">Al ser una plataforma a disposición del usuario las 24 horas del día, 
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
                        <H6 class="tipografiaPerefilPremiumView">Comunicación constante<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="5-cell">
                        <p class="option-membresia-textoInfo-PremiunView">A través de Zaabra Profesional pueden conectar sus redes sociales profesionales 
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
                        <H6 class="tipografiaPerefilPremiumView">Análisis y métricas de la Landing Page<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="6-cell">
                        <p class="option-membresia-textoInfo-PremiunView">Con Zaabra Profesional tiene la posibilidad de pedir cuantas veces desee las métricas y mediciones de su perfil, 
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
                        <H6 class="tipografiaPerefilPremiumView">Asesoramiento personalizado de la Landing Page<i class="fas fa-angle-right positionChevronMemHome rotacion margen-top-chevron-option-prof-PremiunHomeCell"></i></H6>
                        
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="7-cell">
                        <p class="option-membresia-textoInfo-PremiunView">En Zaabra Profesional trabajamos para usted, por eso le brindamos un asesor para que este pendiente de su perfil, 
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
                        <H6 class="tipografiaPerefilPremiumView">Asesoramiento de Marketing y publicidad<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="8-cell">
                        <p class="option-membresia-textoInfo-PremiunView">En Zaabra profesional contamos con un equipo altamente calificado en Marketing y publicidad,
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
                        <H6 class="tipografiaPerefilPremiumView">Publicidad sin límite<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="9-cell">
                        <p class="option-membresia-textoInfo-PremiunView">Por ser parte de Zaabra Profesional tienes acceso total a nuestros espacios y campañas publicitarias.
                        </p>
                    </div>    
                </div>
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#10-cell" aria-expanded="false" aria-controls="politicas">
                        <H6 class="tipografiaPerefilPremiumView">Posicionamiento web<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="10-cell">
                        <p class="option-membresia-textoInfo-PremiunView">Estamos enfocados a que usted sea reconocido, por esto buscamos la forma de posicionar su perfil de manera orgánica, 
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
                            <H6 class="tipografiaPerefilPremiumView">Cambios y Reformas<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        </button>

                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="11-cell">
                        <p class="option-membresia-textoInfo-PremiunView">
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
                        <H6 class="tipografiaPerefilPremiumView">Landing Page Profesional<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="12-cell">
                        <p class="option-membresia-textoInfo-PremiunView">Muestre en un solo lugar profesional toda la información
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
                        <H6 class="tipografiaPerefilPremiumView">Agenda Online<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="13-cell">
                        <p class="option-membresia-textoInfo-PremiunView">
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
                        <H6 class="tipografiaPerefilPremiumView">Calificación y opiniones<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="14-cell">
                        <p class="option-membresia-textoInfo-PremiunView">Mejore su posicionamiento: en Zaabra Profesional los usuarios pueden calificar su servicio, 
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
                        <H6 class="tipografiaPerefilPremiumView">Registro constante de usuarios<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="15-cell">
                        <p class="option-membresia-textoInfo-PremiunView">
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
                        <H6 class="tipografiaPerefilPremiumView">Comunicación constante<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="16-cell">
                        <p class="option-membresia-textoInfo-PremiunView">
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
                        <H6 class="tipografiaPerefilPremiumView">Análisis y métricas de la Landing Page<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="17-cell">
                        <p class="option-membresia-textoInfo-PremiunView">Con Zaabra Profesional tiene la posibilidad de pedir cuantas veces desee las métricas
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
                        <H6 class="tipografiaPerefilPremiumView">Asesoramiento personalizado de la Landing Page Profesional<i class="fas fa-angle-right positionChevronMemHome rotacion margen-top-chevron-option-tecn-PremiunHomeCell"></i></H6>
                        
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="18-cell">
                        <p class="option-membresia-textoInfo-PremiunView">
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
                        <H6 class="tipografiaPerefilPremiumView">Asesoramiento de Marketing y publicidad<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="19-cell">
                        <p class="option-membresia-textoInfo-PremiunView">
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
                        <H6 class="tipografiaPerefilPremiumView">Landing Page Profesional<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="20-cell">
                        <p class="option-membresia-textoInfo-PremiunView">Muestre en un solo lugar profesional toda la información
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
                        <H6 class="tipografiaPerefilPremiumView">Agenda Online<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="21-cell">
                        <p class="option-membresia-textoInfo-PremiunView">Gestione con facilidad su día a día, 
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
                        <H6 class="tipografiaPerefilPremiumView">Calificación y opiniones<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="22-cell">
                        <p class="option-membresia-textoInfo-PremiunView">Calificación y opiniones
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
                        <H6 class="tipografiaPerefilPremiumView">Registro constante de usuarios<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="23-cell">
                        <p class="option-membresia-textoInfo-PremiunView">Al ser una plataforma a disposición del usuario las 24 horas del día, 
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
                        <H6 class="tipografiaPerefilPremiumView">Comunicación constante<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="24-cell">
                        <p class="option-membresia-textoInfo-PremiunView">A través de Zaabra Profesional pueden conectar sus redes sociales profesionales ya sea para mostrar 
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
                        <H6 class="tipografiaPerefilPremiumView">Análisis y métricas de la Landing Page<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="25-cell">
                        <p class="option-membresia-textoInfo-PremiunView">Con Zaabra Profesional tiene la posibilidad de pedir cuantas veces desee las métricas y mediciones de su perfil, 
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
                        <H6 class="tipografiaPerefilPremiumView">Asesoramiento personalizado de la Landing Page<i class="fas fa-angle-right positionChevronMemHome rotacion margen-top-chevron-option-docent-PremiunHomeCell"></i></H6>
                        
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="26-cell">
                        <p class="option-membresia-textoInfo-PremiunView">En Zaabra Profesional trabajamos para usted, por eso le brindamos un asesor para que este pendiente de su perfil, 
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
                        <H6 class="tipografiaPerefilPremiumView">Asesoramiento de Marketing y publicidad<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="27-cell">
                        <p class="option-membresia-textoInfo-PremiunView">En Zaabra profesional contamos con un equipo altamente calificado en Marketing y publicidad,
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
                        <H6 class="tipografiaPerefilPremiumView">Landing Page Profesional<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="28-cell">
                        <p class="option-membresia-textoInfo-PremiunView">Muestre en un solo lugar toda la información importante como: Formación académica, 
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
                        <H6 class="tipografiaPerefilPremiumView">Registro constante de usuarios<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="29-cell">
                        <p class="option-membresia-textoInfo-PremiunView">Al ser una plataforma a disposición del usuario las 24 horas del día, 
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
                        <H6 class="tipografiaPerefilPremiumView">Comunicación constante<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="30-cell">
                        <p class="option-membresia-textoInfo-PremiunView">A través de Zaabra Profesional pueden conectar sus redes sociales profesionales ya sea para mostrar un portafolio o conectarse constantemente.
                        </p>
                    </div>    
                </div>
                <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                    <div class="col-1 col-md-1 contImgOpcionPremiunHome">
                        <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                    </div>

                    <div class="col-11 col-md-11 contPerfilPremiunHome">
                        <button class="propiedadesBtnCollapseMemHome rotacionBtn" type="button" data-toggle="collapse" data-target="#31-cell" aria-expanded="false" aria-controls="politicas">
                        <H6 class="tipografiaPerefilPremiumView">Asesoramiento personalizado de la Landing Page<i class="fas fa-angle-right positionChevronMemHome rotacion margen-top-chevron-option-student-PremiunHomeCell"></i></H6>
                        
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="31-cell">
                        <p class="option-membresia-textoInfo-PremiunView">En Zaabra Profesional trabajamos para usted, 
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
                        <H6 class="tipografiaPerefilPremiumView">Asesoramiento de Marketing y publicidad<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                        
                        </button>
                    </div>
                    <div class="collapse col-12 option-membresia-content-textoInfo-PremiunHome" id="32-cell">
                        <p class="option-membresia-textoInfo-PremiunView">En Zaabra profesional contamos con un equipo altamente calificado en Marketing y publicidad, 
                            quien te acompañara a sacar el máximo provecho de nuestros espacios y campañas publicitarias.
                        </p>
                    </div>    
                </div>
            </div>

        </div>
            
        <div class="col-11 col-md-12 content-tarjeta-planInicial-PremiunHome">
            <H4 class="tarjeta-planInicial-titulo-PremiunView">Plan inicial</H4>
            <H2 class="tarjeta-planInicial-valor-PremiunView">$ 0</H2>
            <H5 class="tarjeta-planInicial-subTitulo-sinCosto-PremiunView">Sin ningun costo</H5>
            <button type="button" class="boton-seleccionar-PlanIncial-PremiunView" id="btnPagarPremium1-cell" data-toggle="modal" data-target="#modalPagoEsperaCell" onclick="window.location.href= '{{ route('miCuenta') }}'">Seleccionar</button>
            <div class="row col-md-12 section-optionsPerfil-users-membresia-PremiunHome">
                <div class="col-1 col-md-1 col-lg-1 contImgOpcionPremiunHome">
                    <img src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.png" class="iconPremMemHome">
                </div>
                <div class="col-11 col-md-11 col-lg-11 contPerfilPremiunHome">    
                        <H6 class="option-planInicial-titulo-textoInfo-PremiunView">Perfil con información básica</H6>
                </div>
                <div class="col-md-12 option-membresia-content-textoInfo-PremiunHome">
                    <p class="option-membresia-textoInfo-PremiunView">Muestre información importante como: Teléfono de contacto, 
                        Profesión, Universidad y una fotografía
                    </p>
                </div>   
            </div>
            
        </div>

        <!-- SECCION MEDIOS DE PAGO PREMIUN VIEW codigo copiado de la vista premiunHome estilos ubicados en el scss de la vista Premiun Home -->
        <div class="col-12 col-md-12 container-principal-footer-PremiunHome">  
            <div class="row col-12 noPadMar content-mediosdPagos-style-PremiunHome">

                <div class="col-6 noPad">
                    <div class="col-12 noPad">
                        <h1 class="seccion-mediosdPagos-titulo-PremiunView">MEDIOS DE PAGO</h1>
                        <h2 class="seccion-mediosdPagos-subTitulo-PremiunView">Transferencia bancaría</h2>
                    </div>
                    <div class="col-12 noPad seccion-mediosdPagos-content-imgCelulares-PremiunHome">
                        <img class="seccion-mediosdPagos-content-imgCelulares-style-PremiunHome" src="img/pagoPremiun/tranferenciaBancaria.png"> 
                    </div>
                </div> 
                
                <div class="col-6 content-mediosdPagos-bancosCuentas-PremiunView">
                    <div class="col-12 noPad mb-2">
                        <h2 class="seccion-mediosdPagos-subTitulo-bancos-PremiunView">BBVA</h2>
                        <h3 class="seccion-mediosdPagos-cuenta-texto-PremiunView">Cuenta corriente<br>00130724000100022264</h3>
                    </div>
                    <div class="col-12 noPad mb-2">
                        <h2 class="seccion-mediosdPagos-subTitulo-bancos-PremiunView">BANCOLOMBIA</h2>
                        <h3 class="seccion-mediosdPagos-cuenta-texto-PremiunView">Ahorros<br>30000028513</h3>
                    </div>
                    
                </div> 
                <div class="col-12 seccion-mediosdPagos-cuenta-nameNit-PremiunHome">
                    <h3 class="noPadMar seccion-mediosdPagos-cuenta-nameNit-texto-PremiunView">Importadora Andiamo S.A.S</h3>
                    <h3 class="noPadMar seccion-mediosdPagos-cuenta-nameNit-texto-PremiunView">NIT 901294385-1</h3>
                </div>
            
            </div> 

            <div class="col-12 content-puntosdPago-imgs-PremiunHome">
                <div class="col-md-12 section-icons-mediosdPago-PremiunHome">
                    <div class="col-md-12 content-puntosdPago-img-PremiunHome">
                        <h3 class="section-puntosdPago-texto-style-PremiunView">Pagos electrónicos</h3>
                        <img class="section-puntosdPago-img-inferior-style-PremiunView" src="{{$urlZaabra}}img/tarjetas-de-Pago/logosdepagos2.png"> 
                    </div>
                </div>
            </div> 

        </div>
        <!-- Final de la SECCION MEDIOS DE PAGO PREMIUN VIEW-->
        
    </div>  

</div>

<div class="formularioPagoPremiun">         
</div>


 

@endsection 
