<!-- Contenedor banner imagen -->
@php
$ruta ="rutaImagenMarketing".$objbannersPrincipalSP[0]->aprobado
@endphp

<div class="container-fluid container-imagen-index">

    <a class="container-logowhat" href="https://wa.link/ik015c">
        <img src="{{$urlZaabra}}img/logo-wha.png" alt="" class="logo-what">
    </a>

    <div class="text-right contenedor-filtros">


        <div class="contains-filtro padContFiltros">
            <div class="col-4 col-md-4 col-lg-4 form-group filtroArea">
                <select id="slcArea" class="seccionArea" name="slcArea">
                    <option value=' '>Área</option>
                    @foreach ($objbannersArea as $item)
                    <option value="{{$item->id}}" class="option">
                        {{$item->nombreArea}}
                    </option>


                    @endforeach
                </select>
            </div>



            <div class="col-4 col-md-4 col-lg-4 form-group filtroProfesion">
                <select id="slcProfesion" class="seccionProfesion" name="slcProfesion">
                    <option value=' '>Profesión</option>
                </select>
            </div>

            <div class="col-4 col-md-4 col-lg-4 form-group filtroespecialidad">
                <select id="slcEspecialidad" class="seccionEspecialidad" name="slcEspecialidad"
                    onchange="location = this.value;">
                    <option value=' '>Especialidad</option>

                </select>
            </div>
        </div>

    </div>
    <picture>
        <source srcset="{{$urlZaabra}}img/banners/principalSP/bannerprincipalmobile.jpg" media="(max-width: 600px)">
        <img srcset="{{ $urlZaabra.$objbannersPrincipalSP[0]->$ruta}}" class="container-imagen-index">
    </picture>
</div>

<!-- Contenedor carrusel areas -->
<h1 class="titulo-carousel text-center">Nuestros Servicios Profesionales</h1>
<div class=" container-padre-carrusel">
    <div class="row" id="carrousel-areas-home">
        @foreach ($objbannersArea as $item)
        <div class="col-md-4 noMar imagenCarrusel">
            @php $area = $item->id @endphp
            @php $arearuta = $item->ruta @endphp
            <div id="dropdownMenuButton{{$loop->iteration}}" class="noPad col-md-12 opacidadContCarruselAreasHome">
                <div class="col-md-12 col-lg-12 noPad image-height">
                    <img class="imagen-carrusel-home" src="{{$urlZaabra.$item->rutaImagen}}">
                </div>

                <div class="col-md-12 col-lg-12 noPad">
                    <h1 class="texto-carrousel-home">{{$item->nombreArea}}</h1>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
<div class="container-subitem">
    @foreach ($objbannersArea as $item)
    @php $area = $item->id @endphp
    @php $arearuta = $item->ruta @endphp
    <div class="col-12 contenedor-areas-home{{$loop->iteration}} stylos-contenedor-areas-home"
        id="contenedor-areas-home{{$loop->iteration}}">
        <div class="col-12">
            <h1 class="titulo-subitem text-center">Profesiones</h1>
        </div>
        @foreach ($objbannersProfesionales as $item2)
        @if($area == $item2->idArea)
        <div class="col-4 hoverSubItemsMenuCarruselAreaHome">
            <a href="{{url('/ESPECIALIDADES/'.$arearuta.'/'.$item2->ruta)}} ">
                <span class="letraBlanco">{{$item2->nombreProfesion}}</span>
            </a>
        </div>
        @endif
        @endforeach
    </div>
    @endforeach
</div>

@php
$ruta ="rutaImagenMarketing".$objbannersParalax[0]->aprobado
@endphp
<!-- Contenedor parallax -->
<div class="container-fluid noPad container-imagen-parallax">
    <div class="parallax" style="background-image: url( {{ $urlZaabra.$objbannersParalax[0]->$ruta}} );"></div>
</div>

<div class="container-carusel-profesionales">
    <div class="seccionProfesionales" id="carrousel-profesionales-home">
        @foreach ($objProfDestacados as $item)

        <div class="noTextDecoration  divSpanDescProf">

            <a href="{{url('/infoProfesional/'.$item->id)}}" class="">
                <div>
                    <img src="{{$urlZaabra.$item->fotoperfil}}" class="profesionalDestacadoHome">
                </div>

                <div class="cajaNombreProfesion text-center">
                    <?php
                        //Esto extrae el Nombre y lo pone en mayuscula
                        $Temp = explode(" ", $item->nombre);
                        if(isset($Temp[2])){
                            $NameSaliente = ucwords(strtolower($Temp[0])).' '.ucwords(strtolower($Temp[2]));
                        }else{
                            $NameSaliente = ucwords(strtolower($Temp[0])).' '.ucwords(strtolower($Temp[1]));
                        }
                    ?>
                    <span class="tipografiaProfesionalDestacadoHome">{{ $NameSaliente }}</span>
                    <span class="tipografiaEspecialidadDestacadoHome">{{$item->nombreEspecialidad}}</span>
                    <button type="button" class="btn btn-primary">Ver detalles</button>
                </div>

            </a>
        </div>

        @endforeach
    </div>
</div>


<div class="container-fluid container-carrusel-publicidad">
    <h1 class="titulo-carousel text-center"> Ellos confian en nosotros</h1>
    @if(!empty($objbannersPagoPublicidad))
    <div class="col-md-12 col-lg-12 contenedor-carrusel-publicidad-home" id="carrusel-publicidad-Pago">
        @foreach($objbannersPagoPublicidad as $item)

        @php
        $rutaPago ="rutaImagenMarketing".$item->aprobado
        @endphp
        @foreach (json_decode($item->$rutaPago) as $valueJson)

        <img src="{{$urlZaabra.$valueJson }}" class="imagenCarruUniversidad " alt="">

        @endforeach
        @endforeach
    </div>
    @endif
</div>
</div>