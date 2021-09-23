@extends('layouts.index')


@section('contenido')               
<!-- código html modificado y reestructurado jfk -->
<div class="container contenedor-principal-authVerify">
    <div class="row contenedor-fila-principal-authVerify">
        <div class="col-10 col-md-9 col-lg-6 columna-inicial-card-authVerify">
            <div class="card section-card-authVerify">
                <!-- <div class="card-header">{{ __('Verify Your Email Address') }}</div> Linea comentariada para ocultar el header del card jfk-->


                <div class="card-body section-cardBody-texto-authVerify">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    <P>Antes de continuar, por favor revisa tu correo electrónico con el enlace que te hemos enviado. Si no has recibido el email pulsa el siguiente botón para que te enviemos otro.</P>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="boton-inferior-enviar-authVerify">Volver a enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
