@extends('layouts.index')
@section('contenido')
<div class="container">
    <div class="justify-content-center padContLoginVerMobl">
        <div class="col-12 padTamCelularLogin col-md-8">
            <div class="col-12 col-md-12 row card-header contenedorHeader">
                <div class="aliniacionLogin noPad">
                    <span class="tipografiaInicioSesion"> {{ __('Iniciar Sesión') }} </span>
                </div>
                <div class="aliniacionLogin2 noPad">
                    <a href="{{ route('register') }}" class="tipografiaCrearCuenta">Crear Cuenta</a>
                </div>
            </div>
            <div class="card propiedadesCard">
                <div class="card-body propiedadesCard-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group padLateralesVerCelular">
                            <div class="col-12 col-md-12 padVersionCelularCont contenedorEmail">
                                <label for="email"
                                    class="col-form-label tipografiaPalabras">{{ __('Correo Electrónico') }}</label>
                                <input id="email" placeholder="zaabra@gmail.com" type="email"
                                    class="anchoCajaCorreo @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-12 col-md-12 padVersionCelularCont padTopBotPass">
                                <label for="password"
                                    class="col-form-label tipografiaPalabras">{{ __('Contraseña') }}</label>
                                <div class="contIconoPaswordLogin">
                                    <input id="password" placeholder="contraseña" type="password"
                                        class="anchoCajaPasword @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">
                                    <span toggle="#password"
                                        class="fa fa-fw fa-eye field-icon toggle-password1 "></span>
                                </div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <div class="container-button-sesion">
                                <button type="submit" class="btn btn-primary propiedadesBtnLogin">
                                    {{ __('Iniciar Sesión') }}
                                </button>
                            </div>
                            <div class="col-md-12 cajaMensajePasword">
                                @if (Route::has('password.request'))
                                <a class="mensajePasword palabraOlvidasteContraseña" style="text-decoration: none"
                                    href="{{ route('password.request') }}">
                                    {{ __('¿Olvidaste tu contraseña?') }}
                                </a>
                                @endif
                            </div>

                            <!--  
                                    <div class="col-5 padRigHrTopFaceLogin">
                                        <hr class="lineaLogin">
                                    </div>
                                    <div class="col-2 noPad contenedorIngresa">
                                        <h5 class="tipografiaTerminosCondiciones">O</h5>
                                    </div>
                                    <div class="col-5 padRigHrTopGooLogin">
                                        <hr class="lineaLogin">
                                    </div> -->

                        </div>
                    </form>
                    <div class="col-12 col-md-12 paddingRespectoFooder">
                        <div class="offset-2 col-5 offset-md-2 col-md-5 noPad continue-google">
                            <button type="submit" class="propiedadesBtnRedSocial">
                                <div class="col-2 col-md-2 noPad">
                                    <img class="btnLoginGoogle" src="{{$urlZaabra}}img/footer/gmail2.png">
                                </div>
                                <div class="col-10 col-md-10 alinFontGoogle">
                                    <a href="{{ url('login/google')}}">
                                        <span class="tipografiaRedSocial tipografiaRedSocialGoo">Continúa con Google
                                        </span>
                                    </a>
                                </div>
                            </button>
                        </div>
                        <div class="col-5 col-md-5 noPad continue-face">
                            <button type="submit" class="propiedadesBtnRedSocial">
                                <div class="col-2 col-md-2 noPad">
                                    <img class="btnLoginFace tamaImgbtnRecSoc"
                                        src="{{$urlZaabra}}img/footer/facebook2.png">
                                </div>
                                <div class="col-10 col-md-10 alinFontFace">
                                    <a href="{{ url('login/facebook')}} ">
                                        <span class="tipografiaRedSocial">Continúa con Facebook</span>
                                    </a>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PIE PAGINA VERSION ESCRITORIO styles en profesionales-login.scss -->
        <div class="container-general-footer-PremiumLoginRegister">
            <div class="container-principal-footer-PremiunHome">
                <div class="container-medios-pago">
                    <div class="col-md-12 noPad">
                        <h1 class="noPadMar seccion-mediosdPagos-titulo-PremiunHome">MEDIOS DE PAGO</h1>
                        <h2 class="noPadMar seccion-mediosdPagos-subTitulo-PremiunHome">Transferencia bancaria</h2>
                    </div>
                    <div class="col-md-12 noPad seccion-mediosdPagos-content-imgCelulares-PremiunHome">
                        <img class="seccion-mediosdPagos-content-imgCelulares-style-PremiunHome"
                            src="img/pagoPremiun/tranferenciaBancaria.png">
                    </div>
                </div>
                <div class="container-bancos">
                    <div class="col-md-12 noPad mb-2">
                        <h2 class="noPadMar seccion-mediosdPagos-subTitulo-bancos-PremiunHome">BBVA</h2>
                        <h3 class="noPadMar seccion-mediosdPagos-cuenta-texto-PremiunHome">Cuenta
                            corriente<br>00130724000100022264</h3>
                    </div>
                    <div class="col-md-12 noPad mb-2">
                        <h2 class="noPadMar seccion-mediosdPagos-subTitulo-bancos-PremiunHome">BANCOLOMBIA</h2>
                        <h3 class="noPadMar seccion-mediosdPagos-cuenta-texto-PremiunHome">Ahorros<br>30000028513</h3>
                    </div>
                    <div class="col-md-12 noPad">
                        <h3 class="noPadMar seccion-mediosdPagos-cuenta-texto-PremiunHome">Importadora Andiamo S.A.S
                        </h3>
                        <h3 class="noPadMar seccion-mediosdPagos-cuenta-texto-PremiunHome">NIT 901294385-1</h3>
                    </div>
                </div>
                <div class="container-pagos-electronicos">
                    <div class="col-md-12 section-icons-mediosdPago-PremiunHome">
                        <div class="col-md-12 content-puntosdPago-img-PremiunHome">
                            <h3 class="section-puntosdPago-texto-style-PremiunHome">Pagos electrónicos</h3>
                            <img class="section-puntosdPago-img-inferior-style-PremiunHome"
                                src="{{$urlZaabra}}img/tarjetas-de-Pago/logosdepagos2.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- VERSION MOBILE -->
        <div class="col-12 col-md-12 container-principal-mobile-PremiumLoginRegister">
            <div class=" row col-11 content-mediosdPagos-style-PremiunHome">

                <div class="col-6 noPad">
                    <div class="col-12 noPad">
                        <h1 class="noPadMar seccion-mediosdPagos-titulo-PremiunHome">MEDIOS DE PAGO</h1>
                        <h2 class="noPadMar seccion-mediosdPagos-subTitulo-PremiunHome">Transferencia bancaría</h2>
                    </div>
                    <div class="col-12 noPad seccion-mediosdPagos-content-imgCelulares-PremiunHome">
                        <img class="seccion-mediosdPagos-content-imgCelulares-style-PremiunHome"
                            src="img/pagoPremiun/tranferenciaBancaria.png">
                    </div>
                </div>

                <div class="col-6 content-mediosdPagos-bancosCuentas-PremiunHome">
                    <div class="col-12 noPad mb-2">
                        <h2 class="noPadMar seccion-mediosdPagos-subTitulo-bancos-PremiunHome">BBVA</h2>
                        <h3 class="noPadMar seccion-mediosdPagos-cuenta-texto-PremiunHome">Cuenta
                            corriente<br>00130724000100022264</h3>
                    </div>
                    <div class="col-12 noPad mb-2">
                        <h2 class="noPadMar seccion-mediosdPagos-subTitulo-bancos-PremiunHome">BANCOLOMBIA</h2>
                        <h3 class="noPadMar seccion-mediosdPagos-cuenta-texto-PremiunHome">Ahorros<br>30000028513</h3>
                    </div>

                </div>
                <div class="col-12 seccion-mediosdPagos-cuenta-nameNit-PremiunHome">
                    <h3 class="noPadMar seccion-mediosdPagos-cuenta-nameNit-texto-PremiunHome">Importadora Andiamo S.A.S
                    </h3>
                    <h3 class="noPadMar seccion-mediosdPagos-cuenta-nameNit-texto-PremiunHome">NIT 901294385-1</h3>
                </div>

            </div>

            <div class="col-12 content-puntosdPago-imgs-PremiunHome">
                <div class="col-md-12 section-icons-mediosdPago-PremiunHome">
                    <div class="col-md-12 content-puntosdPago-img-PremiunHome">
                        <h3 class="section-puntosdPago-texto-style-PremiunHome">Pagos electrónicos</h3>
                        <img class="section-puntosdPago-img-inferior-style-PremiunHome"
                            src="{{$urlZaabra}}img/tarjetas-de-Pago/logosdepagos2.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

