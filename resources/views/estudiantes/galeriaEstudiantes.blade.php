@extends('layouts.index')
@section('contenido')

    

<div class="container-fluid margen-superior-galeria ">
    <div class="col-12 text-center ">
        <h4 class="texto-ruta-galeria-estudiantes"> {{$especialidad}}</h4>
    </div>
</div>

<div class="container-fluid text-center contenedor-texto-descripcion-especialidad-estudiantes cel">
    <span class="texto-descripcion-especialidad-estudiantes">Estudiantes de {{$especialidad}} comprometidos a iniciar </span>
    <br>
    <span class="texto-descripcion-especialidad-estudiantes">su vida laboral al lado de tu empresa</span>
</div>

<div class="container-fluid text-center contenedor-texto-descripcion-especialidad-estudiantes justify-content-center pc">
    <span class="texto-descripcion-especialidad-estudiantes">Estudiantes de {{$especialidad}} comprometidos a iniciar su vida laboral al lado de tu empresa</span>
</div>

        <div class="container-fluid ">
                <div class="contenedor-general-tarjet-estd">
                    <div class="row">
                        @foreach ($objProfEstudiante as $key => $elem)
                            @php $i = $loop->iteration @endphp
                                @foreach ($elem as $key => $item)
                                            <div class="col-12 col-md-6 col-lg-3 col-xl-3 contenedor-tarjeta-galer-estudi">
                                                <div class="col-12 tarjeta-galeria-estudiante noPad">
                                                   <div class="col-12  text-center">
                                                        <img class="img-galeria-estudiantes" src="{{$urlZaabra.$item->fotoperfil}}">
                                                    </div>
                                                    <?php
                                                        //Esto extrae el Nombre y lo pone en mayuscula
                                                        $TempNombre = explode(" ", $item->NOMBRE);
                                                        $TempApellido = explode(" ", $item->APELLIDO);
                                                        if(!isset($item->APELLIDO)){
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
                                                    <div class="col-12 text-center contenedor-nombre-saliente-estudientes">
                                                        <h1 class="h1-nombre-profesional-galeria-est marg-button-0">{{$NameSaliente}}</h1>
                                                        <br>
                                                        <span class="span-especialidad-galeria-est font-weight-bold">{{$item->NombreEspecialidad}}</span>
                                                    </div>
                                                    <div class="text-center">
                                                        <a class="logo" href="">
                                                            <img src="{{url($item->fotouniversidad) }}"  alt="" class="img-logo-unv-estudiante">
                                                        </a>
                                                    </div>
                                                    <div class="col-12  text-center conten-btn-gal-estd">
                                                        <button class="btn-ver-galr-estd" onclick="window.location.href= '{{$urlZaabra}}infoEstudiante/{{$item->idUser}}'">VER MÁS</button>
                                                    </div>
                                                </div>
                                            </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
        </div>
@endsection
