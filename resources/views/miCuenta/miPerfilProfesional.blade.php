@extends('layouts.index')

@section('contenido')
<form class="container-fluid container-principal-margenTop-miPerfilProfesional" method="POST" action="{{url('/guardarProfesional')}}" enctype="multipart/form-data" id="guardarProfesional">

    @csrf
        <div class="container">
            <div class="row margTopImgDatoFormProfesionales">

                <div class="col-12 col-md-10 col-lg-6 divFileFotoPerfilFormProfesionales">
                  
                    <!-- Container imagen -->

                    <div class="col-8 col-md-8 contenedor-fotografia diseñoContenedorFotoPerfil noPad alturaImgPrincProfFormProfesional">
                        <div id="preview" class="alturaImgPrincProfFormProfesional">
                        @if(!empty ($perfil->fotoperfil))
                            <img class="card-img-top alturaImgPrincProfFormProfesional" src="{{!empty ($perfil->fotoperfil) ? $perfil->fotoperfil: ''  }}" alt="" id="FotoloadPreview">
                        @endif
                        </div>

                        <img class="card-img-top" src="" alt="" >
                    </div>
                    
                    <input class="inputFileFotoPerfil"  type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">

                </div>
                
               

                <!-- Container del formulario fotografia -->
                <div class="col-12 col-md-12 col-lg-6 mt-3 noPad">

                    <div class="col-md-12 noPad">
                        <div class="form-group noPadMar">
                            <h3 class="fontNameFormProfesionales">{{(!empty ($objUsuario[0]->nombre) ? $objUsuario[0]->nombre : "") ." ". (!empty ($objUsuario[0]->apellido) ? $objUsuario[0]->apellido :"") }}</h3>
                        </div>
                  
                        <div class="row ">
                  
                            <div class="form-group col-md-12">
                                <h4 class="fontCityFormProfesionales">{{(!empty ($objUsuario[0]->ciudad) ? $objUsuario[0]->ciudad : "")}}</h4>
                                <input id="codigoCiudad" name="codigoCiudad" type="hidden" value="{{!empty ($objUsuario[0]->codigoCiudad) ? $objUsuario[0]->codigoCiudad : 0  }}">
                                <div>
                                    <h4 class="fontAreaFormProfesionales">Área</h4>
                                </div>
                                <div class="col-md-12 form-group propiedadesContFormProfesionales">
                                    <select id="slcAreaMiPerf" class="inputAreaFormProfesionales" name="slcAreaMiPerf" require>
                                        <option value='-1'>AREAS </option>
                                        @foreach ($objbannersArea as $item)
                                        <option value="{{$item->id}}"
                                        
                                            <?php if(!empty($objAreaProfEspe[0]->idArea)) {
                                                        if ($item->id ==  $objAreaProfEspe[0]->idArea) {
                                                            echo('selected = "selected"');
                                                        } 
                                                } 
                                                ?>
                                            >
                                            {{$item->nombreArea}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>                            

                                <div>
                                    <h4 class="fontProfesionFormProfesionales">Profesión</h4>
                                </div>
                                <div class="col-md-12 form-group propiedadesContFormProfesionales">
                                    <select id="slcProfesionMiPerf" class="inputProfesionFormProfesionales" name="slcProfesionMiPerf" require>
                                        <option value='-1'>PROFESIONES </option>
                                        @foreach ($objbannersProfesionales as $item)
                                        <option value="{{$item->id}}"

                                            <?php if(!empty($objAreaProfEspe[0]->idProfesion)) {
                                                    if ($item->id ==  $objAreaProfEspe[0]->idProfesion) {
                                                        echo('selected = "selected"');
                                                    } 
                                            } 
                                            ?>
                                        >
                                        
                                        
                                            {{$item->nombreProfesion}}
                                        </option>


                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <h4 class="fontEspecialFormProfesionales">Especialidad</h4>
                                </div>
                                <div class="col-md-12 form-group propiedadesContFormProfesionales">
                                    <select id="slcEspecialidadMiPerf" class="inputEspecialFormProfesionales" name="slcEspecialidadMiPerf" require >
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
                        

                        
                        
                        </div>
                       
                    </div>

                </div>
            </div>
        </div>



        <div class="container">
            
            <div class="row shadow-lg mb-5 mt-3 px-2 margenRespectoAlFooter" style="background-color:white">
                <div class="col-md-12 shadow row OptionUserFormProfesionales">
                    <div class=" noPad seleccion-formProfesionales">
                        <a id="btnDatosPersonales" class="">
                            <div>Datos Personales</div> 
                        </a>
                    </div>     
                    <div class=" noPad seleccion-formProfesionales">     
                        <a id="btnRedes" class="">
                            <div>Redes Sociales</div> 
                        </a> 
                    </div>    
                      
                    <div class=" noPad seleccion-formProfesionales">
                        <a id="btnExperiencia" class="">
                            <div>Experiencia Profesional</div> 
                        </a>
                    </div>  
                    <div class=" noPad seleccion-formProfesionales">
                        <a id="btnEstudios" class="">
                            <div>Estudios</div> 
                        </a>
                    </div>          
                    <div class=" noPad seleccion-formProfesionales">
                        <a id="btnCertificados" class="">
                            <div>Certificaciones</div> 
                        </a>
                    </div>             
                    <div class=" noPad seleccion-formProfesionales">
                        <a id="btnPublicaciones" class="" >
                            <div>Publicaciones</div>  
                        </a>    
                    </div>
                    <div class=" noPad seleccion-formProfesionales">
                        <a id="btnGaleria" class="">
                            <div>Galería</div> 
                        </a>    
                    </div>
                </div>
               <!--Container  datosPersonales -->
                <div class="col-12 col-md-12 noPad contPrincDatProfFormProfesionales" id="datosPersonales">

                    <div class="col-md-12 tituloSeccDatosPerFormProfesionales">
                        <h3 class="fontTituloSeccFormProfesionales">DATOS PERSONALES</h3>
                    </div>
                    <!--Container del formulario datos personales-->
                    <div class="col-12 col-md-12 col-lg-6 contDatProfFormProfesionales" id="SeccionlistaExpertoEn">
                        <div class="col-12 col-md-12 noPad">
                            <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Fecha de nacimiento *</h6>
                            <input class="form-control PropiedadIputDatPersFormProfesionales" type="date" value="{{!empty ($perfil->fechanacimiento) ? $perfil->fechanacimiento: ''  }}" id="fechaNacimiento" required name="fechaNacimiento">
                        </div>
                    
                        <div class="col-12 col-md-12 noPad">
                            <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Hoja de vida *</h6>
                            <input type="text" class="form-control PropiedadIputDatPersFormProfesionales" placeholder="Escribe aqui una URL donde tiene alojada su Hoja de vida"  value="{{!empty ($perfil->hojaVida) ? $perfil->hojaVida: ''  }}" required id="hojaVida"  name="hojaVida" >
                        </div>

                        <div class="col-12 col-md-12 noPad">
                            <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Descripción profesional *</h6>
                        </div>    
                        <div class="col-md-12 form-group section-textareaMiPerfilProfesional">
                                <textarea class="textAreaDescripcionFormProfesionales" id="descripcion" required rows="6" cols="77" name="descripcion"  >{{!empty ($perfil->descripcion) ? $perfil->descripcion : ''  }}</textarea>
                        </div>
                        <div class="col-12 col-md-12 noPad">
                            <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Experto en *</h6>
                        </div>  
                        <div class="col-12 col-md-12 noPad">
                            <input type="text" id="inputExpertoEn" class="form-control PropiedadIputDatPersFormProfesionales" onkeypress="pulsarListaExpertoEn(event)" >
                            <ul id="listaExpertoEn" name="listaExpertoEn">
                            @if(!empty ($perfil->expertoEn))
                                @php $arrExpertoEn = explode(";",$perfil->expertoEn);@endphp
                                @foreach ($arrExpertoEn as $item)	
                                <div style="display: inline-flex;" class="col-md-3">
                                    <li>
                                        <span class="list-group-item list-group-item-success contenido" id="expertoEn{{$loop->iteration}}">{{$item}}</span>
                                    </li>
                                    <button type="button" class="btn btn-dark remove_listaExpertoEn">x</button>
                                </div>
                                    <script>
                                        if(localStorage.getItem("varListaExpertoEn") != null){
                                            localStorage.removeItem('varListaExpertoEn');
                                            localStorage.setItem('varListaExpertoEn',{{$loop->iteration}});
                                        }else{
                                            localStorage.setItem('varListaExpertoEn',{{$loop->iteration}});
                                        }
                                        
                                    </script>
                                @endforeach
                                @else
                                 <script>
                                        if(localStorage.getItem("varListaExpertoEn") != null){
                                            localStorage.removeItem('varListaExpertoEn');
                                            localStorage.setItem('varListaExpertoEn', 1);
                                        }else{
                                            localStorage.setItem('varListaExpertoEn',1);
                                        }
                                        
                                    </script>
                            @endif


                            </ul>
                        </div>                                                    
                          
                    </div>
                    
                    <div class="col-12 col-md-12 col-lg-6 contDatProfFormProfesionales">
                        <div class="col-12 col-md-12 noPad">
                            <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Valor consulta presencial *</h6>
                            <input type="number" class="form-control PropiedadIputDatPersFormProfesionales" placeholder="Escribe aqui" value="{{!empty ($perfil->valorConsultaPresencial) ? $perfil->valorConsultaPresencial: ''  }}"  required id="valorConsultaPresencial" name="valorConsultaPresencial">
                        </div>
                        <div class="col-12 col-md-12 noPad">
                            <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Valor consulta Virtual *</h6>
                            <input type="number" class="form-control PropiedadIputDatPersFormProfesionales" placeholder="Escribe aqui" value="{{!empty ($perfil->valorConsultaVirtual) ?  $perfil->valorConsultaVirtual: ''  }}"  required id="valorConsultaVirtual" name="valorConsultaVirtual">
                        </div>
                
                        <div class="col-12 col-md-12 noPad">
                            <h6 class="margin-top-1em fontLabelDatPersFormProfesionales" for="">Tipo de consulta *</h6>
                            <select class="detallesDatos inputTextMiCuenta form-control PropiedadIputDatPersFormProfesionales" name="tipoConsulta" id="tipoConsulta" > 
                        
                                @foreach ($objTipoConsulta as $item)	
                                
                                    <option value="{{$item->id_catalogo}}" 
                                        <?php if(!empty($perfil->tipoConsulta)) {
                                                if ($item->id_catalogo ==  $perfil->tipoConsulta) {
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
                        <div class="col-12 col-md-12 noPad">
                            <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Página web</h6>
                            <input type="text" class="form-control PropiedadIputDatPersFormProfesionales" placeholder="Escribe aqui"  value="{{!empty ($perfil->url) ? $perfil->url: ''  }}" id="url" name="url">
                        </div>
                        <div class="col-md-12 noPadMar row">
                            <div class="col-md-12 col-lg-12 contDiaHoraLeftFormProfesionales">
                                <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Género *</h6>
                                <select class="detallesDatos inputTextMiCuenta form-control PropiedadIputDatPersFormProfesionales" name="genero" id="genero" > 
                                <option value=' '>seleccione</option>
                                @foreach ($objGenero as $item)	
                                
                                    <option value="{{$item->id_catalogo}}" 
                                        <?php if(!empty($perfil->genero)) {
                                                if ($item->id_catalogo ==  $perfil->genero) {
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
                            <div class="col-md-12 col-lg-12 contDiaHoraLeftFormProfesionales">
                                <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Empresa actual *</h6>
                                <input type="text" class="form-control PropiedadIputDatPersFormProfesionales" placeholder="Escribe aqui" value="{{!empty ($perfil->EmpresaActual) ? $perfil->EmpresaActual: ''  }}"   id="EmpresaActual" name="EmpresaActual">
                                    
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            <div class="col-md-12 noPad" id="experiencia">
                <div class="col-md-12 tituloSeccDatosPerFormEstudiantes">
                    <h3 class="mb-1 fontTituloSeccFormEstudiantes">EXPERIENCIA <span class="agregarDivImagenExperiencia diseñoAgregarBotonFormEstudiantes col-md-1"></h3>
                </div>
                @if(!empty ($perfil->nombreEmpresaExperiencia[0]))
                    @foreach (json_decode($perfil->nombreEmpresaExperiencia) as $valueJson)
                        @php $tamañoExperiencia = $loop->iteration @endphp 
                    @endforeach
                @endif
                <div class="col-md-12 row noPadMar input-multiple-imagenesGroup-Experiencia bordeContenidoDinamicoFormEstudiantes" style=" padding-bottom: 2%; margin-bottom: 1%;">
                    @if(!empty ($perfil->nombreEmpresaExperiencia[0]) AND !empty ($perfil->descripcionExperiencia) AND !empty ($perfil->fechaInicioExperiencia))
                            @for($i = 1; $i <= $tamañoExperiencia; $i++)
                            @php $padreExperiencia = $i;
                            @endphp

                            <div class="col-12 col-lg-6 padSectInfoExperFormEstudiantes boderTopContAdicionalFormEstudiantes">

                                @if($i > 1)
                                    <div class="col-1 contXDeCierreFormEstudiantes">
                                        <a href="#" class="remove_Experiencia estilos-X-eliminacion-archivos-formEstudiantes"><i class="fas fa-times"></i></a>
                                    </div>
                                @endif
                                @foreach(json_decode($perfil->nombreEmpresaExperiencia) as $valueJson)
                                    @if($padreExperiencia == $loop->iteration)
                                    <h6 class="fontLabelDatPersFormEstudiantes mt-2">Nombre de la empresa *</h6>
                                    <input type="text" class="form-control PropiedadIputDatPersFormEstudiantes"  placeholder="Nombre Empresa" id="txtNombreExperiencia{{$i}}"
                                    <?php if($padreExperiencia == $loop->iteration) {
                                                        echo('value = "'.$valueJson.' "');
                                                    } ?> 
                                                     name="txtNombreExperiencia{{$i}}">
                                    @endif          
                                @endforeach
                                    
                                @foreach(json_decode($perfil->descripcionExperiencia) as $valueJson)
                                    @if($padreExperiencia == $loop->iteration)
                                    <h6 class="fontLabelDatPersFormEstudiantes" style=" margin-top: 18px;">Descripción del puesto *</h6>
                                    <input type="text" class="form-control PropiedadIputDatPersFormEstudiantes"  placeholder="Descripcion del puesto   " id="txtLinkExperiencia{{$i}}" 
                                    <?php if($padreExperiencia == $loop->iteration) {
                                                        echo('value = "'.$valueJson.' "');
                                                    } ?>  name="txtLinkExperiencia{{$i}}">
                                    @endif          
                                @endforeach
                                
                                
                                <div class="col-md-12 noPad" style=" margin-top: 18px;">
                                    <div class="col-md-12 noPad"><h6 class="fontLabelDatPersFormEstudiantes">Fecha de inicio *</h6></div>
                                    <div class="col-md-12 noPad">
                                    @foreach(json_decode($perfil->fechaInicioExperiencia) as $valueJson)
                                        @if($padreExperiencia == $loop->iteration)
                                        <input class="form-control PropiedadIputDatPersFormEstudiantes" type="date"  id="fechaExperienciaIncio{{$i}}"  
                                        <?php if($padreExperiencia == $loop->iteration) {
                                                        echo('value = "'.$valueJson.'"');
                                                    } ?>  
                                        name="fechaExperienciaIncio{{$i}}">
                                        @endif          
                                    @endforeach
                                    </div>
                                </div>
                                
                                <div class="col-md-12 noPad" style=" margin-top: 18px;">
                                    <div class="col-md-12 noPad"><h6 class="fontLabelDatPersFormEstudiantes">Fecha de culminación *</h6></div>
                                    <div class="col-md-12 noPad">
                                    @foreach(json_decode($perfil->fechaFinExperiencia) as $valueJson)
                                        @if($padreExperiencia == $loop->iteration)
                                            <input class="form-control PropiedadIputDatPersFormEstudiantes" type="date" id="fechaExperienciaFin{{$i}}" 
                                            <?php if($padreExperiencia == $loop->iteration) {
                                                                echo('value = "'.$valueJson.'"');
                                                            } ?>  
                                            name="fechaExperienciaFin{{$i}}">
                                        @endif          
                                    @endforeach
                                     </div>
                                </div>
                                  
                            </div>
                            <script>
                            if(localStorage.getItem("varExpe") != null){
                                localStora7ge.removeItem('varExpe');
                                localStorage.setItem('varExpe', {{$i}});
                            }else{
                                localStorage.setItem('varExpe', {{$i}});
                            }
                            </script>
                          


                        @endfor
                        @else
                        <div class="col-12 col-lg-6 padSectInfoExperFormEstudiantes boderTopContAdicionalFormEstudiantes">
                            <h6 class="mt-2 fontLabelDatPersFormEstudiantes">Nombre de la empresa *</h6>
                            <input type="text" class="form-control PropiedadIputDatPersFormEstudiantes" placeholder="Nombre Empresa" id="txtNombreExperiencia1" name="txtNombreExperiencia1" >
                            
                            <h6 class="fontLabelDatPersFormEstudiantes" style=" margin-top: 18px;">Descripción del puesto *</h6>
                            <input type="text" class="form-control PropiedadIputDatPersFormEstudiantes" placeholder="Descripcion del puesto" id="txtLinkExperiencia1" name="txtLinkExperiencia1" >
                                                         
                            <div class="col-md-12 noPad" style=" margin-top: 18px;">
                                <div class="col-md-12 noPad"><h6 class="fontLabelDatPersFormEstudiantes">Fecha de inicio *</h6></div>
                                <div class="col-md-12 noPad"> <input class="form-control PropiedadIputDatPersFormEstudiantes" type="date" value="" id="fechaExperienciaIncio1" name="fechaExperienciaIncio1" ></div>
                            </div>
                            
                            <div class="col-md-12 noPad" style=" margin-top: 18px;">
                                <div class="col-md-12 noPad"><h6 class="fontLabelDatPersFormEstudiantes">Fecha de culminación *</h6></div>
                                <div class="col-md-12 noPad"> <input class="form-control PropiedadIputDatPersFormEstudiantes" type="date" value="" id="fechaExperienciaFin1"  name="fechaExperienciaFin1"></div>
                            </div>
                        </div>
                        <script>
                            if(localStorage.getItem("varExpe") != null){
                                localStorage.removeItem('varExpe');
                                localStorage.setItem('varExpe', 1);
                            }else{
                                localStorage.setItem('varExpe', 1);
                            }
                        </script>  
                    @endif

                </div>
            </div>
                
                <!--Container  estudios -->
                <div class="col-md-12 row noPadMar" id="estudios">
                    <div class="col-md-12 tituloSeccEstudiosPerFormProfesionales">
                        <h6 class="margin-top-1em noPad  fontTituloSeccFormProfesionales">ESTUDIOS <span class="agregarDivImagenestudios diseñoAgregarBoton"></h6>
                    </div>
                    @if(!empty ($perfil->estudios))
                        @foreach (json_decode($perfil->estudios) as $valueJson)
                            @php $tamañoEstudios = $loop->iteration @endphp 
                        @endforeach
                    @endif
                
                    <div class="col-12 col-md-12 noPadMar input-multiple-imagenesGroup-estudios bordeContenidoDinamico" >
                        @if(!empty ($perfil->estudios) and !empty($perfil->fechaEstudios) and !empty($perfil->nivelEstudios) and !empty($perfil->nombreEstudios))
                            @for($i = 1; $i <= $tamañoEstudios; $i++)
                                @php $padreEstudios = $i;
                                @endphp
                                

                                <div class="col-12 col-md-12 col-lg-6 contImgEstudFormProfesionales">
                                        @foreach(json_decode($perfil->nivelEstudios) as $valueJson)
                                            @if($padreEstudios == $loop->iteration)
                                            <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Nivel de estudios *</h6>
                                            <input type="text" class="form-control PropiedadIputDatPersFormProfesionales col-12 col-md-12"  placeholder="Nivel Estudio" id="txtNivelEstudios{{$i}}" name="txtNivelEstudios{{$i}}" 
                                                    <?php if($padreEstudios == $loop->iteration) {
                                                                    echo('value = "'.$valueJson.' "');
                                                                } ?>   >
                                            @endif          
                                        @endforeach
                                    
                    
                                        @foreach(json_decode($perfil->nombreEstudios) as $valueJson)
                                            @if($padreEstudios == $loop->iteration)
                                            <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Nombre de la profesión *</h6>
                                            <input type="text" class="form-control PropiedadIputDatPersFormProfesionales"  placeholder="Nombre" id="txtNombreEstudios{{$i}}" name="txtNombreEstudios{{$i}}" 
                                                    <?php if($padreEstudios == $loop->iteration) {
                                                                    echo('value = "'.$valueJson.' "');
                                                                } ?>   >
                                            @endif          
                                        @endforeach
                                    
                                
                                        <div class="row">
                                           
                                            <div class="col-12"><h4 class="margin-top-1em fontLabelDatPersFormEstudiantes">Fecha culminación *</h4></div>
                                            <div class="col-12">
                                                @foreach(json_decode($perfil->fechaEstudios) as $valueJson)
                                                    @if($padreEstudios == $loop->iteration)
                                                <input class="form-control PropiedadIputDatPersFormEstudiantes" type="date"  id="fechaEstudios{{$i}}"  
                                                <?php if($padreEstudios == $loop->iteration) {
                                                                    echo('value = "'.$valueJson.'"');
                                                                } ?>  
                                                name="fechaEstudios{{$i}}">
                                                        @endif          
                                                @endforeach
                                            
                                            </div>

                                        </div>

                                        <br>
                                        <div class="col-12 col-md-12 noPad diseñoContenedorFotoDocumentos FotoloadPreview{{$i}}" id="FotoloadPreview{{$i}}" >
                                            @foreach (json_decode($perfil->estudios) as $valueJson)
                                                @if($padreEstudios == $loop->iteration)
                                                    <img class="card-img-top imagenAjustadaContenedor" src="{{!empty ($urlZaabra.$valueJson) ? $urlZaabra.$valueJson : ''  }}" id="estudios{{$i}}" alt="Card image cap">
                                                    <input id="imgEstudios{{$i}}" name="imgEstudios{{$i}}" type="hidden" value="{{!empty ($valueJson) ? $valueJson : ''  }}"class="col-12 col-md-12">
                                                @endif          
                                            @endforeach
                                        </div>   

                                        <div class="col-12 col-md-12 noPad BtnAgregarFormProfesionales"> 
                                            <div class="col-8 col-md-8 divFile btnEstilosFormProfesionales">
                                                <p class="textoImputFileFormProfesionales noPadMar">Agregar Archivo</p>
                                                <input class="inputFile" onchange="loadFileestudios{{$i}}(event)" type="file" id="inputMultiestudios{{$i}}" name="inputMultiestudios{{$i}}" accept="image/png, image/jpeg">
                                            </div>  
                                            @if($i > 1)
                                                <div class="col-2 col-md-2 removImagenesFormProfesionales">
                                                    <a href="#" class="remove_fieldEstudio"> X </a>      
                                                </div>       
                                            @endif
                                        </div>

                                </div>
                                
                                    <script>
                                        if(localStorage.getItem("varEstu") != null){
                                            localStorage.removeItem('varEstu');
                                            localStorage.setItem('varEstu', {{$i}});
                                        }else{
                                            localStorage.setItem('varEstu', {{$i}});
                                        }

                                        var loadFileestudios{{$i}} = function(event) {
                                            var reader{{$i}} = new FileReader();
                                            reader{{$i}}.onload = function(){
                                            var output{{$i}} = document.getElementById('estudios{{$i}}');
                                            output{{$i}}.src = reader{{$i}}.result;
                                            };
                                            reader{{$i}}.readAsDataURL(event.target.files[0]);
                                        };
                                    </script>

                            @endfor 
                            
                        @else
                            <div class="col-12 col-md-12 col-lg-6 contImgEstudFormProfesionales">
                                <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Nivel de estudios *</h6>
                                <input type="text" class="form-control PropiedadIputDatPersFormProfesionales"  placeholder="Nivel Estudio" id="txtNivelEstudios1" name="txtNivelEstudios1">
                                
                                <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Nombre de la profesión *</h6>
                                <input type="text" class="form-control PropiedadIputDatPersFormProfesionales"  placeholder="Nombre" id="txtNombreEstudios1" name="txtNombreEstudios1">
                                
                                <div class="row">
                                    <div class="col-12 col-md-12"><h4 class="margin-top-1em fontLabelDatPersFormProfesionales">Fecha Culminación *</h4></div>
                                    <div class="col-12 col-md-12"> <input class="form-control PropiedadIputDatPersFormProfesionales" type="date" value="" id="fechaEstudios1"  name="fechaEstudios1"></div>
                                </div>
                                <br>
                                <div class="col-12 col-md-12 diseñoContenedorFotoDocumentos"  >
                                    <img class="card-img-top imagenAjustadaContenedor" id="Estudios1"/>
                                </div>

                                <div class="col-12 col-md-12 noPad BtnAgregarFormProfesionales"> 
                                    <div class="col-8 col-md-8 divFile btnEstilosFormProfesionales">
                                        <p class="textoImputFileFormProfesionales noPadMar">Agregar Archivo</p>
                                        <input class="inputFile"  type="file" id="inputMultiestudios1" name="inputMultiestudios1" accept="image/png, image/jpeg" onchange="loadFileestudios1(event)">
                                    </div>
                                </div>
                                <br>
                            </div>
                            <script>
                                if(localStorage.getItem("varEstu") != null){
                                    localStorage.removeItem('varEstu');
                                    localStorage.setItem('varEstu', 1);
                                }else{
                                    localStorage.setItem('varEstu', 1);
                                }
                                var loadFileestudios1 = function(event) {
                                    var reader1 = new FileReader();
                                    reader1.onload = function(){
                                    var output1 = document.getElementById('Estudios1');
                                    output1.src = reader1.result;
                                    };
                                    reader1.readAsDataURL(event.target.files[0]);
                                };
                            </script>

                        
                        @endif

                    </div>
                
                </div>


                <br>
                <div class="col-md-12 row noPadMar" id="publicaciones">
                    <div class="col-md-12 tituloSeccEstudiosPerFormProfesionales">
                        <h6 class="margin-top-1em noPad fontTituloSeccFormProfesionales">PUBLICACIONES <span class="agregarDivImagenPublicacion diseñoAgregarBoton col-md-1"></h6>
                    </div>
                    @if(!empty ($perfil->Publicaciones))
                        @foreach (json_decode($perfil->Publicaciones) as $valueJson)
                            @php $tamañoPublicaciones = $loop->iteration @endphp 
                        @endforeach
                    @endif
                    <div class="col-md-12 noPadMar input-multiple-imagenesGroup-Publicacion bordeContenidoDinamico">
                        @if(!empty ($perfil->Publicaciones) AND !empty ($perfil->nombrePublicacion) AND !empty ($perfil->linksPublicacion))
                                @for($i = 1; $i <= $tamañoPublicaciones; $i++)
                                @php $padrePublicaciones = $i;
                                @endphp

                                <div class="col-md-12 col-lg-6 contImgPublicFormProfesionales">
                                    @foreach(json_decode($perfil->nombrePublicacion) as $valueJson)
                                        @if($padrePublicaciones == $loop->iteration)
                                        <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Nombre</h6>
                                        <input type="text" class="form-control PropiedadIputDatPersFormProfesionales" placeholder="Nombre" id="txtNombrePublicacion{{$i}}"
                                        <?php if($padrePublicaciones == $loop->iteration) {
                                                            echo('value = "'.$valueJson.' "');
                                                        } ?> 
                                                        name="txtNombrePublicacion{{$i}}">
                                        @endif          
                                    @endforeach
                                        
                                    @foreach(json_decode($perfil->linksPublicacion) as $valueJson)
                                        @if($padrePublicaciones == $loop->iteration)
                                        <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Link</h6>
                                        <input type="text" class="form-control PropiedadIputDatPersFormProfesionales" placeholder="Link" id="txtLinkPublicacion{{$i}}" 
                                        <?php if($padrePublicaciones == $loop->iteration) {
                                                            echo('value = "'.$valueJson.' "');
                                                        } ?>  name="txtLinkPublicacion{{$i}}">
                                        @endif          
                                    @endforeach
                                    
                                    <div class="row">
                                        <div class="col-12"><h4 class="margin-top-1em fontLabelDatPersFormEstudiantes">Fecha Culminación</h4></div>
                                        <div class="col-12">
                                        @foreach(json_decode($perfil->fechaPublicacion) as $valueJson)
                                            @if($padrePublicaciones == $loop->iteration)
                                        <input class="form-control PropiedadIputDatPersFormEstudiantes" type="date"  id="fechaPublicacion{{$i}}" require 
                                        <?php if($padrePublicaciones == $loop->iteration) {
                                                            echo('value = "'.$valueJson.'"');
                                                        } ?>  
                                        name="fechaPublicacion{{$i}}">
                                                @endif          
                                        @endforeach
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-12 diseñoContenedorFotoDocumentos FotoloadPreview{{$i}}" id="FotoloadPreview{{$i}}" >
                                    @foreach (json_decode($perfil->Publicaciones) as $valueJson)
                                            @if($padrePublicaciones == $loop->iteration)
                                        <img class="card-img-top imagenAjustadaContenedor" src="{{!empty ($urlZaabra.$valueJson) ? $urlZaabra.$valueJson : ''  }}" id="Publicacion{{$i}}" alt="Card image cap">
                                        <input id="imgPublicacion{{$i}}" name="imgPublicacion{{$i}}" type="hidden" value="{{!empty ($valueJson) ? $valueJson : ''  }}">
                                        @endif          
                                    @endforeach
                                    </div>  
                                    <div class="BtnAgregarFormProfesionales"> 
                                        <div class="col-8 col-md-8 divFile btnEstilosFormProfesionales">
                                            <p class="textoImputFileFormProfesionales noPadMar">Agregar Archivo</p>
                                            <input class="inputFile" onchange="loadFilePublicacion{{$i}}(event)" type="file" id="inputMultiPublicacion{{$i}}" name="inputMultiPublicacion{{$i}}" accept="image/png, image/jpeg">
                                        </div>    
                                        @if($i > 1)
                                        <div class="col-2 col-md-2 removImagenesFormProfesionales">
                                            <a href="#" class="remove_fieldPublicacion"> X </a>
                                        </div>
                                        @endif              
                                    </div>
                                </div>
                                
                                <script>

                                if(localStorage.getItem("varPubl") != null){
                                    localStorage.removeItem('varPubl');
                                    localStorage.setItem('varPubl', {{$i}});
                                }else{
                                    localStorage.setItem('varPubl', {{$i}});
                                }

                                    var loadFilePublicacion{{$i}} = function(event) {
                                        var reader{{$i}} = new FileReader();
                                        reader{{$i}}.onload = function(){
                                        var output{{$i}} = document.getElementById('Publicacion{{$i}}');
                                        output{{$i}}.src = reader{{$i}}.result;
                                        };
                                        reader{{$i}}.readAsDataURL(event.target.files[0]);
                                    };
                                </script>


                            @endfor
                            @else
                            <div class="col-md-12 col-lg-6 contImgPublicFormProfesionales">
                                
                                <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Nombre</h6>
                                <input type="text" class="form-control PropiedadIputDatPersFormProfesionales" placeholder="Nombre" id="txtNombrePublicacion1" name="txtNombrePublicacion1">
                                
                                <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Link</h6>
                                <input type="text" class="form-control PropiedadIputDatPersFormProfesionales" placeholder="Link" id="txtLinkPublicacion1" name="txtLinkPublicacion1">
                            
                                <div class="row">
                                    <div class="col-md-12"><h4 class="margin-top-1em fontLabelDatPersFormProfesionales">Fecha Culminación</h4></div>
                                    <div class="col-md-12"> <input class="form-control PropiedadIputDatPersFormProfesionales" type="date" value="" id="fechaPublicacion1" require name="fechaPublicacion1"></div>
                                </div>
                                <br>
                                <div class="col-md-12 diseñoContenedorFotoDocumentos"  >
                                    <img class="card-img-top imagenAjustadaContenedor" id="Publicacion1"/>
                                </div>

                                <div class="BtnAgregarFormProfesionales"> 
                                    <div class="col-8 col-md-8 divFile btnEstilosFormProfesionales">
                                        <p class="textoImputFileFormProfesionales noPadMar">Agregar Archivo</p>
                                        <input class="inputFile"  type="file" id="inputMultiPublicacion1" name="inputMultiPublicacion1" accept="image/png, image/jpeg" onchange="loadFilePublicacion1(event)">
                                    </div>
                                </div>
                                <br>
                            </div>
                            <script>
                                if(localStorage.getItem("varPubl") != null){
                                    localStorage.removeItem('varPubl');
                                    localStorage.setItem('varPubl', 1);
                                }else{
                                    localStorage.setItem('varPubl', 1);
                                }
                                var loadFilePublicacion1 = function(event) {
                                    var reader1 = new FileReader();
                                    reader1.onload = function(){
                                    var output1 = document.getElementById('Publicacion1');
                                    output1.src = reader1.result;
                                    };
                                    reader1.readAsDataURL(event.target.files[0]);
                                };
                            </script>

                        
                        @endif

                    </div>
                </div>
                <br>


                <div class="col-md-12 row noPadMar" id="certificados">
                    <div class="col-md-12 tituloSeccEstudiosPerFormProfesionales">
                        <h6 class="margin-top-1em noPad fontTituloSeccFormProfesionales">CERTIFICADOS <span class="agregarDivImagenCertificados diseñoAgregarBoton col-md-1"></h6>
                    </div>
                    
                    @if(!empty ($perfil->titulos))
                        @foreach (json_decode($perfil->titulos) as $valueJson)
                            @php $tamañoCertificaciones = $loop->iteration @endphp 
                        @endforeach
                    @endif
                    
                    <div class="col-md-12 noPadMar input-multiple-imagenesGroup-Certificados bordeContenidoDinamico">
                
                        @if(!empty ($perfil->titulos) and !empty($perfil->entidadCertificado) and !empty($perfil->nombreCertificado) and !empty($perfil->fechaCertificado))
                            @for($i = 1; $i <= $tamañoCertificaciones; $i++)
                                @php $padreCertificado = $i;
                                @endphp
                                
                            
                                <div class="col-md-12 col-lg-6 contImgCertifFormProfesionales">
                                    @foreach(json_decode($perfil->entidadCertificado) as $valueJson)
                                        @if($padreCertificado == $loop->iteration)
                                        <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Entidad *</h6>
                                        <input type="text" class="form-control PropiedadIputDatPersFormProfesionales"  placeholder="Entidad" id="txtNivelCertificados{{$i}}"
                                        <?php if($padreCertificado == $loop->iteration) {
                                                            echo('value = "'.$valueJson.' "');
                                                        } ?>  
                                        name="txtNivelCertificados{{$i}}">
                                        @endif          
                                    @endforeach
                                
                                    @foreach(json_decode($perfil->nombreCertificado) as $valueJson)
                                        @if($padreCertificado == $loop->iteration)
                                        <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Nombre del certificado *</h6>
                                        <input type="text" class="form-control PropiedadIputDatPersFormProfesionales"  placeholder="Nombre" id="txtNombreCertificados{{$i}}"
                                        <?php if($padreCertificado == $loop->iteration) {
                                                            echo('value = "'.$valueJson.' "');
                                                        } ?>  
                                    name="txtNombreCertificados{{$i}}">
                                        @endif          
                                    @endforeach
                                
                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="margin-top-1em fontLabelDatPersFormEstudiantes">Fecha Culminación *</h4>
                                        </div>
                                        <div class="col-12">
                                        @foreach(json_decode($perfil->fechaCertificado) as $valueJson)
                                            @if($padreCertificado == $loop->iteration)
                                        <input class="form-control PropiedadIputDatPersFormEstudiantes" type="date"  id="fechaCertificados{{$i}}"  
                                        <?php if($padreCertificado == $loop->iteration) {
                                                            echo('value = "'.$valueJson.'"');
                                                        } ?>  
                                        name="fechaCertificados{{$i}}">
                                                @endif          
                                        @endforeach
                                        
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-12 diseñoContenedorFotoDocumentos FotoloadPreview{{$i}}" id="FotoloadPreview{{$i}}" >
                                    @foreach (json_decode($perfil->titulos) as $valueJson)
                                        @if($padreCertificado == $loop->iteration)
                                        <img class="card-img-top imagenAjustadaContenedor" src="{{!empty ($urlZaabra.$valueJson) ? $urlZaabra.$valueJson : ''  }}" id="Certificados{{$i}}" alt="Card image cap">
                                        <input id="Certificado{{$i}}" name="imgCertificado{{$i}}" type="hidden" value="{{!empty ($valueJson) ? $valueJson : ''  }}">
                                        @endif          
                                    @endforeach
                                    </div>   
                                    <div class="BtnAgregarFormProfesionales"> 
                                        <div class="col-8 col-md-8 divFile btnEstilosFormProfesionales">
                                        <p class="textoImputFileFormProfesionales noPadMar">Agregar Archivo</p>
                                        <input class="inputFile" onchange="loadFileCertificados{{$i}}(event)" type="file" id="inputMultiCertificados{{$i}}" name="inputMultiCertificados{{$i}}" accept="image/png, image/jpeg">
                                    </div> 
                                        
                                        @if($i > 1)
                                        <div class="col-2 col-md-2 removImagenesFormProfesionales">
                                        <a href="#" class="remove_fieldCertificados"> X </a>  
                                        </div>  
                                        @endif        
                                    </div> 
                                </div>

                                
                                <script>
                                    if(localStorage.getItem("varCert") != null){
                                    localStorage.removeItem('varCert');
                                    localStorage.setItem('varCert', {{$i}});
                                }else{
                                    localStorage.setItem('varCert', {{$i}});
                                }
                                    var loadFileCertificados{{$i}} = function(event) {
                                        var reader{{$i}} = new FileReader();
                                        reader{{$i}}.onload = function(){
                                        var output{{$i}} = document.getElementById('Certificados{{$i}}');
                                        output{{$i}}.src = reader{{$i}}.result;
                                        };
                                        reader{{$i}}.readAsDataURL(event.target.files[0]);
                                    };
                                </script>
                            @endfor 

                        
                        @else
                            <div class="col-md-12 col-lg-6 contImgCertifFormProfesionales">
                                <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Entidad *</h6>
                                <input type="text" class="form-control PropiedadIputDatPersFormProfesionales" placeholder="Entidad" id="txtNivelCertificados1" name="txtNivelCertificados1" >
                                
                                <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Nombre del certificado *</h6>
                                <input type="text" class="form-control PropiedadIputDatPersFormProfesionales" placeholder="Nombre" id="txtNombreCertificados1" name="txtNombreCertificados1" >
                                
                                <div class="row">
                                    <div class="col-md-12"><h4 class="margin-top-1em fontLabelDatPersFormProfesionales">Fecha Culminación *</h4></div>
                                    <div class="col-md-12"> <input class="form-control PropiedadIputDatPersFormProfesionales" type="date" value="" id="fechaCertificados1"  name="fechaCertificados1"></div>
                                </div>
                                <br>
                                <div class="col-md-12 diseñoContenedorFotoDocumentos"  >
                                    <img class="card-img-top imagenAjustadaContenedor" id="Certificados1"/>

                                </div>
                                <div class="BtnAgregarFormProfesionales"> 
                                    <div class="col-8 col-md-8 divFile btnEstilosFormProfesionales">
                                        <p class="textoImputFileFormProfesionales noPadMar">Agregar Archivo</p>
                                        <input class="inputFile"  type="file" id="inputMultiCertificados1" name="inputMultiCertificados1" accept="image/png, image/jpeg" onchange="loadFileCertificados1(event)">
                                    </div>
                                </div> <br>
                            </div>
                            <script>
                                if(localStorage.getItem("varCert") != null){
                                    localStorage.removeItem('varCert');
                                    localStorage.setItem('varCert', 1);
                                }else{
                                    localStorage.setItem('varCert', 1);
                                }
                                var loadFileCertificados1 = function(event) {
                                    var reader1 = new FileReader();
                                    reader1.onload = function(){
                                    var output1 = document.getElementById('Certificados1');
                                    output1.src = reader1.result;
                                    };
                                    reader1.readAsDataURL(event.target.files[0]);
                                };
                            </script>

                        
                        @endif

                    </div>
                </div>
                <br>
                @if(!empty ($perfil->imagen[0]))
                    @foreach (json_decode($perfil->imagen) as $valueJson)
                        @php $tamañoGaleria = $loop->iteration @endphp 
                    @endforeach
                @endif
                <div class="col-md-12 row noPadMar" id="galeria">
                    <div class="col-md-12 row noPadMar">
                        <div class="col-md-12 tituloSeccEstudiosPerFormProfesionales"><h3 class="margin-top-1em noPad fontTituloSeccFormProfesionales">GALERÍA</h3></div>
                        <div class="col-md-12 margin-top-1em noPad"><h5 class="fontFraseGaleriaFormProfesionales">Sube tus imágenes y videos que desees compartir</h5></div>
                        <div class="col-md-12 noPadMar contCrearAlbunFormProfesionales"><h3 class="fontTituloSeccFormProfesionales">Crear álbum</h3><span class="agregarDivImagen diseñoAgregarBoton col-md-1"></span></div>
                    </div>
                    <div class="row col-md-12 input-multiple-imagenesGroup noPadMar">
                    
                    @if(!empty ($perfil->imagen[0]))
                        @for($i = 1; $i <= $tamañoGaleria; $i++)
                            @php $padreGaleria = $i; @endphp
                        
                            <div class="col-12 col-md-12 col-lg-6 divFileFotosGaleria">
                                <div class="col-md-12 diseñoContenedorFoto FotoloadPreview{{$i}}" id="FotoloadPreview1" style="height: 300px;" >
                                    @foreach (json_decode($perfil->imagen) as $valueJson)
                                        @if($padreGaleria == $loop->iteration)
                                        <img class="card-img-top imagenAjustadaContenedor" src="{{!empty ($urlZaabra.$valueJson) ? $urlZaabra.$valueJson : ''  }}" id="output{{$i}}" alt="Card image cap">
                                        <input id="imgGaleria{{$i}}" name="imgGaleria{{$i}}" type="hidden" value="{{!empty ($valueJson) ? $valueJson : ''  }}">
                                        @endif          
                                    @endforeach
                                </div> 
                                <div class="BtnAgregarFormProfesionales">  
                                    <div class="col-8 col-md-8 col-lg-6 divFile btnEstilosFormProfesionales">
                                        <p class="textoImputFileFormProfesionales noPadMar">Agregar Archivo</p>
                                        <input class="inputFile"  onchange="loadFile{{$i}}(event)" type="file" id="inputMulti{{$i}}" name="inputMulti{{$i}}" accept="image/png, image/jpeg">
                                    </div>  
                                    @if($i > 1)
                                    <div class="col-2 col-md-2 removImagenesFormProfesionales">
                                        <a href="#" class="remove_Galeria"> X </a>  
                                    </div>  
                                    @endif    
                                </div>                       
                            </div>
                            <script>
                                if(localStorage.getItem("varGale") != null){
                                    localStorage.removeItem('varGale');
                                    localStorage.setItem('varGale', {{$i}});
                                }else{
                                    localStorage.setItem('varGale', {{$i}});
                                }
                                var loadFile{{$i}} = function(event) {
                                    var reader{{$i}} = new FileReader();
                                    reader{{$i}}.onload = function(){
                                    var output{{$i}} = document.getElementById('output{{$i}}');
                                    output{{$i}}.src = reader{{$i}}.result;
                                    };
                                    reader{{$i}}.readAsDataURL(event.target.files[0]);
                                };



                            </script>
                           @endfor
                        @else
                            <div class="col-12 col-md-12 col-lg-6 divFileFotosGaleria"  >
                                <div class="col-md-12 diseñoContenedorFoto" id="FotoloadPreview1" style="height: 300px;" >
                                    <img class="card-img-top imagenAjustadaContenedor" id="output1"/>
                                </div>
                                <div class="BtnAgregarFormProfesionales"> 
                                    <div class="col-8 col-md-8 col-lg-6 divFile btnEstilosFormProfesionales">
                                        <p class="textoImputFileFormProfesionales noPadMar">Agregar Archivo</p>
                                        <input  class="inputFile"  type="file" id="inputMulti1" name="inputMulti1" accept="image/png, image/jpeg" onchange="loadFile1(event)">
                                    </div>
                                </div>
                            </div>
                            <script>
                                if(localStorage.getItem("varGale") != null){
                                    localStorage.removeItem('varGale');
                                    localStorage.setItem('varGale', 1);
                                }else{
                                    localStorage.setItem('varGale', 1);
                                }
                                var loadFile1 = function(event) {
                                    var reader1 = new FileReader();
                                    reader1.onload = function(){
                                    var output1 = document.getElementById('output1');
                                    output1.src = reader1.result;
                                    };
                                    reader1.readAsDataURL(event.target.files[0]);
                                };
                            </script>
                        @endif
                        
                    </div>
                        
                

                </div>

                <div class="col-md-12 row noPadMar" id="Redes">
                    <div class="col-md-12 tituloSeccDatosPerFormProfesionales">
                        <h3 class="fontTituloSeccFormProfesionales">REDES SOCIALES</h3>
                    </div>
                    <div class="col-12 noPadMar">
                        <div class="form-group col-md-12 noPad m-0">
                            <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">WhatsApp</h6>
                            <input type="text" class="form-control PropiedadIputDatPersFormProfesionales" value="{{!empty ($perfil->whatsapp) ? $perfil->whatsapp: ''  }}" placeholder="Escribe aqui" id="whatsapp" name="whatsapp">
                        </div>
                        <div class="form-group col-md-12 noPad m-0">
                            <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Facebook</h6>
                            <input type="text" class="form-control PropiedadIputDatPersFormProfesionales" value="{{!empty ($perfil->facebook) ? $perfil->facebook: ''  }}" placeholder="Escribe aqui" id="facebook" name="facebook">
                        </div>
                        <div class="form-group col-md-12 noPad m-0">
                            <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Instagram</h6>
                            <input type="text" class="form-control PropiedadIputDatPersFormProfesionales" value="{{!empty ($perfil->instagram) ? $perfil->instagram: ''  }}" placeholder="Escribe aqui" id="instagram" name="instagram">
                        </div>
                        <div class="form-group col-md-12 noPad m-0">
                            <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Twitter</h6>
                            <input type="text" class="form-control PropiedadIputDatPersFormProfesionales" value="{{!empty ($perfil->twitter) ? $perfil->twitter: ''  }}" placeholder="Escribe aqui" id="twitter" name="twitter">
                        </div>
                        <div class="form-group col-md-12 noPad m-0">
                            <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">YouTube </h6>
                            <input type="text" class="form-control PropiedadIputDatPersFormProfesionales" value="{{!empty ($perfil->youtube) ? $perfil->youtube: ''  }}" placeholder="Escribe aqui" id="youtube" name="youtube">
                        </div>
                    
                    </div>
                </div>
                
                <br>

                
                @if(empty($perfil))
                <div class="col-md-12 py-4 contBtnInferiorFormProfesionales">
                    <div class="col-md-12 col-lg-6 text-center px-1 m-0 noPadMar">
                        <span class="tipografiaTerminosCondiciones">
                            <div class="contain-check">
                                <input type="checkbox" name="" id="acepto" >
                            </div>
                            Declaro que he leido y acepto los 
                            <a href="" data-toggle="modal" data-target="#politicasFormularioProfesiona">Términos y condiciones</a> de Zaabra.
                        </span>
                    </div>
                </div>   
                @endif
                <div class="col-md-12 py-4 contBtnInferiorFormProfesionales">
                    <div class="col-md-12 col-lg-6 text-center px-1 m-0">
                        <button class="BtnGuardarFormProfesionales" type="submit">Guardar</button>
                    </div>
                </div> 
                <br>

            </div>

        </div>

    <input type="hidden" name="cantEstudios" id="cantEstudios">
    <input type="hidden" name="cantCertificados" id="cantCertificados">
    <input type="hidden" name="cantPublicaciones" id="cantPublicaciones">
    <input type="hidden" name="cantGaleria" id="cantGaleria">
    <input type="hidden" name="expertoEn" id="expertoEn">
    <input type="hidden" name="cantExperiencia" id="cantExperiencia">

</form>


<!-- Modal Terminos y condiciones -->
<div class="modal fade" id="politicasFormularioProfesiona" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Terminos Condiciones Profesional</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <P>
            TÉRMINOS Y CONDICIONES GENERALES DEL SERVICIO1. CONCEPTOS GENERALESEn el presente contrato serán de aplicación las definiciones que se detallan másabajo. Así mismo, las palabras en singular incluirán el plural y viceversa.“Partes”: La Compañía y el Usuario de forma conjunta.“Contrato”: El presente contrato de prestación de servicios incluyendo, laspresentes condiciones generales, las Condiciones particulares y todas suscláusulas y/o Anexos.“Profesional,   tecnólogo,   docente   o   estudiante”:   Persona   física   o   jurídica,según el caso, que suscribe este Contrato con ZAABRA PROFESIONALpara beneficiarse del Servicio de membresía.“ZAABRA   PROFESIONAL”   o   “Compañía”:   Importadora   Andiamo   sas,Carrera 64 #67B – 89, Bogotá DC, con NIT 901294385-1. “Usuario”:   Persona   física   que   tiene   una   cuenta   o   accede   al   Sitio   Webhttps://www.zaabraprofesional.com.co“Sitio   Web”:   Herramienta   en   línea   disponible   en   la   siguiente   direcciónhttps://www.zaabraprofesional.com.coy     operada     por     ZAABRAPROFESIONAL   que   permite,   entre   otros,   que   los   Profesionales   puedanofrecer sus servicios.“Profesional”:   Profesional   cuya   actividad   consiste   en   la   prestación   deservicios   específicos   de   las   diferentes   áreas,   área   de   la   salud,   áreaeconómico administrativa, tecnólogos, ingenieros, docentes y estudiantes,en el supuesto en el que el Usuario sea una persona física, el Profesional yel   Usuario   serán   la   misma   persona   y   por   consiguiente,   las   actividadesanteriores serán prestadas directamente por el Usuario.“Cuenta”:   Entrada   en   la   base   de   datos   del   Sitio   Web   que   confiere   lacondición   de   Usuario   con   acceso   a   los   Servicios   Premium,   una   vezintroducido el usuario y la contraseña correspondientes.“Perfil”: Información del Profesional publicada en una landing page del SitioWeb identificada con una dirección URL perteneciente a la Compañía.“Membresía”: Servicio ofrecido por ZAABRA PROFESIONAL al Usuario através de un sistema, que permite, entre otros, agregar contenido a cadauno de los Perfiles y utilizar el calendario.“Calendario”: programa informático titularidad de la Compañía, que permiteal usuario entre otras funcionalidades, gestionar su cita o asesoramientocon el profesional y revisar la disponibilidad.“Período   de   Facturación”:   Cada   uno   de   los   meses   o   años   naturales,   enfunción del período inicial y tipo de suscripción, que se iniciarán a partir deque   se   genera   el   pago,   es   responsabilidad   del   profesional,   estudiante   o
docente, el tiempo que se demore ingresando la información que se va acargar en la página.2. MEMBRESÍA 2.1   Servicios   ofrecidos   por   parte   de   ZAABRA   PROFESIONAL   al   Usuario,otorgando acceso a las siguientes funcionalidades y/o herramientas a través de suCuenta, las cuales se adaptarán a las características de los Perfiles asignados:a. Beneficiarse de los servicios ofrecidos por ZAABRA PROFESIONAL a travésdel calendario de la plataforma;b.   Incluir   los   Perfiles   entre   los   resultados   de   búsqueda   de   Profesionalesregistrados en el Sitio Web o plataforma. c. Recibir estadísticas asociadas a cada uno de los Perfiles.Las herramientas y/o servicios anteriores únicamente estarán disponibles para losPerfiles que hayan sido previamente revisados y aprobados.2.2 Tipos de Perfiles disponibles dentro del Servicio Premium: a. Perfil Premium: contamos con tres perfiles premium dependiendo de su perfil,sea un perfil profesional, perfil docente, perfil tecnólogo o perfil estudiante. El sitioweb le da la posibilidad de mejorar su posicionamiento a través de la suscripción opago de membresía en este servicio que le ofrece configurar su ficha de una formamás completa, sin publicidad de terceros y mostrarse de forma más destacada enlos  listados  y en  fichas  de   otros  profesionales. Con  esta  opción, el  profesionalpuede   ofrecer   su   horario   para   que   los   usuarios   puedan   reservar   su   servicio   através de la plataforma en el calendario. b. Perfil inicial: Este perfil es un perfil promocional que incluye solo informaciónbásica incluida foto del profesional. Siempre estará disponible la membresía en elmomento que el profesional desee modificar el plan, siempre y cuando cumpla conlos   requisitos   mínimos,   estos   serán   contratados   sin   necesidad   de   modificar   elpresente   acuerdo,   mediante   notificación   escrita,   por   email   o   cualquier   otra   víatelemática.2.3  La   membrecía   es  proporcionada   por  ZAABRA   PROFESIONAL   teniendo   encuenta   los   Perfiles   que   han   sido   verificados   en   la   forma   y   condiciones   quedetermine   ZAABRA   PROFESIONAL   a   su   entera   discreción.   La   prestación   delServicio   por   parte   de   ZAABRA   PROFESIONAL   al   Usuario   se   iniciará   en   elmomento del pago de esta.
2.4   A   los   efectos   de   poder   prestar   de   forma   adecuada   el   Servicio   y   darcumplimiento al presente contrato y a la legislación aplicable, el Usuario deberáproporcionar a la Compañía toda aquella información que ésta última requiera.2.5 ZAABRA PROFESIONAL se reserva el derecho de decidir, en cada momento,los   productos   y/o   servicios   que   se   ofrecen.   De   este   modo,   ZAABRAPROFESIONAL   podrá,   en   cualquier   momento,   añadir   nuevos   productos   y/oservicios   a   los   ofertados   actualmente.   Así   mismo   ZAABRA   PROFESIONAL   sereserva el derecho a retirar o dejar de ofrecer, en cualquier momento, y sin previoaviso, cualquiera de los servicios ofrecidos.  3. ASIGNACIÓN DE PERFIL3.1   Una   vez   suscrito   el   presente   Contrato,   el   profesional   recibirá   vía   correoelectrónico la confirmación del pago y procederá a responder el formulario contodos los datos que ZAABRA PROFESIONAL solicita, estos serán verificados porel equipo profesional para su respectiva publicación. Cada profesional tendrá superfil individual.3.2 Sin perjuicio de lo dispuesto en el apartado anterior, mediante la aceptación yla firma del presente Contrato, el profesional acepta, consiente y autoriza de formaexpresa a ZAABRA PROFESIONAL a la publicación de dicha información. 3.3   El   Profesional   autoriza   y   permite   a   ZAABRA   PROFESIONAL   modificar   elcontenido,   materiales   y   documentos   facilitados   por   parte   del   Profesional   a   losefectos   de   preparar   el   Perfil   o   landing   page,   en   este   sentido,   cualquiermodificación realizada se limitará a actuaciones encaminadas a mejorar la calidadde la publicación y validar la veracidad de la misma (eliminar errores, mejorar lacalidad de las imágenes, confirmar la veracidad de la especialidad del Profesional,entre otros).4. CONTRAPRESTACIÓN 4.1. ZAABRA PROFESIONAL tendrá derecho a percibir la retribución acordado enlas condiciones particulares al inicio de cada uno de los periodos de facturación enfunción de la membresía que se adquiera, sin perjuicio de lo anterior, las partespodrán acordar posteriormente a la firma del presente acuerdo la modificación dela retribución que se detalla en las condiciones particulares, el profesional pagarásu membresía a través de la plataforma, y dentro de esta misma plataforma elusuario   agendará  y  de   inmediato   podrá   dirigirse   al   pago   de   la  consulta   con   elprofesional; de acuerdo a la ley  CITAR LEY.................  cuando el usuario esté
completamente   satisfecho   con   el   servicio   ZAABRA   PROFESIONAL   procede   ahacer   la   entrega   del   dinero   al   profesional,   descontando   los   gastos   operativosocasionados   con   la   pasarela   de   pagos   PayU   (Cargo   fijo   por   transacción,Porcentaje PayU x transacción, transacciones y transferencia, 4 x 1000).5.DEVENGO, FACTURACIÓN Y FORMA DE PAGO5.1 La contraprestación devengada a favor de ZAABRA PROFESIONAL deberáser abonada por el profesional, docente o estudiante al inicio de cada periodo dela membresía, ya sea pagada por 6 meses o 12 meses según sea el caso. 5.2 Las facturas correspondientes serán emitidas por pagos de membresía porparte de ZAABRA PROFESIONAL en los siguientes 3 días hábiles, mediante elpago de la membresía, el profesional, docente o estudiante autoriza expresamentea ZAABRA PROFESIONAL a emitir la factura y remitirla al correspondiente correodonde se detallan las condiciones.5.3 Facturas emitidas por agendamiento y pago de consulta con el profesional;estás facturas serán emitidas por cada uno de los profesionales que ofrecen elservicio a través de la plataforma de ZAABRA PROFESIONAL.5.4 El cliente podrá solicitar la devolución (reembolso) de los montos pagados aZAABRA PROFESIONAL en caso de presentarse errores de cobro, por ejemplo,pagos dobles o montos diferentes a los pactados.6.AGENDAMIENTO DE CITAS6.1   Tras   la   activación   de   La   membresía,   ZAABRA   PROFESIONAL   confiereúnicamente   al   profesional,   excluyendo   expresamente   a   cualquiera   de   lasempresas y entidades que puedan formar parte su mismo grupo de sociedades, eluso de una landing page dentro de la plataforma de servicios profesionales por untiempo específico y determinado. 6.2 El permiso entregado a cada profesional le da el derecho al profesional paraingresar a su perfil y definir que días y horas específicas podrá ofrecer su servicioa través de nuestra plataforma de ZAABRA PROFESIONAL, de esta manera elusuario pueda agendar un espacio con el profesional requerido, inmediatamente elusuario genere el agendamiento de la cita, deberá hacer el pago para así asegurarsu servicio.6.3   El   permiso   y   usuario   otorgado   a   cada   profesional   por   parte   de   ZAABRAPROFESIONAL se confiere por el plazo del pago de membresía que genere.
6.4   Este   calendario   permite   al   usuario   y   al   profesional   realizar   las   siguientestareas:Entregar   a   ZAABRA   PROFESIONAL   la   disponibilidad   de   tiempo   paraconsultas o servicio, tiempo en días y horas, para que le usuario puedaacceder y realizar el respectivo agendamiento de cita.Confirmar los espacios que sean pagados por el usuario y de esta menaragenerar las notificaciones correspondientes antes de la consulta.Podrá acceder a este desde cualquier dispositivo, sea computador, celularo Tablet.El profesional que realiza el pago de la membresía es responsable por elcumplimiento de las citas agendadas y pagadas a través de la plataformaZAABRA PROFESIONAL. 6.5   ZAABRA   PROFESIONAL   se   reserva   el   derecho   a   bloquear   el   acceso   alcalendario de agendamiento de citas, en el supuesto en el que se realice un usoindebido o inadecuado del mismo, o no se cumpla con el usuario final lo pactado,de   conformidad   con   las   previsiones   del   presente   contrato,   a   estos   efectos   seentenderá   como   “uso   inadecuado” a   los  siguiente:  que   este   sea   manejado   porotras personas no autorizadas  o no  registradas anteriormente, no  podrá  enviarcorreos   no   deseados   o   spam,   reproducir   o   intentar   reproducir   el   software   sinautorización,   perjudicar   los   intereses   de   ZAABRA   PROFESIONAL,   no   darcumplimiento a las obligaciones previstas en el presente contrato (incluyendo lascondiciones   generales)   o   las   condiciones   legales   previstas   en   la   plataformaZAABRA   PROFESIONAL,   cancelar   de   forma   reiterada   las   solicitudes   de   losusuarios   finales,   utilizar   la   plataforma   para   fines   distintos   a   los   previstos   en   elpresente   contrato   o   en   el   presente   documento   de   términos   y   condiciones   delservicio.6.6   Para   estos   efectos,   en   el   supuesto   en   el   que   ZAABRA   PROFESIONALentienda que se ha incumplido alguna de las obligaciones anteriores, notificará alprofesional, docente, o estudiante a la dirección de correo electrónico indicandoque   se   ha   procedido   a   la   cancelación   de   los   servicios   que   se   encuentranexpuestos dentro de la plataforma, en ningún caso la cancelación de este servicioafectará la remuneración que ZAABRA PROFESIONAL percibe.6.7   Las   partes   acuerdan   que   queda   excluida   de   forma   expresa   del   presenteservicio cualquier derecho sobre el software o código fuente del mismo.6.8   Así   mismo,   el   profesional,   docente   o   estudiante   mantendrá   a   ZAABRAPROFESIONAL   plenamente   a   salvo   respecto   de   la   totalidad   de   daños,responsabilidades, demandas, obligaciones, juicios, sentencias y gastos de todo
tipo en los cuales pueda incurrir como consecuencia de reclamaciones de tercerosen relación al uso por parte del cliente, o de su personal.7. Duración y terminación  7.1  El  Contrato  entrará   en  vigor en   el   momento  del   pago  de  la   membresía  osuscripción, salvo acuerdo explícito en contra en las Condiciones Particulares delpresente acuerdo, el período inicial del Contrato será por el plazo de 12 meses o 6meses según la membresía pagada; estos días comienzan a contar desde la fechade pago de la membresía, esta deberá ser renovada con el pago cada periodosegún   el   escogido,   de   no   recibir   el   pago   8   días   hábiles   antes   de   terminar   elperiodo,   el   sistema   inmediatamente   cumplido   el   tiempo   ocultará   el   perfil   delprofesional, tecnólogo, docente o estudiante. La persona o entidad que se rija bajoel   contrato   no   podrá   resolver   o   terminar   este   contrato,   excepto   por   causasprevistas   en   la   ley   o   lo   dispuesto   en   las   condiciones   expuestas   en   estedocumento, en el caso de que el cliente decida dar de baja y/o dejar de utilizar losservicios   prestados   a   través   de   ZAABRA   PROFESIONAL   antes   del   tiempo   definalización de la membresía, ZAABRA PROFESIONAL no se hace devolución dedinero por el servicio prestado. El pago de la membresía será adelantado en un100%.7.2 Sin  perjuicio  de  lo  anterior y  sujeto  a la  cláusula  7.4, el  presente  Contratopodrá ser resuelto como consecuencia de cualquiera de las siguientes causas: a.Por   mutuo   acuerdo   entre   las   Partes;   b.   Tras   la   finalización   del   Período   de   lamembresía pagada, a solicitud de cualquiera de las Partes con un plazo mínimode   preaviso   de   treinta   (30)   días   a   la   fecha   del   inicio   del   siguiente   Período   deFacturación;   y/o   c.   Por   parte   de   la   ZAABRA   PROFESIONAL   en   caso   deincumplimiento   del   profesional,   tecnólogo,   docente   o   estudiante.   ZAABRAPROFESIONAL   podrá   cancelar   el   servicio   y   lo   pactada   con   el   profesional,tecnólogo, docente o estudiante en los siguientes casos: a) Si el profesional nopresta un servicio adecuado de acuerdo a la calificación otorgada por el usuario.b) Por generar un mal procedimiento en el usuario final. c) No entregar informacióna   ZAABRA   PROFESIONAL   o   que   ZAABRA   PROFESIONAL   no   pueda   verificarque la información suministrada sea real.7.3 Sin perjuicio de lo anterior, cada perfil acordado en las condiciones generalestendrá una permanencia de 12 meses o 6 meses dependiendo de la membresíaadquirida, a efectos aclaratorios, en caso de cancelación por parte del profesional,tecnólogo, docente o estudiante de conformidad con los dispuesto en el numeral7.2, el acuerdo permanecerá en todo caso en vigencia con el perfil adquirido y
este genera una renovación automática finalizado el periodo pactado en el primerpago.7.4 La anulación o terminación del acuerdo, conllevará la automática cancelacióndel perfil en la plataforma ZAABRA PROFESIONAL, así mismo, dejarán de serexigibles por parte de la compañía las obligaciones de pago de los servicios objetodel presente acuerdo, salvo aquellas que ya se hubiera devengado a favor de lacompañía,   No   obstante   lo   anterior,   las   obligaciones   de   las   partes   continuaránsiendo   exigibles   en   lo   que   respecta   a   aquellos   perfiles   sujetos   a   periodos   depermanencia; sin perjuicio de lo anterior, en caso de cancelación del acuerdo porparte de ZAABRA PROFESIONAL por incumplimiento del profesional, tecnólogo,docente   o   estudiante,   no   serán   de   aplicación   los   periodos   de   permanenciaadquiridos y ZAABRA PROFESIONAL tendrá derecho a percibir la indemnizaciónque se prevé en la  cláusula 9.3  siguiente o cualquier otra del presente acuerdo,así como las cantidades devengadas y no pagadas por el cliente.7.5 Las partes acuerdan que el profesional, tecnólogo, docente o estudiante noostentará   ningún   derecho   como   consecuencia   de   la   licencia   y/o   de   cualquierherramienta asociada al software o prestación de los servicios aquí descritos, asícomo   tampoco   ningún   derecho   de   compensación   como   consecuencia   de   lacancelación o terminación anticipada de este acuerdo.7.6   La   cancelación   del   presente   contrato   no   perjudicará   en   modo   alguno   elderecho de la parte afectada por tal incumplimiento a reclamar la correspondienteindemnización por los daños y perjuicios causados, respetando en todo caso, lostérminos previstos en el presente acuerdo. 8. Derechos y obligaciones de ZAABRA PROFESIONAL8.1 En el marco de la prestación del servicio adquirido como membresía, ZAABRAPROFESIONAL   se   compromete   a:   a)   Ofrecer   servicios   de   membresía   en   lostérminos previstos en las condiciones generales y, en su caso en las condicionesgenerales   del   servicio.   b)   Proporcionar   al   profesional,   tecnólogo,   docente   oestudiante las herramientas necesarias para asignar el perfil e información parapublicar en el sitio. c) Proporcionar las herramientas y características necesariaspara   que   el   profesional,   tecnólogo,   docente   o   estudiante   pueda   gestionar   yadministrar   la   información   dentro   de   su   perfil,   incluyendo   disponibilidad   enagendamientos   de   citas,   agendamiento   de   citas   como   tal.   d)   Proporcionarasistencia en la edición del perfil o landing page durante toda la duración de lamembresía, asistencia que se dará en los horarios estipulados, lunes a viernes de8 am a 5 pm por medio de nuestros canales virtuales, Teléfono 3212449869 o alcorreo electrónico serviciosprofesionales@zaabra.com.co.9. Obligaciones del profesional, tecnólogo, docente o estudiante.
9.1 El profesional, tecnólogo, docente o estudiante declara, garantiza y se obligafrente a ZAABRA PROFESIONAL a dar cumplimiento a toda y cada una de lasprevisiones del presente acuerdo, incluyendo términos y condiciones generales ytérminos   y   condiciones   generales   del   servicio,   con   la   debida   diligencia   y   enatención a la naturaleza de su actividad profesional y en especial se comprometea:   a)   Mantener   en   todo   momento   actualizada   la   información   de   cada   perfil.   b)Abonar en tiempo y forma los pagos que estén a favor de ZAARA PROFESIONAL.c)   Estar   en   contacto   permanente   con   ZAABRA   PROFESIONAL   para   que   estaúltima pueda realizar la adecuada prestación del servicio y en particular aceptarlos términos y condiciones requeridos por ZAABRA PROFESIONAL. d) ZAABRAPROFESIONAL   proporciona   a   cada   perfil   o   landing   page   el   software   deagendamiento   de   consulta,   este   software   es   propiedad   de   ZAABRAPROFESIONAL, será administrado por este mismo. e) Abstenerse de utilizar deforma   ilícita   la   plataforma   de   ZAABRA   PROFESIONAL   y   herramientas   quecomponen   la   misma,   incluyendo,   pero   no   limitándose   a   ello,   el   envío   denotificaciones   o   mensajes   a   usuarios   a   través   de   la   plataforma   sin   respetar   lanormativa de protección de datos de carácter personal o cualquier otra que sea deaplicación.  f)   Incluir   en   cada   formulario   del   perfil   información   clara,   completa   yveraz, así como de la información de cada una de las citas y lugares en las que seadmitirán   los   usuarios,   el   profesional,   tecnólogo,   docente   o   estudiante   secompromete a añadir de forma puntual la disponibilidad de tiempo real y lo deberámantener actualizado. g) No sugerir o inducir al usuario de abstenerse de utilizar laplataforma   de   ZAABRA   PROFESIONAL   para   acceder   al   servicio.   h)   Entregartodos aquellos materiales o contenidos que sean necesarios a la entera discreciónde ZAABRA PROFESIONAL a los efectos de crear y compartir información en elperfil o landing page, esta información deberá ser facilitada por parte del usuario através de un formulario creado en ZAABRA PROFESIONAL.9.2   ZAABRA   PROFESIONAL   se   reserva   el   derecho   de   realizar   todas   aquellasaveriguaciones o actuaciones que sean necesarias a los efectos de determinar siestán cumpliendo todas y cada una de las obligaciones anteriores, incluyendo larealización de encuestas a los usuarios.9.3   En   el   supuesto   en   el   que   el   profesional,   tecnólogo,   docente   o   estudianteincumpla   cualquiera   de   las   obligaciones   previstas   en   la   clausula   9.1,   ZAABRAPROFESIONAL se reserva el derecho de cancelar el presente contrato de formaunilateral mediante notificación a la otra parte, así como solicitar al cliente el abonopor   los   daños   causados   y   perjuicio   derivados   de   dicho   incumplimiento.   Dichosdaños y perjuicios incluirán en todo caso el importe de la contraprestación que sehubiese devengado a favor de ZAABRA PROFESIONAL durante el periodo de lamembresía, así como cualquier otro daño generado a ZAABRA PROFESIOAL pordicho incumplimiento.
10 Manifestaciones y garantías al usuario10.1 El usuario manifiesta y garantiza a ZAABRA PROFESIONAL que: a) Tanto elusuario como representante legal del mismo tienen capacidad legal suficiente a losefectos de suscribir o aceptar el acuerdo y dar cumplimiento a la totalidad de lasdisposiciones del contrato, incluyendo las condiciones generales y condiciones delservicio y cualquier otra prevista en el mismo. b) Realizar actividades relacionadascon la asistencia a centro médico o consultorio particular, el profesional deberáasegurar   que   tiene   todas   las   autorizaciones,   licencias   y/o   permisos,   registrosexigidos   por   la   legislación   aplicable   para   realizar   estas   actividades.   c)   Toda   lainformación, materiales, documentos, contenidos, así como cualquier otro incluidoen cualquiera de los Perfiles o landing page será veraz y legal y no incumpliráninguna   disposición   legal   o   derechos   de   terceros.   d)   Ha   obtenido   elconsentimiento   previo   y   por   escrito   necesario   sobre   todos   los   materiales,documentos, trabajos o contenidos facilitados a ZAABRA PROFESIONAL en elmarco de la presente relación contractual, incluyendo la facultad de publicación,distribución   y   difusión,   entre   otros,   y,   por   consiguiente,   que   no   infringe   ningúnderecho   de   propiedad   intelectual   y/o   industrial   de   terceros.   En   particular,manifiesta   que   a  través  de   dicha   divulgación  y  publicación   en   el   Sitio  Web   deZAABRA   PROFESIONAL   no   se   infringe   ningún   derecho   frente   a   terceros,   enparticular derechos de propiedad intelectual o industrial. En este mismo sentido, elusuario autoriza expresamente a ZAABRA PROFESIONAL  para usar, compilar,adaptar,   alterar,   incorporar   contenido   sobre   los   trabajos   y   materialesproporcionados; Ha obtenido todas aquellos permisos y autorizaciones necesariassobre todas las imagen y datos del Profesional que sean publicadas en el SitioWeb de ZAABRA PROFESIONAL por parte del usuario, incluyendo el derecho adistribuir y difundir las mismas a través de Internet, así como que cuenta con todaslas   autorizaciones   necesarias   en   materia   de   protección   de   datos   de   carácterpersonal sobre las imágenes y datos del Profesional, así como del resto imágenesincluidas en la galería de cada landing page, La autorización concedida a ZAABRAPROFESIONAL para la utilización de la imagen y los datos del Profesional seguiráen   vigencia   tras   la  terminación   o   cancelación  de   la   relación   contractual.  e)   Haobtenido   todas   aquellos   permisos   y   autorizaciones   necesarias   sobre   todas   lasmarcas,   logotipos,   emblemas   o   cualquier   otro   sujeto   a   derechos   de   propiedadintelectual   y/o   industrial   que   sean   facilitados   a   ZAABRA   PROFESIONAL   opublicadas en el Sitio Web de ZAABRA PROFESIONAL por parte del usuario o apetición de este, incluyendo el derecho a distribuir, difundir y utilizar por parte deZAABRA   PROFESIONAL   o   cualquiera   de   las   entidades   de   su   grupo   desociedades, para utilizar las mismas en todo el territorio mundial. La autorizaciónconcedida a ZAABRA PROFESIONAL para la utilización de la imagen y los datosdel Profesional seguirá en vigencia tras la terminación o resolución del presente
Contrato. f) Dará cumplimiento a las disposiciones previstas en las cláusulas delas   presentes   Condiciones   Generales,   sobre   todos   los   documentos,   textos,materiales,   logotipos,   marcas   registradas,   datos   personales   o   cualquier   otrofacilitado   a   ZAABRA   PROFESIONAL   o   subido   a   el   Sitio   Web   DE   ZAABRAPROFESIONAL o incluido en el Perfil o landing page.10.2   En   este   sentido,   el   usuario   se   obliga   a   responder   frente   a   ZAABRAPROFESIONAL y a indemnizar por los daños y perjuicios que se puedan generara   ZAABRA   PROFESIONAL,   por   la   falta   de   veracidad   o   inexactitud   de   lasmanifestaciones y garantías previstas en la presente cláusula, incluyendo pero sinlimitarse a ello, la posible responsabilidad civil, administrativa o de cualquier otrotipo,   así   como   abonar   a   ZAABRA   PROFESIONAL   los   gastos   legales,administrativos, judiciales, de abogados y procuradores.11. Cambios de los procedimientos11.1 Las Partes acuerdan que cualquier modificación implementada por ZAABRAPROFESIONAL en relación a los procesos de verificación, modificaciones en elSitio   Web   de   ZAABRA   PROFESIONAL   o   en   el   ámbito   de   actividad   u   otrasmodificaciones a los efectos de adaptarse a la legislación aplicable no implicaráuna modificación del presente Contrato y no dará lugar a la cancelación del mismoen   los   términos   previstos   en   las   Condiciones   Generales.   Se   entenderá   que   elusuario   acepta   dicha   modificación   o   actualización   en   el   supuesto   en   el   que   elusuario   siga   haciendo   uso   del   Sitio   Web   de   ZAABRA   PROFESIONAL,   tras   laentrada en vigencia de la actualización o modificación del Sitio Web de ZAABRAPROFESIONAL,   en   ningún   caso,   se   requerirá   la   autorización   expresa   o   laformalización de un acuerdo por separado entre las Partes.12. Sitio Web 12.1   El   Sitio   Web   ZAABRA   PROFESIONAL   se   ofrecen   tal   como   han   sidodesarrollados y en la forma en la que estén disponibles en cada momento, a talefecto,   ZAABRA   PROFESIONAL   no   garantiza   al   usuario   o   a   cualquier   otrapersona o entidad, de forma expresa o implícita, que los mismos se adaptarán acualquier   finalidad   o   uso   concreto,   ni   será   completo,   útil   ni   adecuado   para   laactividad   del   Cliente   o   de   cualquiera   de   los   Usuarios,   incluyendo,   de   formaenunciativa   pero   no   limitativa,   garantía   de   comerciabilidad,   patentabilidad   y/oadecuación a un determinado propósito, ni de existencia de defectos o errores, nien  relación  a  su capacidad de  integrarse en  un  sistema determinado,  o de  noinfracción   de   ninguna   patente   u   otros   derechos   de   propiedad   intelectual   y/oindustrial de terceros.12.2 Asi mismo, ZAABRA PROFESIONAL se reserva el derecho a llevar a cabotodas aquellas actuaciones que sean necesaria para mantener en funcionamiento
los sistemas, los cuales pueden provocar impedimentos o imposibilidad temporalde   utilizar   los   Servicios   de   membresía   por   parte   del   Profesional,   tecnólogo,docente,   estudiante   y   los   Usuarios.   A   tal   efecto,   ZAABRA   PROFESIONALrealizará sus mayores esfuerzos para que dichas actuaciones de mantenimientopor la noche o en días no laborables.13. Exención de responsabilidad13.1   ZAABRA   PROFESIONAL   no   será   responsable   por   las   pérdidas,   dañosdirectos, indirectos, emergentes, por el lucro cesante sufrido por el Profesional,tecnólogo,   docente,   estudiante   o   los   Usuarios,   o   cualquier   otro   daño   o   costeincidental,  especial  o  que  sea   consecuencia  de   una  reclamación   –incluidos loscostes   judiciales   y   de   abogado   o   procurador,   la   responsabilidad   civil   o   porproducto   o   negligencia-   fundada   en   una   conducta   o   actividad   desarrollada   porZAABRA  PROFESIONAL  o cualquier otro  con motivo  del  uso  del  Sitio  Web, ocualquier otro software o aplicación facilitada por ZAABRA PROFESIONAL en elmarco   de   los   servicios   prestados,   por   cualquier   motivo     (incluyendo   pero   nolimitado   a   las   pérdidas   derivadas   del   fallo   o   defectuoso   funcionamiento   deaplicaciones web, aplicaciones móviles, software, la pérdida total o parcial o eldaño producido a los contenidos o a otra información, la detención o suspensióntotal o parcial de la de la plataforma web, plataforma móvil, software, la detenciónde   las   citas   concertadas   con   Profesionales,   la   pérdida   de   tiempo   defuncionamiento o de ingresos, beneficios, operaciones con Usuarios o cualquierotro motivo), salvo que se derive de una actuación dolosa por parte de ZAABRAPROFESIONAL   y,   en   todo   caso   y   en   cualquier   supuesto,   limitada   a   laresponsabilidad prevista en la cláusula 13.8 de las Condiciones Generales.13.2 Asi mismo, el Profesional, tecnólogo, docente o estudiante acepta y reconoceque ZAABRA PROFESIONAL no garantiza la identidad de los Usuarios ni seráresponsable   bajo   ningún   concepto   frente   al   Cliente   o   a   terceros   por   cualquierfraude relacionado con la identidad de los Usuarios o los Profesionales.13.3   ZAABRA   PROFESIONAL   no   se   responsabiliza   de   los   contenidos   einformación   facilitada   por   el   Profesionales,   tecnólogo,   docente,   estudiante   oUsuarios   a   través   del   Sitio   Web   de   ZAABRA   PROFESIONAL,   por   losProfesionales y/o centros médicos relacionados con la prestación de sus propiosservicios   ni   de   las   condiciones   de   los   mismos.   En   este   sentido,   ZAABRAPROFESIONAL   no   se   hace   responsable   de   las   respuestas,   consultas,comentarios y/u opiniones emitidas por los Profesionales, tecnólogos, docentes oestudiantes, o realizadas por Usuario y otros a través del Sitio Web de ZAABRAPROFESIONAL,   puesto   que   en   ningún   caso   la   actividad   de   ZAABRAPROFESIONAL podrá ser considerada como teleconsulta, consulta o similar y lasopiniones o diferentes consultas no son realizadas por ZAABRA PROFESIONAL.
13.4 La Compañía no supervisa, monitoriza ni confirma las licencias, más allá deque pueda validar a su libre discreción y sin obligación al respecto los números detarjeta   profesional,   la   especialidad   del   Profesional,   o   calificaciones   de   losProfesionales y, en ningún caso, será responsable de la actividad realizada porparte de los Profesionales, tecnólogos, docentes o estudiantes. En caso de queZAABRA PROFESIONAL adquiera información suficiente que conduzca a suponerque el Profesional carece de título acreditativo suficiente para entenderse comotal,   ZAABRA   PROFESIONAL   podrá   cancelar   y/o   bloquear   su   Cuenta,   perfil   olanding page inmediatamente.13.5   La   Compañía   no   supervisa,   monitoriza   ni   controla   los   mensajes   onotificaciones enviadas por los Profesionales, tecnólogos, docentes o estudiantesa sus clientes o usuarios a través de la Plataforma, vía sms, email u otros medios.A tal efecto, el profesional, tecnólogo, docente o estudiante se obliga a responderfrente a ZAABRA PROFESIONAL y a indemnizar por los daños y perjuicios que sepuedan   generar   a   ZAABRA   PROFESIONAL   como   consecuencia   de   lasnotificaciones o comunicaciones remitidas, incluyendo, pero no limitándose a ello,la posible responsabilidad civil, administrativa o de cualquier otro tipo, así como aabonar   a   ZAABRA   PROFESIONAL   por   los   gastos   legales,   administrativos,judiciales, de abogados y procuradores.13.6 Sin perjuicio de lo anterior y dejando constancia expresa de que ZAABRAPROFESIONAL   no   será   responsable   de   la   cualificación   o   licencias   de   losProfesionales,   en   el   supuesto   en   el   que   ZAABRA   PROFESIONAL   adquierainformación   que   pueda   llegar   a   asumirse   que   el   Profesional   no   cuenta   con   lalicencia  o acreditación necesaria  para  la  prestación  de  servicios, se  pondrá  encontacto con el Profesional a los efectos de intentar recabar más información alrespecto.13.7   ZAABRA   PROFESIONAL   no   será   responsable   de   los   daños   y   perjuiciosderivados   del   mal   funcionamiento   de   la   Cuenta,   de   los   fallos   y   errores   en   elservidor como consecuencia de cualquier fallo relacionado con el software o porcualquier incompatibilidad con el Sitio Web de ZAABRA PROFESIONAL. ZAABRAPROFESIONAL  tampoco será responsable por ningún daño relacionado con lafalta de conexión a Internet o el mal funcionamiento del Sitio Web, así como deaquellos excluidos de forma expresa en el presente Contrato.13.8   En   el   supuesto   en   el   que   ZAABRA  PROFESIONAL   fuera   responsable   decualquier   daño   sufrido   al   usuario,   los   Profesionales   como   consecuencia   de   unincumplimiento   del  presente   Contrato,  el  importe  máximo  de  la  responsabilidadasumida por ZAABRA PROFESIONAL no podrá ser superior al importe percibidoen el marco de la prestación de los Servicios de membresía.
13.9 Las previsiones dispuestas en la presente cláusula seguirán en vigencia trasla   finalización   de   la   relación   contractual   entre   el   Cliente   y   ZAABRAPROFESIONAL.13.10 En relación con los servicios de salud que son prestados por terceros.Usted   reconoce   que   ZAABRA   PROFESIONAL   sólo   facilita   un   espacio   deacercamiento   para   que   un   profesional,   tecnólogo,   docente   o   estudiante   secontacte   con   el   usuario  final  y  puedan   establecer  un  acuerdo   comercial  mutuopara  la  prestación  de  Servicios,  por lo  que   las negociaciones que   surjan  entreestos Usuarios solo tendrán efecto entre los mismos, y no afectarán ni derivaránen   responsabilidad   alguna   por   parte   de   ZAABRA   PROFESIONAL.   Cualquierprestación de Servicios que se lleve a cabo por el profesional, tecnólogo, docenteo estudiante a usuarios, se realiza al margen del sitio web, por lo que ZAABRAPROFESIONAL  no es responsable de ninguna de las respuestas y/u opinionesentregadas;   ZAABRA   PROFESIONAL   intervendrá   en   el   agendamiento   de   laconsulta (determinación de lugar, fecha y hora del servicio), de acuerdo con lascondiciones previstas por el en el sitio web.Los   Usuarios   y   profesional   inscritos   en   el   sitio   web   ZAABRA   PROFESIONALentienden   y   aceptan   que   ZAABRA   PROFESIONAL   no   hace   parte   de   algúnacuerdo que se llegase a negociar o firmar entre ellos; usted reconoce y aceptaque ZAABRA PROFESIONAL no tiene algún control, ni la obligación de controlarla conducta o acciones de los usuarios dentro o fuera del sitio web, ya sea poropiniones, anuncios o publicaciones, por lo que en la medida máxima permitidapor la ley, no asume alguna responsabilidad por la conducta, acciones, opiniones,anuncios o publicaciones de los usuarios;  no obstante, ZAABRA PROFESIONALse   reserva   la   facultad   de   investigar   las   conductas   que   sean   contrarias   a   losTérminos   y   condiciones   generales   y   Términos   y   condiciones   generales   delservicio,   y   a   tomar   las   acciones   necesarias,   incluyendo   pero   sin   limitar,   larestricción de acceso o la suspensión o eliminación de la cuenta del Usuario. Cada   Usuario   es   el   único   responsable   de   todas   sus   comunicaciones,publicaciones, anuncios e interacciones con el Portal y con otros Usuarios de lamisma.ZAABRA PROFESIONAL no garantiza la veracidad, exactitud, exhaustividad y/oactualidad de la información de los Usuarios que publiquen o comuniquen en elsitio web, ni el cumplimiento de cualquier acuerdo entre los Usuarios. En relacióncon este tipo de publicaciones, ZAABRA PROFESIONAL actuará como un mediode comunicación. ZAABRA PROFESIONAL no asume la obligación de vigilar y/overificar la información publicada por los Usuarios o contenida en la publicidad, sin
perjuicio de los criterios y condiciones establecidas en los Términos y Condicionesdel servicio, y en especial, la facultad de ZAABRA PROFESIONAL de cancelar losregistros   de   aquellos   profesionales,   tecnólogos,   docentes   o   estudiantes   queincumplan   los   Términos   y   Condiciones   generales   y   términos   y   condiciones   delservicio.En   consecuencia,   usted   declara   mantener   indemne   y   exonerar   de   todaresponsabilidad a ZAABRA PROFESIONAL de cualquier incumplimiento, engaño,estafa, infracción o perjuicio causado por otro Usuario o por un tercero que tengapublicidad en el Portal.En   la   medida   máxima   permitida   por   la   ley,   Usted   declara   exonerar   de   todaresponsabilidad y mantener indemne a ZAABRA PROFESIONAL por los daños yperjuicios,   pasados,   presentes   y   futuros,   que   llegaren   a   ocasionarse   comoconsecuencia del uso de la información publicada por los Usuarios y terceros en elPortal.14. Derechos de propiedad intelectual y/o industrial de la compañía y de lainformación publicada por el Profesional y/o Usuario14.1 Todos los derechos de propiedad industrial y/o intelectual sobre el Sitio WebZAABRA   PROFESIONAL,   la   aplicación   móvil,   el   software   de   agendamiento   decita, las marcas de ZAABRA PROFESIONAL, las aplicaciones facilitadas por partede   ZAABRA   PROFESIONAL   en   el   marco   de   la   prestación   de   los  Servicios   demembresía, los softwarede todo ello, así como de cualquier ampliación, mejora omodificación de todo ello y de los trabajos, materiales o elementos creados porparte de ZAABRA PROFESIONAL en el marco de la prestación de los serviciosprevistos en el presente Contrato o el cumplimiento de las obligaciones que sederivan   del  mismo, son  de  propiedad  exclusiva  de  la  Compañía,  por lo  que  elUsuario   o   profesional,   Tecnólogo,   docente   o   estudiante   deberá   abstenerse   deutilizar o registrar a su nombre cualquier patente, marca u otros signos distintivosde la que ZAABRA PROFESIONAL sea titular y no podrá modificar, reproducir,distribuir ni comunicar públicamente o poner a disposición de terceros cualquierade ellos, salvo en los supuestos expresamente previstos en el presente Contrato ylo autorice de forma expresa la Compañía.14.2   Asimismo,  el   Cliente   se   obliga   a   informar   a   ZAABRA   PROFESIONAL,   demanera rápida y eficaz, de cualquier infracción o fundado temor de infracción porparte de clientes, usuarios o de terceros de los derechos de propiedad intelectualy/o   industrial   anteriores   o   de   desarrollos   del   mismo   que   pudiera   afectar   a   loslegítimos intereses de la Compañía, según corresponda.
14.3 En ningún caso, la creación de la Cuenta, Perfil, publicación de materiales,documentación y/o imágenes de cualquier tipo por parte del Cliente le confierenderechos sobre las publicaciones en el Sitio Web de ZAABRA PROFESIONAL,propiedad de la Compañía.14.4 De igual manera, al publicar en el Sitio Web de ZAABRA PROFESIONAL ofacilitar   a   ZAABRA   PROFESIONAL   por   cualquier   medio   facilite   a   ZAABRAPROFESIONAL   materiales,   documentos,   trabajos,   imágenes,   datos   deProfesionales o contenidos, así como marcas comercial, logotipos, emblemas ocualquier   otro   sujeto   a   derechos   de   propiedad   intelectual   y/o   industrial,   seentenderá que el Cliente confiere a ZAABRA PROFESIONAL una licencia de usosobre   todo   ello   con   el   carácter   de   no   exclusiva,   intransmisible,   para   todo   elterritorio mundial y por el tiempo máximo que permite la Ley, pudiendo ZAABRAPROFESIONAL utilizar, publicar realizar, entre otros, copias analógicas y digitales,almacenamiento,   marketing,   alquiler,   arrendamiento,   difusión,   publicación,visualización, transmisión, reemisión, reproducción, inclusión en bases de datos,uso   de   contenido   y   materiales   a   los   efectos   de   promover   las   actividades   ocualquier otro aspecto de la Compañía.14.5 Las disposiciones previstas en el apartado anterior se confieren a ZAABRAPROFESIONAL   por   el   tiempo   máximo   que   permite   la   ley,   por   lo   quepermanecerán en vigencia tras la finalización del presente Contrato.15. Confidencialidad15.1 Las Partes reconocen que durante la relación profesional entre ellas tendránacceso   a   información   relativa   al   presente   Contrato,   acuerdos   previos,documentación, correos electrónicos otro tipo de mensajes intercambiados entrelas   Partes,   que   tendrán   la   consideración   de   confidenciales   y   que   deberán   sertratados con secreto para garantizar el buen fin de las relaciones entre las Partes.A tal efecto, las Partes se comprometen a mantener estricta confidencialidad sobrela   información   de   este   tipo,   no   pudiendo   reproducirla,   utilizarla,   venderla,licenciarla, exponerla, publicarla o revelarla de cualquier forma a cualquier otrapersona, sin autorización expresa de la otra Parte, así como abstenerse de utilizardicha información para cualquier finalidad distinta a las previstas en el presenteContrato.15.2 Las obligaciones de confidencialidad establecidas en la presente cláusula noserán   de   aplicación   a   la   información   que:   a)   Se   difunda   a   empleados,colaboradores,   asesores   o   cualquier   otro   profesional   a   los   efectos   de   darcumplimiento   a   la   relación   contractual,   siempre   y   cuando   sean   informados   delcarácter confidencial  de  esta  información  y asuman  el  compromiso  de  tratar lainformación como confidencial. b) Sea de dominio público o devenga de dominio
público  por un medio  distinto a la violación de las obligaciones previstas en  elContrato.   c)   Haya   llegado   al   conocimiento   de   cualquiera   de   las   Partes   conanterioridad a la firma o aceptación del Contrato o las Condiciones Generales oCondiciones   Particulares   y   no   haya   sido   adquirida,   directa   o   indirectamente,   através de cualquiera de las Partes o a través de un tercero que se encuentre a suvez   bajo   la   obligación   de   mantener   la   confidencialidad   de   la   informaciónconfidencial. d) Aquella otra que deba revelarse en cumplimiento de una orden denaturaleza   legal,   judicial   o   administrativa.   En   este   caso,   la   Parte   que   la   debadivulgar lo notificar a la otra Parte con la mayor antelación posible a fin de queésta pueda tomar las acciones que estime oportunas.15.3   El   incumplimiento   de   las   obligaciones   de   confidencialidad   previstas   en   lapresente   cláusula   dará   lugar   a   la   Parte   perjudicada   a   reclamar   los   daños   yperjuicios que se le hubiera generado. Asimismo, la transmisión o comunicación acualquier competidor directo o indirecto de ZAABRA PROFESIONAL de cualquiertipo   de   información   de   la   que   disponga   el   Cliente   en   relación   a   ZAABRAPROFESIONAL   como   consecuencia   de   las   relaciones   comerciales   existentesentre las Partes, dará lugar a las penalizaciones incluidas en el presente Contrato.15.4   Sin   perjuicio   de   las   condiciones   establecidas   en   la   presente   Cláusula,ZAABRA   PROFESIONAL   podrá   intercambiar   o   compartir   cualquier   informaciónrelativa al profesional, tecnólogo, docente o estudiante a los efectos de operar ogestionar el Sitio Web y los servicios prestados en virtud del presente Contrato,con cualquier entidad perteneciente a su grupo de sociedades, así como con otrascompañías   que   lleven   a   cabo   negocios   o   actividades   vinculadas   a   ZAABRAPROFESIONAL.   El   Cliente   acepta   expresamente   este   intercambio   o   cesión   deinformación por parte de ZAABRA PROFESIONAL.15.5 Las obligaciones de confidencialidad entrarán en vigencia desde la fecha desuscripción   o   aceptación   de   las   Condiciones   Generales,   o   desde   la   fecha   deentrega de información de carácter confidencial, lo que suceda antes, y seguiránsiendo   de   aplicación   mientras   la   información   conserve   su   naturaleza   secreta   yconfidencial.15.6 Asimismo, ZAABRA PROFESIONAL manifiesta al Cliente que, habida cuentade su valor y aplicación industrial y/o comercial, parte de la información que se lepueda facilitar como consecuencia de la ejecución de la relación profesional y laprestación de los Servicios de membresía estará protegida bajo la modalidad desecreto   industrial   y/o   empresarial   y,   en   consecuencia,   su   divulgación   podríaperjudicar notablemente a ZAABRA PROFESIONAL, por lo que resulta esencialsalvaguardar dicho conocimiento. Por consiguiente, la utilización de la misma paray las Condiciones Generales del servicio puede generar una gran daño y perjuicioa ZAABRA PROFESIONAL, incluso, ser considerada competencia desleal.
16. Protección de los datos de carácter personal16.1 Las Partes se obligan a tratar los datos de carácter personal a los que tenganacceso o que sean objeto de tratamiento durante la prestación de los serviciosderivados de la ejecución del presente contrato en cumplimiento de la normativaaplicable en materia de privacidad y protección de datospersonales incluyendo, entre otras, la ley 1581 de 2012 de Protección de DatosPersonales.16.2 La ejecución de este Contrato requerirá el acceso y el tratamiento de datospersonales de Usuarios y Profesionales por parte de ZAABRA PROFESIONAL, ennombre y por cuenta de este. El Cliente garantiza que, como responsable de losdatos,   cumplirá   con   las   obligaciones   de   información   de   los   interesados   y   quedispone de las bases jurídicas y/o consentimientos necesarios para que ZAABRAPROFESIONAL preste los servicios que se deriven del presente Contrato. A estosefectos,   ZAABRA   PROFESIONAL   tendrá   la   consideración   de   encargado   deltratamiento y el profesional, tecnólogo, docente o estudiante será el responsabledel tratamiento de datos. Consecuentemente, las Partes reconocen la ejecuciónen la fecha del presente contrato de un contrato separado para el nombramientode   ZAABRA   PROFESIONAL   como   encargado   del   tratamiento   de   datospersonales. 16.3 A los efectos de lo indicado anteriormente, el profesional, tecnólogo, docenteo   estudiante   autoriza   a   ZAABRA   PROFESIONAL   al   acceso,   tratamiento   yrecolección de dichos datos personales en su nombre, con el fin de dar acceso alos usuarios a leer dicha información.16.4 Adicionalmente a lo anterior, el profesional, tecnólogo, docente o estudiantese obliga a recabar los consentimientos necesarios para la cesión de los datospersonales   de   los   Profesionales   a   ZAABRA   PROFESIONAL   con   el   fin   de   quepueda tratar sus datos en calidad de responsable del Tratamiento. Está cesión serealizará   con   la   finalidad   de   mantener,   tratar   y   actualizar   los   datos   de   losProfesionales en la plataforma de ZAABRA PROFESIONAL.Por tanto, en dicho caso una vez termine la relación contractual con el profesional,tecnólogo,   docente   o   estudiante,   ZAABRA   PROFESIONAL   podrá   continuartratando los datos personales de los Profesionales en calidad de responsable delTratamiento. En cumplimiento a la ley 1581 de 2012.16.5   Sin   perjuicio   de   lo   anterior,   profesional,   tecnólogo,   docente   o   estudiantecumplirá con todas las obligaciones de información previstas en relación con losprofesional,   tecnólogo,   docente   o   estudiante   que   presenten   sus   servicios   alusuario final, en el momento de obtener su consentimiento para la cesión de sus
datos   a   ZAABRA   PROFESIONAL.   Para   tales   fines,   ZAABRA   PROFESIONALfacilitará toda la información necesaria al usuario.16.6   El   Cliente   exime   de   responsabilidad   a   ZAABRA   PROFESIONAL   sobre   eltratamiento   de   datos   personales   realizado   por   Usuarios   y   Profesionales   en   elcontexto   del   cumplimiento   de   este   Contrato   por   parte   de   ZAABRAPROFESIONAL.16.7 En cumplimiento de la ley 1581 del 2012 las Partes informan que los datospersonales de las Partes, que constan en el encabezamiento de este Contrato,serán   tratados   sobre   la   base   jurídica   de   la   ejecución   de   este   Contrato,   elcumplimiento   de   las  obligaciones legales  aplicables  a   las  Partes,  así  como   losintereses legítimos de las Partes en esta relación comercial. En consecuencia, lasPartes aportan  la siguiente  información: a) Los datos personales de las Partesfirmantes del Contrato serán tratados por las mismas, en calidad de Responsablesdel   Tratamiento   para   la   ejecución   de   este   Contrato,   con   la   identificación   einformación de contacto establecida en el encabezamiento. b) La recolección ytratamiento de datos personales se basará en la ejecución del Contrato, para losfines de la prestación de los servicios descritos en el mismo, el cumplimiento delas obligaciones legales de las partes, y los intereses legítimos derivados de lacontinuidad de la relación comercial. c) Los datos personales de las Partes seránconservados   durante   el   tiempo   necesario   para   cumplir   con   las   finalidadesindicadas en el apartado anterior, aplicando las medidas de seguridad técnicas yorganizativas necesarias para garantizar un nivel de seguridad adecuado al riesgo.d) Los datos personales de las Partes no serán cedidos a terceros excepto, encaso de contar con el consentimiento expreso de las Partes o para el cumplimientode las obligaciones legales exigibles. e) Las Partes tienen derecho a ejercer susderechos   de   acceso,   rectificación   o   supresión   o   limitación,   o   a   oponerse   altratamiento, así como el derecho a la portabilidad de los datos, dirigiéndose a ladirección indicada en el encabezamiento del Contrato. También tienen derecho adirigirse o presentar una reclamación ante la Autoridad de Control.16.9 El Cliente se compromete a suscribir los contratos de encargo de tratamientoy/o cualquier otro documento o consentimientos que sean necesarios o requeridospor la normativa aplicable en materia de protección de datos personales, con losUsuarios   o   los   Profesionales  que   participen  en   los  servicios  derivados  de   esteContrato.16.10   Como   parte   de   los   servicios   ofrecidos,   y   a   menos   que   el   Cliente   hayadenegado expresamente su consentimiento, ZAABRA PROFESIONAL tratará losdatos personales del Cliente y de los Profesionales para incluirlos en la plataformade posicionamiento empresarial Google My Business, con la finalidad de impulsarla presencia y el perfil o landing page en Google. 
17. Resolución de solicitudes y reclamaciones17.1 Para cualquier solicitud o reclamación que pueda surgir en el marco de laprestación   de   los   servicios,   el   profesional,   tecnólogo,   docente,   estudiante   o   elmismo usuario se deberá dirigir a la cuenta de correo electrónico del asesor queZAABRA   PROFESIONAL   asigne   a   su   cuenta,   o   en   su   defecto,   aserviciosprofesionales@zaabra.com.co o al teléfono 321244986917.2 Las reclamaciones se deberán remitir dentro del plazo máximo de catorce(14) días a contar desde la fecha del evento que dio lugar a la reclamación. Lacomunicación de la reclamación deberá contener el motivo de la reclamación y losmotivos que la fundamentan. En el supuesto en el que la reclamación o la quejatenga contenido ofensivo o inapropiado a criterio de ZAABRA APROFESIONAL ono   se   realice   con   la   diligencia   debida,   esta   no   será   atendida   por   ZAABRAPROFESIONAL.18. Gestión diaria del contrato18.1 El profesional, tecnólogo, docente o estudiante deberá notificar a ZAABRAPROFESIONAL a la mayor brevedad posible de cualquier cambio de los datos decontacto del responsable, mediante comunicación por escrito dirigida a la direcciónde correo electrónico prevista en el encabezamiento del presente Contrato.19. Miscelánea1. Cesión:  El   Cliente   no  podrá   ceder  los  derechos  y  obligaciones  en   elmarco de la relación contractual con ZAABRA PROFESIONAL o subrogarsu   posición   contractual,   sin   el   consentimiento   previo   y   por   escrito   deZAABRA PROFESIONAL. Sin perjuicio de lo anterior, el Cliente acuerda yautoriza de forma expresa que ZAABRA PROFESIONAL podrá ceder todoslos derechos y obligaciones que se deriven de la relación profesional conZAABRA   PROFESIONAL,   incluyendo,   el   Contrato   y   las   CondicionesParticulares y Condiciones Generales, entre otros, sin necesidad de obtenerel   consentimiento   del   Cliente.   Dicha   cesión,   exigirá   por   parte   de   laadquirente   la   aceptación   previa   de   los   pactos   aquí   contenidos   de   formaexpresa.2. Modificación: No podrá ser modificado ninguno de los extremos de lasCondiciones   Particulares   o   las   Condiciones   Generales,   o   el   resto   detérminos del Contrato, salvo que dicha modificación se realice por escrito ysea firmada por ambas Partes. A pesar de lo anterior, en el caso de queuna  modificación   sea   necesaria  para   adecuarse   a   cualquiera   legislación,regulación o práctica comúnmente aceptada de la jurisdicción aplicable, o
para alinear este Contrato con el tipo de servicios proporcionados al Clientedurante la vigencia de este Contrato y / o con las modalidades en que sebrindan estos servicios, ZAABRA PROFESIONAL se reserva el derecho demodificar los términos contractuales, unilateralmente, mediante notificaciónescrita (por cualquier medio, incluido, entre otros, por correo electrónico a lacuenta de correo electrónico que se detalla las Condiciones Particulares ocualquier otra facilitada a la Compañía a tal efecto), con una antelación deal menos treinta (30) días. Queda entendido que: (a) si el Cliente decidedejar   de   recibir   los   servicios   después   de   dicha   modificación,   tendrá   queresolver   este   Contrato   mediante   notificación   por   escrito   a   ZAABRAPROFESIONAL,   que   tendrá   que   ser   recibida   por   parte   de   ZAABRAPROFESIONAL antes del vencimiento del período de treinta (30) días, y (b)ZAABRA PROFESIONAL no podrá modificar de forma unilateral ninguno delos términos relativos a la contraprestación o a las tarifas o al Periodo dePermanencia,   o   que   perjudiquen   el   derecho   del   Cliente   de   acceder   alServicio   de   membresía.   Renuncia:   Si   alguna   de   las   Partes   no   ejecutaracualquiera de las disposiciones del presente Contrato, dicho incumplimientono   será   considerado   como   una   renuncia   a   dichas   disposiciones,   ni   aninguna otra prevista en el Contrato, ni una renuncia al derecho de dichaParte a ejecutar tales disposiciones posteriormente.3. Separabilidad:  En   el   caso   de   que   cualquier   parte,   artículo,   párrafo,oración   o   cláusula   de   este   Contrato   se   considerase   vaga,   inválida   oinaplicable, dicha parte será eliminada y el resto del Contrato continuarásiendo válido y estando en vigor.4. Independencia de las Partes:  Las Partes reconocen que el presenteContrato no crea ningún tipo de relación laboral, societaria, de agencia ofranquicia, de hecho o de derecho, entre las Partes, no pudiendo ningunade ellas actuar o presentarse ante terceros como si tal fuera el caso.5.   Acuerdo   íntegro:  El   Contrato,   con   las   Condiciones   Generales,   lasCondiciones Particulares del servicio y todas sus partes y Anexos, formanun único objeto, sin que quepa su cumplimiento parcial.6. Discrepancia entre textos legales: En el supuesto en el que hubiesesdiscrepancias entre el Contrato (incluyendo sus Anexos) y las condicioneslegales o cualquier otro texto legal suscrito entre ZAABRA PROFESIONALy   el   Cliente   en   el   marco   de   la   utilización   del   Sitio   Web,   prevalecerá   elpresente Contrato en relación todos los aspectos que conciernen al Serviciode membresía.
Asimismo,   en   el   supuesto   en   el   que   hubiese   discrepancias   entre   lasCondiciones Generales y las Condiciones Particulares, prevalecerán estasúltimas.20. Régimen jurídico y ley aplicable20.1 Este Contrato tiene carácter mercantil y se regirá por sus propias cláusulas, yen lo no previsto en ellas, las Partes se atendrán a las previsiones dispuestas enla legislación Colombiana.20.2   Renunciando   las   Partes   a   cualquier   privilegio   que   pudiera   corresponder,cualquier disputa o controversia en relación con, en conexión con, o resultante delContrato será resuelto exclusivamente por los Jueces y Tribunales de Colombia.


        </P>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

@endsection


