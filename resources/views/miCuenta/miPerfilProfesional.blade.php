@extends('layouts.index')

@section('contenido')
<form class="container-fluid container-principal-margenTop-miPerfilProfesional" method="POST" action="{{url('/guardarProfesional')}}" enctype="multipart/form-data" id="guardarProfesional">

    @csrf
        <div class="container">
            <div class="row margTopImgDatoFormProfesionales">

                <div class="col-12 col-md-10 col-lg-6 divFileFotoPerfilFormProfesionales">
                  
                    <!-- Container imagen -->

                    <div class="col-8 col-md-8 contenedor-fotografia diseĆ±oContenedorFotoPerfil noPad alturaImgPrincProfFormProfesional">
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
                                    <h4 class="fontAreaFormProfesionales">Ćrea</h4>
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
                                    <h4 class="fontProfesionFormProfesionales">ProfesiĆ³n</h4>
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
                            <div>GalerĆ­a</div> 
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
                            <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">DescripciĆ³n profesional *</h6>
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
                            <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">PĆ”gina web</h6>
                            <input type="text" class="form-control PropiedadIputDatPersFormProfesionales" placeholder="Escribe aqui"  value="{{!empty ($perfil->url) ? $perfil->url: ''  }}" id="url" name="url">
                        </div>
                        <div class="col-md-12 noPadMar row">
                            <div class="col-md-12 col-lg-12 contDiaHoraLeftFormProfesionales">
                                <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">GĆ©nero *</h6>
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
                    <h3 class="mb-1 fontTituloSeccFormEstudiantes">EXPERIENCIA <span class="agregarDivImagenExperiencia diseĆ±oAgregarBotonFormEstudiantes col-md-1"></h3>
                </div>
                @if(!empty ($perfil->nombreEmpresaExperiencia[0]))
                    @foreach (json_decode($perfil->nombreEmpresaExperiencia) as $valueJson)
                        @php $tamaĆ±oExperiencia = $loop->iteration @endphp 
                    @endforeach
                @endif
                <div class="col-md-12 row noPadMar input-multiple-imagenesGroup-Experiencia bordeContenidoDinamicoFormEstudiantes" style=" padding-bottom: 2%; margin-bottom: 1%;">
                    @if(!empty ($perfil->nombreEmpresaExperiencia[0]) AND !empty ($perfil->descripcionExperiencia) AND !empty ($perfil->fechaInicioExperiencia))
                            @for($i = 1; $i <= $tamaĆ±oExperiencia; $i++)
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
                                    <h6 class="fontLabelDatPersFormEstudiantes" style=" margin-top: 18px;">DescripciĆ³n del puesto *</h6>
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
                                    <div class="col-md-12 noPad"><h6 class="fontLabelDatPersFormEstudiantes">Fecha de culminaciĆ³n *</h6></div>
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
                            
                            <h6 class="fontLabelDatPersFormEstudiantes" style=" margin-top: 18px;">DescripciĆ³n del puesto *</h6>
                            <input type="text" class="form-control PropiedadIputDatPersFormEstudiantes" placeholder="Descripcion del puesto" id="txtLinkExperiencia1" name="txtLinkExperiencia1" >
                                                         
                            <div class="col-md-12 noPad" style=" margin-top: 18px;">
                                <div class="col-md-12 noPad"><h6 class="fontLabelDatPersFormEstudiantes">Fecha de inicio *</h6></div>
                                <div class="col-md-12 noPad"> <input class="form-control PropiedadIputDatPersFormEstudiantes" type="date" value="" id="fechaExperienciaIncio1" name="fechaExperienciaIncio1" ></div>
                            </div>
                            
                            <div class="col-md-12 noPad" style=" margin-top: 18px;">
                                <div class="col-md-12 noPad"><h6 class="fontLabelDatPersFormEstudiantes">Fecha de culminaciĆ³n *</h6></div>
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
                        <h6 class="margin-top-1em noPad  fontTituloSeccFormProfesionales">ESTUDIOS <span class="agregarDivImagenestudios diseĆ±oAgregarBoton"></h6>
                    </div>
                    @if(!empty ($perfil->estudios))
                        @foreach (json_decode($perfil->estudios) as $valueJson)
                            @php $tamaĆ±oEstudios = $loop->iteration @endphp 
                        @endforeach
                    @endif
                
                    <div class="col-12 col-md-12 noPadMar input-multiple-imagenesGroup-estudios bordeContenidoDinamico" >
                        @if(!empty ($perfil->estudios) and !empty($perfil->fechaEstudios) and !empty($perfil->nivelEstudios) and !empty($perfil->nombreEstudios))
                            @for($i = 1; $i <= $tamaĆ±oEstudios; $i++)
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
                                            <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Nombre de la profesiĆ³n *</h6>
                                            <input type="text" class="form-control PropiedadIputDatPersFormProfesionales"  placeholder="Nombre" id="txtNombreEstudios{{$i}}" name="txtNombreEstudios{{$i}}" 
                                                    <?php if($padreEstudios == $loop->iteration) {
                                                                    echo('value = "'.$valueJson.' "');
                                                                } ?>   >
                                            @endif          
                                        @endforeach
                                    
                                
                                        <div class="row">
                                           
                                            <div class="col-12"><h4 class="margin-top-1em fontLabelDatPersFormEstudiantes">Fecha culminaciĆ³n *</h4></div>
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
                                        <div class="col-12 col-md-12 noPad diseĆ±oContenedorFotoDocumentos FotoloadPreview{{$i}}" id="FotoloadPreview{{$i}}" >
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
                                
                                <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Nombre de la profesiĆ³n *</h6>
                                <input type="text" class="form-control PropiedadIputDatPersFormProfesionales"  placeholder="Nombre" id="txtNombreEstudios1" name="txtNombreEstudios1">
                                
                                <div class="row">
                                    <div class="col-12 col-md-12"><h4 class="margin-top-1em fontLabelDatPersFormProfesionales">Fecha CulminaciĆ³n *</h4></div>
                                    <div class="col-12 col-md-12"> <input class="form-control PropiedadIputDatPersFormProfesionales" type="date" value="" id="fechaEstudios1"  name="fechaEstudios1"></div>
                                </div>
                                <br>
                                <div class="col-12 col-md-12 diseĆ±oContenedorFotoDocumentos"  >
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
                        <h6 class="margin-top-1em noPad fontTituloSeccFormProfesionales">PUBLICACIONES <span class="agregarDivImagenPublicacion diseĆ±oAgregarBoton col-md-1"></h6>
                    </div>
                    @if(!empty ($perfil->Publicaciones))
                        @foreach (json_decode($perfil->Publicaciones) as $valueJson)
                            @php $tamaĆ±oPublicaciones = $loop->iteration @endphp 
                        @endforeach
                    @endif
                    <div class="col-md-12 noPadMar input-multiple-imagenesGroup-Publicacion bordeContenidoDinamico">
                        @if(!empty ($perfil->Publicaciones) AND !empty ($perfil->nombrePublicacion) AND !empty ($perfil->linksPublicacion))
                                @for($i = 1; $i <= $tamaĆ±oPublicaciones; $i++)
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
                                        <div class="col-12"><h4 class="margin-top-1em fontLabelDatPersFormEstudiantes">Fecha CulminaciĆ³n</h4></div>
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
                                    <div class="col-md-12 diseĆ±oContenedorFotoDocumentos FotoloadPreview{{$i}}" id="FotoloadPreview{{$i}}" >
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
                                    <div class="col-md-12"><h4 class="margin-top-1em fontLabelDatPersFormProfesionales">Fecha CulminaciĆ³n</h4></div>
                                    <div class="col-md-12"> <input class="form-control PropiedadIputDatPersFormProfesionales" type="date" value="" id="fechaPublicacion1" require name="fechaPublicacion1"></div>
                                </div>
                                <br>
                                <div class="col-md-12 diseĆ±oContenedorFotoDocumentos"  >
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
                        <h6 class="margin-top-1em noPad fontTituloSeccFormProfesionales">CERTIFICADOS <span class="agregarDivImagenCertificados diseĆ±oAgregarBoton col-md-1"></h6>
                    </div>
                    
                    @if(!empty ($perfil->titulos))
                        @foreach (json_decode($perfil->titulos) as $valueJson)
                            @php $tamaĆ±oCertificaciones = $loop->iteration @endphp 
                        @endforeach
                    @endif
                    
                    <div class="col-md-12 noPadMar input-multiple-imagenesGroup-Certificados bordeContenidoDinamico">
                
                        @if(!empty ($perfil->titulos) and !empty($perfil->entidadCertificado) and !empty($perfil->nombreCertificado) and !empty($perfil->fechaCertificado))
                            @for($i = 1; $i <= $tamaĆ±oCertificaciones; $i++)
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
                                            <h4 class="margin-top-1em fontLabelDatPersFormEstudiantes">Fecha CulminaciĆ³n *</h4>
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
                                    <div class="col-md-12 diseĆ±oContenedorFotoDocumentos FotoloadPreview{{$i}}" id="FotoloadPreview{{$i}}" >
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
                                    <div class="col-md-12"><h4 class="margin-top-1em fontLabelDatPersFormProfesionales">Fecha CulminaciĆ³n *</h4></div>
                                    <div class="col-md-12"> <input class="form-control PropiedadIputDatPersFormProfesionales" type="date" value="" id="fechaCertificados1"  name="fechaCertificados1"></div>
                                </div>
                                <br>
                                <div class="col-md-12 diseĆ±oContenedorFotoDocumentos"  >
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
                        @php $tamaĆ±oGaleria = $loop->iteration @endphp 
                    @endforeach
                @endif
                <div class="col-md-12 row noPadMar" id="galeria">
                    <div class="col-md-12 row noPadMar">
                        <div class="col-md-12 tituloSeccEstudiosPerFormProfesionales"><h3 class="margin-top-1em noPad fontTituloSeccFormProfesionales">GALERĆA</h3></div>
                        <div class="col-md-12 margin-top-1em noPad"><h5 class="fontFraseGaleriaFormProfesionales">Sube tus imĆ”genes y videos que desees compartir</h5></div>
                        <div class="col-md-12 noPadMar contCrearAlbunFormProfesionales"><h3 class="fontTituloSeccFormProfesionales">Crear Ć”lbum</h3><span class="agregarDivImagen diseĆ±oAgregarBoton col-md-1"></span></div>
                    </div>
                    <div class="row col-md-12 input-multiple-imagenesGroup noPadMar">
                    
                    @if(!empty ($perfil->imagen[0]))
                        @for($i = 1; $i <= $tamaĆ±oGaleria; $i++)
                            @php $padreGaleria = $i; @endphp
                        
                            <div class="col-12 col-md-12 col-lg-6 divFileFotosGaleria">
                                <div class="col-md-12 diseĆ±oContenedorFoto FotoloadPreview{{$i}}" id="FotoloadPreview1" style="height: 300px;" >
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
                                <div class="col-md-12 diseĆ±oContenedorFoto" id="FotoloadPreview1" style="height: 300px;" >
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
                            <a href="" data-toggle="modal" data-target="#politicasFormularioProfesiona">TĆ©rminos y condiciones</a> de Zaabra.
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
            TĆRMINOS Y CONDICIONES GENERALES DEL SERVICIO1. CONCEPTOS GENERALESEn el presente contrato serĆ”n de aplicaciĆ³n las definiciones que se detallan mĆ”sabajo. AsĆ­ mismo, las palabras en singular incluirĆ”n el plural y viceversa.ļ·āPartesā: La CompaĆ±Ć­a y el Usuario de forma conjunta.ļ·āContratoā: El presente contrato de prestaciĆ³n de servicios incluyendo, laspresentes condiciones generales, las Condiciones particulares y todas susclĆ”usulas y/o Anexos.ļ·āProfesional,   tecnĆ³logo,   docente   o   estudianteā:   Persona   fĆ­sica   o   jurĆ­dica,segĆŗn el caso, que suscribe este Contrato con ZAABRA PROFESIONALpara beneficiarse del Servicio de membresĆ­a.ļ·āZAABRA   PROFESIONALā   o   āCompaĆ±Ć­aā:   Importadora   Andiamo   sas,Carrera 64 #67B ā 89, BogotĆ” DC, con NIT 901294385-1. ļ·āUsuarioā:   Persona   fĆ­sica   que   tiene   una   cuenta   o   accede   al   Sitio   Webhttps://www.zaabraprofesional.com.coļ·āSitio   Webā:   Herramienta   en   lĆ­nea   disponible   en   la   siguiente   direcciĆ³nhttps://www.zaabraprofesional.com.coy     operada     por     ZAABRAPROFESIONAL   que   permite,   entre   otros,   que   los   Profesionales   puedanofrecer sus servicios.ļ·āProfesionalā:   Profesional   cuya   actividad   consiste   en   la   prestaciĆ³n   deservicios   especĆ­ficos   de   las   diferentes   Ć”reas,   Ć”rea   de   la   salud,   Ć”reaeconĆ³mico administrativa, tecnĆ³logos, ingenieros, docentes y estudiantes,en el supuesto en el que el Usuario sea una persona fĆ­sica, el Profesional yel   Usuario   serĆ”n   la   misma   persona   y   por   consiguiente,   las   actividadesanteriores serĆ”n prestadas directamente por el Usuario.ļ·āCuentaā:   Entrada   en   la   base   de   datos   del   Sitio   Web   que   confiere   lacondiciĆ³n   de   Usuario   con   acceso   a   los   Servicios   Premium,   una   vezintroducido el usuario y la contraseĆ±a correspondientes.ļ·āPerfilā: InformaciĆ³n del Profesional publicada en una landing page del SitioWeb identificada con una direcciĆ³n URL perteneciente a la CompaĆ±Ć­a.ļ·āMembresĆ­aā: Servicio ofrecido por ZAABRA PROFESIONAL al Usuario atravĆ©s de un sistema, que permite, entre otros, agregar contenido a cadauno de los Perfiles y utilizar el calendario.ļ·āCalendarioā: programa informĆ”tico titularidad de la CompaĆ±Ć­a, que permiteal usuario entre otras funcionalidades, gestionar su cita o asesoramientocon el profesional y revisar la disponibilidad.ļ·āPerĆ­odo   de   FacturaciĆ³nā:   Cada   uno   de   los   meses   o   aĆ±os   naturales,   enfunciĆ³n del perĆ­odo inicial y tipo de suscripciĆ³n, que se iniciarĆ”n a partir deque   se   genera   el   pago,   es   responsabilidad   del   profesional,   estudiante   o
