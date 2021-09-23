@extends('layouts.index')
@section('contenido')


<div class="container-fluid imgFondo margenSuperior">
  
    <div class="row">
        <div class="col-12 offset-md-2 col-md-8 offset-lg-3 col-lg-6 pl-md-0 alineacionTextoSinESP">
            <img class="imgSinEspecialidad" src="{{$urlZaabra}}img/vistaSinEspecialidad/Sin-Especialidad-Icono1440.png"> 
        </div>
        <div class="col-12 offset-md-2 col-md-8 offset-lg-1 col-lg-10 alineacionTextoSinESP propiedadTituloiSinEsp">
            <span class="tituloSinEspecialidad">ACTUALMENTE NO ESTÁ</span>
        </div>
        <div class="col-12 offset-md-2 col-md-8 offset-lg-1 col-lg-10 alineacionTextoSinESP propiedadSinEsp">
            <span class="subtituloSinEspecialidad">disponible esta especialidad</span>
        </div>
        <div class="col-12 offset-md-1 col-md-10 offset-lg-1 col-lg-10 alineacionTextoSinESP">
            <img class="logoSinEspecialidad" src="{{$urlZaabra}}img/vistaSinEspecialidad/zaabralogo.especialidades1440.png"> 
        </div>
    </div>
    
</div>
@endsection