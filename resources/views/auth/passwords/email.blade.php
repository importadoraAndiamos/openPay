@extends('layouts.index')
@section('contenido')
    <div class="container">
            <div class="row justify-content-center padPasswordmob">
                <div class="container-recuperacontra">
                    <div class="col-md-12 row card-header contenedorHeader">
                        <div class="col-md-12 aliniacionRestaurar noPad">
                            <span class="tipografiaRestaurarPassword"> {{ __('Restaurar Contraseña') }} </span>
                        </div>
                    </div>
                    <div class="card propiedadesCard">
                        <div class="card-body propiedadesCard-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div class="form-group row col-12 col-md-12 noPadMar">
                                    <span class="mensajeRestaurar">
                                        Ingresa tu correo electrónico y te enviaremos las instrucciones para restaurar tu contraseña.
                                    </span>
                                    <label for="email" class="tipografiaPalabrasReset">{{ __('E-Mail Address') }}</label>    
                                    <input id="email" placeholder="zaabra@gmail.com" type="email" class="anchoCajaEmail @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>  
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror                           
                                </div>

                                <div class="form-group row padBtnRestaurarPassword">
                                    <div class="botonRegistrar">
                                        <button type="submit" class="btn btn-primary propiedadesBtnLogin fontBtnRecuperarPassword">
                                        {{ __('Enviar') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection