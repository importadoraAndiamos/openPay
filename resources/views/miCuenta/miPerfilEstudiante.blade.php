@extends('layouts.index')

@section('contenido')
<script>
    var listaUniversidades = "{{$objUniversidades}}";
    //esta linea transforma los datos del objeto php en un objeto de tipo JSON entendible por el navegador y javaScript
        listaUniversidades = listaUniversidades.replace(/&/ig, '').replace(/quot/ig, "\"").replace(/;/ig, "");
        if(localStorage.getItem("listaUniversidades") != null){
            localStorage.removeItem('listaUniversidades');
            localStorage.setItem('listaUniversidades', listaUniversidades);
        }else{
            localStorage.setItem('listaUniversidades', listaUniversidades);
        }

        var listaCarreras = "{{$objCarreras}}";
        //esta linea transforma los datos del objeto php en un objeto de tipo JSON entendible por el navegador y javaScript
        listaCarreras = listaCarreras.replace(/&/ig, '').replace(/quot/ig, "\"").replace(/;/ig, "");

        if(localStorage.getItem("listaCarreras") != null){
            localStorage.removeItem('listaCarreras');
            localStorage.setItem('listaCarreras', listaCarreras);
        }else{
            localStorage.setItem('listaCarreras', listaCarreras);
        }

        var listaSemestre = "{{$objSemestre}}";
        //esta linea transforma los datos del objeto php en un objeto de tipo JSON entendible por el navegador y javaScript
        listaSemestre = listaSemestre.replace(/&/ig, '').replace(/quot/ig, "\"").replace(/;/ig, "");
        if(localStorage.getItem("listaSemestre") != null){
            localStorage.removeItem('listaSemestre');
            localStorage.setItem('listaSemestre', listaSemestre);
        }else{
            localStorage.setItem('listaSemestre', listaSemestre);
        }

        var listaEstudios = "{{$objEstudios}}";
        //esta linea transforma los datos del objeto php en un objeto de tipo JSON entendible por el navegador y javaScript
        listaEstudios = listaEstudios.replace(/&/ig, '').replace(/quot/ig, "\"").replace(/;/ig, "");
        if(localStorage.getItem("listaEstudios") != null){
            localStorage.removeItem('listaEstudios');
            localStorage.setItem('listaEstudios', listaEstudios);
        }else{
            localStorage.setItem('listaEstudios', listaEstudios);
        }




</script>


