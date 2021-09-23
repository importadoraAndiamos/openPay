
@extends('layouts.indexMiCuenta')

@section('contenidoMiCuenta')

<div class="col-md-12 col-lg-10 container-principal-formulario-misDatos">
    <div class="container noPad">
       <form action="{{ url ('/editUser') }}" class="col-md-12" method="post" enctype="multipart/form-data" id="editBasic1">
            <div class="row">
            {{ csrf_field() }} 
                <div class="col-12 col-md-6 container-image-user-miCuenta">
                    <!-- Container imagen -->
                    <div class="col-10 col-md-12 col-lg-8 contenedor-fotografia container-image-user-sectionImage-miCuenta noPad">     
                        <div id="preview-cell" class="container-image-user-content-image-miCuenta">
                            @if(!empty ($perfil->fotoperfil))   
                                <img class="card-img-top content-section-img-propiedadesImg-miBasico" src="{{!empty ($perfil->fotoperfil) ? $perfil->fotoperfil: ''  }}" alt="" id="FotoloadPreview">
                            @endif
                        </div>
                        <img class="card-img-top" src="" alt="" >
                    </div>        
                    <input class="inputFileFotoPerfil"  type="file" id="avatarBasico-cell" name="avatarBasico" accept="image/png, image/jpeg">
                </div>

                <div class="col-md-6">
                    <div class="form-group mt-3 ">
                        <h6 class="section-info-options-titulo-miCuenta">Nombre y Apellidos</h6>
                        <h1 class="section-info-options-nameUser-miCuenta">{{(!empty ($objUsuario[0]->nombre) ? $objUsuario[0]->nombre : "") ." ". (!empty ($objUsuario[0]->apellido) ? $objUsuario[0]->apellido :"") }}</h1>
                    </div>

                   
                    <div class="col-12 noPad form-group">
                    <h4 class="section-info-options-titulo-miCuenta">Área</h4>
                    <select id="slcAreaMiPerf-cell" class="section-info-options-input-miCuenta" name="slcAreaMiPerf" required>
                            <option value='-1'>AREAS </option>
                            @foreach ($objbannersArea as $item)
                            <option value="{{$item->id}}"
                            <?php if(!empty($objAreaProfEspe[0]->idArea)) {
                                        if ($item->id ==  $objAreaProfEspe[0]->idArea) {
                                            echo('selected = "selected"');
                                        } 
                                } 
                                ?>
                            >{{$item->nombreArea}}
                            </option>
                            @endforeach
                        </select>
                    </div>         

                    
                    <div class="col-md-12 noPad form-group">
                        <h3 class="section-info-options-titulo-miCuenta">Profesión</h3>
                        <select id="slcProfesionMiPerf-cell" class="section-info-options-input-miCuenta" name="slcProfesionMiPerf" required>
                            <option value='-1'>PROFESIONES </option>
                            @foreach ($objbannersProfesionales as $item)
                            <option value="{{$item->id}}"
                                <?php if(!empty($objAreaProfEspe[0]->idProfesion)) {
                                        if ($item->id ==  $objAreaProfEspe[0]->idProfesion) {
                                            echo('selected = "selected"');
                                        } 
                                } 
                                ?>
                            >{{$item->nombreProfesion}}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    

                    <div class="col-md-12 noPad form-group">
                    <h3 class="section-info-options-titulo-miCuenta">Especialidad</h3>
                        <select id="slcEspecialidadMiPerf-cell" class="section-info-options-input-miCuenta" name="slcEspecialidadMiPerf" required >
                            <option value='-1'>ESPECIALIDAD</option>
                            @foreach ($objbannersEspecialidades as $item)
                                <option value="{{$item->id}}"
                                    <?php if(!empty($objAreaProfEspe[0]->idEspecialidad)) {
                                                if ($item->id ==  $objAreaProfEspe[0]->idEspecialidad) {
                                                    echo('selected = "selected"');
                                                } 
                                        } 
                                    ?>
                                    >
                                {{$item->nombreEspecialidad}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
               
                

                <div class="col-12 col-md-6 section-info-body-options-miCuenta">

                    <h6 class="section-info-options-titulo-miCuenta" for="">Nombre *</h6>
                    <input class="form-control section-info-body-options-input-miCuenta" autocomplete="off" type="text" name="nombre"  value="{{!empty ($usuario->nombre) ? $usuario->nombre : ''  }}" placeholder="Nombre" required>
                    <h6 class="section-info-options-titulo-miCuenta" for="">Apellido *</h6>
                    <input class="form-control section-info-body-options-input-miCuenta"  autocomplete="off" type="text" name="apellido"  value="{{ !empty ($usuario->apellido) ? $usuario->apellido : '' }}" placeholder="Apellido" required>
                    
                    <h6 class="section-info-options-titulo-miCuenta" for="">Tipo de documento *</h6>
                    <select class="detallesDatos form-control section-info-body-options-input-miCuenta tipoDocumento" name="tipoDocumento" id="tipoDocumento" required> 
                        <option value = '-1'> Seleccione un tipo documento </option>
                        @foreach ($tipoDocumento as $item)	
                            <option value="{{$item->id_catalogo}}" 
                                <?php if(!empty($usuario->tipo_documento)) {
                                        if ($item->id_catalogo ==  $usuario->tipo_documento) {
                                            echo('selected = "selected"');
                                        } 
                                } 
                                ?>
                                > 
                                {{$item->nombre}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 descripcion-text-area">
                    <h4 class="section-info-options-titulo-miCuenta">Descripción *</h4>
                    <textarea class="section-info-body-textArea-miCuenta" id="descripcion" rows="6" cols="55" name="descripcion" required>{{!empty ($perfil->descripcion) ? $perfil->descripcion : ''  }}</textarea>
                </div>

                <div class="col-12 col-md-6 section-info-body-options-miCuenta">
                    <h6 class="section-info-options-titulo-miCuenta"for="">Número de identificación *</h6>
                    <input class="form-control section-info-body-options-input-miCuenta" autocomplete="off" type="text" name="numeroIdentificacion" 
                    value="{{!empty ($usuario->numero_documento) ? $usuario->numero_documento : '' }}" placeholder="Número de identificación" required>
                </div>

                <div class="col-12 col-md-6 section-info-body-options-miCuenta">
                    <h6 class="section-info-options-titulo-miCuenta"for="">Teléfono *</h6>
                    <input class="form-control section-info-body-options-input-miCuenta"  autocomplete="off" type="text" name="telefono"  value="{{!empty ($usuario->telefono) ? $usuario->telefono : '' }}" placeholder="Teléfono" required> 
                </div>

                <div class="col-12 col-md-6 section-info-body-options-miCuenta">
                    <h6 class="section-info-options-titulo-miCuenta" for="">Dirección *</h6>
                    <input class="form-control section-info-body-options-input-miCuenta"  autocomplete="off" type="text" name="direccion"  value="{{!empty ($usuario->direccion) ? $usuario->direccion : '' }}" placeholder="Direción" required>
                </div>

                <div class="col-12 col-md-6 section-info-body-options-miCuenta">
                    <h6 class="section-info-options-titulo-miCuenta"for="">País *</h6>
                    <select class="detallesDatos form-control section-info-body-options-input-miCuenta" name="pais" id="pais-envio" required> 
                        <option value = ' '> Seleccione un país </option>
                        @foreach ($pais as $item)  
                            @if ($item->id_pais == 18)	
                                <option value="{{$item->id_pais}}"
                                    <?php if(!empty($usuario->pais)) {
                                                if ($item->id_pais ==  $usuario->pais) {
                                                    echo('selected = "selected"');
                                                } 
                                        } 
                                        ?>>
                                    {{$item->nombre}}
                                </option>
                            @endif
                        @endforeach     
                    </select>
                </div>

                <div class="col-12 col-md-6 section-info-body-options-miCuenta">
                    <h6 class="section-info-options-titulo-miCuenta"for="">Departamento *</h6>
                    <select class="detallesDatos form-control section-info-body-options-input-miCuenta" name="departamento" id="departamento-envio" required> 
                        <option value = ' '> Seleccione un Departamento </option>
                        @foreach ($departamento as $item)	
                            <option value="{{$item->id_departamento}}"
                                <?php if(!empty($usuario->departamento)) {
                                            if ($item->id_departamento ==  $usuario->departamento) {
                                                echo('selected = "selected"');
                                            } 
                                    } 
                                ?>
                            >
                                {{$item->nombre}}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <div class="col-12 col-md-6 section-info-body-options-miCuenta">
                    <h6 class="section-info-options-titulo-miCuenta" for="">Provincia *</h6>
                    <select class="detallesDatos form-control section-info-body-options-input-miCuenta" name="provincia" id="provincia-envio" required> 
                    <option value = ' '> Seleccione una Provincia </option>
                        @foreach ($provincia as $item)	 
                            <option value="{{$item->id_provincia}}"
                                <?php if(!empty($usuario->provincia)) {
                                        if ($item->id_provincia ==  $usuario->provincia) {
                                            echo('selected = "selected"');
                                        } 
                                } 
                                ?>
                                >
                                {{$item->nombre}}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-12 col-md-6 section-info-body-options-miCuenta">
                    <h6 class="section-info-options-titulo-miCuenta" for="" >Ciudad *</h6>
                    <select class="detallesDatos form-control section-info-body-options-input-miCuenta" name="ciudad" id="ciudad-envio" required> 
                        <option value = ' '> Seleccione una ciudad </option>
                        @foreach ($municipio as $item)	
                            <option value="{{$item->id_municipio}}" 
                                <?php if(!empty($usuario->ciudad)) {
                                        if ($item->id_municipio ==  $usuario->ciudad) {
                                            echo('selected = "selected"');
                                        } 
                                } 
                                ?>
                                >
                                {{$item->nombre}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 col-md-6 section-info-body-options-miCuenta">
                    <h6 class="section-info-options-titulo-miCuenta" for="">Fecha de nacimiento *</h6>
                    <input class="form-control section-info-body-options-input-miCuenta" type="date" value="{{!empty ($perfil->fechanacimiento) ? $perfil->fechanacimiento: ''  }}" id="fechaNacimiento" name="fechaNacimiento" required> 
                </div>
            
                <div class="col-md-12 content-botonInferior-guardar-misDatos">
                    <div class="col-12 col-md-6 section-botonInferior-guardar-misDatos">
                        <button class="botonInferior-guardar-miCuenta" type="submit">Guardar</button>
                    </div>
                </div>   
                   
            </div>
        </form>     
    </div>
</div>         




<!-- ///  VISTA VERSION DESKTOP  /// -->

 <!--mi cuneta  -->



@endsection 


