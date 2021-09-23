@extends('layouts.index')
@section('contenido')
<div class="container">
    <div class="justify-content-center padContLoginVerMobl">
        <div class="col-12 padTamCelularLogin col-md-8">
            <div class="col-12 col-md-12 row card-header contenedorHeaderRegister">
                <div class="aliniacionLogin2 noPad">
                    <a href="{{ route('login') }}" class="tipografiaCrearCuenta">Iniciar Sesión</a>
                </div>
                <div class="aliniacionLogin noPad">
                    <span class="tipografiaInicioSesion"> {{ __('Crear Cuenta') }} </span>
                </div>
            </div>
            <div class="card propiedadesCard">
                <div class="card-body propiedadesCard-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group padLateralesVerCelular">
                            <div class="col-md-5 padVersionCelularCont">
                                <label for="name" class="tipografiaPalabrasRegister">{{ __('Name') }}s y Apellidos</label>
                                <input id="name" placeholder="nombre" type="name"
                                    class="anchoCajaNameRegister @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class=" col-md-5 padVersionCelularCont">
                                <label for="email"
                                    class="tipografiaPalabrasRegister">{{ __('Correo Electrónico') }}</label>
                                <input id="email" placeholder="zaabra@gmail.com" type="email"
                                    class="anchoCajaMailRegister @error('email') is-invalid @enderror" name="email"
                                    required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row padLateralesVerCelularRegister">
                            <div class="col-md-5 padVersionCelularCont">
                                <label for="password" class=" tipografiaPalabrasRegister">{{ __('Contraseña') }}</label>
                                <input id="password" placeholder="contraseña" type="password"
                                    class="anchoCajaPasswordRegister @error('password') is-invalid @enderror"
                                    name="password" value="{{ old('password') }}" required autocomplete="password"
                                    autofocus>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-5 padVersionCelularCont">
                                <label for="password-confirm"
                                    class="tipografiaPalabrasRegister">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="anchoCajaConfirPaswordRegister"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="casillasVerificacion">
                            <span class="tipografiaTerminosCondiciones">
                                <div class="contain-check">
                                    <input type="checkbox" name="">
                                </div>
                                Me gustaría recibir comunicaciones
                                promocionales (Recibirás un e-mail de confirmación).
                            </span><br>
                            <span class="tipografiaTerminosCondiciones">
                                <div class="contain-check">
                                    <input type="checkbox" name="" id="acepto" required>
                                </div>
                                Declaro que he leido y acepto la nueva
                                <a data-toggle="modal" data-target="#politicas">Política de Privacidad</a>
                                y los <a href="" data-toggle="modal" data-target="#terminos">Términos y
                                    condiciones</a> de Zaabra.
                            </span>
                        </div>
                        <div class="botonRegistro">
                            <button type="submit" class="btn btn-primary propiedadesBtnLogin">
                                {{ __('Registrar') }}
                            </button>
                        </div>
                    </form>
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
@endsection