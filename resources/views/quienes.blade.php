@extends('layouts.index')
 
@section('contenido')
<div class="container-fluid noPad margin-top-quienes ">
            <div class="col-md-12 noPad" id="quienes">
                <div class="col-md-12 bannerQuienes row noPad negarMargin animate__animated animate__bounceInLeft">
                        <div class="col-9 col-md-9 quienes">
                             <h1 class="letraQuienes">¿Quiénes Somos?</h1>
                        </div>
                        <div class="col-3 col-md-3 botonesQuienes">
                            <ul class="text-webkit-center">
                                <li><a id="li_quienes" class="botonActivoQuienes"></a></li>
                                <li><a id="li_preguntas"></a></li>
                                <li><a id="li_cookies"></a></li>
                                <li><a id="li_politicas"></a></li>
                            </ul>       
                        </div>
                </div>
           
                <div class="container margin-top-2 animatedParent" data-sequence = '500'>
                        <div class="col-md-12 animated bounceInLeft" data-id = '1'>
                            <p class="parrafoQuienes">
                                Somos una plataforma colombiana dedicada al comercio electrónico, con más de 10 años de experiencia en el sector; 
                                contamos con equipo profesional en cada área de la organización para brindar una atención excelente al cliente y ofrecer producto de calidad al mejor precio.
                            </p>
                        </div>
                        <div class="col-12 row animated bounceInLeft" data-id = '2'>
                            <div class="col-md-6 ">
                                <div class="col-md-12 tituloQuienes noPad">
                                        <h2 class="noPad">Misión</h2>
                                </div>
                                <div class="col-md-12 noPad">
                                        <p class="noPad parrafoQuienes">Nuestra misión es fortalecer la economía Nacional a través de las buenas prácticas de comercialización de productos propios y de nuestros asociados corporativos, con el tiempo lograr una economía sostenible.
                                        </p>
                                </div>
                                <div class="col-md-12 tituloQuienes noPad">
                                        <h2 class="noPad">Valores corporativos</h2>
                                </div>
                                <div class="col-md-12 noPad contenidoQuientes">
                                    <ul class="parrafoQuienes">
                                        <li>Servicio</li>
                                        <li>Calidad</li>
                                        <li>Responsabilidad</li>
                                        <li>Honestidad</li>
                                        <li>Respeto</li>
                                        <li>Compromiso social</li>
                                        <li>Calidad Humana</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 noPad ">
                                    <div class="col-md-12 tituloQuienes">
                                            <h2 class="noPad">Visión</h2>
                                    </div>
                                    <div class="col-md-12">
                                            <p class="noPad parrafoQuienes">
                                                En Zaabra nos proyectarnos para que en el futuro con alianzas estratégicas junto a nuestros asociados corporativos lleguemos con gran variedad de productos a todos los rincones de Colombia y el Mundo.
                                            </p>
                                    </div>
                                    <div class="col-md-12 tituloQuienes">
                                            <h2 class="noPad">¿Qué es Zaabra Profesional?</h2>
                                    </div>
                                    <div class="col-md-12">
                                            <p class="noPad parrafoQuienes">
                                                Es una plataforma digital que busca que los profesionales de Colombia logren un reconocimiento y atracción mayor online, 
                                                los profesionales deben ser reconocidos en todo el territorio colombiano. En Zaabra sabemos la importancia que tienen
                                                todas las profesiones. Cada profesional tendrá su landing page, en la cual vamos a encontrar todos los servicios que ofrecen, 
                                                dividido en un menú de 6 áreas, Área de la salud, Ingenierías, Tecnólogos, Docentes, Estudiantes y área Económico-Administrativas. 
                                                Esta página está direccionada desde la página principal de Zaabra www.zaabra.com.co,
                                                desde allí se podrán dirigir a la plataforma Zaabra Profesional (servicios profesionales). 
                                            </p>
                                    </div>
                            </div>        
                        </div>
                        
                            <div class="col-md-12 text-right">
                                <button class="boton-ver-siguiente-quienes" id="btn-preguntas"><i class="fas fa-arrow-right arrow-derecha"></i></button>
                            </div>
                </div>
            </div>


            <div class="col-md-12" id="preguntas" name="preguntas">

                <div class="row bannerPreguntas animate__animated animate__bounceInLeft">
                        <div class="col-9 col-md-9 container preguntas">
                            <h1 class="letraPreguntas">Preguntas<br>Frecuentes</h1>
                        </div>
                        <div class="col-3 col-md-3 botonesQuienes text-webkit-center">
                            <ul>
                                <li><a id="li_quienes"></a></li>
                                <li><a id="li_preguntas"  class="botonActivoQuienes"></a></li>
                                <li><a id="li_cookies"></a></li>
                                <li><a id="li_politicas"></a></li>
                            </ul>       
                        </div>
                </div>

                <div class="container margin-top-2">
                        <div class="row noPad  contImgOpciones border-azul  backgraund-gris"> 
                            <div class=" col-md-11 contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn backgraund-gris" type="button" data-toggle="collapse" data-target="#quees" aria-expanded="false" aria-controls="politicas">
                                    <H6 class="titulodrowp-quienes backgraund-gris">¿Qué es ZAABRA PROFESIONAL?<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                                </button>
                            </div>
                            <div class="collapse col-md-12 noPad contenedor-collapse-quienes" id="quees">
                                <p class="parrafoQuienes">  
                                Es una plataforma digital en la cual están registrados estudiantes, docentes, tecnólogos, Ingenieros, área de la salud y área económico administrativa, 
                                dentro de esta plataforma encontramos una landing page con la información de cada profesional y especifica que servicio presta. 
                                </p>
                            </div>
                        </div>

                    <div class="row noPad  contImgOpciones border-azul  backgraund-gris">
                            <div class=" col-md-11  contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn backgraund-gris" type="button" data-toggle="collapse" data-target="#datos" aria-expanded="false" aria-controls="politicas">
                                    <H6 class="titulodrowp-quienes backgraund-gris">¿ZAABRA PROFESIONAL garantiza la privacidad de mis datos personales?<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                                </button>
                            </div>
                            <div class="collapse col-md-12 noPad contenedor-collapse-quienes" id="datos">
                                <p class="parrafoQuienes">  
                                Si, la información recogida a través de la plataforma tiene un tratamiento confidencial, de acuerdo a la ley 1581 de 2012 y el decreto 1377 de 2013,
                                por tal motivo ZAABRA PROFESIONAL se hace responsable de los datos proporcionados tanto de usuario como profesional.
                                </p>
                            </div>
                    </div>

                    <div class="row noPad  contImgOpciones border-azul  backgraund-gris">
                            <div class="col-md-11  contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn backgraund-gris" type="button" data-toggle="collapse" data-target="#cita" aria-expanded="false" aria-controls="politicas">
                                    <H6 class="titulodrowp-quienes backgraund-gris">¿Cómo puedo agendar una cita?<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                                </button>
                            </div>
                            <div class="collapse col-md-12 noPad contenedor-collapse-quienes" id="cita">
                                <p class="parrafoQuienes">  
                                En ZAABRA PROFESIONAL puede solicitar la cita de acuerdo a la disponibilidad de cada profesional, 
                                revisando anteriormente el perfil de cada uno y la experiencia que posee, 
                                de esta manera agendar con el profesional acertado.
                                </p>
                            </div>
                    </div>


                    <div class="row noPad  contImgOpciones border-azul  backgraund-gris">
                            <div class=" col-md-11  contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn backgraund-gris" type="button" data-toggle="collapse" data-target="#veinticuatro" aria-expanded="false" aria-controls="politicas">
                                    <H6 class="titulodrowp-quienes backgraund-gris">¿Se puede acceder las 24 horas del día a la plataforma?<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                                </button>
                            </div>
                            <div class="collapse col-md-12 noPad contenedor-collapse-quienes" id="veinticuatro">
                                <p class="parrafoQuienes">  
                                Si, la plataforma digital www.profesional.zaabra.com.co está activa las 24 horas del día los 7 días de la semana, 
                                estará disponible para revisar información de profesionales.
                                </p>
                            </div>
                    </div>


                    <div class="row noPad  contImgOpciones border-azul  backgraund-gris">
                            <div class="col-md-11  contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn backgraund-gris" type="button" data-toggle="collapse" data-target="#servicio" aria-expanded="false" aria-controls="politicas">
                                    <H6 class="titulodrowp-quienes backgraund-gris">¿ZAABRA PROFESIONAL presta su servicio fuera de Colombia?<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                                </button>
                            </div>
                            <div class="collapse col-md-12 noPad contenedor-collapse-quienes" id="servicio">
                                <p class="parrafoQuienes">  
                                Si, siempre y cuando el usuario agende consulta y/o cita con los profesionales de manera virtual, 
                                dentro del territorio Colombiano si podrá el usuario acceder a una cita de manera presencial..
                                </p>
                            </div>
                    </div>

                    <div class="row noPad  contImgOpciones border-azul  backgraund-gris">
                            <div class="col-md-11  contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn backgraund-gris" type="button" data-toggle="collapse" data-target="#pago" aria-expanded="false" aria-controls="politicas">
                                    <H6 class="titulodrowp-quienes backgraund-gris">¿Qué métodos de pago tiene disponible la plataforma ZAABRA PROFESIONAL?<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                                </button>
                            </div>
                            <div class="collapse col-md-12 noPad contenedor-collapse-quienes" id="pago">
                                <p class="parrafoQuienes">  
                                Pago directamente en la plataforma, mediante la pasarela de pagos PayU, este pago es confirmado inmediatamente el usuario lo realice.
                                </p>
                            </div>
                    </div>

                    <div class="row noPad  contImgOpciones border-azul  backgraund-gris">
                            <div class="col-md-11  contPerfilPremiunHome">
                                <button class="propiedadesBtnCollapseMemHome rotacionBtn backgraund-gris" type="button" data-toggle="collapse" data-target="#questadicionales" aria-expanded="false" aria-controls="politicas">
                                    <H6 class="titulodrowp-quienes backgraund-gris">¿Si tengo preguntas adicionales de ZAABRA PROFESIONAL a quien me dirijo?<i class="fas fa-angle-right positionChevronMemHome rotacion"></i></H6>
                                </button>
                            </div>
                            <div class="collapse col-md-12 noPad contenedor-collapse-quienes" id="questadicionales">
                                <p class="parrafoQuienes">  
                                    Preguntas a través del correo electrónico serviciosprofesionales@zaabra.com.co o al teléfono 7123945 o al whatsapp 3212449869
                                </p>
                            </div>
                    </div>

                    <div class="col-12 row  margin-top-2 margin-bottom-2">
                        <div class="col-6">
                            <button class="boton-ver-siguiente-quienes" id="btn-atras-quienes"><i class="fas fa-arrow-left arrow-derecha"></i></button>
                        </div>
                        <div class="col-6 text-right">
                            <button class="boton-ver-siguiente-quienes" id="btn-cookies"><i class="fas fa-arrow-right arrow-derecha"></i></button>  
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-md-12" id="cookies" name="cookies">
                            <div class="row bannerPreguntas animate__animated animate__bounceInLeft">
                                <div class="col-9 col-md-9 container preguntas">
                                    <h1 class="letraPreguntas">POLÍTICA<br> DE COOKIES</h1>
                                </div>
                                <div class="col-3 col-md-3 botonesQuienes">
                                    <ul class="text-webkit-center">
                                        <li><a id="li_quienes" ></a></li>
                                        <li><a id="li_preguntas"></a></li>
                                        <li><a id="li_cookies" class="botonActivoQuienes"></a></li>
                                        <li><a id="li_politicas"></a></li>
                                    </ul>       
                                </div>
                            </div>
                            <div class="container margin-top-2"> 

                                    <div class="col-md-12 tituloQuienes animate__animated animate__bounceInLeft">
                                        <h2>¿Qué son las cookies?</h2>
                                    </div>


                                        <div class="col-md-12 animate__animated animate__bounceInLeft">
                                            <p class="parrafoQuienes">
                                                Una cookie es un fichero que se descarga en su ordenador al acceder a determinadas páginas web. Las cookies permiten a una página web, entre otras cosas, almacenar y recuperar información sobre hábitos de navegación de un usuario o de su equipo y, dependiendo de la información que contengan y de la forma que utilice su equipo, pueden utilizarse para reconocer al usuario.
                                            </p>
                                            <p class="parrafoQuienes">
                                                Las cookies se crean en el dispositivo del usuario automáticamente cuando éste accede a la plataforma www.profesional.zaabra.com.co y se registra o inicia sesión, las cookies se obtienen del usuario y la información que éstas contienen pueden ser consultadas por ZAABRA PROFESIONAL y los terceros que se contraten para un servicio en específico, es importante aclarar que las cookies solo son leídas por la plataforma digital que las creó; la información que guardan las cookies en nuestras plataformas digitales están incluidas en la sesión de usuario, dejando cada valor guardado en una cookie de manera encriptada, las cuales se eliminan al cerrar sesión.
                                            </p>
                                            <p class="parrafoQuienes">
                                            Las clases de cookies que se utilizan en nuestra plataforma digital son las siguientes:
                                                <ul>
                                                    <li> Cookies de sesión: permanecen activas durante el tiempo que se tenga la sesión activa del usuario y se elimina una vez se cierre la sesión.
                                                    </li>
                                                    <li> Cookies de terceros: Son instaladas por terceros quienes prestan un servicio específico en la plataforma como encargado, la cual trata los datos a través de cookies.
                                                    </li>
                                                    <li>Cookies de Análisis: Permiten realizar seguimiento al comportamiento de los usuarios en la plataforma digital y estudiar la navegación de los usuarios.
                                                    </li>
                                                </ul>
                                            </p>
                                        </div>
                                    <div class="col-md-12 animatedParent"  data-sequence = '500' id="contenedor-texto-cookies">
                                        <div class="animated bounceInLeft" data-id = '2'>
                                            <p class="parrafoQuienes">
                                                Los usuarios podrán deshabilitar, bloquear y/o eliminar las cookies en cualquier momento, el proceso varía según el navegador que esté en uso. De igual manera puede variar la configuración dependiendo la versión del navegador 
                                                <ul>
                                                    <li><strong>Chrome:</strong>  En el Navegador – 1. Configuración, 2. Configuración avanzada, 3. Privacidad y Seguridad, 4. Configuración del sitio web, 5. Cookies y datos del sitio. Para mayor información, consulte el soporte o ayuda del Navegador.
                                                    </li>
                                                    <li><strong>Safari:</strong>  En el Navegador – 1. Preferencias, 2. Privacidad. Para mayor información, consulte el soporte o ayuda del Navegador.
                                                    </li>
                                                    <li><strong>Internet Explorer:</strong> En el Navegador – 1. Herramientas, 2. Opciones de Internet, 3. Privacidad, 4. Configuración avanzada. Para mayor información, consulte el soporte o ayuda del Navegador.
                                                    </li>
                                                    <li><strong>Microsoft Edge:</strong> En el Navegador – 1. Configuración, 2. Privacidad y seguridad. Para mayor información, consulte el soporte o ayuda del Navegador.
                                                    </li>
                                                    <li><strong>Firefox: </strong>En el Navegador – 1. Opciones, 2. Privacidad & Seguridad, 3. Cookies y datos del sitio. Para mayor información, consulte el soporte o ayuda del Navegador.
                                                    </li>
                                                    <li><strong>Navegador para dispositivos Android:</strong>En el Navegador – 1. Menú, 2. Configuración, 3. Privacidad. Para mayor información, consulte el soporte o ayuda del Navegador.
                                                    </li>
                                                    <li><strong>Navegador para dispositivos IOS:</strong>En el dispositivo – 1. Configuración, 2. Safari, 3. Privacidad y seguridad. Para mayor información, consulte el soporte o ayuda del Navegador
                                                    </li>
                                                </ul>
                                            </p>
                                            <p class="parrafoQuienes">
                                                  IMPORTADORA ANDIAMO SAS, propietaria de la plataforma tendrá la plena libertad y autoridad para modificar, adaptar o cambiar el contenido de esta Política de cookies en cualquier momento. Usted acepta y reconoce las actualizaciones de este documento, por medio de la fecha de elaboración que está visible en la Plataforma.
                                            </p>
                                            <p class="parrafoQuienes">
                                                Si Usted tiene inquietudes adicionales sobre el uso de cookies o cualquier aspecto de esta Política puede escribirnos a serviciosprofesionales@zaabra.com.co 
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-12 row  margin-bottom-2">
                                            <div class="col-6">
                                            <button class="boton-ver-siguiente-quienes" id="btn-atras-preguntas"><i class="fas fa-arrow-left arrow-derecha"></i></button>  
                                            </div>
                                            <div class="col-6 text-right">
                                            <button class="boton-ver-siguiente-quienes" id="btn-politicas"><i class="fas fa-arrow-right arrow-derecha"></i></button>
                                            </div>
                                     </div>       
                            </div>
            </div>
            <div class="col-md-12"  id="politicas">
                            <div class="row bannerPreguntas animate__animated animate__bounceInLeft">
                                <div class="col-9 col-md-9 container preguntas">
                                    <h1 class="letraPreguntas">Politicas<br>
                                        de Privacidad</h1>
                                </div>
                                <div class="col-3 col-md-3 botonesQuienes text-webkit-center">
                                    <ul>
                                        <li><a id="li_quienes"></a></li>
                                        <li><a id="li_preguntas"></a></li>
                                        <li><a id="li_cookies"></a></li>
                                        <li><a id="li_politicas"  class="botonActivoQuienes"></a></li>
                                    </ul>       
                                </div>
                            </div>
                    <div class="container margin-top-2">
                        <div class="row">
                           <div class="col-md-12 animatedParent" data-sequence = '500'>
                                    <div class="animated bounceInLeft" data-id = '7'>
                                        <p class="parrafoQuienes animate__animated animate__bounceInLeft">
                                        Gracias por acceder a la página web www.profesional.zaabra.com.co operada por IMPORTADORA ANDIAMO S.A.S. en adelante “ZAABRA PROFESIONAL“, sociedad Responsable del Tratamiento de sus Datos Personales, identificada con NIT 901.294.385-1, con domicilio principal en la ciudad de Bogotá D. C. y cuyas oficinas se encuentran ubicadas en la Carrera 64 No. 67B-89 Interior Dos.
                                        </p>
                                        <p class="parrafoQuienes animate__animated animate__bounceInLeft">
                                        ZAABRA PROFESIONAL trabaja día por día para junto con su personal humano prestarle un servicio de calidad cuando usted, que es el cliente y nuestra razón de ser, adquiere uno de nuestros servicios, cuidar sus datos personales es parte fundamental de nuestros principios y responsabilidades, por eso, para su seguridad y comodidad estos están resguardados y protegidos por nosotros en ZAABRA PROFESIONAL.
                                        </p>
                                        <p class="parrafoQuienes animate__animated animate__bounceInLeft">
                                        Nuestra política de privacidad le explica de manera fácil y dinámica el tratamiento que hacemos de sus datos personales, a quienes bajo ciertas condiciones, transferimos y/o los transmitimos por razones estrictas de comercio, así como también las medidas de seguridad que ZAABRA PROFESIONAL ha tomado para protegerlos, los derechos que usted tiene como cliente y titular de sus datos personales y como puede ejercerlos en caso de no estar de acuerdo en cómo los hemos tratado.
                                        </p>
                                        <p class="parrafoQuienes">
                                        Lo invitamos a leer detalladamente esta Política de Privacidad y si tiene alguna duda, le pedimos que por favor nos contacte al correo electrónico serviciosprofesionales@zaabra.com.co o al teléfono celular 3212449869, o envíe una comunicación a la Carrera 64 No. 67B-89 Interior Dos, en la ciudad de Bogotá D. C.
                                        </p>
                                        <p class="parrafoQuienes">
                                        Del mismo modo, en caso de que el tratamiento de datos personales se haya de efectuar por empresas proveedoras de servicios para ZAABRA PROFESIONAL, dichas empresas proveedoras deberán asumir compromisos de confidencialidad y adoptar medidas que aseguren el debido cumplimiento de la normativa de protección de Datos Personales, en especial las establecidas en la 1581 de 2012 y su Decreto Reglamentario 1074 de 2015.
                                        </p>
                                        <p class="parrafoQuienes">
                                        En ZAABRA PROFESIONAL tratamos la información que nos facilitan las personas interesadas con el fin de prestarle los servicios de intermediación online entre usuario y los profesionales incluidos en el directorio de la plataforma.
                                        </p>
                                    </div>
                                    <div class="animated bounceInLeft" data-id = '8'>
                                        <p class="parrafoQuienes">
                                        En el caso del directorio, los servicios consisten en el acceso a información sobre los profesionales, servicio de agendamiento de cita online o presencial, pago de la consulta con el profesional dentro de la misma plataforma, por medio de la pasarela de pago PAYU, el valor de la consulta solo dependerá de lo aprobado por el profesional.
                                        </p>
                                        <p class="parrafoQuienes">
                                        En el caso del software de gestión de consulta, los profesionales introducen información de sus propios pacientes. En este caso ZAABRA PROFESIONAL es un proveedor de servicios para los profesionales y encargado del tratamiento de datos. El profesional es el responsable del tratamiento de datos. ZAABRA PROFESIONAL, en cumplimiento de lo estipulado por la normativa de protección de datos, tiene firmado un contrato con el responsable del tratamiento. 
                                        </p>
                                        <p class="parrafoQuienes">
                                        El responsable del tratamiento es el responsable de solicitar a los usuarios el consentimiento para el tratamiento de sus datos personales y de garantizar el correcto cumplimiento de las normativas de privacidad. En ningún caso ZAABRA PROFESIONAL será responsable de la omisión por parte de un profesional o centro de su obligación de cumplimiento de la reglamentación vigente.
                                        </p>
                                        <p class="parrafoQuienes">
                                        Los servicios de ZAABRA PROFESIONAL incluyen el envío de recordatorios de citas a través de SMS o correo electrónico, esto puede realizarse en nombre de ZAABRA PROFESIONAL o del profesional; también se realizan envíos de otras comunicaciones, como campañas promocionales del propio profesional. 
                                        </p>
                                        <p class="parrafoQuienes">
                                        Los datos personales proporcionados se conservarán mientras el usuario permanezca activo en la plataforma y durante los plazos necesarios para dar cumplimiento a las obligaciones legales.
                                        </p>
                                    </div>  
                                    <div class="animated bounceInLeft" data-id = '9'>
                                        <p class="parrafoQuienes">
                                        La base legal para el tratamiento de sus datos es el consentimiento del interesado.
                                        </p>
                                        <p class="parrafoQuienes">
                                        Los datos se comunicarán a los profesionales, encargados de Tratamiento que dan distinto soporte a ZAABRA PROFESIONAL como Legal, alojamiento de datos, gestión de bases de datos y de comunicaciones, así como a los terceros necesarios para dar cumplimiento a las obligaciones legales.
                                        </p>
                                        <p class="parrafoQuienes">
                                        Cualquier persona tiene derecho a obtener información sobre si en ZAABRA PROFESIONAL estamos tratando datos personales que les conciernen, o no.
                                        </p>
                                        <p class="parrafoQuienes">
                                        Las personas interesadas tienen derecho a acceder a sus datos personales, así como a solicitar la rectificación de los datos inexactos o, en su caso, solicitar su supresión cuando, entre otros motivos, los datos ya no sean necesarios para los fines que fueron recogidos.
                                        </p>
                                        <p class="parrafoQuienes">
                                        En determinadas circunstancias, los interesados podrán solicitar la limitación del tratamiento de sus datos, en cuyo caso únicamente los conservaremos para el ejercicio o la defensa de reclamaciones.
                                        </p>
                                    </div> 
                                    <div class="animated bounceInLeft" data-id = '10'>    
                                        <p class="parrafoQuienes">
                                        En determinadas circunstancias y por motivos relacionados con su situación particular, los interesados podrán oponerse al tratamiento de sus datos. En este caso, ZAABRA PROFESIONAL dejará de tratar los datos, salvo por motivos legítimos imperiosos, o el ejercicio o la defensa de posibles reclamaciones.
                                        </p>
                                        <p class="parrafoQuienes">
                                        Podrá ejercer sus derechos de la siguiente forma: dirigiéndose a IMPORTADORA ANDIAMO SAS, con dirección en la ciudad de Bogotá en la Carrera 64 # 67B-89 interior dos, o a través del correo electrónico serviciosprofesionales@zaabra.com.co identificándose debidamente e indicando de forma expresa el concreto derecho que se quiere ejercer.
                                        </p>
                                        <p class="parrafoQuienes">
                                        Si ha otorgado su consentimiento para alguna finalidad concreta, tiene derecho a retirar el consentimiento otorgado en cualquier momento, sin que ello afecte a la licitud del tratamiento basado en el consentimiento previo a su retirada.
                                        </p>
                                        <p class="parrafoQuienes">
                                        Cuando precisemos obtener información por su parte, siempre le solicitaremos que nos la proporcione voluntariamente prestando su consentimiento de forma expresa a través de los medios habilitados para ello.
                                        </p>
                                        <p class="parrafoQuienes">
                                        El tratamiento de los datos recabados a través de los formularios de recogida de datos del sitio web u otras vías, quedará incorporado al Registro de Actividades de Tratamiento del cual es responsable ZAABRA PROFESIONAL
                                        </p>
                                        <p class="parrafoQuienes">
                                        ZAABRA PROFESIONAL trata los datos de forma confidencial y adopta las medidas técnicas y organizativas apropiadas para garantizar el nivel de seguridad adecuado al tratamiento, en cumplimiento de lo requerido por la ley 1581 de 2012, de tratamiento de datos o habeas data.
                                        </p>
                                        <p class="parrafoQuienes">
                                        No obstante, no puede garantizar la absoluta invulnerabilidad de los sistemas, por tanto, no asume ninguna responsabilidad por los daños y perjuicios derivados de alteraciones que terceros puedan causar en los sistemas informáticos, documentos electrónicos o ficheros del usuario.
                                        </p>
                                        <p class="parrafoQuienes">
                                        Si opta por abandonar nuestro sitio web a través de enlaces a sitios web no pertenecientes a nuestra entidad, ZAABRA PROFESIONAL no se hará responsable de las políticas de privacidad de dichos sitios web ni de las cookies que éstos puedan almacenar en el ordenador del usuario.
                                        </p>
                                        <p class="parrafoQuienes">
                                        Nuestra política con respecto al envío de nuestros propios correos electrónicos se centra en remitir únicamente comunicaciones que usted haya solicitado recibir. Si prefiere no recibir estos mensajes por correo electrónico le ofreceremos a través de los mismos la posibilidad de ejercer su derecho de supresión y renuncia a la recepción de estos de conformidad con lo dispuesto en la ley 1581 de 2012, que fue reglamentada por el decreto 1377 de 2013
                                        </p>
                                        <p class="parrafoQuienes">
                                        En ZAABRA PROFESIONAL tratamos la información que nos facilitan las personas interesadas con el fin de prestarle los servicios de intermediación on line entre los profesionales y los usuarios, a través del directorio de la plataforma.
                                        </p>
                                    </div>    
                            </div>
                        </div>
                        <div class="col-12 row  margin-top-2 margin-bottom-2">
                             <div class="col-6">
                                <button class="boton-ver-siguiente-quienes" id="btn-atras-cookies"><i class="fas fa-arrow-left arrow-derecha"></i></button>  
                            </div>
                            <div class="col-6 text-right">
                                <button class="boton-ver-siguiente-quienes" id="btn-terminosCondiciones"><i class="fas fa-arrow-right arrow-derecha"></i></button>
                             </div>
                        </div>

                   </div>

            </div>

            <div class="col-md-12"  id="terminosCondiciones">
                            <div class="row bannerPreguntas animate__animated animate__bounceInLeft">
                                <div class="col-9 col-md-9 container preguntas">
                                    <h1 class="letraPreguntas2">TÉRMINOS Y <br>
                                        CONDICIONES GENERALES<br> DEL SERVICIO</h1>
                                </div>
                                <div class="col-3 col-md-3 botonesQuienes text-webkit-center">
                                    <ul>
                                        <li><a id="li_quienes"></a></li>
                                        <li><a id="li_preguntas"></a></li>
                                        <li><a id="li_cookies"></a></li>
                                        <li><a id="li_politicas"  class="botonActivoQuienes"></a></li>
                                    </ul>       
                                </div>
                            </div>
                    <div class="container margin-top-2">
                        <div class="row">
                                <div class="col-md-12 animatedParent"  data-sequence = '500'>
                                    <div class="animated bounceInLeft" data-id = '1'>
                                        <div class="col-md-12 tituloQuienes noPad">
                                          <h2 class="noPad">1. Conceptos Generales</h2>
                                        </div>
                                        <p class="parrafoQuienes">
                                        En el presente contrato serán de aplicación las definiciones que se detallan más abajo. Así mismo, las palabras en singular incluirán el plural y viceversa.
                                        </p>
                                        <p class="parrafoQuienes">
                                        •	“Partes”: La Compañía y el Usuario de forma conjunta.<br>
                                        •	“Contrato”: El presente contrato de prestación de servicios incluyendo, las presentes condiciones generales, las Condiciones particulares y todas sus cláusulas y/o Anexos.<br>
                                        •	“Profesional, tecnólogo, docente o estudiante”: Persona física o jurídica, según el caso, que suscribe este Contrato con ZAABRA PROFESIONAL para beneficiarse del Servicio de membresía.<br>
                                        •	“ZAABRA PROFESIONAL” o “Compañía”: Importadora Andiamo sas, Carrera 64 #67B – 89, Bogotá DC, con NIT 901294385-1. <br>
                                        •	“Usuario”: Persona física que tiene una cuenta o accede al Sitio Web https://www.zaabraprofesional.com.co<br>
                                        •	“Sitio Web”: Herramienta en línea disponible en la siguiente dirección https://www.zaabraprofesional.com.co y operada por ZAABRA PROFESIONAL que permite, entre otros, que los Profesionales puedan ofrecer sus servicios.
                                        </p>
                                        <p class="parrafoQuienes">
                                        •	“Profesional”: Profesional cuya actividad consiste en la prestación de servicios específicos de las diferentes áreas, área de la salud, área económico administrativa, tecnólogos, ingenieros, docentes y estudiantes, en el supuesto en el que el Usuario sea una persona física, el Profesional y el Usuario serán la misma persona y por consiguiente, las actividades anteriores serán prestadas directamente por el Usuario.<br>
                                        •	“Cuenta”: Entrada en la base de datos del Sitio Web que confiere la condición de Usuario con acceso a los Servicios Premium, una vez introducido el usuario y la contraseña correspondientes.<br>
                                        •	“Perfil”: Información del Profesional publicada en una landing page del Sitio Web identificada con una dirección URL perteneciente a la Compañía.<br>
                                        •	“Membresía”: Servicio ofrecido por ZAABRA PROFESIONAL al Usuario a través de un sistema, que permite, entre otros, agregar contenido a cada uno de los Perfiles y utilizar el calendario.<br>
                                        •	“Calendario”: programa informático titularidad de la Compañía, que permite al usuario entre otras funcionalidades, gestionar su cita o asesoramiento con el profesional y revisar la disponibilidad.<br>
                                        •	“Período de Facturación”: Cada uno de los meses o años naturales, en función del período inicial y tipo de suscripción, que se iniciarán a partir de que se genera el pago, es responsabilidad del profesional, estudiante o docente, el tiempo que se demore ingresando la información que se va a cargar en la página.

                                        </p>
                                        <div class="col-md-12 tituloQuienes noPad">
                                           <h2 class="noPad">2. Membresía </h2>
                                        </div>
                                        <p class="parrafoQuienes">
                                            2.1 Servicios ofrecidos por parte de ZAABRA PROFESIONAL al Usuario, otorgando acceso a las siguientes funcionalidades y/o herramientas a través de su Cuenta, las cuales se adaptarán a las características de los Perfiles asignados:<br>
                                            a. Beneficiarse de los servicios ofrecidos por ZAABRA PROFESIONAL a través del calendario de la plataforma;<br>
                                            b. Incluir los Perfiles entre los resultados de búsqueda de Profesionales registrados en el Sitio Web o plataforma. <br>
                                            c. Recibir estadísticas asociadas a cada uno de los Perfiles.<br>
                                            Las herramientas y/o servicios anteriores únicamente estarán disponibles para los Perfiles que hayan sido previamente revisados y aprobados.<br>
                                            2.2 Tipos de Perfiles disponibles dentro del Servicio Premium:<br>
                                            a. Perfil Premium: contamos con tres perfiles premium dependiendo de su perfil, sea un perfil profesional, perfil docente, perfil tecnólogo o perfil estudiante. El sitio web le da la posibilidad de mejorar su posicionamiento a través de la suscripción o pago de membresía en este servicio que le ofrece configurar su ficha de una forma más completa, sin publicidad de terceros y mostrarse de forma más destacada en los listados y en fichas de otros profesionales. Con esta opción, el profesional puede ofrecer su horario para que los usuarios puedan reservar su servicio a través de la plataforma en el calendario.<br> 
                                            b. Perfil inicial: Este perfil es un perfil promocional que incluye solo información básica incluida foto del profesional. Siempre estará disponible la membresía en el momento que el profesional desee modificar el plan, siempre y cuando cumpla con los requisitos mínimos, estos serán contratados sin necesidad de modificar el presente acuerdo, mediante notificación escrita, por email o cualquier otra vía telemática.
                                        </p>
                                        <p class="parrafoQuienes">
                                        Del mismo modo, en caso de que el tratamiento de datos personales se haya de efectuar por empresas proveedoras de servicios para ZAABRA PROFESIONAL, dichas empresas proveedoras deberán asumir compromisos de confidencialidad y adoptar medidas que aseguren el debido cumplimiento de la normativa de protección de Datos Personales, en especial las establecidas en la 1581 de 2012 y su Decreto Reglamentario 1074 de 2015.
                                        </p>
                                        <p class="parrafoQuienes">
                                        En ZAABRA PROFESIONAL tratamos la información que nos facilitan las personas interesadas con el fin de prestarle los servicios de intermediación online entre usuario y los profesionales incluidos en el directorio de la plataforma.
                                        </p>
                                    </div>
                                </div>
                                    <div class="col-md-12 animate__animated animate__bounceInLeft" >
                                        <p class="parrafoQuienes">
                                        2.3 La membrecía es proporcionada por ZAABRA PROFESIONAL teniendo en cuenta los Perfiles que han sido verificados en la forma y condiciones que determine ZAABRA PROFESIONAL a su entera discreción. La prestación del Servicio por parte de ZAABRA PROFESIONAL al Usuario se iniciará en el momento del pago de esta.<br>
                                        2.4 A los efectos de poder prestar de forma adecuada el Servicio y dar cumplimiento al presente contrato y a la legislación aplicable, el Usuario deberá proporcionar a la Compañía toda aquella información que ésta última requiera.<br>
                                        2.5 ZAABRA PROFESIONAL se reserva el derecho de decidir, en cada momento, los productos y/o servicios que se ofrecen. De este modo, ZAABRA PROFESIONAL podrá, en cualquier momento, añadir nuevos productos y/o servicios a los ofertados actualmente. Así mismo ZAABRA PROFESIONAL se reserva el derecho a retirar o dejar de ofrecer, en cualquier momento, y sin previo aviso, cualquiera de los servicios ofrecidos.  
                                        </p>
                                        <div class="col-md-12 tituloQuienes noPad">
                                           <h2 class="noPad">3. Asignación De Perfil</h2>
                                        </div>
                                        <p class="parrafoQuienes">
                                        3.1 Una vez suscrito el presente Contrato, el profesional recibirá vía correo electrónico la confirmación del pago y procederá a responder el formulario con todos los datos que ZAABRA PROFESIONAL solicita, estos serán verificados por el equipo profesional para su respectiva publicación. Cada profesional tendrá su perfil individual.<br>
                                        3.2 Sin perjuicio de lo dispuesto en el apartado anterior, mediante la aceptación y la firma del presente Contrato, el profesional acepta, consiente y autoriza de forma expresa a ZAABRA PROFESIONAL a la publicación de dicha información. <br>
                                        3.3 El Profesional autoriza y permite a ZAABRA PROFESIONAL modificar el contenido, materiales y documentos facilitados por parte del Profesional a los efectos de preparar el Perfil o landing page, en este sentido, cualquier modificación realizada se limitará a actuaciones encaminadas a mejorar la calidad de la publicación y validar la veracidad de la misma (eliminar errores, mejorar la calidad de las imágenes, confirmar la veracidad de la especialidad del Profesional, entre otros).
                                        </p>
                                        <div class="col-md-12 tituloQuienes noPad">
                                          <h2 class="noPad">4. Contraprestación Cómo se pronuncia</h2>
                                        </div>
                                        <p class="parrafoQuienes">
                                        4.1. ZAABRA PROFESIONAL tendrá derecho a percibir la retribución acordado en las condiciones particulares al inicio de cada uno de los periodos de facturación en función de la membresía que se adquiera, sin perjuicio de lo anterior, las partes podrán acordar posteriormente a la firma del presente acuerdo la modificación de la retribución que se detalla en las condiciones particulares, el profesional pagará su membresía a través de la plataforma, y dentro de esta misma plataforma el usuario agendará y de inmediato podrá dirigirse al pago de la consulta con el profesional; de acuerdo a la ley CITAR LEY…………….. cuando el usuario esté completamente satisfecho con el servicio ZAABRA PROFESIONAL procede a hacer la entrega del dinero al profesional, descontando los gastos operativos ocasionados con la pasarela de pagos PayU (Cargo fijo por transacción, Porcentaje PayU x transacción, transacciones y transferencia, 4 x 1000).
                                        </p>
                                    </div>
                                <div class="col-md-12 animatedParent"  data-sequence = '500'>  
                                    <div class="animated bounceInLeft" data-id = '10'>
                                       <div class="col-md-12 tituloQuienes noPad">
                                          <h2 class="noPad">5. Devengo, Facturación Y Forma De Pago</h2>
                                        </div>
                                        <p class="parrafoQuienes">
                                        5.1 La contraprestación devengada a favor de ZAABRA PROFESIONAL deberá ser abonada por el profesional, docente o estudiante al inicio de cada periodo de la membresía, ya sea pagada por 6 meses o 12 meses según sea el caso. <br>
                                        5.2 Las facturas correspondientes serán emitidas por pagos de membresía por parte de ZAABRA PROFESIONAL en los siguientes 3 días hábiles, mediante el pago de la membresía, el profesional, docente o estudiante autoriza expresamente a ZAABRA PROFESIONAL a emitir la factura y remitirla al correspondiente correo donde se detallan las condiciones.<br>
                                        5.3 Facturas emitidas por agendamiento y pago de consulta con el profesional; estás facturas serán emitidas por cada uno de los profesionales que ofrecen el servicio a través de la plataforma de ZAABRA PROFESIONAL.<br>
                                        5.4 El cliente podrá solicitar la devolución (reembolso) de los montos pagados a ZAABRA PROFESIONAL en caso de presentarse errores de cobro, por ejemplo, pagos dobles o montos diferentes a los pactados
                                        </p>
                                        <div class="col-md-12 tituloQuienes noPad">
                                          <h2 class="noPad">6. Agendamiento De Citas</h2>
                                        </div>
                                        <p class="parrafoQuienes">
                                        6.1 Tras la activación de La membresía, ZAABRA PROFESIONAL confiere únicamente al profesional, excluyendo expresamente a cualquiera de las empresas y entidades que puedan formar parte su mismo grupo de sociedades, el uso de una landing page dentro de la plataforma de servicios profesionales por un tiempo específico y determinado. <br>
                                        6.2 El permiso entregado a cada profesional le da el derecho al profesional para ingresar a su perfil y definir que días y horas específicas podrá ofrecer su servicio a través de nuestra plataforma de ZAABRA PROFESIONAL, de esta manera el usuario pueda agendar un espacio con el profesional requerido, inmediatamente el usuario genere el agendamiento de la cita, deberá hacer el pago para así asegurar su servicio.<br>
                                        6.3 El permiso y usuario otorgado a cada profesional por parte de ZAABRA PROFESIONAL se confiere por el plazo del pago de membresía que genere.<br>
                                        6.4 Este calendario permite al usuario y al profesional realizar las siguientes tareas:<br>
                                        •	Entregar a ZAABRA PROFESIONAL la disponibilidad de tiempo para consultas o servicio, tiempo en días y horas, para que le usuario pueda acceder y realizar el respectivo agendamiento de cita.<br>
                                        •	Confirmar los espacios que sean pagados por el usuario y de esta menara generar las notificaciones correspondientes antes de la consulta.<br>
                                        •	Podrá acceder a este desde cualquier dispositivo, sea computador, celular o Tablet.<br>
                                        •	El profesional que realiza el pago de la membresía es responsable por el cumplimiento de las citas agendadas y pagadas a través de la plataforma ZAABRA PROFESIONAL. <br>
                                        </p>
                                        <p class="parrafoQuienes">
                                        6.5 ZAABRA PROFESIONAL se reserva el derecho a bloquear el acceso al calendario de agendamiento de citas, en el supuesto en el que se realice un uso indebido o inadecuado del mismo, o no se cumpla con el usuario final lo pactado, de conformidad con las previsiones del presente contrato, a estos efectos se entenderá como “uso inadecuado” a los siguiente: que este sea manejado por otras personas no autorizadas o no registradas anteriormente, no podrá enviar correos no deseados o spam, reproducir o intentar reproducir el software sin autorización, perjudicar los intereses de ZAABRA PROFESIONAL, no dar cumplimiento a las obligaciones previstas en el presente contrato (incluyendo las condiciones generales) o las condiciones legales previstas en la plataforma ZAABRA PROFESIONAL, cancelar de forma reiterada las solicitudes de los usuarios finales, utilizar la plataforma para fines distintos a los previstos en el presente contrato o en el presente documento de términos y condiciones del servicio.
                                        </p>
                                        <p class="parrafoQuienes">
                                        6.6 Para estos efectos, en el supuesto en el que ZAABRA PROFESIONAL entienda que se ha incumplido alguna de las obligaciones anteriores, notificará al profesional, docente, o estudiante a la dirección de correo electrónico indicando que se ha procedido a la cancelación de los servicios que se encuentran expuestos dentro de la plataforma, en ningún caso la cancelación de este servicio afectará la remuneración que ZAABRA PROFESIONAL percibe.
                                        </p>
                                        <p class="parrafoQuienes">
                                        6.7 Las partes acuerdan que queda excluida de forma expresa del presente servicio cualquier derecho sobre el software o código fuente del mismo.br<br>
                                        6.8 Así mismo, el profesional, docente o estudiante mantendrá a ZAABRA PROFESIONAL plenamente a salvo respecto de la totalidad de daños, responsabilidades, demandas, obligaciones, juicios, sentencias y gastos de todo tipo en los cuales pueda incurrir como consecuencia de reclamaciones de terceros en relación al uso por parte del cliente, o de su personal.
                                        </p>
                                    </div> 
                                </div>
                                <div class="col-md-12 animatedParent"  data-sequence = '500'>
                                    <div class="animated bounceInLeft" data-id = '11'> 
                                        <div class="col-md-12 tituloQuienes noPad">
                                          <h2 class="noPad">7. Duración y terminación</h2> 
                                        </div> 
                                        <p class="parrafoQuienes">
                                        7.1 El Contrato entrará en vigor en el momento del pago de la membresía o suscripción, salvo acuerdo explícito en contra en las Condiciones Particulares del presente acuerdo, el período inicial del Contrato será por el plazo de 12 meses o 6 meses según la membresía pagada; estos días comienzan a contar desde la fecha de pago de la membresía, esta deberá ser renovada con el pago cada periodo según el escogido, de no recibir el pago 8 días hábiles antes de terminar el periodo, el sistema inmediatamente cumplido el tiempo ocultará el perfil del profesional, tecnólogo, docente o estudiante. La persona o entidad que se rija bajo el contrato no podrá resolver o terminar este contrato, excepto por causas previstas en la ley o lo dispuesto en las condiciones expuestas en este documento, en el caso de que el cliente decida dar de baja y/o dejar de utilizar los servicios prestados a través de ZAABRA PROFESIONAL antes del tiempo de finalización de la membresía, ZAABRA PROFESIONAL no se hace devolución de dinero por el servicio prestado. El pago de la membresía será adelantado en un 100%.
                                        </p>
                                        <p class="parrafoQuienes">
                                        7.2 Sin perjuicio de lo anterior y sujeto a la cláusula 7.4, el presente Contrato podrá ser resuelto como consecuencia de cualquiera de las siguientes causas: a. Por mutuo acuerdo entre las Partes; b. Tras la finalización del Período de la membresía pagada, a solicitud de cualquiera de las Partes con un plazo mínimo de preaviso de treinta (30) días a la fecha del inicio del siguiente Período de Facturación; y/o c. Por parte de la ZAABRA PROFESIONAL en caso de incumplimiento del profesional, tecnólogo, docente o estudiante. ZAABRA PROFESIONAL podrá cancelar el servicio y lo pactada con el profesional, tecnólogo, docente o estudiante en los siguientes casos: a) Si el profesional no presta un servicio adecuado de acuerdo a la calificación otorgada por el usuario. b) Por generar un mal procedimiento en el usuario final. c) No entregar información a ZAABRA PROFESIONAL o que ZAABRA PROFESIONAL no pueda verificar que la información suministrada sea real.
                                        </p>
                                        <p class="parrafoQuienes">
                                        7.3 Sin perjuicio de lo anterior, cada perfil acordado en las condiciones generales tendrá una permanencia de 12 meses o 6 meses dependiendo de la membresía adquirida, a efectos aclaratorios, en caso de cancelación por parte del profesional, tecnólogo, docente o estudiante de conformidad con los dispuesto en el numeral 7.2, el acuerdo permanecerá en todo caso en vigencia con el perfil adquirido y este genera una renovación automática finalizado el periodo pactado en el primer pago.
                                        </p>
                                        <p class="parrafoQuienes">
                                        7.4 La anulación o terminación del acuerdo, conllevará la automática cancelación del perfil en la plataforma ZAABRA PROFESIONAL, así mismo, dejarán de ser exigibles por parte de la compañía las obligaciones de pago de los servicios objeto del presente acuerdo, salvo aquellas que ya se hubiera devengado a favor de la compañía, No obstante lo anterior, las obligaciones de las partes continuarán siendo exigibles en lo que respecta a aquellos perfiles sujetos a periodos de permanencia; sin perjuicio de lo anterior, en caso de cancelación del acuerdo por parte de ZAABRA PROFESIONAL por incumplimiento del profesional, tecnólogo, docente o estudiante, no serán de aplicación los periodos de permanencia adquiridos y ZAABRA PROFESIONAL tendrá derecho a percibir la indemnización que se prevé en la cláusula 9.3 siguiente o cualquier otra del presente acuerdo, así como las cantidades devengadas y no pagadas por el cliente.
                                        </p>
                                        <p class="parrafoQuienes">
                                        7.5 Las partes acuerdan que el profesional, tecnólogo, docente o estudiante no ostentará ningún derecho como consecuencia de la licencia y/o de cualquier herramienta asociada al software o prestación de los servicios aquí descritos, así como tampoco ningún derecho de compensación como consecuencia de la cancelación o terminación anticipada de este acuerdo.<br>
                                        7.6 La cancelación del presente contrato no perjudicará en modo alguno el derecho de la parte afectada por tal incumplimiento a reclamar la correspondiente indemnización por los daños y perjuicios causados, respetando en todo caso, los términos previstos en el presente acuerdo. 
                                        </p>
                                    </div> 
                                </div>
                                <div class="col-md-12 animatedParent"  data-sequence = '500'>
                                    <div class="animated bounceInLeft" data-id = '12'> 
                                      <div class="col-md-12 tituloQuienes noPad">   
                                        <h2 class="noPad">8. Derechos y obligaciones de ZAABRA PROFESIONAL</h2>
                                      </div>  
                                        <p class="parrafoQuienes">
                                        8.1 En el marco de la prestación del servicio adquirido como membresía, ZAABRA PROFESIONAL se compromete a: a) Ofrecer servicios de membresía en los términos previstos en las condiciones generales y, en su caso en las condiciones generales del servicio. b) Proporcionar al profesional, tecnólogo, docente o estudiante las herramientas necesarias para asignar el perfil e información para publicar en el sitio. c) Proporcionar las herramientas y características necesarias para que el profesional, tecnólogo, docente o estudiante pueda gestionar y administrar la información dentro de su perfil, incluyendo disponibilidad en agendamientos de citas, agendamiento de citas como tal. d) Proporcionar asistencia en la edición del perfil o landing page durante toda la duración de la membresía, asistencia que se dará en los horarios estipulados, lunes a viernes de 8 am a 5 pm por medio de nuestros canales virtuales, Teléfono 3212449869 o al correo electrónico serviciosprofesionales@zaabra.com.co
                                        </p>
                                    </div> 
                                </div> 
                                <div class="col-md-12 animatedParent"  data-sequence = '500'>
                                    <div class="animated bounceInLeft" data-id = '13'> 
                                       <div class="col-md-12 tituloQuienes noPad">
                                           <h2 class="noPad">9. Obligaciones del profesional, tecnólogo, docente o estudiante.</h2> 
                                        </div> 
                                        <p class="parrafoQuienes">
                                         9.1 El profesional, tecnólogo, docente o estudiante declara, garantiza y se obliga frente a ZAABRA PROFESIONAL a dar cumplimiento a toda y cada una de las previsiones del presente acuerdo, incluyendo términos y condiciones generales y términos y condiciones generales del servicio, con la debida diligencia y en atención a la naturaleza de su actividad profesional y en especial se compromete a: a) Mantener en todo momento actualizada la información de cada perfil. b) Abonar en tiempo y forma los pagos que estén a favor de ZAARA PROFESIONAL. c) Estar en contacto permanente con ZAABRA PROFESIONAL para que esta última pueda realizar la adecuada prestación del servicio y en particular aceptar los términos y condiciones requeridos por ZAABRA PROFESIONAL. d) ZAABRA PROFESIONAL proporciona a cada perfil o landing page el software de agendamiento de consulta, este software es propiedad de ZAABRA PROFESIONAL, será administrado por este mismo. e) Abstenerse de utilizar de forma ilícita la plataforma de ZAABRA PROFESIONAL y herramientas que componen la misma, incluyendo, pero no limitándose a ello, el envío de notificaciones o mensajes a usuarios a través de la plataforma sin respetar la normativa de protección de datos de carácter personal o cualquier otra que sea de aplicación. f) Incluir en cada formulario del perfil información clara, completa y veraz, así como de la información de cada una de las citas y lugares en las que se admitirán los usuarios, el profesional, tecnólogo, docente o estudiante se compromete a añadir de forma puntual la disponibilidad de tiempo real y lo deberá mantener actualizado. g) No sugerir o inducir al usuario de abstenerse de utilizar la plataforma de ZAABRA PROFESIONAL para acceder al servicio. h) Entregar todos aquellos materiales o contenidos que sean necesarios a la entera discreción de ZAABRA PROFESIONAL a los efectos de crear y compartir información en el perfil o landing page, esta información deberá ser facilitada por parte del usuario a través de un formulario creado en ZAABRA PROFESIONAL.
                                       </p>
                                       <p class="parrafoQuienes">
                                       9.2 ZAABRA PROFESIONAL se reserva el derecho de realizar todas aquellas averiguaciones o actuaciones que sean necesarias a los efectos de determinar si están cumpliendo todas y cada una de las obligaciones anteriores, incluyendo la realización de encuestas a los usuarios.   
                                       </p>
                                       <p class="parrafoQuienes">
                                       9.3 En el supuesto en el que el profesional, tecnólogo, docente o estudiante incumpla cualquiera de las obligaciones previstas en la clausula 9.1, ZAABRA PROFESIONAL se reserva el derecho de cancelar el presente contrato de forma unilateral mediante notificación a la otra parte, así como solicitar al cliente el abono por los daños causados y perjuicio derivados de dicho incumplimiento. Dichos daños y perjuicios incluirán en todo caso el importe de la contraprestación que se hubiese devengado a favor de ZAABRA PROFESIONAL durante el periodo de la membresía, así como cualquier otro daño generado a ZAABRA PROFESIOAL por dicho incumplimiento.
                                       </p>
                                    </div>
                                </div>  
                                <div class="col-md-12 animatedParent"  data-sequence = '500'> 
                                    <div class="animated bounceInLeft" data-id = '14'> 
                                        <div class="col-md-12 tituloQuienes noPad">
                                           <h2 class="noPad">10 Manifestaciones y garantías al usuario</h2> 
                                        </div> 
                                        <p class="parrafoQuienes">
                                          10.1 El usuario manifiesta y garantiza a ZAABRA PROFESIONAL que: a) Tanto el usuario como representante legal del mismo tienen capacidad legal suficiente a los efectos de suscribir o aceptar el acuerdo y dar cumplimiento a la totalidad de las disposiciones del contrato, incluyendo las condiciones generales y condiciones del servicio y cualquier otra prevista en el mismo. b) Realizar actividades relacionadas con la asistencia a centro médico o consultorio particular, el profesional deberá asegurar que tiene todas las autorizaciones, licencias y/o permisos, registros exigidos por la legislación aplicable para realizar estas actividades. c) Toda la información, materiales, documentos, contenidos, así como cualquier otro incluido en cualquiera de los Perfiles o landing page será veraz y legal y no incumplirá ninguna disposición legal o derechos de terceros. d) Ha obtenido el consentimiento previo y por escrito necesario sobre todos los materiales, documentos, trabajos o contenidos facilitados a ZAABRA PROFESIONAL en el marco de la presente relación contractual, incluyendo la facultad de publicación, distribución y difusión, entre otros, y, por consiguiente, que no infringe ningún derecho de propiedad intelectual y/o industrial de terceros. En particular, manifiesta que a través de dicha divulgación y publicación en el Sitio Web de ZAABRA PROFESIONAL no se infringe ningún derecho frente a terceros, en particular derechos de propiedad intelectual o industrial. En este mismo sentido, el usuario autoriza expresamente a ZAABRA PROFESIONAL para usar, compilar, adaptar, alterar, incorporar contenido sobre los trabajos y materiales proporcionados; Ha obtenido todas aquellos permisos y autorizaciones necesarias sobre todas las imagen y datos del Profesional que sean publicadas en el Sitio Web de ZAABRA PROFESIONAL por parte del usuario, incluyendo el derecho a distribuir y difundir las mismas a través de Internet, así como que cuenta con todas las autorizaciones necesarias en materia de protección de datos de carácter personal sobre las imágenes y datos del Profesional, así como del resto imágenes incluidas en la galería de cada landing page, La autorización concedida a ZAABRA PROFESIONAL para la utilización de la imagen y los datos del Profesional seguirá en vigencia tras la terminación o cancelación de la relación contractual. e) Ha obtenido todas aquellos permisos y autorizaciones necesarias sobre todas las marcas, logotipos, emblemas o cualquier otro sujeto a derechos de propiedad intelectual y/o industrial que sean facilitados a ZAABRA PROFESIONAL o publicadas en el Sitio Web de ZAABRA PROFESIONAL por parte del usuario o a petición de este, incluyendo el derecho a distribuir, difundir y utilizar por parte de ZAABRA PROFESIONAL o cualquiera de las entidades de su grupo de sociedades, para utilizar las mismas en todo el territorio mundial. La autorización concedida a ZAABRA PROFESIONAL para la utilización de la imagen y los datos del Profesional seguirá en vigencia tras la terminación o resolución del presente Contrato. f) Dará cumplimiento a las disposiciones previstas en las cláusulas de las presentes Condiciones Generales, sobre todos los documentos, textos, materiales, logotipos, marcas registradas, datos personales o cualquier otro facilitado a ZAABRA PROFESIONAL o subido a el Sitio Web DE ZAABRA PROFESIONAL o incluido en el Perfil o landing page.
                                       </p>
                                       <p class="parrafoQuienes">
                                          10.2 En este sentido, el usuario se obliga a responder frente a ZAABRA PROFESIONAL y a indemnizar por los daños y perjuicios que se puedan generar a ZAABRA PROFESIONAL, por la falta de veracidad o inexactitud de las manifestaciones y garantías previstas en la presente cláusula, incluyendo pero sin limitarse a ello, la posible responsabilidad civil, administrativa o de cualquier otro tipo, así como abonar a ZAABRA PROFESIONAL los gastos legales, administrativos, judiciales, de abogados y procuradores. 
                                       </p>
                                    </div>
                                </div> 
                                <div class="col-md-12 animatedParent"  data-sequence = '500'>
                                    <div class="animated bounceInLeft" data-id = '15'> 
                                         <div class="col-md-12 tituloQuienes noPad">
                                              <h2 class="noPad">11. Cambios de los procedimientos</h2>
                                           </div>  
                                        <p class="parrafoQuienes">
                                        11.1 Las Partes acuerdan que cualquier modificación implementada por ZAABRA PROFESIONAL en relación a los procesos de verificación, modificaciones en el Sitio Web de ZAABRA PROFESIONAL o en el ámbito de actividad u otras modificaciones a los efectos de adaptarse a la legislación aplicable no implicará una modificación del presente Contrato y no dará lugar a la cancelación del mismo en los términos previstos en las Condiciones Generales. Se entenderá que el usuario acepta dicha modificación o actualización en el supuesto en el que el usuario siga haciendo uso del Sitio Web de ZAABRA PROFESIONAL, tras la entrada en vigencia de la actualización o modificación del Sitio Web de ZAABRA PROFESIONAL, en ningún caso, se requerirá la autorización expresa o la formalización de un acuerdo por separado entre las Partes. 
                                       </p>
                                    </div> 
                                </div>
                                <div class="col-md-12 animatedParent"  data-sequence = '500'>
                                    <div class="animated bounceInLeft" data-id = '16'> 
                                      <div class="col-md-12 tituloQuienes noPad">
                                        <h2 class="noPad">12. Sitio Web </h2>  
                                      </div>
                                        <p class="parrafoQuienes">
                                        12.1 El Sitio Web ZAABRA PROFESIONAL se ofrecen tal como han sido desarrollados y en la forma en la que estén disponibles en cada momento, a tal efecto, ZAABRA PROFESIONAL no garantiza al usuario o a cualquier otra persona o entidad, de forma expresa o implícita, que los mismos se adaptarán a cualquier finalidad o uso concreto, ni será completo, útil ni adecuado para la actividad del Cliente o de cualquiera de los Usuarios, incluyendo, de forma enunciativa pero no limitativa, garantía de comerciabilidad, patentabilidad y/o adecuación a un determinado propósito, ni de existencia de defectos o errores, ni en relación a su capacidad de integrarse en un sistema determinado, o de no infracción de ninguna patente u otros derechos de propiedad intelectual y/o industrial de terceros.   
                                       </p>
                                       <p class="parrafoQuienes">
                                        12.2 Asi mismo, ZAABRA PROFESIONAL se reserva el derecho a llevar a cabo todas aquellas actuaciones que sean necesaria para mantener en funcionamiento los sistemas, los cuales pueden provocar impedimentos o imposibilidad temporal de utilizar los Servicios de membresía por parte del Profesional, tecnólogo, docente, estudiante y los Usuarios. A tal efecto, ZAABRA PROFESIONAL realizará sus mayores esfuerzos para que dichas actuaciones de mantenimiento por la noche o en días no laborables. 
                                       </p>
                                    </div>
                                </div>
                                <div class="col-md-12 animatedParent"  data-sequence = '500'>
                                    <div class="animated bounceInLeft" data-id = '17'> 
                                        <div class="col-md-12 tituloQuienes noPad">
                                             <h2 class="noPad">13. Exención de responsabilidad</h2> 
                                        </div> 
                                        <p class="parrafoQuienes">
                                        13.1 ZAABRA PROFESIONAL no será responsable por las pérdidas, daños directos, indirectos, emergentes, por el lucro cesante sufrido por el Profesional, tecnólogo, docente, estudiante o los Usuarios, o cualquier otro daño o coste incidental, especial o que sea consecuencia de una reclamación –incluidos los costes judiciales y de abogado o procurador, la responsabilidad civil o por producto o negligencia- fundada en una conducta o actividad desarrollada por ZAABRA PROFESIONAL o cualquier otro con motivo del uso del Sitio Web, o cualquier otro software o aplicación facilitada por ZAABRA PROFESIONAL en el marco de los servicios prestados, por cualquier motivo  (incluyendo pero no limitado a las pérdidas derivadas del fallo o defectuoso funcionamiento de aplicaciones web, aplicaciones móviles, software, la pérdida total o parcial o el daño producido a los contenidos o a otra información, la detención o suspensión total o parcial de la de la plataforma web, plataforma móvil, software, la detención de las citas concertadas con Profesionales, la pérdida de tiempo de funcionamiento o de ingresos, beneficios, operaciones con Usuarios o cualquier otro motivo), salvo que se derive de una actuación dolosa por parte de ZAABRA PROFESIONAL y, en todo caso y en cualquier supuesto, limitada a la responsabilidad prevista en la cláusula 13.8 de las Condiciones Generales.
                                       </p>
                                       <p class="parrafoQuienes">
                                       13.2 Asi mismo, el Profesional, tecnólogo, docente o estudiante acepta y reconoce que ZAABRA PROFESIONAL no garantiza la identidad de los Usuarios ni será responsable bajo ningún concepto frente al Cliente o a terceros por cualquier fraude relacionado con la identidad de los Usuarios o los Profesionales.
                                       </p>
                                       <p class="parrafoQuienes">
                                       13.3 ZAABRA PROFESIONAL no se responsabiliza de los contenidos e información facilitada por el Profesionales, tecnólogo, docente, estudiante o Usuarios a través del Sitio Web de ZAABRA PROFESIONAL, por los Profesionales y/o centros médicos relacionados con la prestación de sus propios servicios ni de las condiciones de los mismos. En este sentido, ZAABRA PROFESIONAL no se hace responsable de las respuestas, consultas, comentarios y/u opiniones emitidas por los Profesionales, tecnólogos, docentes o estudiantes, o realizadas por Usuario y otros a través del Sitio Web de ZAABRA PROFESIONAL, puesto que en ningún caso la actividad de ZAABRA PROFESIONAL podrá ser considerada como teleconsulta, consulta o similar y las opiniones o diferentes consultas no son realizadas por ZAABRA PROFESIONAL.  
                                       </p>
                                       <p class="parrafoQuienes">
                                       13.4 La Compañía no supervisa, monitoriza ni confirma las licencias, más allá de que pueda validar a su libre discreción y sin obligación al respecto los números de tarjeta profesional, la especialidad del Profesional, o calificaciones de los Profesionales y, en ningún caso, será responsable de la actividad realizada por parte de los Profesionales, tecnólogos, docentes o estudiantes. En caso de que ZAABRA PROFESIONAL adquiera información suficiente que conduzca a suponer que el Profesional carece de título acreditativo suficiente para entenderse como tal, ZAABRA PROFESIONAL podrá cancelar y/o bloquear su Cuenta, perfil o landing page inmediatamente.
                                       </p>
                                       <p class="parrafoQuienes">
                                       13.5 La Compañía no supervisa, monitoriza ni controla los mensajes o notificaciones enviadas por los Profesionales, tecnólogos, docentes o estudiantes a sus clientes o usuarios a través de la Plataforma, vía sms, email u otros medios. A tal efecto, el profesional, tecnólogo, docente o estudiante se obliga a responder frente a ZAABRA PROFESIONAL y a indemnizar por los daños y perjuicios que se puedan generar a ZAABRA PROFESIONAL como consecuencia de las notificaciones o comunicaciones remitidas, incluyendo, pero no limitándose a ello, la posible responsabilidad civil, administrativa o de cualquier otro tipo, así como a abonar a ZAABRA PROFESIONAL por los gastos legales, administrativos, judiciales, de abogados y procuradores.  
                                       </p>
                                       <p class="parrafoQuienes">
                                       13.6 Sin perjuicio de lo anterior y dejando constancia expresa de que ZAABRA PROFESIONAL no será responsable de la cualificación o licencias de los Profesionales, en el supuesto en el que ZAABRA PROFESIONAL adquiera información que pueda llegar a asumirse que el Profesional no cuenta con la licencia o acreditación necesaria para la prestación de servicios, se pondrá en contacto con el Profesional a los efectos de intentar recabar más información al respecto.  
                                       </p>
                                       <p class="parrafoQuienes">
                                       13.7 ZAABRA PROFESIONAL no será responsable de los daños y perjuicios derivados del mal funcionamiento de la Cuenta, de los fallos y errores en el servidor como consecuencia de cualquier fallo relacionado con el software o por cualquier incompatibilidad con el Sitio Web de ZAABRA PROFESIONAL. ZAABRA PROFESIONAL tampoco será responsable por ningún daño relacionado con la falta de conexión a Internet o el mal funcionamiento del Sitio Web, así como de aquellos excluidos de forma expresa en el presente Contrato.  
                                       </p>
                                       <p class="parrafoQuienes">
                                       13.8 En el supuesto en el que ZAABRA PROFESIONAL fuera responsable de cualquier daño sufrido al usuario, los Profesionales como consecuencia de un incumplimiento del presente Contrato, el importe máximo de la responsabilidad asumida por ZAABRA PROFESIONAL no podrá ser superior al importe percibido en el marco de la prestación de los Servicios de membresía.  
                                       </p>
                                       <p class="parrafoQuienes">
                                       13.9 Las previsiones dispuestas en la presente cláusula seguirán en vigencia tras la finalización de la relación contractual entre el Cliente y ZAABRA PROFESIONAL.
                                       </p>
                                       <p class="parrafoQuienes">
                                       13.10 En relación con los servicios de salud que son prestados por terceros.
                                        Usted reconoce que ZAABRA PROFESIONAL sólo facilita un espacio de acercamiento para que un profesional, tecnólogo, docente o estudiante se contacte con el usuario final y puedan establecer un acuerdo comercial mutuo para la prestación de Servicios, por lo que las negociaciones que surjan entre estos Usuarios solo tendrán efecto entre los mismos, y no afectarán ni derivarán en responsabilidad alguna por parte de ZAABRA PROFESIONAL. Cualquier prestación de Servicios que se lleve a cabo por el profesional, tecnólogo, docente o estudiante a usuarios, se realiza al margen del sitio web, por lo que ZAABRA PROFESIONAL no es responsable de ninguna de las respuestas y/u opiniones entregadas; ZAABRA PROFESIONAL intervendrá en el agendamiento de la consulta (determinación de lugar, fecha y hora del servicio), de acuerdo con las condiciones previstas por el en el sitio web.
                                        Los Usuarios y profesional inscritos en el sitio web ZAABRA PROFESIONAL entienden y aceptan que ZAABRA PROFESIONAL no hace parte de algún acuerdo que se llegase a negociar o firmar entre ellos; usted reconoce y acepta que ZAABRA PROFESIONAL no tiene algún control, ni la obligación de controlar la conducta o acciones de los usuarios dentro o fuera del sitio web, ya sea por opiniones, anuncios o publicaciones, por lo que en la medida máxima permitida por la ley, no asume alguna responsabilidad por la conducta, acciones, opiniones, anuncios o publicaciones de los usuarios;  no obstante, ZAABRA PROFESIONAL se reserva la facultad de investigar las conductas que sean contrarias a los Términos y condiciones generales y Términos y condiciones generales del servicio, y a tomar las acciones necesarias, incluyendo pero sin limitar, la restricción de acceso o la suspensión o eliminación de la cuenta del Usuario. 
                                        Cada Usuario es el único responsable de todas sus comunicaciones, publicaciones, anuncios e interacciones con el Portal y con otros Usuarios de la misma.
                                        ZAABRA PROFESIONAL no garantiza la veracidad, exactitud, exhaustividad y/o actualidad de la información de los Usuarios que publiquen o comuniquen en el sitio web, ni el cumplimiento de cualquier acuerdo entre los Usuarios. En relación con este tipo de publicaciones, ZAABRA PROFESIONAL actuará como un medio de comunicación. ZAABRA PROFESIONAL no asume la obligación de vigilar y/o verificar la información publicada por los Usuarios o contenida en la publicidad, sin perjuicio de los criterios y condiciones establecidas en los Términos y Condiciones del servicio, y en especial, la facultad de ZAABRA PROFESIONAL de cancelar los registros de aquellos profesionales, tecnólogos, docentes o estudiantes que incumplan los Términos y Condiciones generales y términos y condiciones del servicio.
                                        En consecuencia, usted declara mantener indemne y exonerar de toda responsabilidad a ZAABRA PROFESIONAL de cualquier incumplimiento, engaño, estafa, infracción o perjuicio causado por otro Usuario o por un tercero que tenga publicidad en el Portal.
                                        En la medida máxima permitida por la ley, Usted declara exonerar de toda responsabilidad y mantener indemne a ZAABRA PROFESIONAL por los daños y perjuicios, pasados, presentes y futuros, que llegaren a ocasionarse como consecuencia del uso de la información publicada por los Usuarios y terceros en el Portal.

                                       </p>
                                    </div>
                                </div>
                                <div class="col-md-12 animatedParent"  data-sequence = '500'>
                                    <div class="animated bounceInLeft" data-id = '18'>  
                                        <div class="col-md-12 tituloQuienes noPad">
                                             <h2 class="noPad">14. Derechos de propiedad intelectual y/o industrial de la compañía y de la información publicada por el Profesional y/o Usuario </h2> 
                                        </div>     
                                        <p class="parrafoQuienes">
                                        14.1 Todos los derechos de propiedad industrial y/o intelectual sobre el Sitio Web ZAABRA PROFESIONAL, la aplicación móvil, el software de agendamiento de cita, las marcas de ZAABRA PROFESIONAL, las aplicaciones facilitadas por parte de ZAABRA PROFESIONAL en el marco de la prestación de los Servicios de membresía, los software de todo ello, así como de cualquier ampliación, mejora o modificación de todo ello y de los trabajos, materiales o elementos creados por parte de ZAABRA PROFESIONAL en el marco de la prestación de los servicios previstos en el presente Contrato o el cumplimiento de las obligaciones que se derivan del mismo, son de propiedad exclusiva de la Compañía, por lo que el Usuario o profesional, Tecnólogo, docente o estudiante deberá abstenerse de utilizar o registrar a su nombre cualquier patente, marca u otros signos distintivos de la que ZAABRA PROFESIONAL sea titular y no podrá modificar, reproducir, distribuir ni comunicar públicamente o poner a disposición de terceros cualquiera de ellos, salvo en los supuestos expresamente previstos en el presente Contrato y lo autorice de forma expresa la Compañía.
                                       </p>
                                       <p class="parrafoQuienes">
                                       14.2 Asimismo, el Cliente se obliga a informar a ZAABRA PROFESIONAL, de manera rápida y eficaz, de cualquier infracción o fundado temor de infracción por parte de clientes, usuarios o de terceros de los derechos de propiedad intelectual y/o industrial anteriores o de desarrollos del mismo que pudiera afectar a los legítimos intereses de la Compañía, según corresponda.
                                       </p>
                                       <p class="parrafoQuienes">
                                       14.3 En ningún caso, la creación de la Cuenta, Perfil, publicación de materiales, documentación y/o imágenes de cualquier tipo por parte del Cliente le confieren derechos sobre las publicaciones en el Sitio Web de ZAABRA PROFESIONAL, propiedad de la Compañía.
                                       </p>
                                       <p class="parrafoQuienes">
                                       14.4 De igual manera, al publicar en el Sitio Web de ZAABRA PROFESIONAL o facilitar a ZAABRA PROFESIONAL por cualquier medio facilite a ZAABRA PROFESIONAL materiales, documentos, trabajos, imágenes, datos de Profesionales o contenidos, así como marcas comercial, logotipos, emblemas o cualquier otro sujeto a derechos de propiedad intelectual y/o industrial, se entenderá que el Cliente confiere a ZAABRA PROFESIONAL una licencia de uso sobre todo ello con el carácter de no exclusiva, intransmisible, para todo el territorio mundial y por el tiempo máximo que permite la Ley, pudiendo ZAABRA PROFESIONAL utilizar, publicar realizar, entre otros, copias analógicas y digitales, almacenamiento, marketing, alquiler, arrendamiento, difusión, publicación, visualización, transmisión, reemisión, reproducción, inclusión en bases de datos, uso de contenido y materiales a los efectos de promover las actividades o cualquier otro aspecto de la Compañía.  
                                       </p>
                                       <p class="parrafoQuienes">
                                       14.5 Las disposiciones previstas en el apartado anterior se confieren a ZAABRA PROFESIONAL por el tiempo máximo que permite la ley, por lo que permanecerán en vigencia tras la finalización del presente Contrato.   
                                       </p>
                                    </div>
                                </div>
                                <div class="col-md-12 animatedParent"  data-sequence = '500'>
                                    <div class="animated bounceInLeft" data-id = '19'> 
                                       <div class="col-md-12 tituloQuienes noPad">
                                           <h2 class="noPad">15. Confidencialidad</h2>
                                        </div>  
                                        <p class="parrafoQuienes">
                                        15.1 Las Partes reconocen que durante la relación profesional entre ellas tendrán acceso a información relativa al presente Contrato, acuerdos previos, documentación, correos electrónicos otro tipo de mensajes intercambiados entre las Partes, que tendrán la consideración de confidenciales y que deberán ser tratados con secreto para garantizar el buen fin de las relaciones entre las Partes. A tal efecto, las Partes se comprometen a mantener estricta confidencialidad sobre la información de este tipo, no pudiendo reproducirla, utilizarla, venderla, licenciarla, exponerla, publicarla o revelarla de cualquier forma a cualquier otra persona, sin autorización expresa de la otra Parte, así como abstenerse de utilizar dicha información para cualquier finalidad distinta a las previstas en el presente Contrato.
                                       </p>
                                       <p class="parrafoQuienes">
                                       15.2 Las obligaciones de confidencialidad establecidas en la presente cláusula no serán de aplicación a la información que: a) Se difunda a empleados, colaboradores, asesores o cualquier otro profesional a los efectos de dar cumplimiento a la relación contractual, siempre y cuando sean informados del carácter confidencial de esta información y asuman el compromiso de tratar la información como confidencial. b) Sea de dominio público o devenga de dominio público por un medio distinto a la violación de las obligaciones previstas en el Contrato. c) Haya llegado al conocimiento de cualquiera de las Partes con anterioridad a la firma o aceptación del Contrato o las Condiciones Generales o Condiciones Particulares y no haya sido adquirida, directa o indirectamente, a través de cualquiera de las Partes o a través de un tercero que se encuentre a su vez bajo la obligación de mantener la confidencialidad de la información confidencial. d) Aquella otra que deba revelarse en cumplimiento de una orden de naturaleza legal, judicial o administrativa. En este caso, la Parte que la deba divulgar lo notificar a la otra Parte con la mayor antelación posible a fin de que ésta pueda tomar las acciones que estime oportunas.  
                                       </p>
                                       <p class="parrafoQuienes">
                                       15.3 El incumplimiento de las obligaciones de confidencialidad previstas en la presente cláusula dará lugar a la Parte perjudicada a reclamar los daños y perjuicios que se le hubiera generado. Asimismo, la transmisión o comunicación a cualquier competidor directo o indirecto de ZAABRA PROFESIONAL de cualquier tipo de información de la que disponga el Cliente en relación a ZAABRA PROFESIONAL como consecuencia de las relaciones comerciales existentes entre las Partes, dará lugar a las penalizaciones incluidas en el presente Contrato. 
                                       </p>
                                       <p class="parrafoQuienes">
                                       15.4 Sin perjuicio de las condiciones establecidas en la presente Cláusula, ZAABRA PROFESIONAL podrá intercambiar o compartir cualquier información relativa al profesional, tecnólogo, docente o estudiante a los efectos de operar o gestionar el Sitio Web y los servicios prestados en virtud del presente Contrato, con cualquier entidad perteneciente a su grupo de sociedades, así como con otras compañías que lleven a cabo negocios o actividades vinculadas a ZAABRA PROFESIONAL. El Cliente acepta expresamente este intercambio o cesión de información por parte de ZAABRA PROFESIONAL. 
                                       </p>
                                       <p class="parrafoQuienes">
                                       15.5 Las obligaciones de confidencialidad entrarán en vigencia desde la fecha de suscripción o aceptación de las Condiciones Generales, o desde la fecha de entrega de información de carácter confidencial, lo que suceda antes, y seguirán siendo de aplicación mientras la información conserve su naturaleza secreta y confidencial. 
                                       </p>
                                       <p class="parrafoQuienes">
                                       15.6 Asimismo, ZAABRA PROFESIONAL manifiesta al Cliente que, habida cuenta de su valor y aplicación industrial y/o comercial, parte de la información que se le pueda facilitar como consecuencia de la ejecución de la relación profesional y la prestación de los Servicios de membresía estará protegida bajo la modalidad de secreto industrial y/o empresarial y, en consecuencia, su divulgación podría perjudicar notablemente a ZAABRA PROFESIONAL, por lo que resulta esencial salvaguardar dicho conocimiento. Por consiguiente, la utilización de la misma para y las Condiciones Generales del servicio puede generar una gran daño y perjuicio a ZAABRA PROFESIONAL, incluso, ser considerada competencia desleal.  
                                       </p>
                                    </div>
                                </div>
                                <div class="col-md-12 animatedParent"  data-sequence = '500'>
                                    <div class="animated bounceInLeft" data-id = '20'>  
                                      <div class="col-md-12 tituloQuienes noPad">
                                         <h2 class="noPad">16. Protección de los datos de carácter personal</h2> 
                                      </div> 
                                        <p class="parrafoQuienes">
                                        16.1 Las Partes se obligan a tratar los datos de carácter personal a los que tengan acceso o que sean objeto de tratamiento durante la prestación de los servicios derivados de la ejecución del presente contrato en cumplimiento de la normativa aplicable en materia de privacidad y protección de datos
                                        Personales incluyendo, entre otras, la ley 1581 de 2012 de Protección de Datos Personales.
                                       </p>
                                       <p class="parrafoQuienes">
                                       16.2 La ejecución de este Contrato requerirá el acceso y el tratamiento de datos personales de Usuarios y Profesionales por parte de ZAABRA PROFESIONAL, en nombre y por cuenta de este. El Cliente garantiza que, como responsable de los datos, cumplirá con las obligaciones de información de los interesados y que dispone de las bases jurídicas y/o consentimientos necesarios para que ZAABRA PROFESIONAL preste los servicios que se deriven del presente Contrato. A estos efectos, ZAABRA PROFESIONAL tendrá la consideración de encargado del tratamiento y el profesional, tecnólogo, docente o estudiante será el responsable del tratamiento de datos. Consecuentemente, las Partes reconocen la ejecución en la fecha del presente contrato de un contrato separado para el nombramiento de ZAABRA PROFESIONAL como encargado del tratamiento de datos personales.   
                                       </p>
                                       <p class="parrafoQuienes">
                                       16.3 A los efectos de lo indicado anteriormente, el profesional, tecnólogo, docente o estudiante autoriza a ZAABRA PROFESIONAL al acceso, tratamiento y recolección de dichos datos personales en su nombre, con el fin de dar acceso a los usuarios a leer dicha información. 
                                       </p>
                                       <p class="parrafoQuienes">
                                       16.4 Adicionalmente a lo anterior, el profesional, tecnólogo, docente o estudiante se obliga a recabar los consentimientos necesarios para la cesión de los datos personales de los Profesionales a ZAABRA PROFESIONAL con el fin de que pueda tratar sus datos en calidad de responsable del Tratamiento. Está cesión se realizará con la finalidad de mantener, tratar y actualizar los datos de los Profesionales en la plataforma de ZAABRA PROFESIONAL.<br> 
                                       Por tanto, en dicho caso una vez termine la relación contractual con el profesional, tecnólogo, docente o estudiante, ZAABRA PROFESIONAL podrá continuar tratando los datos personales de los Profesionales en calidad de responsable del Tratamiento. En cumplimiento a la ley 1581 de 2012.
                                       </p>
                                       <p class="parrafoQuienes">
                                       16.5 Sin perjuicio de lo anterior, profesional, tecnólogo, docente o estudiante cumplirá con todas las obligaciones de información previstas en relación con los profesional, tecnólogo, docente o estudiante que presenten sus servicios al usuario final, en el momento de obtener su consentimiento para la cesión de sus datos a ZAABRA PROFESIONAL. Para tales fines, ZAABRA PROFESIONAL facilitará toda la información necesaria al usuario. 
                                       </p>
                                       <p class="parrafoQuienes">
                                       16.6 El Cliente exime de responsabilidad a ZAABRA PROFESIONAL sobre el tratamiento de datos personales realizado por Usuarios y Profesionales en el contexto del cumplimiento de este Contrato por parte de ZAABRA PROFESIONAL.  
                                       </p>
                                       <p class="parrafoQuienes">
                                       16.7 En cumplimiento de la ley 1581 del 2012 las Partes informan que los datos personales de las Partes, que constan en el encabezamiento de este Contrato, serán tratados sobre la base jurídica de la ejecución de este Contrato, el cumplimiento de las obligaciones legales aplicables a las Partes, así como los intereses legítimos de las Partes en esta relación comercial. En consecuencia, las Partes aportan la siguiente información: a) Los datos personales de las Partes firmantes del Contrato serán tratados por las mismas, en calidad de Responsables del Tratamiento para la ejecución de este Contrato, con la identificación e información de contacto establecida en el encabezamiento. b) La recolección y tratamiento de datos personales se basará en la ejecución del Contrato, para los fines de la prestación de los servicios descritos en el mismo, el cumplimiento de las obligaciones legales de las partes, y los intereses legítimos derivados de la continuidad de la relación comercial. c) Los datos personales de las Partes serán conservados durante el tiempo necesario para cumplir con las finalidades indicadas en el apartado anterior, aplicando las medidas de seguridad técnicas y organizativas necesarias para garantizar un nivel de seguridad adecuado al riesgo. d) Los datos personales de las Partes no serán cedidos a terceros excepto, en caso de contar con el consentimiento expreso de las Partes o para el cumplimiento de las obligaciones legales exigibles. e) Las Partes tienen derecho a ejercer sus derechos de acceso, rectificación o supresión o limitación, o a oponerse al tratamiento, así como el derecho a la portabilidad de los datos, dirigiéndose a la dirección indicada en el encabezamiento del Contrato. También tienen derecho a dirigirse o presentar una reclamación ante la Autoridad de Control. 
                                       </p>
                                       <p class="parrafoQuienes">
                                       16.9 El Cliente se compromete a suscribir los contratos de encargo de tratamiento y/o cualquier otro documento o consentimientos que sean necesarios o requeridos por la normativa aplicable en materia de protección de datos personales, con los Usuarios o los Profesionales que participen en los servicios derivados de este Contrato. 
                                       </p>
                                       <p class="parrafoQuienes">
                                       16.10 Como parte de los servicios ofrecidos, y a menos que el Cliente haya denegado expresamente su consentimiento, ZAABRA PROFESIONAL tratará los datos personales del Cliente y de los Profesionales para incluirlos en la plataforma de posicionamiento empresarial Google My Business, con la finalidad de impulsar la presencia y el perfil o landing page en Google.   
                                       </p>
                                    </div>
                                </div>
                                <div class="col-md-12 animatedParent"  data-sequence = '500'>
                                    <div class="animated bounceInLeft" data-id = '21'> 
                                        <div class="col-md-12 tituloQuienes noPad">
                                           <h2 class="noPad">17. Resolución de solicitudes y reclamaciones</h2>  
                                        </div>
                                        <p class="parrafoQuienes">
                                        17.1 Para cualquier solicitud o reclamación que pueda surgir en el marco de la prestación de los servicios, el profesional, tecnólogo, docente, estudiante o el mismo usuario se deberá dirigir a la cuenta de correo electrónico del asesor que ZAABRA PROFESIONAL asigne a su cuenta, o en su defecto, a serviciosprofesionales@zaabra.com.co o al teléfono 3212449869  
                                       </p>
                                       <p class="parrafoQuienes">
                                       17.2 Las reclamaciones se deberán remitir dentro del plazo máximo de catorce (14) días a contar desde la fecha del evento que dio lugar a la reclamación. La comunicación de la reclamación deberá contener el motivo de la reclamación y los motivos que la fundamentan. En el supuesto en el que la reclamación o la queja tengan contenido ofensivo o inapropiado a criterio de ZAABRA APROFESIONAL o no se realice con la diligencia debida, esta no será atendida por ZAABRA PROFESIONAL.
                                       </p>
                                    </div>
                                </div>
                                <div class="col-md-12 animatedParent"  data-sequence = '500'>
                                    <div class="animated bounceInLeft" data-id = '22'>
                                        <div class="col-md-12 tituloQuienes noPad">
                                            <h2 class="noPad">18. Gestión diaria del contrato</h2>
                                        </div>      
                                        <p class="parrafoQuienes">
                                        18.1 El profesional, tecnólogo, docente o estudiante deberá notificar a ZAABRA PROFESIONAL a la mayor brevedad posible de cualquier cambio de los datos de contacto del responsable, mediante comunicación por escrito dirigida a la dirección de correo electrónico prevista en el encabezamiento del presente Contrato.
                                       </p>
                                    </div>
                                </div>
                                <div class="col-md-12 animatedParent"  data-sequence = '500'>
                                    <div class="animated bounceInLeft" data-id = '23'> 
                                        <div class="col-md-12 tituloQuienes noPad">
                                            <h2 class="noPad">19. Miscelánea</h2> 
                                        </div>     
                                        <p class="parrafoQuienes">
                                        1. Cesión: El Cliente no podrá ceder los derechos y obligaciones en el marco de la relación contractual con ZAABRA PROFESIONAL o subrogar su posición contractual, sin el consentimiento previo y por escrito de ZAABRA PROFESIONAL. Sin perjuicio de lo anterior, el Cliente acuerda y autoriza de forma expresa que ZAABRA PROFESIONAL podrá ceder todos los derechos y obligaciones que se deriven de la relación profesional con ZAABRA PROFESIONAL, incluyendo, el Contrato y las Condiciones Particulares y Condiciones Generales, entre otros, sin necesidad de obtener el consentimiento del Cliente. Dicha cesión, exigirá por parte de la adquirente la aceptación previa de los pactos aquí contenidos de forma expresa.
                                       </p>
                                       <p class="parrafoQuienes">
                                       2. Modificación: No podrá ser modificado ninguno de los extremos de las Condiciones Particulares o las Condiciones Generales, o el resto de términos del Contrato, salvo que dicha modificación se realice por escrito y sea firmada por ambas Partes. A pesar de lo anterior, en el caso de que una modificación sea necesaria para adecuarse a cualquiera legislación, regulación o práctica comúnmente aceptada de la jurisdicción aplicable, o para alinear este Contrato con el tipo de servicios proporcionados al Cliente durante la vigencia de este Contrato y / o con las modalidades en que se brindan estos servicios, ZAABRA PROFESIONAL se reserva el derecho de modificar los términos contractuales, unilateralmente, mediante notificación escrita (por cualquier medio, incluido, entre otros, por correo electrónico a la cuenta de correo electrónico que se detalla las Condiciones Particulares o cualquier otra facilitada a la Compañía a tal efecto), con una antelación de al menos treinta (30) días. Queda entendido que: (a) si el Cliente decide dejar de recibir los servicios después de dicha modificación, tendrá que resolver este Contrato mediante notificación por escrito a ZAABRA PROFESIONAL, que tendrá que ser recibida por parte de ZAABRA PROFESIONAL antes del vencimiento del período de treinta (30) días, y (b) ZAABRA PROFESIONAL no podrá modificar de forma unilateral ninguno de los términos relativos a la contraprestación o a las tarifas o al Periodo de Permanencia, o que perjudiquen el derecho del Cliente de acceder al Servicio de membresía. Renuncia: Si alguna de las Partes no ejecutara cualquiera de las disposiciones del presente Contrato, dicho incumplimiento no será considerado como una renuncia a dichas disposiciones, ni a ninguna otra prevista en el Contrato, ni una renuncia al derecho de dicha Parte a ejecutar tales disposiciones posteriormente.  
                                       </p>
                                       <p class="parrafoQuienes">
                                       3. Separabilidad: En el caso de que cualquier parte, artículo, párrafo, oración o cláusula de este Contrato se considerase vaga, inválida o inaplicable, dicha parte será eliminada y el resto del Contrato continuará siendo válido y estando en vigor.  
                                       </p>
                                       <p class="parrafoQuienes">
                                       4. Independencia de las Partes: Las Partes reconocen que el presente Contrato no crea ningún tipo de relación laboral, societaria, de agencia o franquicia, de hecho o de derecho, entre las Partes, no pudiendo ninguna de ellas actuar o presentarse ante terceros como si tal fuera el caso. 
                                       </p>
                                       <p class="parrafoQuienes">
                                       5. Acuerdo íntegro: El Contrato, con las Condiciones Generales, las Condiciones Particulares del servicio y todas sus partes y Anexos, forman un único objeto, sin que quepa su cumplimiento parcial. 
                                       </p>
                                       <p class="parrafoQuienes">
                                       6. Discrepancia entre textos legales: En el supuesto en el que hubieses discrepancias entre el Contrato (incluyendo sus Anexos) y las condiciones legales o cualquier otro texto legal suscrito entre ZAABRA PROFESIONAL y el Cliente en el marco de la utilización del Sitio Web, prevalecerá el presente Contrato en relación todos los aspectos que conciernen al Servicio de membresía.
                                       Asimismo, en el supuesto en el que hubiese discrepancias entre las Condiciones Generales y las Condiciones Particulares, prevalecerán estas últimas.
                                       </p>
                                    </div>
                                </div>
                                <div class="col-md-12 animatedParent"  data-sequence = '500'>
                                    <div class="animated bounceInLeft" data-id = '24'>  
                                       <div class="col-md-12 tituloQuienes noPad">
                                            <h2 class="noPad">20. Régimen jurídico y ley aplicable</h2> 
                                        </div> 
                                        <p class="parrafoQuienes">
                                        20.1 Este Contrato tiene carácter mercantil y se regirá por sus propias cláusulas, y en lo no previsto en ellas, las Partes se atendrán a las previsiones dispuestas en la legislación Colombiana.<br>
                                        20.2 Renunciando las Partes a cualquier privilegio que pudiera corresponder, cualquier disputa o controversia en relación con, en conexión con, o resultante del Contrato será resuelto exclusivamente por los Jueces y Tribunales de Colombia.
                                       </p>
                                    </div>
                                </div>
                        </div>


                            <div class="col-12 row  margin-top-2 margin-bottom-2">
                                    <div class="col-6">
                                        <button class="boton-ver-siguiente-quienes" id="btn-atras-politicas"><i class="fas fa-arrow-left arrow-derecha"></i></button>  
                                    </div>
                                    <div class="col-6 text-right">
                                        <button  id="boton-ver-siguiente-terminosCondicionesZaabraProfesional" class="boton-ver-siguiente-quienes"><i class="fas fa-arrow-right arrow-derecha"></i></button>
                                    </div>
                             </div>

                   </div>

             </div>

            <div class="col-md-12"  id="terminosCondicionesZaabraProfesional">
                            <div class="row bannerPreguntas animate__animated animate__bounceInLeft">
                                <div class="col-9 col-md-9 container preguntas">
                                    <h1 class="letraPreguntas2">TÉRMINOS Y <br>
                                        CONDICIONES ZAABRA <br> PROFESIONAL</h1>
                                </div>
                                <div class="col-3 col-md-3 botonesQuienes text-webkit-center">
                                    <ul>
                                        <li><a id="li_quienes"></a></li>
                                        <li><a id="li_preguntas"></a></li>
                                        <li><a id="li_cookies"></a></li>
                                        <li><a id="li_politicas"  class="botonActivoQuienes"></a></li>
                                    </ul>       
                                </div>
                            </div>
                    <div class="container margin-top-2">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="col-md-12 animatedParent"  data-sequence = '500'>
                             <div class="animated bounceInLeft" data-id = '24'>
                                <div class="col-md-12 tituloQuienes noPad">
                                  <h2 class="noPad">Términos Y Condiciones </h2>
                                </div>
                               <p class="parrafoQuienes">
                                  Este documento describe los términos y condiciones generales (los "Términos y Condiciones Generales"), aplicables al acceso y uso de los servicios ofrecidos por IMPORTADORA ANDIAMO S. A. S. ("Zaabra") dentro del sitio www.zaabraprofesional.co y/u otros dominios (urls) relacionados (en adelante "ZAABRA PROFESIONAL" o el "Sitio"), en donde éstos Términos y Condiciones se encuentren. Cualquier persona que desee acceder y/o suscribirse y/o usar el Sitio o los Servicios podrá hacerlo sujetándose a los Términos y Condiciones Generales, junto con todas las demás políticas y principios que rigen www.zaabraprofesional.co y que son incorporados al presente documento directamente o por referencia o que son explicados y/o detallados en otras secciones del Sitio. En consecuencia, todas las visitas y todos los contratos y transacciones que se realicen en este Sitio, así como sus efectos jurídicos, quedarán regidos por estas reglas y sometidos a la legislación aplicable en Colombia. 
                               </p>
                               <div class="col-md-12 tituloQuienes noPad">
                                  <h2 class="noPad">Aviso Legal </h2>
                                </div>
                               <p class="parrafoQuienes">
                               El presente aviso legal regula el uso y utilización de la plataforma que es titular IMPORTADORA ANDIAMO SAS (en adelante ZAABRA PROFESIONAL). La navegación por el sitio web de ZAABRA PROFESIONAL le atribuye la condición de USUARIO del mismo y conlleva su aceptación plena y sin reservas de todas y cada una de las condiciones publicadas en este aviso legal, advirtiendo de que dichas condiciones podrán ser modificadas sin notificación previa por parte de ZAABRA PROFESIONAL, en cuyo caso se procederá a su publicación y aviso con la máxima antelación posible; Por ello es recomendable leer atentamente su contenido en caso de desear acceder y hacer uso de la información y de los servicios ofrecidos desde este sitio web.<br>
                               El usuario además, se obliga a hacer un uso correcto del sitio web de conformidad con las leyes, la buena fe, el orden público, los usos del tráfico y el presente Aviso Legal, y responderá frente a ZAABRA PROFESIONAL o frente a terceros, de cualquier daño y perjuicio que pudieran causarse como consecuencia del incumplimiento de dicha obligación; Cualquier utilización distinta a la autorizada está expresamente prohibida, pudiendo ZAABRA PROFESIONAL denegar o retirar el acceso y su uso en cualquier momento.
                               </p>
                               <div class="col-md-12 tituloQuienes noPad">
                                   <h2 class="noPad">1. Identificación</h2>
                                </div>
                               <p class="parrafoQuienes">
                               ZAABRA PROFESIONAL, en cumplimiento de la Ley 1581 de 2012<br>
                               Razón social: Importadora Andiamo sas<br>
                               Nombre Comercial: Zaabra Colombia<br>
                               Identificación (Nit): 901294385-1<br>
                               Dirección: Carrera 64 # 67 B – 89 Interior dos 
                               </p>
                               <div class="col-md-12 tituloQuienes noPad">
                                  <h2 class="noPad">2. Contacto</h2>
                                </div>
                               <p class="parrafoQuienes">
                               Para comunicarse con nosotros, contamos con diferentes medios de comunicación tanto escrita como telefónica y que detallamos a continuación<br>
                                Teléfono: 3212449869 – 7123946
                                Correo electrónico: Serviciosprofesionales@zaabra.com.co
                                Dirección: Carrera 64 # 67 B – 89 Interior dos 
                                Todas las notificaciones y comunicaciones entre los usuarios y ZAABRA PROFESIONAL se considerarán eficaces, a todos los efectos, cuando se realicen a través de cualquier medio de los detallados anteriormente.
                               </p>
                               </div>
                            </div>
                            <div class="col-md-12 animatedParent"  data-sequence = '500'>
                             <div class="animated bounceInLeft" data-id = '25'>
                               <div class="col-md-12 tituloQuienes noPad">
                                  <h2 class="noPad">3. Condiciones De Acceso Y Uso</h2>
                                </div>
                               <p class="parrafoQuienes">
                               El sitio web y sus servicios son de acceso libre y gratuito. No obstante, ZAABRA PROFESIONAL puede condicionar la utilización de algunos de los servicios ofrecidos en su plataforma a la previa redacción del correspondiente formulario con todos los datos y documentos solicitados, toda esta información está sujeta a verificación; de igual manera el usuario garantiza la autenticidad y actualidad de todos aquellos datos que comunique a ZAABRA PROFESIONAL y será el único responsable de las manifestaciones falsas o inexactas que realice.
                               </p>
                               <p class="parrafoQuienes">
                               El usuario o profesional se compromete expresamente a hacer un uso adecuado de los contenidos y servicios de ZAABRA PROFESIONAL y a no emplearlos con fines destructivos como:
                               </p>
                               <p class="parrafoQuienes">
                                •	Difundir contenidos delictivos, violentos, pornográficos, racistas, xenófobos, ofensivos, de apología del terrorismo o, en general, contrarios a la ley o al orden público.<br>
                                •	Introducir en la red virus informáticos o realizar actuaciones susceptibles de alterar, estropear, interrumpir o generar errores o daños en los documentos electrónicos, datos o sistemas físicos y lógicos de ZAABRA PROFESIONAL o de terceras personas; así como obstaculizar el acceso de otros usuarios al sitio web y a sus servicios mediante el consumo masivo de los recursos informáticos a través de los cuales ZAABRA PROFESIONAL presta sus servicios.<br>
                                •	Intentar acceder a las cuentas de correo electrónico de otros usuarios o áreas restringidas de los sistemas informáticos de ZAABRA PROFESIONAL o de terceros y, en su caso, extraer información.<br>
                                •	Vulnerar los derechos de propiedad intelectual o industrial, así como violar la confidencialidad de la información de ZAABRA PROFESIONAL o de terceros.<br>
                                •	Suplantar la identidad de cualquier otro usuario.<br>
                                •	Reproducir, copiar, distribuir, poner a disposición de, o cualquier otra forma de comunicación pública, transformar o modificar los contenidos, a menos que se cuente con la autorización del titular de los correspondientes derechos o ello resulte legalmente permitido.<br>
                                •	Conseguir datos con finalidad publicitaria y de remitir publicidad de cualquier clase y comunicaciones con fines de venta u otras de naturaleza comercial sin que medie su previa solicitud o consentimiento.
                               </p>
                               <p class="parrafoQuienes">
                               Todos los contenidos del sitio web, como textos, fotografías, gráficos, imágenes, iconos, tecnología, software, así como su diseño gráfico y códigos fuente, constituyen una obra cuya propiedad pertenece a ZAABRA PROFESIONAL, sin que puedan entenderse cedidos al usuario ninguno de los derechos de explotación sobre los mismos más allá de lo estrictamente necesario para el correcto uso de la web. 
                               </p>
                               <p class="parrafoQuienes">
                               En definitiva, los usuarios que accedan a este sitio web pueden visualizar los contenidos y efectuar, en su caso, copias privadas autorizadas siempre que los elementos reproducidos no sean cedidos posteriormente a terceros, ni se instalen a servidores conectados a redes, ni sean objeto de ningún tipo de explotación.  
                               </p>
                               <p class="parrafoQuienes">
                               Así mismo, todas las marcas, nombres comerciales o signos distintivos de cualquier clase que aparecen en el sitio web son propiedad de ZAABRA PROFESIONAL, sin que pueda entenderse que el uso o acceso al mismo atribuya al usuario derecho alguno sobre los mismos.   
                               </p>
                               <p class="parrafoQuienes">
                               El profesional, tecnólogo, docente o estudiante, al escribir en el sitio web respuestas a preguntas y consultas realizadas por particulares y, por tanto, publicar contenido en ZAABRA PROFESIONAL, estará otorgando a favor de ZAABRA PROFESIONAL una licencia mundial, no exclusiva y transferible (con derecho de sub-licencia) para utilizar, reproducir, distribuir, realizar obras derivadas de, mostrar y ejecutar ese Contenido en relación con la prestación de los Servicios y con el funcionamiento del Servicio y de la actividad de ZAABRA PROFESIONAL, incluyendo sin limitación alguna, a efectos de promoción y redistribución de la totalidad o de una parte del Servicio (y de sus obras derivadas) en cualquier formato y a través de cualquier canal de comunicación.  
                               </p>
                               <p class="parrafoQuienes">
                               La distribución, modificación, cesión o comunicación pública de los contenidos y cualquier otro acto que no haya sido expresamente autorizado por el titular de los derechos de explotación quedan prohibidos.  
                               </p>
                               <p class="parrafoQuienes">
                               El establecimiento de un hiperenlace no implica en ningún caso la existencia de relaciones entre hiperenlace y el propietario del sitio web en la que se establezca, ni la aceptación y aprobación por parte de hiperenlace de sus contenidos o servicios.<br>
                               ZAABRA PROFESIONAL no se responsabiliza del uso que cada usuario le dé a los materiales puestos a disposición en este sitio web ni de las actuaciones que realice en base a los mismos.
                               </p>
                               </div>
                            </div>
                        <div class="col-md-12 animatedParent"  data-sequence = '500'>
                            <div class="animated bounceInLeft" data-id = '26'>
                               <div class="col-md-12 tituloQuienes noPad">
                                 <h2 class="noPad">3.1 Exclusión De GarantíaS Y De Responsabilidad En El Acceso Y Uso</h2>
                                </div>
                               <p class="parrafoQuienes">
                                El contenido del presente sitio web es de carácter general y tiene una finalidad simplemente informativa, sin que se garantice plenamente el acceso a todos los contenidos, ni su exhaustividad, corrección, vigencia o actualidad, ni su idoneidad o utilidad para un objetivo específico.
                               </p>
                               <p class="parrafoQuienes">
                               ZAABRA PROFESIONAL excluye, hasta donde permite el ordenamiento jurídico, cualquier responsabilidad por los daños y perjuicios de toda naturaleza derivados de:
                               </p>
                               <p class="parrafoQuienes">
                               La imposibilidad de acceso al sitio web o la falta de veracidad, exactitud, exhaustividad y/o actualidad de los contenidos, así como la existencia de vicios y defectos de toda clase de los contenidos transmitidos, difundidos, almacenados, puestos a disposición, a los que se haya accedido a través del sitio web o de los servicios que se ofrecen.  
                               </p>
                               <P class="parrafoQuienes">
                               La presencia de virus o de otros elementos en los contenidos que puedan producir alteraciones en los sistemas informáticos, documentos electrónicos o datos de los usuarios. 
                               </P>
                               <P class="parrafoQuienes">
                               El incumplimiento de las leyes, la buena fe, el orden público, los usos del tráfico y el presente aviso legal como consecuencia del uso incorrecto del sitio web. En particular, y a modo ejemplificativo, ZAABRA PROFESIONAL no se hace responsable de las actuaciones de terceros que vulneren derechos de propiedad intelectual e industrial, secretos empresariales, derechos al honor, a la intimidad personal y familiar y a la propia imagen, así como la normativa en materia de competencia desleal y publicidad ilícita. 
                               </P>
                               <P class="parrafoQuienes">
                               Así mismo, ZAABRA PROFESIONAL declina cualquier responsabilidad respecto a la información que se halle fuera de esta web y no sea gestionada directamente por nuestro web master. La función de los links que aparecen en esta web es exclusivamente la de informar al usuario sobre la existencia de otras fuentes susceptibles de ampliar los contenidos que ofrece este sitio web. ZAABRA PROFESIONAL no garantiza ni se responsabiliza del funcionamiento o accesibilidad de los sitios enlazados; ni sugiere, invita o recomienda la visita a los mismos, por lo que tampoco será responsable del resultado obtenido. ZAABRA PROFESIONAL no se responsabiliza del establecimiento de hipervínculos por parte de terceros. 
                               </P>
                               </div>
                            </div>
                                <div class=" col-md-12 animate__animated animate__bounceInLeft" >
                                  <div class="col-md-12 tituloQuienes noPad">
                                     <h2  class="noPad">3.2 Procedimiento En Caso De Realización De Actividades De Carácter Ilícito</h2>
                                   </div>
                                    <P class="parrafoQuienes">
                                    En el caso de que cualquier usuario o un tercero considere que existen hechos o circunstancias que revelen el carácter ilícito de la utilización de cualquier contenido y/o de la realización de cualquier actividad en las páginas web incluidas o accesibles a través del sitio web, deberá enviar una notificación a ZAABRA PROFESIONAL identificándose debidamente y especificando las supuestas infracciones. 
                                    </P>
                                    <div class="col-md-12 tituloQuienes noPad">
                                      <h2 class="noPad">3.3 Publicaciones</h2>
                                    </div>
                                    <P class="parrafoQuienes">
                                    La información administrativa facilitada a través del sitio web no sustituye la publicidad legal de las leyes, normativas, planes, disposiciones generales y actos que tengan que ser publicados formalmente a los diarios oficiales de las administraciones públicas, que constituyen el único instrumento que da fe de su autenticidad y contenido. La información disponible en este sitio web debe entenderse como una guía sin propósito de validez legal.  
                                    </P>
                                    <div class="col-md-12 tituloQuienes noPad">
                                      <h2 class="noPad">4. Legislación Aplicable</h2>
                                    </div>
                                    <P class="parrafoQuienes">
                                    Las condiciones presentes se regirán por la legislación colombiana vigente; el idioma utilizado será el español.
                                    </P>
                                    <div class="col-md-12 tituloQuienes noPad">
                                      <h2 class="noPad">Condiciones De Uso</h2>
                                    </div>
                                    <P class="parrafoQuienes">
                                        Las presentes Condiciones Generales regulan el USO de los servicios ofertados en el sitio web www.zaabraprofesional.com.co, del que es titular IMPORTADORA ANDIAMO SAS (en adelante, ZAABRA PROFESIONAL).<br>
                                        El USO de cualquiera de los servicios conlleva la aceptación plena y sin reservas de todas y cada una de las Condiciones Generales que se indican, así como del Aviso Legal, sin perjuicio de la aceptación de las Condiciones Particulares que pudieran ser de aplicación.<br>
                                        El uso y navegación del sitio web de ZAABRA PROFESIONAL por parte de los usuarios es TOTALMENTE GRATUITO. Los usuarios compran y adquieren a través de la página web ZAABRA PROFESIONAL los servicios solicitados, sean pagos a membresías o pagos de agendamiento de consulta en los diferentes perfiles.<br>
                                        Estas Condiciones Generales podrán ser modificadas sin notificación previa, por tanto, es recomendable leer atentamente su contenido antes de proceder al acceso de cualquiera de los servicios ofertados.<br>
                                        En caso de estar en desacuerdo con la totalidad o parte de las presentes Condiciones, el Cliente debe de abstenerse de continuar utilizando el sitio web y/o sus servicios.
                                    </P>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 row  margin-top-2 margin-bottom-2">
                             <div class="col-6">
                                <button class="boton-ver-siguiente-quienes" id="btn-atras-terminosCondiciones"><i class="fas fa-arrow-left arrow-derecha"></i></button>  
                            </div>
                        </div>
                    </div>
            </div>

</div>


@endsection