docente, el tiempo que se demore ingresando la informaciĆ³n que se va acargar en la pĆ”gina.2. MEMBRESĆA 2.1   Servicios   ofrecidos   por   parte   de   ZAABRA   PROFESIONAL   al   Usuario,otorgando acceso a las siguientes funcionalidades y/o herramientas a travĆ©s de suCuenta, las cuales se adaptarĆ”n a las caracterĆ­sticas de los Perfiles asignados:a. Beneficiarse de los servicios ofrecidos por ZAABRA PROFESIONAL a travĆ©sdel calendario de la plataforma;b.   Incluir   los   Perfiles   entre   los   resultados   de   bĆŗsqueda   de   Profesionalesregistrados en el Sitio Web o plataforma. c. Recibir estadĆ­sticas asociadas a cada uno de los Perfiles.Las herramientas y/o servicios anteriores Ćŗnicamente estarĆ”n disponibles para losPerfiles que hayan sido previamente revisados y aprobados.2.2 Tipos de Perfiles disponibles dentro del Servicio Premium: a. Perfil Premium: contamos con tres perfiles premium dependiendo de su perfil,sea un perfil profesional, perfil docente, perfil tecnĆ³logo o perfil estudiante. El sitioweb le da la posibilidad de mejorar su posicionamiento a travĆ©s de la suscripciĆ³n opago de membresĆ­a en este servicio que le ofrece configurar su ficha de una formamĆ”s completa, sin publicidad de terceros y mostrarse de forma mĆ”s destacada enlos  listados  y en  fichas  de   otros  profesionales. Con  esta  opciĆ³n, el  profesionalpuede   ofrecer   su   horario   para   que   los   usuarios   puedan   reservar   su   servicio   atravĆ©s de la plataforma en el calendario. b. Perfil inicial: Este perfil es un perfil promocional que incluye solo informaciĆ³nbĆ”sica incluida foto del profesional. Siempre estarĆ” disponible la membresĆ­a en elmomento que el profesional desee modificar el plan, siempre y cuando cumpla conlos   requisitos   mĆ­nimos,   estos   serĆ”n   contratados   sin   necesidad   de   modificar   elpresente   acuerdo,   mediante   notificaciĆ³n   escrita,   por   email   o   cualquier   otra   vĆ­atelemĆ”tica.2.3  La   membrecĆ­a   es  proporcionada   por  ZAABRA   PROFESIONAL   teniendo   encuenta   los   Perfiles   que   han   sido   verificados   en   la   forma   y   condiciones   quedetermine   ZAABRA   PROFESIONAL   a   su   entera   discreciĆ³n.   La   prestaciĆ³n   delServicio   por   parte   de   ZAABRA   PROFESIONAL   al   Usuario   se   iniciarĆ”   en   elmomento del pago de esta.
2.4   A   los   efectos   de   poder   prestar   de   forma   adecuada   el   Servicio   y   darcumplimiento al presente contrato y a la legislaciĆ³n aplicable, el Usuario deberĆ”proporcionar a la CompaĆ±Ć­a toda aquella informaciĆ³n que Ć©sta Ćŗltima requiera.2.5 ZAABRA PROFESIONAL se reserva el derecho de decidir, en cada momento,los   productos   y/o   servicios   que   se   ofrecen.   De   este   modo,   ZAABRAPROFESIONAL   podrĆ”,   en   cualquier   momento,   aĆ±adir   nuevos   productos   y/oservicios   a   los   ofertados   actualmente.   AsĆ­   mismo   ZAABRA   PROFESIONAL   sereserva el derecho a retirar o dejar de ofrecer, en cualquier momento, y sin previoaviso, cualquiera de los servicios ofrecidos.  3. ASIGNACIĆN DE PERFIL3.1   Una   vez   suscrito   el   presente   Contrato,   el   profesional   recibirĆ”   vĆ­a   correoelectrĆ³nico la confirmaciĆ³n del pago y procederĆ” a responder el formulario contodos los datos que ZAABRA PROFESIONAL solicita, estos serĆ”n verificados porel equipo profesional para su respectiva publicaciĆ³n. Cada profesional tendrĆ” superfil individual.3.2 Sin perjuicio de lo dispuesto en el apartado anterior, mediante la aceptaciĆ³n yla firma del presente Contrato, el profesional acepta, consiente y autoriza de formaexpresa a ZAABRA PROFESIONAL a la publicaciĆ³n de dicha informaciĆ³n. 3.3   El   Profesional   autoriza   y   permite   a   ZAABRA   PROFESIONAL   modificar   elcontenido,   materiales   y   documentos   facilitados   por   parte   del   Profesional   a   losefectos   de   preparar   el   Perfil   o   landing   page,   en   este   sentido,   cualquiermodificaciĆ³n realizada se limitarĆ” a actuaciones encaminadas a mejorar la calidadde la publicaciĆ³n y validar la veracidad de la misma (eliminar errores, mejorar lacalidad de las imĆ”genes, confirmar la veracidad de la especialidad del Profesional,entre otros).4. CONTRAPRESTACIĆN 4.1. ZAABRA PROFESIONAL tendrĆ” derecho a percibir la retribuciĆ³n acordado enlas condiciones particulares al inicio de cada uno de los periodos de facturaciĆ³n enfunciĆ³n de la membresĆ­a que se adquiera, sin perjuicio de lo anterior, las partespodrĆ”n acordar posteriormente a la firma del presente acuerdo la modificaciĆ³n dela retribuciĆ³n que se detalla en las condiciones particulares, el profesional pagarĆ”su membresĆ­a a travĆ©s de la plataforma, y dentro de esta misma plataforma elusuario   agendarĆ”  y  de   inmediato   podrĆ”   dirigirse   al   pago   de   la  consulta   con   elprofesional; de acuerdo a la ley  CITAR LEY.................  cuando el usuario estĆ©
completamente   satisfecho   con   el   servicio   ZAABRA   PROFESIONAL   procede   ahacer   la   entrega   del   dinero   al   profesional,   descontando   los   gastos   operativosocasionados   con   la   pasarela   de   pagos   PayU   (Cargo   fijo   por   transacciĆ³n,Porcentaje PayU x transacciĆ³n, transacciones y transferencia, 4 x 1000).5.DEVENGO, FACTURACIĆN Y FORMA DE PAGO5.1 La contraprestaciĆ³n devengada a favor de ZAABRA PROFESIONAL deberĆ”ser abonada por el profesional, docente o estudiante al inicio de cada periodo dela membresĆ­a, ya sea pagada por 6 meses o 12 meses segĆŗn sea el caso. 5.2 Las facturas correspondientes serĆ”n emitidas por pagos de membresĆ­a porparte de ZAABRA PROFESIONAL en los siguientes 3 dĆ­as hĆ”biles, mediante elpago de la membresĆ­a, el profesional, docente o estudiante autoriza expresamentea ZAABRA PROFESIONAL a emitir la factura y remitirla al correspondiente correodonde se detallan las condiciones.5.3 Facturas emitidas por agendamiento y pago de consulta con el profesional;estĆ”s facturas serĆ”n emitidas por cada uno de los profesionales que ofrecen elservicio a travĆ©s de la plataforma de ZAABRA PROFESIONAL.5.4 El cliente podrĆ” solicitar la devoluciĆ³n (reembolso) de los montos pagados aZAABRA PROFESIONAL en caso de presentarse errores de cobro, por ejemplo,pagos dobles o montos diferentes a los pactados.6.AGENDAMIENTO DE CITAS6.1   Tras   la   activaciĆ³n   de   La   membresĆ­a,   ZAABRA   PROFESIONAL   confiereĆŗnicamente   al   profesional,   excluyendo   expresamente   a   cualquiera   de   lasempresas y entidades que puedan formar parte su mismo grupo de sociedades, eluso de una landing page dentro de la plataforma de servicios profesionales por untiempo especĆ­fico y determinado. 6.2 El permiso entregado a cada profesional le da el derecho al profesional paraingresar a su perfil y definir que dĆ­as y horas especĆ­ficas podrĆ” ofrecer su servicioa travĆ©s de nuestra plataforma de ZAABRA PROFESIONAL, de esta manera elusuario pueda agendar un espacio con el profesional requerido, inmediatamente elusuario genere el agendamiento de la cita, deberĆ” hacer el pago para asĆ­ asegurarsu servicio.6.3   El   permiso   y   usuario   otorgado   a   cada   profesional   por   parte   de   ZAABRAPROFESIONAL se confiere por el plazo del pago de membresĆ­a que genere.
6.4   Este   calendario   permite   al   usuario   y   al   profesional   realizar   las   siguientestareas:ļ·Entregar   a   ZAABRA   PROFESIONAL   la   disponibilidad   de   tiempo   paraconsultas o servicio, tiempo en dĆ­as y horas, para que le usuario puedaacceder y realizar el respectivo agendamiento de cita.ļ·Confirmar los espacios que sean pagados por el usuario y de esta menaragenerar las notificaciones correspondientes antes de la consulta.ļ·PodrĆ” acceder a este desde cualquier dispositivo, sea computador, celularo Tablet.ļ·El profesional que realiza el pago de la membresĆ­a es responsable por elcumplimiento de las citas agendadas y pagadas a travĆ©s de la plataformaZAABRA PROFESIONAL. 6.5   ZAABRA   PROFESIONAL   se   reserva   el   derecho   a   bloquear   el   acceso   alcalendario de agendamiento de citas, en el supuesto en el que se realice un usoindebido o inadecuado del mismo, o no se cumpla con el usuario final lo pactado,de   conformidad   con   las   previsiones   del   presente   contrato,   a   estos   efectos   seentenderĆ”   como   āuso   inadecuadoā a   los  siguiente:  que   este   sea   manejado   porotras personas no autorizadas  o no  registradas anteriormente, no  podrĆ”  enviarcorreos   no   deseados   o   spam,   reproducir   o   intentar   reproducir   el   software   sinautorizaciĆ³n,   perjudicar   los   intereses   de   ZAABRA   PROFESIONAL,   no   darcumplimiento a las obligaciones previstas en el presente contrato (incluyendo lascondiciones   generales)   o   las   condiciones   legales   previstas   en   la   plataformaZAABRA   PROFESIONAL,   cancelar   de   forma   reiterada   las   solicitudes   de   losusuarios   finales,   utilizar   la   plataforma   para   fines   distintos   a   los   previstos   en   elpresente   contrato   o   en   el   presente   documento   de   tĆ©rminos   y   condiciones   delservicio.6.6   Para   estos   efectos,   en   el   supuesto   en   el   que   ZAABRA   PROFESIONALentienda que se ha incumplido alguna de las obligaciones anteriores, notificarĆ” alprofesional, docente, o estudiante a la direcciĆ³n de correo electrĆ³nico indicandoque   se   ha   procedido   a   la   cancelaciĆ³n   de   los   servicios   que   se   encuentranexpuestos dentro de la plataforma, en ningĆŗn caso la cancelaciĆ³n de este servicioafectarĆ” la remuneraciĆ³n que ZAABRA PROFESIONAL percibe.6.7   Las   partes   acuerdan   que   queda   excluida   de   forma   expresa   del   presenteservicio cualquier derecho sobre el software o cĆ³digo fuente del mismo.6.8   AsĆ­   mismo,   el   profesional,   docente   o   estudiante   mantendrĆ”   a   ZAABRAPROFESIONAL   plenamente   a   salvo   respecto   de   la   totalidad   de   daĆ±os,responsabilidades, demandas, obligaciones, juicios, sentencias y gastos de todo
tipo en los cuales pueda incurrir como consecuencia de reclamaciones de tercerosen relaciĆ³n al uso por parte del cliente, o de su personal.7. DuraciĆ³n y terminaciĆ³n  7.1  El  Contrato  entrarĆ”   en  vigor en   el   momento  del   pago  de  la   membresĆ­a  osuscripciĆ³n, salvo acuerdo explĆ­cito en contra en las Condiciones Particulares delpresente acuerdo, el perĆ­odo inicial del Contrato serĆ” por el plazo de 12 meses o 6meses segĆŗn la membresĆ­a pagada; estos dĆ­as comienzan a contar desde la fechade pago de la membresĆ­a, esta deberĆ” ser renovada con el pago cada periodosegĆŗn   el   escogido,   de   no   recibir   el   pago   8   dĆ­as   hĆ”biles   antes   de   terminar   elperiodo,   el   sistema   inmediatamente   cumplido   el   tiempo   ocultarĆ”   el   perfil   delprofesional, tecnĆ³logo, docente o estudiante. La persona o entidad que se rija bajoel   contrato   no   podrĆ”   resolver   o   terminar   este   contrato,   excepto   por   causasprevistas   en   la   ley   o   lo   dispuesto   en   las   condiciones   expuestas   en   estedocumento, en el caso de que el cliente decida dar de baja y/o dejar de utilizar losservicios   prestados   a   travĆ©s   de   ZAABRA   PROFESIONAL   antes   del   tiempo   definalizaciĆ³n de la membresĆ­a, ZAABRA PROFESIONAL no se hace devoluciĆ³n dedinero por el servicio prestado. El pago de la membresĆ­a serĆ” adelantado en un100%.7.2 Sin  perjuicio  de  lo  anterior y  sujeto  a la  clĆ”usula  7.4, el  presente  ContratopodrĆ” ser resuelto como consecuencia de cualquiera de las siguientes causas: a.Por   mutuo   acuerdo   entre   las   Partes;   b.   Tras   la   finalizaciĆ³n   del   PerĆ­odo   de   lamembresĆ­a pagada, a solicitud de cualquiera de las Partes con un plazo mĆ­nimode   preaviso   de   treinta   (30)   dĆ­as   a   la   fecha   del   inicio   del   siguiente   PerĆ­odo   deFacturaciĆ³n;   y/o   c.   Por   parte   de   la   ZAABRA   PROFESIONAL   en   caso   deincumplimiento   del   profesional,   tecnĆ³logo,   docente   o   estudiante.   ZAABRAPROFESIONAL   podrĆ”   cancelar   el   servicio   y   lo   pactada   con   el   profesional,tecnĆ³logo, docente o estudiante en los siguientes casos: a) Si el profesional nopresta un servicio adecuado de acuerdo a la calificaciĆ³n otorgada por el usuario.b) Por generar un mal procedimiento en el usuario final. c) No entregar informaciĆ³na   ZAABRA   PROFESIONAL   o   que   ZAABRA   PROFESIONAL   no   pueda   verificarque la informaciĆ³n suministrada sea real.7.3 Sin perjuicio de lo anterior, cada perfil acordado en las condiciones generalestendrĆ” una permanencia de 12 meses o 6 meses dependiendo de la membresĆ­aadquirida, a efectos aclaratorios, en caso de cancelaciĆ³n por parte del profesional,tecnĆ³logo, docente o estudiante de conformidad con los dispuesto en el numeral7.2, el acuerdo permanecerĆ” en todo caso en vigencia con el perfil adquirido y
este genera una renovaciĆ³n automĆ”tica finalizado el periodo pactado en el primerpago.7.4 La anulaciĆ³n o terminaciĆ³n del acuerdo, conllevarĆ” la automĆ”tica cancelaciĆ³ndel perfil en la plataforma ZAABRA PROFESIONAL, asĆ­ mismo, dejarĆ”n de serexigibles por parte de la compaĆ±Ć­a las obligaciones de pago de los servicios objetodel presente acuerdo, salvo aquellas que ya se hubiera devengado a favor de lacompaĆ±Ć­a,   No   obstante   lo   anterior,   las   obligaciones   de   las   partes   continuarĆ”nsiendo   exigibles   en   lo   que   respecta   a   aquellos   perfiles   sujetos   a   periodos   depermanencia; sin perjuicio de lo anterior, en caso de cancelaciĆ³n del acuerdo porparte de ZAABRA PROFESIONAL por incumplimiento del profesional, tecnĆ³logo,docente   o   estudiante,   no   serĆ”n   de   aplicaciĆ³n   los   periodos   de   permanenciaadquiridos y ZAABRA PROFESIONAL tendrĆ” derecho a percibir la indemnizaciĆ³nque se prevĆ© en la  clĆ”usula 9.3  siguiente o cualquier otra del presente acuerdo,asĆ­ como las cantidades devengadas y no pagadas por el cliente.7.5 Las partes acuerdan que el profesional, tecnĆ³logo, docente o estudiante noostentarĆ”   ningĆŗn   derecho   como   consecuencia   de   la   licencia   y/o   de   cualquierherramienta asociada al software o prestaciĆ³n de los servicios aquĆ­ descritos, asĆ­como   tampoco   ningĆŗn   derecho   de   compensaciĆ³n   como   consecuencia   de   lacancelaciĆ³n o terminaciĆ³n anticipada de este acuerdo.7.6   La   cancelaciĆ³n   del   presente   contrato   no   perjudicarĆ”   en   modo   alguno   elderecho de la parte afectada por tal incumplimiento a reclamar la correspondienteindemnizaciĆ³n por los daĆ±os y perjuicios causados, respetando en todo caso, lostĆ©rminos previstos en el presente acuerdo. 8. Derechos y obligaciones de ZAABRA PROFESIONAL8.1 En el marco de la prestaciĆ³n del servicio adquirido como membresĆ­a, ZAABRAPROFESIONAL   se   compromete   a:   a)   Ofrecer   servicios   de   membresĆ­a   en   lostĆ©rminos previstos en las condiciones generales y, en su caso en las condicionesgenerales   del   servicio.   b)   Proporcionar   al   profesional,   tecnĆ³logo,   docente   oestudiante las herramientas necesarias para asignar el perfil e informaciĆ³n parapublicar en el sitio. c) Proporcionar las herramientas y caracterĆ­sticas necesariaspara   que   el   profesional,   tecnĆ³logo,   docente   o   estudiante   pueda   gestionar   yadministrar   la   informaciĆ³n   dentro   de   su   perfil,   incluyendo   disponibilidad   enagendamientos   de   citas,   agendamiento   de   citas   como   tal.   d)   Proporcionarasistencia en la ediciĆ³n del perfil o landing page durante toda la duraciĆ³n de lamembresĆ­a, asistencia que se darĆ” en los horarios estipulados, lunes a viernes de8 am a 5 pm por medio de nuestros canales virtuales, TelĆ©fono 3212449869 o alcorreo electrĆ³nico serviciosprofesionales@zaabra.com.co.9. Obligaciones del profesional, tecnĆ³logo, docente o estudiante.
9.1 El profesional, tecnĆ³logo, docente o estudiante declara, garantiza y se obligafrente a ZAABRA PROFESIONAL a dar cumplimiento a toda y cada una de lasprevisiones del presente acuerdo, incluyendo tĆ©rminos y condiciones generales ytĆ©rminos   y   condiciones   generales   del   servicio,   con   la   debida   diligencia   y   enatenciĆ³n a la naturaleza de su actividad profesional y en especial se comprometea:   a)   Mantener   en   todo   momento   actualizada   la   informaciĆ³n   de   cada   perfil.   b)Abonar en tiempo y forma los pagos que estĆ©n a favor de ZAARA PROFESIONAL.c)   Estar   en   contacto   permanente   con   ZAABRA   PROFESIONAL   para   que   estaĆŗltima pueda realizar la adecuada prestaciĆ³n del servicio y en particular aceptarlos tĆ©rminos y condiciones requeridos por ZAABRA PROFESIONAL. d) ZAABRAPROFESIONAL   proporciona   a   cada   perfil   o   landing   page   el   software   deagendamiento   de   consulta,   este   software   es   propiedad   de   ZAABRAPROFESIONAL, serĆ” administrado por este mismo. e) Abstenerse de utilizar deforma   ilĆ­cita   la   plataforma   de   ZAABRA   PROFESIONAL   y   herramientas   quecomponen   la   misma,   incluyendo,   pero   no   limitĆ”ndose   a   ello,   el   envĆ­o   denotificaciones   o   mensajes   a   usuarios   a   travĆ©s   de   la   plataforma   sin   respetar   lanormativa de protecciĆ³n de datos de carĆ”cter personal o cualquier otra que sea deaplicaciĆ³n.  f)   Incluir   en   cada   formulario   del   perfil   informaciĆ³n   clara,   completa   yveraz, asĆ­ como de la informaciĆ³n de cada una de las citas y lugares en las que seadmitirĆ”n   los   usuarios,   el   profesional,   tecnĆ³logo,   docente   o   estudiante   secompromete a aĆ±adir de forma puntual la disponibilidad de tiempo real y lo deberĆ”mantener actualizado. g) No sugerir o inducir al usuario de abstenerse de utilizar laplataforma   de   ZAABRA   PROFESIONAL   para   acceder   al   servicio.   h)   Entregartodos aquellos materiales o contenidos que sean necesarios a la entera discreciĆ³nde ZAABRA PROFESIONAL a los efectos de crear y compartir informaciĆ³n en elperfil o landing page, esta informaciĆ³n deberĆ” ser facilitada por parte del usuario atravĆ©s de un formulario creado en ZAABRA PROFESIONAL.9.2   ZAABRA   PROFESIONAL   se   reserva   el   derecho   de   realizar   todas   aquellasaveriguaciones o actuaciones que sean necesarias a los efectos de determinar siestĆ”n cumpliendo todas y cada una de las obligaciones anteriores, incluyendo larealizaciĆ³n de encuestas a los usuarios.9.3   En   el   supuesto   en   el   que   el   profesional,   tecnĆ³logo,   docente   o   estudianteincumpla   cualquiera   de   las   obligaciones   previstas   en   la   clausula   9.1,   ZAABRAPROFESIONAL se reserva el derecho de cancelar el presente contrato de formaunilateral mediante notificaciĆ³n a la otra parte, asĆ­ como solicitar al cliente el abonopor   los   daĆ±os   causados   y   perjuicio   derivados   de   dicho   incumplimiento.   DichosdaĆ±os y perjuicios incluirĆ”n en todo caso el importe de la contraprestaciĆ³n que sehubiese devengado a favor de ZAABRA PROFESIONAL durante el periodo de lamembresĆ­a, asĆ­ como cualquier otro daĆ±o generado a ZAABRA PROFESIOAL pordicho incumplimiento.
10 Manifestaciones y garantĆ­as al usuario10.1 El usuario manifiesta y garantiza a ZAABRA PROFESIONAL que: a) Tanto elusuario como representante legal del mismo tienen capacidad legal suficiente a losefectos de suscribir o aceptar el acuerdo y dar cumplimiento a la totalidad de lasdisposiciones del contrato, incluyendo las condiciones generales y condiciones delservicio y cualquier otra prevista en el mismo. b) Realizar actividades relacionadascon la asistencia a centro mĆ©dico o consultorio particular, el profesional deberĆ”asegurar   que   tiene   todas   las   autorizaciones,   licencias   y/o   permisos,   registrosexigidos   por   la   legislaciĆ³n   aplicable   para   realizar   estas   actividades.   c)   Toda   lainformaciĆ³n, materiales, documentos, contenidos, asĆ­ como cualquier otro incluidoen cualquiera de los Perfiles o landing page serĆ” veraz y legal y no incumplirĆ”ninguna   disposiciĆ³n   legal   o   derechos   de   terceros.   d)   Ha   obtenido   elconsentimiento   previo   y   por   escrito   necesario   sobre   todos   los   materiales,documentos, trabajos o contenidos facilitados a ZAABRA PROFESIONAL en elmarco de la presente relaciĆ³n contractual, incluyendo la facultad de publicaciĆ³n,distribuciĆ³n   y   difusiĆ³n,   entre   otros,   y,   por   consiguiente,   que   no   infringe   ningĆŗnderecho   de   propiedad   intelectual   y/o   industrial   de   terceros.   En   particular,manifiesta   que   a  travĆ©s  de   dicha   divulgaciĆ³n  y  publicaciĆ³n   en   el   Sitio  Web   deZAABRA   PROFESIONAL   no   se   infringe   ningĆŗn   derecho   frente   a   terceros,   enparticular derechos de propiedad intelectual o industrial. En este mismo sentido, elusuario autoriza expresamente a ZAABRA PROFESIONAL  para usar, compilar,adaptar,   alterar,   incorporar   contenido   sobre   los   trabajos   y   materialesproporcionados; Ha obtenido todas aquellos permisos y autorizaciones necesariassobre todas las imagen y datos del Profesional que sean publicadas en el SitioWeb de ZAABRA PROFESIONAL por parte del usuario, incluyendo el derecho adistribuir y difundir las mismas a travĆ©s de Internet, asĆ­ como que cuenta con todaslas   autorizaciones   necesarias   en   materia   de   protecciĆ³n   de   datos   de   carĆ”cterpersonal sobre las imĆ”genes y datos del Profesional, asĆ­ como del resto imĆ”genesincluidas en la galerĆ­a de cada landing page, La autorizaciĆ³n concedida a ZAABRAPROFESIONAL para la utilizaciĆ³n de la imagen y los datos del Profesional seguirĆ”en   vigencia   tras   la  terminaciĆ³n   o   cancelaciĆ³n  de   la   relaciĆ³n   contractual.  e)   Haobtenido   todas   aquellos   permisos   y   autorizaciones   necesarias   sobre   todas   lasmarcas,   logotipos,   emblemas   o   cualquier   otro   sujeto   a   derechos   de   propiedadintelectual   y/o   industrial   que   sean   facilitados   a   ZAABRA   PROFESIONAL   opublicadas en el Sitio Web de ZAABRA PROFESIONAL por parte del usuario o apeticiĆ³n de este, incluyendo el derecho a distribuir, difundir y utilizar por parte deZAABRA   PROFESIONAL   o   cualquiera   de   las   entidades   de   su   grupo   desociedades, para utilizar las mismas en todo el territorio mundial. La autorizaciĆ³nconcedida a ZAABRA PROFESIONAL para la utilizaciĆ³n de la imagen y los datosdel Profesional seguirĆ” en vigencia tras la terminaciĆ³n o resoluciĆ³n del presente
Contrato. f) DarĆ” cumplimiento a las disposiciones previstas en las clĆ”usulas delas   presentes   Condiciones   Generales,   sobre   todos   los   documentos,   textos,materiales,   logotipos,   marcas   registradas,   datos   personales   o   cualquier   otrofacilitado   a   ZAABRA   PROFESIONAL   o   subido   a   el   Sitio   Web   DE   ZAABRAPROFESIONAL o incluido en el Perfil o landing page.10.2   En   este   sentido,   el   usuario   se   obliga   a   responder   frente   a   ZAABRAPROFESIONAL y a indemnizar por los daĆ±os y perjuicios que se puedan generara   ZAABRA   PROFESIONAL,   por   la   falta   de   veracidad   o   inexactitud   de   lasmanifestaciones y garantĆ­as previstas en la presente clĆ”usula, incluyendo pero sinlimitarse a ello, la posible responsabilidad civil, administrativa o de cualquier otrotipo,   asĆ­   como   abonar   a   ZAABRA   PROFESIONAL   los   gastos   legales,administrativos, judiciales, de abogados y procuradores.11. Cambios de los procedimientos11.1 Las Partes acuerdan que cualquier modificaciĆ³n implementada por ZAABRAPROFESIONAL en relaciĆ³n a los procesos de verificaciĆ³n, modificaciones en elSitio   Web   de   ZAABRA   PROFESIONAL   o   en   el   Ć”mbito   de   actividad   u   otrasmodificaciones a los efectos de adaptarse a la legislaciĆ³n aplicable no implicarĆ”una modificaciĆ³n del presente Contrato y no darĆ” lugar a la cancelaciĆ³n del mismoen   los   tĆ©rminos   previstos   en   las   Condiciones   Generales.   Se   entenderĆ”   que   elusuario   acepta   dicha   modificaciĆ³n   o   actualizaciĆ³n   en   el   supuesto   en   el   que   elusuario   siga   haciendo   uso   del   Sitio   Web   de   ZAABRA   PROFESIONAL,   tras   laentrada en vigencia de la actualizaciĆ³n o modificaciĆ³n del Sitio Web de ZAABRAPROFESIONAL,   en   ningĆŗn   caso,   se   requerirĆ”   la   autorizaciĆ³n   expresa   o   laformalizaciĆ³n de un acuerdo por separado entre las Partes.12. Sitio Web 12.1   El   Sitio   Web   ZAABRA   PROFESIONAL   se   ofrecen   tal   como   han   sidodesarrollados y en la forma en la que estĆ©n disponibles en cada momento, a talefecto,   ZAABRA   PROFESIONAL   no   garantiza   al   usuario   o   a   cualquier   otrapersona o entidad, de forma expresa o implĆ­cita, que los mismos se adaptarĆ”n acualquier   finalidad   o   uso   concreto,   ni   serĆ”   completo,   Ćŗtil   ni   adecuado   para   laactividad   del   Cliente   o   de   cualquiera   de   los   Usuarios,   incluyendo,   de   formaenunciativa   pero   no   limitativa,   garantĆ­a   de   comerciabilidad,   patentabilidad   y/oadecuaciĆ³n a un determinado propĆ³sito, ni de existencia de defectos o errores, nien  relaciĆ³n  a  su capacidad de  integrarse en  un  sistema determinado,  o de  noinfracciĆ³n   de   ninguna   patente   u   otros   derechos   de   propiedad   intelectual   y/oindustrial de terceros.12.2 Asi mismo, ZAABRA PROFESIONAL se reserva el derecho a llevar a cabotodas aquellas actuaciones que sean necesaria para mantener en funcionamiento
los sistemas, los cuales pueden provocar impedimentos o imposibilidad temporalde   utilizar   los   Servicios   de   membresĆ­a   por   parte   del   Profesional,   tecnĆ³logo,docente,   estudiante   y   los   Usuarios.   A   tal   efecto,   ZAABRA   PROFESIONALrealizarĆ” sus mayores esfuerzos para que dichas actuaciones de mantenimientopor la noche o en dĆ­as no laborables.13. ExenciĆ³n de responsabilidad13.1   ZAABRA   PROFESIONAL   no   serĆ”   responsable   por   las   pĆ©rdidas,   daĆ±osdirectos, indirectos, emergentes, por el lucro cesante sufrido por el Profesional,tecnĆ³logo,   docente,   estudiante   o   los   Usuarios,   o   cualquier   otro   daĆ±o   o   costeincidental,  especial  o  que  sea   consecuencia  de   una  reclamaciĆ³n   āincluidos loscostes   judiciales   y   de   abogado   o   procurador,   la   responsabilidad   civil   o   porproducto   o   negligencia-   fundada   en   una   conducta   o   actividad   desarrollada   porZAABRA  PROFESIONAL  o cualquier otro  con motivo  del  uso  del  Sitio  Web, ocualquier otro software o aplicaciĆ³n facilitada por ZAABRA PROFESIONAL en elmarco   de   los   servicios   prestados,   por   cualquier   motivo     (incluyendo   pero   nolimitado   a   las   pĆ©rdidas   derivadas   del   fallo   o   defectuoso   funcionamiento   deaplicaciones web, aplicaciones mĆ³viles, software, la pĆ©rdida total o parcial o eldaĆ±o producido a los contenidos o a otra informaciĆ³n, la detenciĆ³n o suspensiĆ³ntotal o parcial de la de la plataforma web, plataforma mĆ³vil, software, la detenciĆ³nde   las   citas   concertadas   con   Profesionales,   la   pĆ©rdida   de   tiempo   defuncionamiento o de ingresos, beneficios, operaciones con Usuarios o cualquierotro motivo), salvo que se derive de una actuaciĆ³n dolosa por parte de ZAABRAPROFESIONAL   y,   en   todo   caso   y   en   cualquier   supuesto,   limitada   a   laresponsabilidad prevista en la clĆ”usula 13.8 de las Condiciones Generales.13.2 Asi mismo, el Profesional, tecnĆ³logo, docente o estudiante acepta y reconoceque ZAABRA PROFESIONAL no garantiza la identidad de los Usuarios ni serĆ”responsable   bajo   ningĆŗn   concepto   frente   al   Cliente   o   a   terceros   por   cualquierfraude relacionado con la identidad de los Usuarios o los Profesionales.13.3   ZAABRA   PROFESIONAL   no   se   responsabiliza   de   los   contenidos   einformaciĆ³n   facilitada   por   el   Profesionales,   tecnĆ³logo,   docente,   estudiante   oUsuarios   a   travĆ©s   del   Sitio   Web   de   ZAABRA   PROFESIONAL,   por   losProfesionales y/o centros mĆ©dicos relacionados con la prestaciĆ³n de sus propiosservicios   ni   de   las   condiciones   de   los   mismos.   En   este   sentido,   ZAABRAPROFESIONAL   no   se   hace   responsable   de   las   respuestas,   consultas,comentarios y/u opiniones emitidas por los Profesionales, tecnĆ³logos, docentes oestudiantes, o realizadas por Usuario y otros a travĆ©s del Sitio Web de ZAABRAPROFESIONAL,   puesto   que   en   ningĆŗn   caso   la   actividad   de   ZAABRAPROFESIONAL podrĆ” ser considerada como teleconsulta, consulta o similar y lasopiniones o diferentes consultas no son realizadas por ZAABRA PROFESIONAL.
13.4 La CompaĆ±Ć­a no supervisa, monitoriza ni confirma las licencias, mĆ”s allĆ” deque pueda validar a su libre discreciĆ³n y sin obligaciĆ³n al respecto los nĆŗmeros detarjeta   profesional,   la   especialidad   del   Profesional,   o   calificaciones   de   losProfesionales y, en ningĆŗn caso, serĆ” responsable de la actividad realizada porparte de los Profesionales, tecnĆ³logos, docentes o estudiantes. En caso de queZAABRA PROFESIONAL adquiera informaciĆ³n suficiente que conduzca a suponerque el Profesional carece de tĆ­tulo acreditativo suficiente para entenderse comotal,   ZAABRA   PROFESIONAL   podrĆ”   cancelar   y/o   bloquear   su   Cuenta,   perfil   olanding page inmediatamente.13.5   La   CompaĆ±Ć­a   no   supervisa,   monitoriza   ni   controla   los   mensajes   onotificaciones enviadas por los Profesionales, tecnĆ³logos, docentes o estudiantesa sus clientes o usuarios a travĆ©s de la Plataforma, vĆ­a sms, email u otros medios.A tal efecto, el profesional, tecnĆ³logo, docente o estudiante se obliga a responderfrente a ZAABRA PROFESIONAL y a indemnizar por los daĆ±os y perjuicios que sepuedan   generar   a   ZAABRA   PROFESIONAL   como   consecuencia   de   lasnotificaciones o comunicaciones remitidas, incluyendo, pero no limitĆ”ndose a ello,la posible responsabilidad civil, administrativa o de cualquier otro tipo, asĆ­ como aabonar   a   ZAABRA   PROFESIONAL   por   los   gastos   legales,   administrativos,judiciales, de abogados y procuradores.13.6 Sin perjuicio de lo anterior y dejando constancia expresa de que ZAABRAPROFESIONAL   no   serĆ”   responsable   de   la   cualificaciĆ³n   o   licencias   de   losProfesionales,   en   el   supuesto   en   el   que   ZAABRA   PROFESIONAL   adquierainformaciĆ³n   que   pueda   llegar   a   asumirse   que   el   Profesional   no   cuenta   con   lalicencia  o acreditaciĆ³n necesaria  para  la  prestaciĆ³n  de  servicios, se  pondrĆ”  encontacto con el Profesional a los efectos de intentar recabar mĆ”s informaciĆ³n alrespecto.13.7   ZAABRA   PROFESIONAL   no   serĆ”   responsable   de   los   daĆ±os   y   perjuiciosderivados   del   mal   funcionamiento   de   la   Cuenta,   de   los   fallos   y   errores   en   elservidor como consecuencia de cualquier fallo relacionado con el software o porcualquier incompatibilidad con el Sitio Web de ZAABRA PROFESIONAL. ZAABRAPROFESIONAL  tampoco serĆ” responsable por ningĆŗn daĆ±o relacionado con lafalta de conexiĆ³n a Internet o el mal funcionamiento del Sitio Web, asĆ­ como deaquellos excluidos de forma expresa en el presente Contrato.13.8   En   el   supuesto   en   el   que   ZAABRA  PROFESIONAL   fuera   responsable   decualquier   daĆ±o   sufrido   al   usuario,   los   Profesionales   como   consecuencia   de   unincumplimiento   del  presente   Contrato,  el  importe  mĆ”ximo  de  la  responsabilidadasumida por ZAABRA PROFESIONAL no podrĆ” ser superior al importe percibidoen el marco de la prestaciĆ³n de los Servicios de membresĆ­a.
13.9 Las previsiones dispuestas en la presente clĆ”usula seguirĆ”n en vigencia trasla   finalizaciĆ³n   de   la   relaciĆ³n   contractual   entre   el   Cliente   y   ZAABRAPROFESIONAL.13.10 En relaciĆ³n con los servicios de salud que son prestados por terceros.Usted   reconoce   que   ZAABRA   PROFESIONAL   sĆ³lo   facilita   un   espacio   deacercamiento   para   que   un   profesional,   tecnĆ³logo,   docente   o   estudiante   secontacte   con   el   usuario  final  y  puedan   establecer  un  acuerdo   comercial  mutuopara  la  prestaciĆ³n  de  Servicios,  por lo  que   las negociaciones que   surjan  entreestos Usuarios solo tendrĆ”n efecto entre los mismos, y no afectarĆ”n ni derivarĆ”nen   responsabilidad   alguna   por   parte   de   ZAABRA   PROFESIONAL.   CualquierprestaciĆ³n de Servicios que se lleve a cabo por el profesional, tecnĆ³logo, docenteo estudiante a usuarios, se realiza al margen del sitio web, por lo que ZAABRAPROFESIONAL  no es responsable de ninguna de las respuestas y/u opinionesentregadas;   ZAABRA   PROFESIONAL   intervendrĆ”   en   el   agendamiento   de   laconsulta (determinaciĆ³n de lugar, fecha y hora del servicio), de acuerdo con lascondiciones previstas por el en el sitio web.Los   Usuarios   y   profesional   inscritos   en   el   sitio   web   ZAABRA   PROFESIONALentienden   y   aceptan   que   ZAABRA   PROFESIONAL   no   hace   parte   de   algĆŗnacuerdo que se llegase a negociar o firmar entre ellos; usted reconoce y aceptaque ZAABRA PROFESIONAL no tiene algĆŗn control, ni la obligaciĆ³n de controlarla conducta o acciones de los usuarios dentro o fuera del sitio web, ya sea poropiniones, anuncios o publicaciones, por lo que en la medida mĆ”xima permitidapor la ley, no asume alguna responsabilidad por la conducta, acciones, opiniones,anuncios o publicaciones de los usuarios;  no obstante, ZAABRA PROFESIONALse   reserva   la   facultad   de   investigar   las   conductas   que   sean   contrarias   a   losTĆ©rminos   y   condiciones   generales   y   TĆ©rminos   y   condiciones   generales   delservicio,   y   a   tomar   las   acciones   necesarias,   incluyendo   pero   sin   limitar,   larestricciĆ³n de acceso o la suspensiĆ³n o eliminaciĆ³n de la cuenta del Usuario. Cada   Usuario   es   el   Ćŗnico   responsable   de   todas   sus   comunicaciones,publicaciones, anuncios e interacciones con el Portal y con otros Usuarios de lamisma.ZAABRA PROFESIONAL no garantiza la veracidad, exactitud, exhaustividad y/oactualidad de la informaciĆ³n de los Usuarios que publiquen o comuniquen en elsitio web, ni el cumplimiento de cualquier acuerdo entre los Usuarios. En relaciĆ³ncon este tipo de publicaciones, ZAABRA PROFESIONAL actuarĆ” como un mediode comunicaciĆ³n. ZAABRA PROFESIONAL no asume la obligaciĆ³n de vigilar y/overificar la informaciĆ³n publicada por los Usuarios o contenida en la publicidad, sin
perjuicio de los criterios y condiciones establecidas en los TĆ©rminos y Condicionesdel servicio, y en especial, la facultad de ZAABRA PROFESIONAL de cancelar losregistros   de   aquellos   profesionales,   tecnĆ³logos,   docentes   o   estudiantes   queincumplan   los   TĆ©rminos   y   Condiciones   generales   y   tĆ©rminos   y   condiciones   delservicio.En   consecuencia,   usted   declara   mantener   indemne   y   exonerar   de   todaresponsabilidad a ZAABRA PROFESIONAL de cualquier incumplimiento, engaĆ±o,estafa, infracciĆ³n o perjuicio causado por otro Usuario o por un tercero que tengapublicidad en el Portal.En   la   medida   mĆ”xima   permitida   por   la   ley,   Usted   declara   exonerar   de   todaresponsabilidad y mantener indemne a ZAABRA PROFESIONAL por los daĆ±os yperjuicios,   pasados,   presentes   y   futuros,   que   llegaren   a   ocasionarse   comoconsecuencia del uso de la informaciĆ³n publicada por los Usuarios y terceros en elPortal.14. Derechos de propiedad intelectual y/o industrial de la compaĆ±Ć­a y de lainformaciĆ³n publicada por el Profesional y/o Usuario14.1 Todos los derechos de propiedad industrial y/o intelectual sobre el Sitio WebZAABRA   PROFESIONAL,   la   aplicaciĆ³n   mĆ³vil,   el   software   de   agendamiento   decita, las marcas de ZAABRA PROFESIONAL, las aplicaciones facilitadas por partede   ZAABRA   PROFESIONAL   en   el   marco   de   la   prestaciĆ³n   de   los  Servicios   demembresĆ­a, los softwarede todo ello, asĆ­ como de cualquier ampliaciĆ³n, mejora omodificaciĆ³n de todo ello y de los trabajos, materiales o elementos creados porparte de ZAABRA PROFESIONAL en el marco de la prestaciĆ³n de los serviciosprevistos en el presente Contrato o el cumplimiento de las obligaciones que sederivan   del  mismo, son  de  propiedad  exclusiva  de  la  CompaĆ±Ć­a,  por lo  que  elUsuario   o   profesional,   TecnĆ³logo,   docente   o   estudiante   deberĆ”   abstenerse   deutilizar o registrar a su nombre cualquier patente, marca u otros signos distintivosde la que ZAABRA PROFESIONAL sea titular y no podrĆ” modificar, reproducir,distribuir ni comunicar pĆŗblicamente o poner a disposiciĆ³n de terceros cualquierade ellos, salvo en los supuestos expresamente previstos en el presente Contrato ylo autorice de forma expresa la CompaĆ±Ć­a.14.2   Asimismo,  el   Cliente   se   obliga   a   informar   a   ZAABRA   PROFESIONAL,   demanera rĆ”pida y eficaz, de cualquier infracciĆ³n o fundado temor de infracciĆ³n porparte de clientes, usuarios o de terceros de los derechos de propiedad intelectualy/o   industrial   anteriores   o   de   desarrollos   del   mismo   que   pudiera   afectar   a   loslegĆ­timos intereses de la CompaĆ±Ć­a, segĆŗn corresponda.
14.3 En ningĆŗn caso, la creaciĆ³n de la Cuenta, Perfil, publicaciĆ³n de materiales,documentaciĆ³n y/o imĆ”genes de cualquier tipo por parte del Cliente le confierenderechos sobre las publicaciones en el Sitio Web de ZAABRA PROFESIONAL,propiedad de la CompaĆ±Ć­a.14.4 De igual manera, al publicar en el Sitio Web de ZAABRA PROFESIONAL ofacilitar   a   ZAABRA   PROFESIONAL   por   cualquier   medio   facilite   a   ZAABRAPROFESIONAL   materiales,   documentos,   trabajos,   imĆ”genes,   datos   deProfesionales o contenidos, asĆ­ como marcas comercial, logotipos, emblemas ocualquier   otro   sujeto   a   derechos   de   propiedad   intelectual   y/o   industrial,   seentenderĆ” que el Cliente confiere a ZAABRA PROFESIONAL una licencia de usosobre   todo   ello   con   el   carĆ”cter   de   no   exclusiva,   intransmisible,   para   todo   elterritorio mundial y por el tiempo mĆ”ximo que permite la Ley, pudiendo ZAABRAPROFESIONAL utilizar, publicar realizar, entre otros, copias analĆ³gicas y digitales,almacenamiento,   marketing,   alquiler,   arrendamiento,   difusiĆ³n,   publicaciĆ³n,visualizaciĆ³n, transmisiĆ³n, reemisiĆ³n, reproducciĆ³n, inclusiĆ³n en bases de datos,uso   de   contenido   y   materiales   a   los   efectos   de   promover   las   actividades   ocualquier otro aspecto de la CompaĆ±Ć­a.14.5 Las disposiciones previstas en el apartado anterior se confieren a ZAABRAPROFESIONAL   por   el   tiempo   mĆ”ximo   que   permite   la   ley,   por   lo   quepermanecerĆ”n en vigencia tras la finalizaciĆ³n del presente Contrato.15. Confidencialidad15.1 Las Partes reconocen que durante la relaciĆ³n profesional entre ellas tendrĆ”nacceso   a   informaciĆ³n   relativa   al   presente   Contrato,   acuerdos   previos,documentaciĆ³n, correos electrĆ³nicos otro tipo de mensajes intercambiados entrelas   Partes,   que   tendrĆ”n   la   consideraciĆ³n   de   confidenciales   y   que   deberĆ”n   sertratados con secreto para garantizar el buen fin de las relaciones entre las Partes.A tal efecto, las Partes se comprometen a mantener estricta confidencialidad sobrela   informaciĆ³n   de   este   tipo,   no   pudiendo   reproducirla,   utilizarla,   venderla,licenciarla, exponerla, publicarla o revelarla de cualquier forma a cualquier otrapersona, sin autorizaciĆ³n expresa de la otra Parte, asĆ­ como abstenerse de utilizardicha informaciĆ³n para cualquier finalidad distinta a las previstas en el presenteContrato.15.2 Las obligaciones de confidencialidad establecidas en la presente clĆ”usula noserĆ”n   de   aplicaciĆ³n   a   la   informaciĆ³n   que:   a)   Se   difunda   a   empleados,colaboradores,   asesores   o   cualquier   otro   profesional   a   los   efectos   de   darcumplimiento   a   la   relaciĆ³n   contractual,   siempre   y   cuando   sean   informados   delcarĆ”cter confidencial  de  esta  informaciĆ³n  y asuman  el  compromiso  de  tratar lainformaciĆ³n como confidencial. b) Sea de dominio pĆŗblico o devenga de dominio
pĆŗblico  por un medio  distinto a la violaciĆ³n de las obligaciones previstas en  elContrato.   c)   Haya   llegado   al   conocimiento   de   cualquiera   de   las   Partes   conanterioridad a la firma o aceptaciĆ³n del Contrato o las Condiciones Generales oCondiciones   Particulares   y   no   haya   sido   adquirida,   directa   o   indirectamente,   atravĆ©s de cualquiera de las Partes o a travĆ©s de un tercero que se encuentre a suvez   bajo   la   obligaciĆ³n   de   mantener   la   confidencialidad   de   la   informaciĆ³nconfidencial. d) Aquella otra que deba revelarse en cumplimiento de una orden denaturaleza   legal,   judicial   o   administrativa.   En   este   caso,   la   Parte   que   la   debadivulgar lo notificar a la otra Parte con la mayor antelaciĆ³n posible a fin de queĆ©sta pueda tomar las acciones que estime oportunas.15.3   El   incumplimiento   de   las   obligaciones   de   confidencialidad   previstas   en   lapresente   clĆ”usula   darĆ”   lugar   a   la   Parte   perjudicada   a   reclamar   los   daĆ±os   yperjuicios que se le hubiera generado. Asimismo, la transmisiĆ³n o comunicaciĆ³n acualquier competidor directo o indirecto de ZAABRA PROFESIONAL de cualquiertipo   de   informaciĆ³n   de   la   que   disponga   el   Cliente   en   relaciĆ³n   a   ZAABRAPROFESIONAL   como   consecuencia   de   las   relaciones   comerciales   existentesentre las Partes, darĆ” lugar a las penalizaciones incluidas en el presente Contrato.15.4   Sin   perjuicio   de   las   condiciones   establecidas   en   la   presente   ClĆ”usula,ZAABRA   PROFESIONAL   podrĆ”   intercambiar   o   compartir   cualquier   informaciĆ³nrelativa al profesional, tecnĆ³logo, docente o estudiante a los efectos de operar ogestionar el Sitio Web y los servicios prestados en virtud del presente Contrato,con cualquier entidad perteneciente a su grupo de sociedades, asĆ­ como con otrascompaĆ±Ć­as   que   lleven   a   cabo   negocios   o   actividades   vinculadas   a   ZAABRAPROFESIONAL.   El   Cliente   acepta   expresamente   este   intercambio   o   cesiĆ³n   deinformaciĆ³n por parte de ZAABRA PROFESIONAL.15.5 Las obligaciones de confidencialidad entrarĆ”n en vigencia desde la fecha desuscripciĆ³n   o   aceptaciĆ³n   de   las   Condiciones   Generales,   o   desde   la   fecha   deentrega de informaciĆ³n de carĆ”cter confidencial, lo que suceda antes, y seguirĆ”nsiendo   de   aplicaciĆ³n   mientras   la   informaciĆ³n   conserve   su   naturaleza   secreta   yconfidencial.15.6 Asimismo, ZAABRA PROFESIONAL manifiesta al Cliente que, habida cuentade su valor y aplicaciĆ³n industrial y/o comercial, parte de la informaciĆ³n que se lepueda facilitar como consecuencia de la ejecuciĆ³n de la relaciĆ³n profesional y laprestaciĆ³n de los Servicios de membresĆ­a estarĆ” protegida bajo la modalidad desecreto   industrial   y/o   empresarial   y,   en   consecuencia,   su   divulgaciĆ³n   podrĆ­aperjudicar notablemente a ZAABRA PROFESIONAL, por lo que resulta esencialsalvaguardar dicho conocimiento. Por consiguiente, la utilizaciĆ³n de la misma paray las Condiciones Generales del servicio puede generar una gran daĆ±o y perjuicioa ZAABRA PROFESIONAL, incluso, ser considerada competencia desleal.
16. ProtecciĆ³n de los datos de carĆ”cter personal16.1 Las Partes se obligan a tratar los datos de carĆ”cter personal a los que tenganacceso o que sean objeto de tratamiento durante la prestaciĆ³n de los serviciosderivados de la ejecuciĆ³n del presente contrato en cumplimiento de la normativaaplicable en materia de privacidad y protecciĆ³n de datospersonales incluyendo, entre otras, la ley 1581 de 2012 de ProtecciĆ³n de DatosPersonales.16.2 La ejecuciĆ³n de este Contrato requerirĆ” el acceso y el tratamiento de datospersonales de Usuarios y Profesionales por parte de ZAABRA PROFESIONAL, ennombre y por cuenta de este. El Cliente garantiza que, como responsable de losdatos,   cumplirĆ”   con   las   obligaciones   de   informaciĆ³n   de   los   interesados   y   quedispone de las bases jurĆ­dicas y/o consentimientos necesarios para que ZAABRAPROFESIONAL preste los servicios que se deriven del presente Contrato. A estosefectos,   ZAABRA   PROFESIONAL   tendrĆ”   la   consideraciĆ³n   de   encargado   deltratamiento y el profesional, tecnĆ³logo, docente o estudiante serĆ” el responsabledel tratamiento de datos. Consecuentemente, las Partes reconocen la ejecuciĆ³nen la fecha del presente contrato de un contrato separado para el nombramientode   ZAABRA   PROFESIONAL   como   encargado   del   tratamiento   de   datospersonales. 16.3 A los efectos de lo indicado anteriormente, el profesional, tecnĆ³logo, docenteo   estudiante   autoriza   a   ZAABRA   PROFESIONAL   al   acceso,   tratamiento   yrecolecciĆ³n de dichos datos personales en su nombre, con el fin de dar acceso alos usuarios a leer dicha informaciĆ³n.16.4 Adicionalmente a lo anterior, el profesional, tecnĆ³logo, docente o estudiantese obliga a recabar los consentimientos necesarios para la cesiĆ³n de los datospersonales   de   los   Profesionales   a   ZAABRA   PROFESIONAL   con   el   fin   de   quepueda tratar sus datos en calidad de responsable del Tratamiento. EstĆ” cesiĆ³n serealizarĆ”   con   la   finalidad   de   mantener,   tratar   y   actualizar   los   datos   de   losProfesionales en la plataforma de ZAABRA PROFESIONAL.Por tanto, en dicho caso una vez termine la relaciĆ³n contractual con el profesional,tecnĆ³logo,   docente   o   estudiante,   ZAABRA   PROFESIONAL   podrĆ”   continuartratando los datos personales de los Profesionales en calidad de responsable delTratamiento. En cumplimiento a la ley 1581 de 2012.16.5   Sin   perjuicio   de   lo   anterior,   profesional,   tecnĆ³logo,   docente   o   estudiantecumplirĆ” con todas las obligaciones de informaciĆ³n previstas en relaciĆ³n con losprofesional,   tecnĆ³logo,   docente   o   estudiante   que   presenten   sus   servicios   alusuario final, en el momento de obtener su consentimiento para la cesiĆ³n de sus
datos   a   ZAABRA   PROFESIONAL.   Para   tales   fines,   ZAABRA   PROFESIONALfacilitarĆ” toda la informaciĆ³n necesaria al usuario.16.6   El   Cliente   exime   de   responsabilidad   a   ZAABRA   PROFESIONAL   sobre   eltratamiento   de   datos   personales   realizado   por   Usuarios   y   Profesionales   en   elcontexto   del   cumplimiento   de   este   Contrato   por   parte   de   ZAABRAPROFESIONAL.16.7 En cumplimiento de la ley 1581 del 2012 las Partes informan que los datospersonales de las Partes, que constan en el encabezamiento de este Contrato,serĆ”n   tratados   sobre   la   base   jurĆ­dica   de   la   ejecuciĆ³n   de   este   Contrato,   elcumplimiento   de   las  obligaciones legales  aplicables  a   las  Partes,  asĆ­  como   losintereses legĆ­timos de las Partes en esta relaciĆ³n comercial. En consecuencia, lasPartes aportan  la siguiente  informaciĆ³n: a) Los datos personales de las Partesfirmantes del Contrato serĆ”n tratados por las mismas, en calidad de Responsablesdel   Tratamiento   para   la   ejecuciĆ³n   de   este   Contrato,   con   la   identificaciĆ³n   einformaciĆ³n de contacto establecida en el encabezamiento. b) La recolecciĆ³n ytratamiento de datos personales se basarĆ” en la ejecuciĆ³n del Contrato, para losfines de la prestaciĆ³n de los servicios descritos en el mismo, el cumplimiento delas obligaciones legales de las partes, y los intereses legĆ­timos derivados de lacontinuidad de la relaciĆ³n comercial. c) Los datos personales de las Partes serĆ”nconservados   durante   el   tiempo   necesario   para   cumplir   con   las   finalidadesindicadas en el apartado anterior, aplicando las medidas de seguridad tĆ©cnicas yorganizativas necesarias para garantizar un nivel de seguridad adecuado al riesgo.d) Los datos personales de las Partes no serĆ”n cedidos a terceros excepto, encaso de contar con el consentimiento expreso de las Partes o para el cumplimientode las obligaciones legales exigibles. e) Las Partes tienen derecho a ejercer susderechos   de   acceso,   rectificaciĆ³n   o   supresiĆ³n   o   limitaciĆ³n,   o   a   oponerse   altratamiento, asĆ­ como el derecho a la portabilidad de los datos, dirigiĆ©ndose a ladirecciĆ³n indicada en el encabezamiento del Contrato. TambiĆ©n tienen derecho adirigirse o presentar una reclamaciĆ³n ante la Autoridad de Control.16.9 El Cliente se compromete a suscribir los contratos de encargo de tratamientoy/o cualquier otro documento o consentimientos que sean necesarios o requeridospor la normativa aplicable en materia de protecciĆ³n de datos personales, con losUsuarios   o   los   Profesionales  que   participen  en   los  servicios  derivados  de   esteContrato.16.10   Como   parte   de   los   servicios   ofrecidos,   y   a   menos   que   el   Cliente   hayadenegado expresamente su consentimiento, ZAABRA PROFESIONAL tratarĆ” losdatos personales del Cliente y de los Profesionales para incluirlos en la plataformade posicionamiento empresarial Google My Business, con la finalidad de impulsarla presencia y el perfil o landing page en Google. 
17. ResoluciĆ³n de solicitudes y reclamaciones17.1 Para cualquier solicitud o reclamaciĆ³n que pueda surgir en el marco de laprestaciĆ³n   de   los   servicios,   el   profesional,   tecnĆ³logo,   docente,   estudiante   o   elmismo usuario se deberĆ” dirigir a la cuenta de correo electrĆ³nico del asesor queZAABRA   PROFESIONAL   asigne   a   su   cuenta,   o   en   su   defecto,   aserviciosprofesionales@zaabra.com.co o al telĆ©fono 321244986917.2 Las reclamaciones se deberĆ”n remitir dentro del plazo mĆ”ximo de catorce(14) dĆ­as a contar desde la fecha del evento que dio lugar a la reclamaciĆ³n. LacomunicaciĆ³n de la reclamaciĆ³n deberĆ” contener el motivo de la reclamaciĆ³n y losmotivos que la fundamentan. En el supuesto en el que la reclamaciĆ³n o la quejatenga contenido ofensivo o inapropiado a criterio de ZAABRA APROFESIONAL ono   se   realice   con   la   diligencia   debida,   esta   no   serĆ”   atendida   por   ZAABRAPROFESIONAL.18. GestiĆ³n diaria del contrato18.1 El profesional, tecnĆ³logo, docente o estudiante deberĆ” notificar a ZAABRAPROFESIONAL a la mayor brevedad posible de cualquier cambio de los datos decontacto del responsable, mediante comunicaciĆ³n por escrito dirigida a la direcciĆ³nde correo electrĆ³nico prevista en el encabezamiento del presente Contrato.19. MiscelĆ”nea1. CesiĆ³n:  El   Cliente   no  podrĆ”   ceder  los  derechos  y  obligaciones  en   elmarco de la relaciĆ³n contractual con ZAABRA PROFESIONAL o subrogarsu   posiciĆ³n   contractual,   sin   el   consentimiento   previo   y   por   escrito   deZAABRA PROFESIONAL. Sin perjuicio de lo anterior, el Cliente acuerda yautoriza de forma expresa que ZAABRA PROFESIONAL podrĆ” ceder todoslos derechos y obligaciones que se deriven de la relaciĆ³n profesional conZAABRA   PROFESIONAL,   incluyendo,   el   Contrato   y   las   CondicionesParticulares y Condiciones Generales, entre otros, sin necesidad de obtenerel   consentimiento   del   Cliente.   Dicha   cesiĆ³n,   exigirĆ”   por   parte   de   laadquirente   la   aceptaciĆ³n   previa   de   los   pactos   aquĆ­   contenidos   de   formaexpresa.2. ModificaciĆ³n: No podrĆ” ser modificado ninguno de los extremos de lasCondiciones   Particulares   o   las   Condiciones   Generales,   o   el   resto   detĆ©rminos del Contrato, salvo que dicha modificaciĆ³n se realice por escrito ysea firmada por ambas Partes. A pesar de lo anterior, en el caso de queuna  modificaciĆ³n   sea   necesaria  para   adecuarse   a   cualquiera   legislaciĆ³n,regulaciĆ³n o prĆ”ctica comĆŗnmente aceptada de la jurisdicciĆ³n aplicable, o
para alinear este Contrato con el tipo de servicios proporcionados al Clientedurante la vigencia de este Contrato y / o con las modalidades en que sebrindan estos servicios, ZAABRA PROFESIONAL se reserva el derecho demodificar los tĆ©rminos contractuales, unilateralmente, mediante notificaciĆ³nescrita (por cualquier medio, incluido, entre otros, por correo electrĆ³nico a lacuenta de correo electrĆ³nico que se detalla las Condiciones Particulares ocualquier otra facilitada a la CompaĆ±Ć­a a tal efecto), con una antelaciĆ³n deal menos treinta (30) dĆ­as. Queda entendido que: (a) si el Cliente decidedejar   de   recibir   los   servicios   despuĆ©s   de   dicha   modificaciĆ³n,   tendrĆ”   queresolver   este   Contrato   mediante   notificaciĆ³n   por   escrito   a   ZAABRAPROFESIONAL,   que   tendrĆ”   que   ser   recibida   por   parte   de   ZAABRAPROFESIONAL antes del vencimiento del perĆ­odo de treinta (30) dĆ­as, y (b)ZAABRA PROFESIONAL no podrĆ” modificar de forma unilateral ninguno delos tĆ©rminos relativos a la contraprestaciĆ³n o a las tarifas o al Periodo dePermanencia,   o   que   perjudiquen   el   derecho   del   Cliente   de   acceder   alServicio   de   membresĆ­a.   Renuncia:   Si   alguna   de   las   Partes   no   ejecutaracualquiera de las disposiciones del presente Contrato, dicho incumplimientono   serĆ”   considerado   como   una   renuncia   a   dichas   disposiciones,   ni   aninguna otra prevista en el Contrato, ni una renuncia al derecho de dichaParte a ejecutar tales disposiciones posteriormente.3. Separabilidad:  En   el   caso   de   que   cualquier   parte,   artĆ­culo,   pĆ”rrafo,oraciĆ³n   o   clĆ”usula   de   este   Contrato   se   considerase   vaga,   invĆ”lida   oinaplicable, dicha parte serĆ” eliminada y el resto del Contrato continuarĆ”siendo vĆ”lido y estando en vigor.4. Independencia de las Partes:  Las Partes reconocen que el presenteContrato no crea ningĆŗn tipo de relaciĆ³n laboral, societaria, de agencia ofranquicia, de hecho o de derecho, entre las Partes, no pudiendo ningunade ellas actuar o presentarse ante terceros como si tal fuera el caso.5.   Acuerdo   Ć­ntegro:  El   Contrato,   con   las   Condiciones   Generales,   lasCondiciones Particulares del servicio y todas sus partes y Anexos, formanun Ćŗnico objeto, sin que quepa su cumplimiento parcial.6. Discrepancia entre textos legales: En el supuesto en el que hubiesesdiscrepancias entre el Contrato (incluyendo sus Anexos) y las condicioneslegales o cualquier otro texto legal suscrito entre ZAABRA PROFESIONALy   el   Cliente   en   el   marco   de   la   utilizaciĆ³n   del   Sitio   Web,   prevalecerĆ”   elpresente Contrato en relaciĆ³n todos los aspectos que conciernen al Serviciode membresĆ­a.
Asimismo,   en   el   supuesto   en   el   que   hubiese   discrepancias   entre   lasCondiciones Generales y las Condiciones Particulares, prevalecerĆ”n estasĆŗltimas.20. RĆ©gimen jurĆ­dico y ley aplicable20.1 Este Contrato tiene carĆ”cter mercantil y se regirĆ” por sus propias clĆ”usulas, yen lo no previsto en ellas, las Partes se atendrĆ”n a las previsiones dispuestas enla legislaciĆ³n Colombiana.20.2   Renunciando   las   Partes   a   cualquier   privilegio   que   pudiera   corresponder,cualquier disputa o controversia en relaciĆ³n con, en conexiĆ³n con, o resultante delContrato serĆ” resuelto exclusivamente por los Jueces y Tribunales de Colombia.


        </P>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

@endsection