<form class="container-fluid margenRespectoAlFooter" method="POST" action="{{url('/guardarPerfilEstudiante')}}" enctype="multipart/form-data" id="guardarEstudiante" >
    @csrf
    <div class="container noPad">
        <div class="row margTopImgDatoFormEstudiantes">
            <div class="col-12 col-md-12 col-lg-6 divFileFotoPerfilFormEstudiantes">
                
                <!-- Container imagen -->
                <div class="col-10 col-md-8 noPad contenedor-fotografia diseñoContenedorFotoPerfil alturaImgPrincProfFormEstudiantes">
                    
                    <div id="preview" class="alturaImgPrincProfFormEstudiantes">
                        @if(!empty ($perfil->fotoperfil))
                            <img class="card-img-top alturaImgPrincProfFormEstudiantes" src="{{!empty ($perfil->fotoperfil) ? $perfil->fotoperfil: ''  }}" alt="" id="FotoloadPreview">
                        @endif
                    </div>
                
                    <img class="card-img-top" src="" alt="" >

                </div>
                
                <input class="inputFileFotoPerfil"  type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">

            </div>
            
            

            <!-- Container del formulario fotografia -->
            <div class="col-12 col-md-12 col-lg-6 contImgDatosIncialFormEstudiantes">

                <div class="col-md-12 noPad">
                    <div class="form-group noPadMar">
                        <h6 class="fontNameFormEstudiantes">{{(!empty ($objUsuario[0]->nombre) ? $objUsuario[0]->nombre : "") ." ". (!empty ($objUsuario[0]->apellido) ? $objUsuario[0]->apellido :"") }}</h6>
                    </div>
                
                    <div class="col-md-12 noPad">
                
                        <div class="form-group col-md-12 noPadMar">
                            <h6 class="fontCityFormEstudiantes">{{(!empty ($objUsuario[0]->ciudad) ? $objUsuario[0]->ciudad : "")}}</h6>
                            <input id="codigoCiudad" name="codigoCiudad" type="hidden" value="{{!empty ($objUsuario[0]->codigoCiudad) ? $objUsuario[0]->codigoCiudad : 0  }}">
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>


    <div class="container margin-bottom-1024-formEstudiantes">
        
        <div class="row shadow-lg contenedor-principal-secciones-miPerfilEstudiantes">
            <div class="col-md-12 row OptionUserFormEstudiantes">
                <div class=" noPad seleccion-formEstudiantes">
                    <a id="btnDatosPersonales" class="">
                        <div>Datos Personales</div> 
                    </a>
                </div>     
                <div class=" noPad seleccion-formEstudiantes">     
                    <a id="btnRedes" class="">
                        <div>Redes Sociales</div> 
                    </a> 
                </div>     
                <div class=" noPad seleccion-formEstudiantes">
                    <a id="btnEstudios" class="">
                        <div>Estudios</div> 
                    </a>
                </div>          
                <div class=" noPad seleccion-formEstudiantes">
                    <a id="btnCertificados" class="">
                        <div>Certificaciones</div> 
                    </a>
                </div>             
                <div class=" noPad seleccion-formEstudiantes">
                    <a id="btnExperiencia" class="" >
                        <div>Experiencia Laboral</div>  
                    </a>    
                </div>
                <div class=" noPad seleccion-formEstudiantes">
                    <a id="btnGaleria" class="">
                        <div>Galería</div> 
                    </a>    
                </div>
            </div>


            <div class="col-12 col-md-12 noPad" id="datosPersonales">

                <div class="col-md-12 tituloSeccDatosPerFormEstudiantes">
                    <h3 class="fontTituloSeccFormEstudiantes">DATOS PERSONALES</h3>
                </div>
                <!-- Container del formulario datos personales -->
                <div class="col-md-12 noPad boderTopContAdicionalFormEstudiantes">
                    <div class="col-md-12 col-lg-6 noPad">
                
                        <h6 class="mt-2 fontLabelDatPersFormEstudiantes fontLabel1024formEstudiantes">Fecha de nacimiento *</h6>
                        <input class="form-control PropiedadIputDatPersFormEstudiantes PropiedadIputDatPers1024FormEstudiantes" type="date" value="{{!empty ($perfil->fechanacimiento) ? $perfil->fechanacimiento: ''  }}" id="fechaNacimiento"  name="fechaNacimiento" required>
                    </div>
                
                   
                    <div class="col-12 col-md-12 noPad">
                        <h6 class="margin-top-1em fontLabelDatPersFormEstudiantes">Descripción Profesional *</h6>
                    </div>    
                    <div class="col-md-12 form-group noPadMar">     
                            <textarea class="textAreaDescripcionFormEstudiantes" id="descripcion" required rows="6" cols="77" name="descripcion"  >{{!empty ($perfil->descripcion) ? $perfil->descripcion : ''  }}</textarea>
                    </div>

                </div>

            </div>
            <br>
            <div class="col-md-12 noPad" id="estudios">
                <div class="col-md-12 tituloSeccDatosPerFormEstudiantes">
                    <h6 class="fontTituloSeccFormEstudiantes">ESTUDIOS</h6>
                </div>

               
                @if(!empty ($objEstudios[0]))
                    
                     @foreach ($objEstudios as $item)
                        @php $tamañoEstudios = $loop->iteration @endphp 
                    @endforeach
                @else 
                
                    @php $tamañoEstudios = 0 @endphp                                    
                @endif
                
                <div class="col-md-12 row noPadMar input-multiple-imagenesGroup-estudios-estudiantes">
                    @if(!empty ($objEstudios[0]))
                        @for($i = 1; $i <= $tamañoEstudios; $i++)
                            @php $padreEstudios = $i;
                            @endphp
                            <div class="col-12 noPad boderTopContAdicionalFormEstudiantes">

                                @if($i > 1)
                                    <div class="col-1 contXDeCierreFormEstudiantes">
                                        <a href="#" class="remove_fieldEstudio estilos-X-eliminacion-archivos-formEstudiantes"><i class="fas fa-times"></i></a>
                                    </div>
                                @endif
                                <div class="col-md-12 form-group noPadMar">
                                    <h6 class="fontLabelDatPersFormEstudiantes mt-2">Universidad *</h6>
                                    <select id="slcUniversidad{{$i}}" class="seccionEstudiosFormEstudiantes" name="slcUniversidad{{$i}}" required>
                                        <option value=' '>UNIVERSIDAD </option>  
                                    </select>
                                </div>
                            
                                <div class="col-md-12 form-group noPadMar">
                                    <h6 class="mt-2 fontLabelDatPersFormEstudiantes">Carrera *</h6>
                                    <select id="slcCarrera{{$i}}" class="seccionEstudiosFormEstudiantes" name="slcCarrera{{$i}}" required>
                                        <option value=' '>CARRERA </option>
                                       
                                    </select>
                                </div>
                                
                                <div class="col-md-12 form-group noPadMar">
                                    <h6 class="mt-2 fontLabelDatPersFormEstudiantes">Semestre *</h6>
                                    <select id="slcSemestre{{$i}}" class="seccionEstudiosFormEstudiantes" name="slcSemestre{{$i}}" required>
                                        <option value=' '>SEMESTRE </option>  
                                    </select>
                                </div>

                            </div>
                            <script>
                            if(localStorage.getItem("varEstu") != null){
                                localStorage.removeItem('varEstu');
                                localStorage.setItem('varEstu', {{$i}});
                            }else{
                                localStorage.setItem('varEstu', {{$i}});
                            }
                            </script>
                            

                        @endfor 
                        
                    @else
                        <div class="col-12 noPad boderTopContAdicionalFormEstudiantes">
                            <div class="col-md-12 form-group noPadMar">
                                <h6 class="fontLabelDatPersFormEstudiantes mt-2">Universidad *</h6>
                                <select id="slcUniversidad1" class="seccionEstudiosFormEstudiantes" name="slcUniversidad1" required>
                                    <option value=' '>UNIVERSIDAD </option>
                                    
                                </select>
                            </div>
                            
                            <div class="col-md-12 form-group noPadMar">
                                <h6 class="mt-2 fontLabelDatPersFormEstudiantes">Carrera *</h6>
                                <select id="slcCarrera1" class="seccionEstudiosFormEstudiantes" name="slcCarrera1" required>
                                    <option value=' '>CARRERA </option>
                                   
                                </select>
                            </div>
                            
                            <div class="col-md-12 form-group noPadMar">
                                <h6 class="mt-2 fontLabelDatPersFormEstudiantes">Semestre *</h6>
                                <select id="slcSemestre1" class="seccionEstudiosFormEstudiantes" name="slcSemestre1" required>
                                    <option value=' '>SEMESTRE </option>
                                   
                                </select>
                            </div>
                        </div>     
                        <script>
                            if(localStorage.getItem("varEstu") != null){
                                localStorage.removeItem('varEstu');
                                localStorage.setItem('varEstu', 1);
                            }else{
                                localStorage.setItem('varEstu', 1);
                            }
                           
                            
                        </script>                
                    @endif

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
                <div class="col-md-12 row noPadMar input-multiple-imagenesGroup-Experiencia" style=" padding-bottom: 2%; margin-bottom: 1%;">
                    @if(!empty ($perfil->nombreEmpresaExperiencia[0]) AND !empty ($perfil->descripcionExperiencia) AND !empty ($perfil->fechaInicioExperiencia))
                            @for($i = 1; $i <= $tamañoExperiencia; $i++)
                            @php $padreExperiencia = $i;
                            @endphp

                            <div class="col-12 col-lg-6 padSectInfoExperFormEstudiantes boderTopContAdicionalFormEstudiantes">

                                @if($i > 1)
                                    <div class="col-1 contXDeCierreFormEstudiantes contXDeCierre1024FormEstudiantes">
                                        <a href="#" class="remove_Experiencia estilos-X-eliminacion-archivos-formEstudiantes"><i class="fas fa-times"></i></a>
                                    </div>
                                @endif
                                @foreach(json_decode($perfil->nombreEmpresaExperiencia) as $valueJson)
                                    @if($padreExperiencia == $loop->iteration)
                                    <h6 class="fontLabelDatPersFormEstudiantes mt-2">Nombre de la empresa *</h6>
                                    <input type="text" class="form-control PropiedadIputDatPersFormEstudiantes" required placeholder="Nombre Empresa" id="txtNombreExperiencia{{$i}}"
                                    <?php if($padreExperiencia == $loop->iteration) {
                                                        echo('value = "'.$valueJson.' "');
                                                    } ?> 
                                                     name="txtNombreExperiencia{{$i}}">
                                    @endif          
                                @endforeach
                                    
                                @foreach(json_decode($perfil->descripcionExperiencia) as $valueJson)
                                    @if($padreExperiencia == $loop->iteration)
                                    <h6 class="fontLabelDatPersFormEstudiantes" style=" margin-top: 18px;">Descripción del puesto *</h6>
                                    <input type="text" class="form-control PropiedadIputDatPersFormEstudiantes" required placeholder="Descripcion del puesto   " id="txtLinkExperiencia{{$i}}" 
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
                                        <input class="form-control PropiedadIputDatPersFormEstudiantes" type="date"  id="fechaExperienciaIncio{{$i}}" required 
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
                                            <input class="form-control PropiedadIputDatPersFormEstudiantes" type="date" id="fechaExperienciaFin{{$i}}" required
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
                            <input type="text" class="form-control PropiedadIputDatPersFormEstudiantes" placeholder="Nombre Empresa" id="txtNombreExperiencia1" name="txtNombreExperiencia1" required>
                            
                            <h6 class="fontLabelDatPersFormEstudiantes" style=" margin-top: 18px;">Descripción del puesto *</h6>
                            <input type="text" class="form-control PropiedadIputDatPersFormEstudiantes" placeholder="Descripcion del puesto" id="txtLinkExperiencia1" name="txtLinkExperiencia1" required>
                                                         
                            <div class="col-md-12 noPad" style=" margin-top: 18px;">
                                <div class="col-md-12 noPad"><h6 class="fontLabelDatPersFormEstudiantes">Fecha de inicio *</h6></div>
                                <div class="col-md-12 noPad"> <input class="form-control PropiedadIputDatPersFormEstudiantes" type="date" value="" id="fechaExperienciaIncio1" name="fechaExperienciaIncio1" required></div>
                            </div>
                            
                            <div class="col-md-12 noPad" style=" margin-top: 18px;">
                                <div class="col-md-12 noPad"><h6 class="fontLabelDatPersFormEstudiantes">Fecha de culminación *</h6></div>
                                <div class="col-md-12 noPad"> <input class="form-control PropiedadIputDatPersFormEstudiantes" type="date" value="" id="fechaExperienciaFin1" required name="fechaExperienciaFin1"></div>
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
            <br>
            <div class="col-md-12 noPad" id="certificados">
                <div class="col-md-12 tituloSeccDatosPerFormEstudiantes">
                    <h6 class="mb-0 fontTituloSeccFormEstudiantes">CERTIFICADOS <span class="agregarDivImagenCertificados-Estudiantes diseñoAgregarBotonCertificadosFormEstudiantes col-md-1"></h6>
                </div>
                
                @if(!empty ($perfil->titulos[0]))
                    @foreach (json_decode($perfil->titulos) as $valueJson)
                        @php $tamañoCertificaciones = $loop->iteration @endphp 
                    @endforeach
                @endif
                
                <div class="col-md-12 row noPadMar input-multiple-imagenesGroup-Certificados-Estudiantes">              
                    @if(!empty ($perfil->titulos[0]) AND !empty ($perfil->entidadCertificado) AND !empty ($perfil->nombreCertificado)  AND !empty ($perfil->fechaCertificado))
                        @for($i = 1; $i <= $tamañoCertificaciones; $i++)
                            @php $padreCertificado = $i;
                            @endphp
                            
                           
                            <div class="col-12 col-lg-6 boderTopContAdicionalFormEstudiantes contImgCertifFormEstudiantes">
                                @if($i > 1)
                                <div class="col-1 contXDeCierreFormEstudiantes"> 
                                    <a href="#" class="remove_fieldCertificados estilos-X-eliminacion-archivos-formEstudiantes"><i class="fas fa-times"></i></a>  
                                </div>  
                                @endif  


                                @foreach(json_decode($perfil->entidadCertificado) as $valueJson)
                                    @if($padreCertificado == $loop->iteration)
                                    <h6 class="fontLabelDatPersFormEstudiantes mt-2">Entidad *</h6>
                                    <input type="text" class="form-control PropiedadIputDatPersFormEstudiantes" required placeholder="Entidad" id="txtNivelCertificados{{$i}}"
                                    <?php if($padreCertificado == $loop->iteration) {
                                                        echo('value = "'.$valueJson.' "');
                                                    } ?>  
                                     name="txtNivelCertificados{{$i}}">
                                    @endif          
                                @endforeach
                                
                                @foreach(json_decode($perfil->nombreCertificado) as $valueJson)
                                    @if($padreCertificado == $loop->iteration)
                                    <h6 class="margin-top-1em fontLabelDatPersFormEstudiantes">Nombre del certificado *</h6>
                                    <input type="text" class="form-control PropiedadIputDatPersFormEstudiantes" required placeholder="Nombre" id="txtNombreCertificados{{$i}}"
                                    <?php if($padreCertificado == $loop->iteration) {
                                                        echo('value = "'.$valueJson.' "');
                                                    } ?>  
                                 name="txtNombreCertificados{{$i}}">
                                    @endif          
                                @endforeach
                                
                                <div class="row">
                                    <div class="col-12"><h6 class="margin-top-1em fontLabelDatPersFormEstudiantes">Fecha culminación *</h6></div>
                                    <div class="col-12">
                                    @foreach(json_decode($perfil->fechaCertificado) as $valueJson)
                                        @if($padreCertificado == $loop->iteration)
                                     <input class="form-control PropiedadIputDatPersFormEstudiantes" type="date"  id="fechaCertificados{{$i}}" required 
                                     <?php if($padreCertificado == $loop->iteration) {
                                                        echo('value = "'.$valueJson.'"');
                                                    } ?>  
                                     name="fechaCertificados{{$i}}">
                                            @endif          
                                    @endforeach
                                     
                                     </div>
                                </div>
                                
                                <div class="col-md-12 mt-3 diseñoContenedorFotoDocumentos FotoloadPreview{{$i}}" id="FotoloadPreview{{$i}}" >
                                @foreach (json_decode($perfil->titulos) as $valueJson)
                                    @if($padreCertificado == $loop->iteration)
                                    <img class="card-img-top imagenAjustadaContenedor imagen-estilos-predeterminados-FormEstudiantes" src="{{!empty ($urlZaabra.$valueJson) ? $urlZaabra.$valueJson : ''  }}" id="Certificados{{$i}}" alt="Card image cap">
                                    <input id="imgCertificado{{$i}}" name="imgCertificado{{$i}}" type="hidden" value="{{!empty ($valueJson) ? $valueJson : ''  }}">
                                    @endif          
                                @endforeach
                                </div>   
                                <div class="col-12 col-md-12 noPad BtnAgregarFormEstudiantes">
                                    <div class="col-12 divFile btnEstilosFormEstudiantes">
                                        <p class="textoImputFileFormEstudiantes noPadMar">Agregar Archivo</p>
                                        <input class="inputFile" onchange="loadFileCertificados{{$i}}(event)" type="file" id="inputMultiCertificados{{$i}}" name="inputMultiCertificados{{$i}}" accept="image/png, image/jpeg">    
                                    </div>      
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
                        <div class="col-12 col-lg-6 boderTopContAdicionalFormEstudiantes contImgCertifFormEstudiantes">
                            
                            <h6 class="fontLabelDatPersFormEstudiantes mt-2">Entidad *</h6>
                            <input type="text" class="form-control PropiedadIputDatPersFormEstudiantes" placeholder="Entidad" id="txtNivelCertificados1" name="txtNivelCertificados1" required>
                            
                            <h6 class="margin-top-1em fontLabelDatPersFormEstudiantes">Nombre del certificado *</h6>
                            <input type="text" class="form-control PropiedadIputDatPersFormEstudiantes" placeholder="Nombre" id="txtNombreCertificados1" name="txtNombreCertificados1" required>
                            
                            <div class="row">
                                <div class="col-12"><h6 class="margin-top-1em fontLabelDatPersFormEstudiantes">Fecha culminación *</h6></div>
                                <div class="col-12"> <input class="form-control PropiedadIputDatPersFormEstudiantes" type="date" value="" id="fechaCertificados1" required name="fechaCertificados1"></div>
                            </div>
                            
                            <div class="col-12 mt-3 diseñoContenedorFotoDocumentos"  >
                                <img class="card-img-top imagenAjustadaContenedor" id="Certificados1"/>
                            </div>

                            <div class="col-12 col-md-12 noPad BtnAgregarFormEstudiantes">
                                <div class="col-12 divFile btnEstilosFormEstudiantes">
                                    <p class="textoImputFileFormEstudiantes noPadMar">Agregar Archivo</p>
                                    <input class="inputFile"  type="file" id="inputMultiCertificados1" name="inputMultiCertificados1" accept="image/png, image/jpeg" onchange="loadFileCertificados1(event)">
                                </div>
                            </div>
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
                <div class="col-md-12 row section-titulos-cabedera-galeria-formEstudiantes">
                    <div class="col-md-12 tituloSeccDatosPerFormEstudiantes bordeInfGaleriasFormEstudiantes"><h3 class="noPadMar fontTituloSeccFormEstudiantes">GALERÍA</h3></div>
                    <div class="col-md-12 noPad"><h5 class=" margin-top-1em fontFraseGaleriaFormEstudiantes fontFraseGaleria1024FormEstudiantes">Sube tus imágenes y videos que desees compartir</h5></div>
                    <div class="col-md-12 noPadMar contCrearAlbunFormEstudiantes tituloSeccDatosPerFormEstudiantes"><h3 class="fontTituloSeccGaleriaFormEstudiantes">Crear álbum</h3>  <span class="agregarDivImagenGaleriaEstudiantes diseñoAgregarBotonFormEstudiantes"></span></div>
                </div>

                <div class="row col-md-12 input-multiple-imagenesGroupGaleriaEstudiantes noPadMar">
                   
                    
                    @if(!empty ($perfil->imagen[0]) and !empty ($perfil->nombreProyecto) and !empty ($perfil->descripcionProyecto))
                        @for($i = 1; $i <= $tamañoGaleria; $i++)
                        @php $padreGaleria = $i;
                        @endphp
                        <div class="col-12 col-lg-6 contImgCertifFormEstudiantes divFileFotosGaleriaFormEstudiantes boderTopContAdicionalFormEstudiantes">

                            @if($i > 1)
                                <div class="col-1 contXDeCierreFormEstudiantes">
                                    <a href="#" class="remove_Galeria estilos-X-eliminacion-archivos-formEstudiantes"><i class="fas fa-times"></i></a>  
                                </div>  
                                @endif 
                            @foreach(json_decode($perfil->nombreProyecto) as $valueJson)
                                    @if($padreGaleria == $loop->iteration)
                            <h6 class="mt-2 fontLabelDatPersFormEstudiantes">Nombre del proyecto</h6>        
                            <input type="text" class="form-control PropiedadIputDatPersFormEstudiantes" placeholder="Nombre del Proyecto" id="txtNombreGaleria{{$i}}" 
                                <?php if($padreGaleria == $loop->iteration) {
                                    echo('value = "'.$valueJson.' "');
                                } ?>  
                            name="txtNombreGaleria{{$i}}">
                                @endif          
                            @endforeach
                        
                            @foreach(json_decode($perfil->descripcionProyecto) as $valueJson)
                                @if($padreGaleria == $loop->iteration)
                            <h6 class="margin-top-1em fontLabelDatPersFormEstudiantes">Descripción</h6> 
                            <input type="text" class="form-control PropiedadIputDatPersFormEstudiantes" placeholder="Descripcion" id="txtDescripcionGaleria{{$i}}" 
                            <?php if($padreGaleria == $loop->iteration) {
                                    echo('value = "'.$valueJson.' "');
                                } ?>  
                            name="txtDescripcionGaleria{{$i}}">
                                @endif          
                            @endforeach
                            
                            <div class="col-md-12 mt-3 diseñoContenedorFoto FotoloadPreview{{$i}}" id="FotoloadPreview1">
                            @foreach (json_decode($perfil->imagen) as $valueJson)
                                @if($padreGaleria == $loop->iteration)
                                <img class="card-img-top imagenAjustadaContenedor" src="{{!empty ($urlZaabra.$valueJson) ? $urlZaabra.$valueJson : ''  }}" id="output{{$i}}" alt="Card image cap">
                                <input id="imgGaleria{{$i}}" name="imgGaleria{{$i}}" type="hidden" value="{{!empty ($valueJson) ? $valueJson : ''  }}">
                                @endif          
                            @endforeach
                            </div> 

                            <div class="col-12 col-md-12 noPad BtnAgregarFormEstudiantes">  
                                <div class="col-12 divFile btnEstilosFormEstudiantes">
                                    <p class="textoImputFileFormEstudiantes noPadMar">Agregar Archivo</p>
                                    <input class="inputFile"  onchange="loadFile{{$i}}(event)" type="file" id="inputMulti{{$i}}" name="inputMulti{{$i}}" accept="image/png, image/jpeg">
                                </div>     
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
                        <div class="col-12 col-lg-6 contImgCertifFormEstudiantes divFileFotosGaleriaFormEstudiantes boderTopContAdicionalFormEstudiantes">
                            <h6 class="mt-2 fontLabelDatPersFormEstudiantes">Nombre del proyecto</h6> 
                            <input type="text" class="form-control PropiedadIputDatPersFormEstudiantes" placeholder="Nombre del Proyecto" id="txtNombreGaleria1" name="txtNombreGaleria1">
                            
                            <h6 class="margin-top-1em fontLabelDatPersFormEstudiantes">Descripción</h6> 
                            <input type="text" class="form-control PropiedadIputDatPersFormEstudiantes" placeholder="Descripcion" id="txtDescripcionGaleria1" name="txtDescripcionGaleria1">
                            
                            <div class="col-md-12 mt-3 mb-3 diseñoContenedorFoto" id="FotoloadPreview1">
                                <img class="card-img-top imagenAjustadaContenedor" id="output1"/>
                            </div>
                            <div class="col-12 col-md-12 noPad BtnAgregarFormEstudiantes">
                                <div class="col-12 divFile btnEstilosFormEstudiantes">
                                    <p class="textoImputFileFormEstudiantes noPadMar">Agregar Archivo</p>
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

            <div class="col-md-12 noPad" id="Redes">
                <div class="col-md-12 tituloSeccDatosPerFormEstudiantes">
                    <h3 class="fontTituloSeccFormEstudiantes">REDES SOCIALES</h3>
                </div>
                <div class="boderTopContAdicionalFormEstudiantes">
                    <div class="form-group col-md-12 noPad marginSeccInputFormEstudiantes">
                        <h6 class="mt-2 fontLabelDatPersFormEstudiantes">WhatsApp</h6>
                        <input type="text" class="form-control PropiedadIputDatPersFormEstudiantes" value="{{!empty ($perfil->whatsapp) ? $perfil->whatsapp: ''  }}" placeholder="Escribe aqui" id="whatsapp" name="whatsapp">
                    </div>
                    <div class="form-group col-md-12 noPad marginSeccInputFormEstudiantes">
                        <h6 class="margin-top-1em fontLabelDatPersFormEstudiantes">Facebook</h6>
                        <input type="text" class="form-control PropiedadIputDatPersFormEstudiantes" value="{{!empty ($perfil->facebook) ? $perfil->facebook: ''  }}" placeholder="Escribe aqui" id="facebook" name="facebook">
                    </div>
                    <div class="form-group col-md-12 noPad marginSeccInputFormEstudiantes">
                        <h6 class="margin-top-1em fontLabelDatPersFormEstudiantes">Instagram</h6>
                        <input type="text" class="form-control PropiedadIputDatPersFormEstudiantes" value="{{!empty ($perfil->instagram) ? $perfil->instagram: ''  }}" placeholder="Escribe aqui" id="instagram" name="instagram">
                    </div>
                    <div class="form-group col-md-12 noPad marginSeccInputFormEstudiantes">
                        <h6 class="margin-top-1em fontLabelDatPersFormEstudiantes">Correo Electrónico</h6>
                        <input type="email" class="form-control PropiedadIputDatPersFormEstudiantes" value="{{!empty ($perfil->CorreoPersonal) ? $perfil->CorreoPersonal: ''  }}" placeholder="Escribe aqui Correo Personal" id="CorreoPersonal" name="CorreoPersonal">
                    </div>
                </div>
            </div>

            <div class="col-md-12 contBtnInferiorFormEstudiantes">
                <div class="col-md-12 col-lg-6 text-center noPadMar">
                    <button class="BtnGuardarFormEstudiantes" type="submit">Guardar</button>
                </div>
            </div>   

        </div>

    </div>

    <input type="hidden" name="cantEstudios" id="cantEstudios">
    <input type="hidden" name="cantCertificados" id="cantCertificados">
    <input type="hidden" name="cantExperiencia" id="cantExperiencia">
    <input type="hidden" name="cantGaleria" id="cantGaleria">
    
</form>

@endsection