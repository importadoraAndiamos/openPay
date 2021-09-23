<div class="container-color"></div> <!-- VERSION ESCRITORIO -->
<div class="container-fluid header header-visible-en-pc">
    <!-- SECCION LOGO ZAABRA HEADER -->
    <div class="contain-logo">
        <a href="{{ url('/') }}">
            <img class="logoHeaderSProfesionales" src="{{$urlZaabra}}img/Logozaabra.svg">
        </a>    

    </div>
    <!-- SECCION BARRA DE BUSQUEDA HEADER -->
    <div class=" col-lg-4 col-xl-4 contBuscadorHeader">
        <div class="bloqueA row">
            <div class="col-lg-12 col-xl-12 seccionBuscadorHeader ">
                <div class="BarraBusquedaHeader">
                    <form action="{{url('/busqueda')}}" method="POST" class="form-inline heigFormHeader" id="buscar">
                        {{ csrf_field() }}
                        <input class="inputBarraBusquedad" type="buttton" name="buscar" id="barra_buscar"
                            autocomplete="off">
                        <input type="submit" class="contenedorLupa" value="">
                    </form>
                    <script>
                    var lista1 = "{{$listaAutocompletable}}";
                    lista1 = lista1.replace(/&/ig, '').replace(/quot/ig, "").replace(/,/ig, "").replace(/"/ig, "");
                    var lista = lista1.split(";");
                    autocomplete(document.getElementById("barra_buscar"), lista);
                    </script>
                </div>
            </div>
        </div>
    </div>
    <!-- SECCION BOTON USUARIO HEADER -->
    <div class="col-lg-2 col-xl-2 dropdown noPad positionBtnUsuarioHeader">
        <div class="col-lg-12 positionBtnUsuarioHeader noPad">
            @guest
            <button class="dropdown-toggle propiedadesBotonUsuario noPad"
                onclick="window.location.href= '{{ route('login') }}'" type="button" id="dropdownMenuButton"
                aria-haspopup="true" aria-expanded="false">
                <div class="col-lg-12 noPad contImgIngresar">
                    <img class="iconoUsuarioHeader" src="{{$urlZaabra}}img/logobtningresar.png">
                    <span id="spanIngresar" class="palabraIngresarUsuario">Ingresar</span>
                </div>
            </button>
            @else
            <button class="dropdown-toggle propiedadesBotonUsuario altoBotones" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="col-lg-12 noPad contImgIngresar">
                    <img class="iconoUsuarioHeader" src="{{$urlZaabra}}img/logobtningresar.png">
                    <span id="spanIngresar" class="palabraIngresarUsuario">Mi cuenta</span>
                </div>
            </button>
            @endguest
            <!-- SECCION MENU BOTON USUARIO HEADER -->
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                @guest
                @else
                <a class="dropdown-item colorFontDropDownMenuHeader" href="{{ url('miCuenta') }}"> <i
                        class="fa fa-user colorIcono" style="word-spacing:5px;"> </i> Mi cuenta</a>
                <a class="dropdown-item colorFontDropDownMenuHeader" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out-alt colorIconoOutLog" style="word-spacing:5px;"> </i>
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @endguest
            </div>
        </div>
    </div>
    <!-- SECCION BOTON PREMIUM HEADER -->
    <div class="col-lg-2 col-xl-2 noPad contbtnMembresia">
        <button type="button" class="btn fe-pulse padBtnMemHeader">
            <a href="{{ url('/premiunViewHome') }}">
                <img class="imgMembresiaHeader" src="{{$urlZaabra}}img/imagen_membresia.png">
            </a>
        </button>
    </div>
</div>
<!-- VERSION MOVIL -->
<div class="container-fluid header header-visible-en-cel">
    <div class="col-12 ajusteContenido">
        <!-- SECCION LOGO ZAABRA HEADER -->
        <div class="contain-logo">
            <img class="logoHeaderSProfesionales" src="{{$urlZaabra}}img/Logozaabra.svg">
        </div>
        <!-- SECCION BARRA DE BUSQUEDA HEADER -->
        <div class="positionIConoLupaHeader">
            <button type="button" class="btnLupaHeaderMovil">
                <img class="lupaHeaderMovil" id="btn-buscadorOculto" src="{{$urlZaabra}}img/Lupa_Iconos.png">
            </button>
        </div>
        <!-- SECCION BOTON USUARIO HEADER -->
        <div class="dropdown noPad positVerticalUserHeader">
            @guest
            <button class="dropdown-toggle btnUserHeader noPad" onclick="window.location.href= '{{ route('login') }}'"
                type="button" id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false">
                <img class="userHeaderMovil" src="https://zaabra.co/img/Usuario_Iconos.png">
            </button>
            @else
            <button class="dropdown-toggle propiedadesBotonUsuario btnUsermICuentaCel" type="button"
                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="userHeaderMovil768" src="https://zaabra.co/img/Usuario_Iconos.png">
            </button>
            @endguest
            <!-- SECCION MENU BOTON USUARIO HEADER -->
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                @guest
                @else
                <a class="dropdown-item colorFontDropDownMenuHeader" href="{{ url('miCuenta') }}"> <i
                        class="fa fa-user colorIcono" style="word-spacing:5px;"> </i> Mi cuenta</a>
                <a class="dropdown-item colorFontDropDownMenuHeader" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out-alt colorIconoOutLog" style="word-spacing:5px;"> </i>
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @endguest
            </div>
            <!-- SECCION MENU BOTON USUARIO HEADER -->
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                @guest
                @else
                <a class="dropdown-item colorFontDropDownMenuHeader" href="{{ url('miCuenta') }}"> <i
                        class="fa fa-user colorIcono" style="word-spacing:5px;"> </i> Mi cuenta</a>
                <a class="dropdown-item colorFontDropDownMenuHeader" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out-alt colorIcono" style="word-spacing:5px;"> </i>
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @endguest
            </div>
        </div>
        <!-- SECCION BOTON PREMIUM HEADER -->
        <div class="contbtnMembresia">
            <button type="button" class="btn fe-pulse2 padBtnMembHeaderMob">
                <a href="{{ url('/premiunViewHome') }}">
                    <img class="imgMembresiaHeaderMobl" src="{{$urlZaabra}}img/pagoPremiun/botonPremiun.jpg">
                </a>
            </button>
        </div>
    </div>
    <div class="container-fluid padContBuscadorOculto ocultaBuscador" id="buscadorOculto">
        <div class="col-12 noPad">
            <div class="bloqueA row">
                <div class="col-12 seccionBuscadorHeader ">
                    <div class="BarraBusquedaHeader">
                        <form action="{{url('/busqueda')}}" method="POST" class="form-inline">
                            @csrf
                            <input class="inputBarraBusquedad" type="buttton" name="buscar" id="barra_buscarCel"
                                autocomplete="off">
                            <input type="submit" class="contenedorLupa" value="">
                        </form>
                        <script>
                        var lista1 = "{{$listaAutocompletable}}";
                        lista1 = lista1.replace(/&/ig, '').replace(/quot/ig, "").replace(/,/ig, "").replace(/"/ig, "");
                        var lista = lista1.split(";");
                        autocomplete(document.getElementById("barra_buscarCel"), lista);
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>