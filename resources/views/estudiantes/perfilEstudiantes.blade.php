<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Estudiantes</title>
               
        <!-- favicon -->
        <link rel="shortcut icon" href=" {{url('/templateEstudiantes/images/favicon.ico') }}">
        <!-- Bootstrap -->
        <link href="{{url('/templateEstudiantes/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Magnific -->
        <link href="{{url('/templateEstudiantes/css/magnific-popup.css') }}" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="{{url('/templateEstudiantes/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.0/css/line.css">
        <!-- Main Css -->
        <link href="{{url('/templateEstudiantes/css/style.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{url('/templateEstudiantes/css/colors/default.css') }}" rel="stylesheet" id="color-opt">
         <!-- Slider -->               
        <link rel="stylesheet" href="{{url('/templateEstudiantes/css/owl.carousel.min.css') }}"/> 
        <link rel="stylesheet" href="{{url('/templateEstudiantes/css/owl.theme.default.min.css') }}"/>
        <!-- Main Css -->
        <link href="{{url('/templateEstudiantes/css/style.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{url('/templateEstudiantes/css/colors/default.css') }}" rel="stylesheet" id="color-opt">
    </head>

    <body>
        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <!-- Logo container-->
                <a class="logo" href="">
                    @if(!empty($universidad))
                    <img src="{{url($universidad[0]->fotouniversidad) }}" height="50" alt="">
                    @endif
                </a>
                <!-- End Logo container-->                        
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->

        <!-- Start Hero -->
        <section class="bg-half-170 d-table w-100">
            <div class="container">
                <div class="row mt-5 align-items-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="title-heading">
                            <h6 class="text-uppercase">{{$especialidades[0]->nombreEspecialidad}}</h6>
                            <h4 class="display-4 font-weight-bold mb-4"><span class="element" data-elements="{{$objEstudiante[0]->nombre.' '.$objEstudiante[0]->apellido}}"></span></h4>
                            
                            <p class="text-muted para-desc" style="margin-bottom: 50px!important;">Estudiante de Artes en la Universidad de Rosario de Octavo semestre, enfocado en la Fotografía Documental y Paisajista, Dibujo e Ilustración.</p>
                            <div class="container  d-md-none d-lg-block">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card features p-4 px-md-3 border-0 rounded-md shadow text-center">
                                            <div class="icons rounded h2 text-center text-primary px-3">
                                                <img style="width: 80%;" src="{{url('/templateEstudiantes/images/Rosario/Iconos-Wapng.png') }}">
                                            </div>

                                            <div class="card-body p-0 content mt-4">
                                                <a style="font-size: 18px;" href="tel:+{{$objEstudiante[0]->whatsapp}}" class="text-primary"><strong>WhatsApp</strong></a>
                                                
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-3 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                        <div class="card features p-4 px-md-3 border-0 rounded-md shadow text-center">
                                            <div class="icons rounded h2 text-center text-primary px-3">
                                                <img style="width: 80%;" src="{{url('/templateEstudiantes/images/Rosario/Iconos-Face.png') }}">
                                            </div>

                                            <div class="card-body p-0 content mt-4">
                                                <a style="font-size: 18px;" href="{{$objEstudiante[0]->facebook}}" class="text-primary"><strong>Facebook</strong></a>
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-3 col-md-6 col-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                        <div class="card features p-4 px-md-3 border-0 rounded-md shadow text-center">
                                            <div class="icons rounded h2 text-center text-primary px-3">
                                                <img style="width: 80%;" src="{{url('/templateEstudiantes/images/Rosario/Iconos-Ins.png') }}">
                                            </div>

                                            <div class="card-body p-0 content mt-4">
                                                <a style="font-size: 18px;" href="{{$objEstudiante[0]->instagram}}" class="text-primary"><strong>Instagram</strong></a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-3 col-md-6 col-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                        <div class="card features p-4 px-md-3 border-0 rounded-md shadow text-center">
                                            <div class="icons rounded h2 text-center text-primary px-3">
                                                <img style="width: 80%;" src="{{url('/templateEstudiantes/images/Rosario/Iconos-Correo.png') }}">
                                            </div>

                                            <div class="card-body p-0 content mt-4">
                                                <a style="font-size: 18px;" href="mailto: {{$objEstudiante[0]->email}}" class="text-primary"><strong>E-mail</strong></a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end container-->
      
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <img src="{{url('/'.$objEstudiante[0]->fotoperfil) }}" class="img-fluid" alt="">
                    </div><!--end col-->

                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->


        <section>
                <div class="container d-md-block d-lg-none">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-3">
                            <div class="card features p-4 px-md-3 border-0 rounded-md shadow text-center">
                                <div class="icons rounded h2 text-center text-primary px-3">
                                    <img style="width: 80%;" src="{{url('/templateEstudiantes/images/Rosario/Iconos-Wapng.png') }}">
                                </div>

                                <div class="card-body p-0 content mt-4">
                                    <a style="font-size: 18px;" href="{{ $objEstudiante[0]->whatsapp }}" class="text-primary"><strong>WhatsApp</strong></a>
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-lg-3 col-md-3 col-3 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <div class="card features p-4 px-md-3 border-0 rounded-md shadow text-center">
                                <div class="icons rounded h2 text-center text-primary px-3">
                                    <img style="width: 80%;" src="{{url('/templateEstudiantes/images/Rosario/Iconos-Face.png') }}">
                                </div>

                                <div class="card-body p-0 content mt-4">
                                    <a style="font-size: 18px;" href="{{ $objEstudiante[0]->facebook }}" class="text-primary"><strong>Facebook</strong></a>
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-lg-3 col-md-3 col-3 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <div class="card features p-4 px-md-3 border-0 rounded-md shadow text-center">
                                <div class="icons rounded h2 text-center text-primary px-3">
                                    <img style="width: 80%;" src="{{url('/templateEstudiantes/images/Rosario/Iconos-Ins.png') }}">

                                </div>

                                <div class="card-body p-0 content mt-4">
                                    <a style="font-size: 18px;" href="{{ $objEstudiante[0]->instagram }}" class="text-primary"><strong>Instagram</strong></a>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-lg-3 col-md-3 col-3 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <div class="card features p-4 px-md-3 border-0 rounded-md shadow text-center">
                                <div class="icons rounded h2 text-center text-primary px-3">
                                    <img style="width: 80%;" src="{{url('/templateEstudiantes/images/Rosario/Iconos-Correo.png') }}">
                                </div>

                                <div class="card-body p-0 content mt-4">
                                    <a style="font-size: 18px;" href="mailto: {{ $objEstudiante[0]->url }}" class="text-primary"><strong>E-mail</strong></a>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </section>


        <!-- End section -->
       
        <!-- Start -->
        <section class="section pt-0">
            <div class="container">
                <div class="row">
                    <ul class="col container-filter list-unstyled categories-filter text-center" id="filter">
                        <li class="list-inline-item"><a class="categories position-relative d-block text-dark active" data-filter="*">Portafolio</a></li>
                        <li class="list-inline-item"><a class="categories position-relative d-block text-dark" data-filter=".branding">Innovación</a></li>
                        <li class="list-inline-item"><a class="categories position-relative d-block text-dark" data-filter=".designing">Creación</a></li>
                        <li class="list-inline-item"><a class="categories position-relative d-block text-dark" data-filter=".photography">Emprendimiento</a></li>
                    </ul>
                </div><!--end row-->
            </div><!--end container-->
            

            <div class="container-fluid">
                <div class="row projects-wrapper">

                    @if(!empty ($objEstudiante[0]->imagen))
                            @foreach (json_decode($objEstudiante[0]->imagen) as $valueJson)
                                @php $tamaño = $loop->iteration @endphp 
                            @endforeach
                    @endif

                    @for($i = 1; $i <= $tamaño; $i++)
                    @php $actual = $i;   @endphp

                        @foreach (json_decode($objEstudiante[0]->posicionImagen) as $valueJson)
                            @if($actual == $loop->iteration)
                                @if($valueJson == 1)
                                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2 branding">
                                @endif     
                                @if($valueJson == 2)
                                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2 designing">
                                @endif 
                                @if($valueJson == 3)
                                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2 photography">
                                @endif    
                            @endif
                        @endforeach   
                            @foreach (json_decode($objEstudiante[0]->imagen) as $valueJson)
                                @if($actual == $loop->iteration)
                                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                                        <div class="card-body p-0">
                                            <a class="mfp-image d-inline-block" href="{{url($valueJson) }}" title="">
                                                <img src="{{url($valueJson) }}" class="img-fluid" alt="work-image">
                                            </a>
                                            <div class="content bg-white p-3 rounded shadow">
                                               
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            
                            @endforeach
                        @foreach (json_decode($objEstudiante[0]->posicionImagen) as $valueJson)
                            @if($actual == $loop->iteration)
                                </div><!--end col-->
                            @endif
                        @endforeach 

                    @endfor    
                   
                </div><!--end row-->
                
            </div><!--end container-->

        </section><!--end section-->
        <!-- End -->

        <section class="section pt-0">
            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4 font-weight-bold border-bottom pb-3">Experiencia Profesional</h4>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row justify-content-center">
                    <div class="col-lg-12 mt-4 s-6">
                        <div id="customer-testi" class="owl-carousel owl-theme">
                            @foreach ($objExperiencia as $item)
                                <div class="media customer-testi m-2">
                                    <img src="{{url('/templateEstudiantes/images/Rosario/Iconos-Experiencia'.$loop->iteration.'.jpg') }}" class="avatar avatar-small mr-3 rounded shadow" alt="">
                                    <div class="media-body content p-3 shadow rounded bg-white position-relative">

                                        <p class="text-primary mb-0">{{$item->nombreEmpresa}}</p>
                                        <p class="text-muted mt-2">{{$item->descripcion}}</p>
                                        <small class="text-muted">{{$item->fechainicio}} - {{$item->fechafin}}</small>
                                        
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <section class="section">
            <div class="container">
                <div class="row pt-5">
                    <!-- WORK START -->
                    <div class="col-lg-6 col-md-6">
                        <div class="row projects-wrapper">
                        @if(!empty($objEstudiante[0]->estudios))
                            @foreach (json_decode($objEstudiante[0]->estudios) as $valueJson)
                                <div class="col-6 spacing">
                                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                                        <div class="card-body p-0">
                                            <a class="mfp-image d-inline-block" href="{{url($valueJson) }}" title="">
                                                <img src="{{url($valueJson) }}" class="img-fluid" alt="work-image">
                                            </a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            @endforeach 
                        @endif
                        @if(!empty($objEstudiante[0]->titulos))
                            @foreach (json_decode($objEstudiante[0]->titulos) as $valueJson)
                                <div class="col-6 spacing">
                                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                                        <div class="card-body p-0">
                                            <a class="mfp-image d-inline-block" href="{{url($valueJson) }}" title="">
                                                <img src="{{url($valueJson) }}" class="img-fluid" alt="work-image">
                                            </a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            @endforeach 
                        @endif
                        @if(!empty($objEstudiante[0]->Publicaciones))
                            @foreach (json_decode($objEstudiante[0]->Publicaciones) as $valueJson)
                                <div class="col-6 spacing">
                                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                                        <div class="card-body p-0">
                                            <a class="mfp-image d-inline-block" href="{{url($valueJson) }}" title="">
                                                <img src="{{url($valueJson) }}" class="img-fluid" alt="work-image">
                                            </a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            @endforeach 
                        @endif
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-6 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="row ml-lg-4 sticky-sidebar">
                            <div class="col-lg-12">
                                <div class="section-title mb-3 pb-2">
                                    <h4 class="title mb-2 font-weight-bold border-bottom pb-3 text-center">Estudios</h4>
                                </div>
                            </div><!--end col-->
                            
                            <div class="col-lg-9 mt-4 pt-2">
                                <div class="work-details bg-light p-4">
                                  
                                    <ul class="list-unstyled mb-0">
                                       
                                    @if(!empty ($objEstudiante[0]->nivelEstudios))
                                            @foreach (json_decode($objEstudiante[0]->nivelEstudios) as $valueJson)
                                                @php $tamaño = $loop->iteration @endphp 
                                            @endforeach
                                    @endif

                                    @for($i = 1; $i <= $tamaño; $i++)
                                    @php $actual = $i;   @endphp
                                    <li class="mt-6">
                                        @if(!empty($objEstudiante[0]->nivelEstudios))
                                            @foreach (json_decode($objEstudiante[0]->nivelEstudios) as $valueJson)
                                                @if($actual == $loop->iteration)
                                                    <h5>{{$valueJson}}</h5>
                                                @endif
                                            @endforeach
                                        @endif
                                        @if(!empty($objEstudiante[0]->nombreEstudios))
                                            @foreach (json_decode($objEstudiante[0]->nombreEstudios) as $valueJson)
                                                @if($actual == $loop->iteration)
                                                    <h7>{{$valueJson}}</h7>
                                                @endif
                                            @endforeach
                                        @endif
                                        @if(!empty($objEstudiante[0]->fechaEstudios))
                                            @foreach (json_decode($objEstudiante[0]->fechaEstudios) as $valueJson)
                                                @if($actual == $loop->iteration)
                                                <p>{{$valueJson}}</p>
                                                @endif
                                            @endforeach
                                        @endif
                                        
                                        </li>

                                        <br>
                                    @endfor
                                    </ul>                          
                                </div>
           
                            </div><!--end col-->

                            <div class="col-lg-12">
                                <div class="section-title mb-3 pb-2">
                                    <h4 class="title mb-2 font-weight-bold border-bottom pb-3 text-center">Certificaciones</h4>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-9 mt-4 pt-2">
                                <div class="work-details bg-light p-4">
                                  
                                    <ul class="list-unstyled mb-0">
                                    @if(!empty ($objEstudiante[0]->entidadCertificado))
                                            @foreach (json_decode($objEstudiante[0]->entidadCertificado) as $valueJson)
                                                @php $tamaño = $loop->iteration @endphp 
                                            @endforeach
                                    @endif

                                    @for($i = 1; $i <= $tamaño; $i++)
                                    @php $actual = $i;   @endphp
                                    <li class="mt-6">
                                        @if(!empty($objEstudiante[0]->entidadCertificado))
                                            @foreach (json_decode($objEstudiante[0]->entidadCertificado) as $valueJson)
                                                @if($actual == $loop->iteration)
                                                    <h5>{{$valueJson}}</h5>
                                                @endif
                                            @endforeach
                                        @endif
                                        @if(!empty($objEstudiante[0]->nombreCertificado))
                                            @foreach (json_decode($objEstudiante[0]->nombreCertificado) as $valueJson)
                                                @if($actual == $loop->iteration)
                                                    <h7>{{$valueJson}}</h7>
                                                @endif
                                            @endforeach
                                        @endif
                                        @if(!empty($objEstudiante[0]->fechaEstudios))
                                            @foreach (json_decode($objEstudiante[0]->fechaEstudios) as $valueJson)
                                                @if($actual == $loop->iteration)
                                                <p>{{$valueJson}}</p>
                                                @endif
                                            @endforeach
                                        @endif
                                        
                                        </li>

                                        <br>
                                    @endfor
                                        
                                    </ul>                          
                                </div>
           
                            </div><!--end col-->
                            <div class="col-lg-12">
                                <div class="section-title mb-3 pb-2">
                                    <h4 class="title mb-2 font-weight-bold border-bottom pb-3 text-center">Publicaciones</h4>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-9 mt-4 pt-2">
                                <div class="work-details bg-light p-4">
                                  
                                    <ul class="list-unstyled mb-0">
                                    @if(!empty ($objEstudiante[0]->nombrePublicacion))
                                            @foreach (json_decode($objEstudiante[0]->nombrePublicacion) as $valueJson)
                                                @php $tamaño = $loop->iteration @endphp 
                                            @endforeach
                                    @endif

                                    @for($i = 1; $i <= $tamaño; $i++)
                                    @php $actual = $i;   @endphp
                                    <li class="mt-6">
                                        @if(!empty($objEstudiante[0]->linksPublicacion))
                                            @foreach (json_decode($objEstudiante[0]->linksPublicacion) as $valueJson)
                                                @if($actual == $loop->iteration)
                                                    <a href="{{$valueJson}}">
                                                @endif
                                            @endforeach
                                        @endif

                                        @if(!empty($objEstudiante[0]->nombrePublicacion))
                                            @foreach (json_decode($objEstudiante[0]->nombrePublicacion) as $valueJson)
                                                @if($actual == $loop->iteration)
                                                    <h5>{{$valueJson}}</h5>
                                                @endif
                                            @endforeach
                                        @endif
                                        
                                        @if(!empty($objEstudiante[0]->linksPublicacion))
                                            @foreach (json_decode($objEstudiante[0]->linksPublicacion) as $valueJson)
                                                @if($actual == $loop->iteration)
                                                    </a>
                                                @endif
                                            @endforeach
                                        @endif
                                        
                                        </li>

                                        <br>
                                    @endfor
                                    
                                        
                                    </ul>                          
                                </div>
           
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!--<section class="section pt-0">
            <div class="container">
                <div class="col-12">
                   <h4 class="title mb-2 font-weight-bold border-bottom pb-3 text-center" style="margin-top: 2%; font-size: 40px;">Videoteca</h4>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="position-relative">
                            <iframe width="100%" src="https://www.youtube.com/embed/eWbqzKqTIEI?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="position-relative">
                            <iframe width="100%" src="https://www.youtube.com/embed/eWbqzKqTIEI?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="position-relative">
                            <iframe width="100%" src="https://www.youtube.com/embed/eWbqzKqTIEI?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>                    
                </div>
            </div>-end container-->
        <!--</section>-->
        <!-- Start -->
        <footer class="bg-light py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center">
                            <p class="mb-0">© 2020 Zaabra Profesional</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- End -->

        <!-- Back to top -->
        <a href="#" class="btn btn-pills btn-icon btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
        <!-- Back to top -->
        
        <!-- Javascript -->
        <script src="{{url('/templateEstudiantes/js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{url('/templateEstudiantes/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{url('/templateEstudiantes/js/jquery.easing.min.js ') }}"></script>
        <script src="{{url('/templateEstudiantes/js/scrollspy.min.js ') }}"></script>

        <!-- Typed -->
        <script src="{{url('/templateEstudiantes/js/typed.js ') }}"></script>
        <script src="{{url('/templateEstudiantes/js/typed.init.js') }}"></script>
        <!-- SLIDER -->
        <script src="{{url('/templateEstudiantes/js/owl.carousel.min.js') }} "></script>
        <script src="{{url('/templateEstudiantes/js/owl.init.js ') }}"></script>

        <!-- Magnific -->
        <script src="{{url('/templateEstudiantes/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{url('/templateEstudiantes/js/isotope.js') }}"></script>
        <script src="{{url('/templateEstudiantes/js/portfolio.init.js') }}"></script>
        <script src="{{url('/templateEstudiantes/js/magnific.init.js') }}"></script>
        <!-- Icon -->
        <script src="{{url('/templateEstudiantes/js/feather.min.js') }}"></script>
        <script src="{{url('/templateEstudiantes/https://unicons.iconscout.com/release/v3.0.0/script/monochrome/bundle.js') }}"></script>
        
        <!-- Main Js -->
        <script src="{{url('/templateEstudiantes/js/app.js') }}"></script>

    
    </body>

</html>