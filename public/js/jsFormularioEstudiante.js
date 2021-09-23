
// EP
$(document).ready(function() {
    
    getListaUniversidades = JSON.parse(localStorage.getItem("listaUniversidades"));
    getListaCarrera = JSON.parse(localStorage.getItem("listaCarreras"));
    getListaSemestre = JSON.parse(localStorage.getItem("listaSemestre"));
    getListaEstudios = JSON.parse(localStorage.getItem("listaEstudios"));

    $("#datosPersonales").show();
    $("#estudios").hide();
    $("#experiencia").hide();
    $("#certificados").hide();
    $("#galeria").hide();
    $("#Redes").hide();

    $( "#btnDatosPersonales" ).click(function() {
            $("#datosPersonales").show();
            $("#estudios").hide();
            $("#experiencia").hide();
            $("#certificados").hide();
            $("#galeria").hide();         
            $("#Redes").hide();  
    });
    $( "#btnEstudios" ).click(function() {
        $("#datosPersonales").hide();
        $("#estudios").show();
        $("#experiencia").hide();
        $("#certificados").hide();
        $("#galeria").hide();   
        $("#Redes").hide();        
    });
   
    $( "#btnExperiencia" ).click(function() {
        $("#datosPersonales").hide();
        $("#estudios").hide();
        $("#experiencia").show();
        $("#certificados").hide();
        $("#galeria").hide();  
        $("#Redes").hide();    
    });
    $( "#btnCertificados" ).click(function() {
        $("#datosPersonales").hide();
        $("#estudios").hide();
        $("#experiencia").hide();
        $("#certificados").show();
        $("#galeria").hide(); 
        $("#Redes").hide();
             
    });
    $( "#btnGaleria" ).click(function() {
        $("#datosPersonales").hide();
        $("#estudios").hide();
        $("#experiencia").hide();
        $("#certificados").hide();
        $("#galeria").show();     
        $("#Redes").hide();      
    });

    $( "#btnRedes" ).click(function() {
        $("#datosPersonales").hide();
        $("#estudios").hide();
        $("#experiencia").hide();
        $("#certificados").hide();
        $("#galeria").hide();     
        $("#Redes").show();      
    });
   
    var max_fields_estudios_estudiantes = 3; //maximo de inputs
    var max_fields = 5; //maximo de inputs
    var wrapper = $(".input-multiple"); //variable contenedor inputs
    var add_button = $(".add_field_button"); //adicona el boton de eliminar inputs

    var x = 1; //contador inicial
    

    $(add_button).click(function(e) { //cuando presiona el boton 
        e.preventDefault();
        if (x < max_fields) { //mientras sea menor que 5
            x++; //adiciona un valor a x
            $(wrapper).append('<div id="titulo ' + x + '" class="col-md-12 noPad d-flex div-input-interno">'+
                                '<input id="titulo" type="text" name="titulo' + x + '" class="col-md-10 input-multiple-titulprofesional form-control"/>'+
                                '<a href="#" class="remove_field">-</a>'+
                                '</div>'); //add input box
        }
    });

    $(wrapper).on("click", ".remove_field", function(e) { //boton de remover 
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    })



    
    var wrapperGaleriaEstudiantes = $(".input-multiple-imagenesGroupGaleriaEstudiantes"); //variable contenedor inputs
    var add_buttonGaleriaEstudiantes = $(".agregarDivImagenGaleriaEstudiantes"); //adicona el boton de eliminar inputs

  
    $(add_buttonGaleriaEstudiantes).click(function(e) { //cuando presiona el boton 

       
        var galeActual = retornarValorElementoLocal('varGale');; //contador inicial
       

        e.preventDefault();
        if (galeActual < max_fields) { //mientras sea menor que 5
            galeActual++; //adiciona un valor a x
            
            setValorElementoLocal('varGale',galeActual)
            $(wrapperGaleriaEstudiantes).append(
            '<div class="col-12 col-lg-6 contImgCertifFormEstudiantes divFileFotosGaleriaFormEstudiantes boderTopContAdicionalFormEstudiantes" >'+
                '<div class="col-1 contXDeCierreFormEstudiantes contXDeCierre1024FormEstudiantes">'+
                '   <a href="#" class="remove_Galeria estilos-X-eliminacion-archivos-formEstudiantes"><i class="fas fa-times"></i></a> '+ 
                '</div>  '+

                '<h6 class="mt-2 fontLabelDatPersFormEstudiantes">Nombre del proyecto</h6>'+
                '<input type="text" class="form-control PropiedadIputDatPersFormEstudiantes" placeholder="Nombre del Proyecto" id="txtNombreGaleria' + galeActual + '" name="txtNombreGaleria' + galeActual + '">'+
                
                '<h6 class="margin-top-1em fontLabelDatPersFormEstudiantes">Descripción</h6> '+
                '<input type="text" class="form-control PropiedadIputDatPersFormEstudiantes" placeholder="Descripcion" id="txtDescripcionGaleria' + galeActual + '" name="txtDescripcionGaleria' + galeActual + '">'+

                    
                    '<div class="col-md-12 mt-3 mb-3 diseñoContenedorFoto" id="FotoloadPreview' + galeActual + '">'+
                            '<img class="card-img-top imagenAjustadaContenedor" id="output' + galeActual + '"  />'+
                            
                    ' </div>'+
                    '<div class="col-12 col-md-12 noPad BtnAgregarFormEstudiantes">'+
                        '<div class="col-12 divFile btnEstilosFormEstudiantes">'+
                            '<p class="textoImputFileFormEstudiantes noPadMar">Agregar Archivo</p>'+
                            ' <input class="inputFile" type="file" id="inputMulti' + galeActual + '" name="inputMulti' + galeActual + '" accept="image/png, image/jpeg" onchange="loadFile' + galeActual + '(event)">'+
                        '</div>'+
                    '</div>'+
            ' </div>'+

            '<script>'+
            '        var loadFile' + galeActual + ' = function(event) {\n'+
            '            var reader' + galeActual + ' = new FileReader();\n'+
            '            reader' + galeActual + '.onload = function(){\n'+
            '            var output' + galeActual + ' = document.getElementById(\'output' + galeActual + '\');\n'+
            '            output' + galeActual + '.src = reader' + galeActual + '.result;\n'+
            '            };\n'+
            '            reader' + galeActual + '.readAsDataURL(event.target.files[0]);\n'+
            '        };\n'+

            '</script>'
            ); //add input box
        }
    });

    $(wrapperGaleriaEstudiantes).on("click", ".remove_Galeria", function(e) { //boton de remover 
        e.preventDefault();
        $(this).parent('div').parent('div').remove();
        
       
        var galeActual = retornarValorElementoLocal('varGale');; //contador inicial
        
        galeActual--;

        setValorElementoLocal('varGale',galeActual);
    })


    var wrapperEstudiosEstudiantes = $(".input-multiple-imagenesGroup-estudios-estudiantes"); //variable contenedor inputs
    var add_buttonEstudiosEstudiantes = $(".agregarDivImagenestudios-estudiantes"); //adicona el boton de eliminar inputs

  
    $(add_buttonEstudiosEstudiantes).click(function(e) { //cuando presiona el boton 
        var estuActual = retornarValorElementoLocal('varEstu');; //contador inicial

        e.preventDefault();
        if (estuActual < max_fields_estudios_estudiantes) { //mientras sea menor que 5
            estuActual++; //adiciona un valor a x
            setValorElementoLocal('varEstu',estuActual)
            $(wrapperEstudiosEstudiantes).append(
                '<div class="col-12 noPad boderTopContAdicionalFormEstudiantes" style=" margin-top: 18px;">'+
                '    <div class="col-1 contXDeCierreFormEstudiantes">'+
                '       <a href="#" class="remove_fieldEstudio estilos-X-eliminacion-archivos-formEstudiantes"><i class="fas fa-times"></i></a>'+
                '   </div>'+
                '    <div class="col-md-12 form-group noPadMar">'+
                '        <h6 class="fontLabelDatPersFormEstudiantes">Universidad *</h6>'+
                '        <select id="slcUniversidad'+estuActual+'" class="seccionEstudiosFormEstudiantes" name="slcUniversidad'+estuActual+'" >'+
                '           <option value=\' \'>UNIVERSIDAD </option>'+
                            
                '       </select>'+
                '   </div>'+
               
                '   <div class="col-md-12 form-group noPadMar">'+
                '       <h6 class="mt-2 fontLabelDatPersFormEstudiantes">Carrera *</h6>'+
                '       <select id="slcCarrera'+estuActual+'" class="seccionEstudiosFormEstudiantes" name="slcCarrera'+estuActual+'" >'+
                '           <option value=\' \'>CARRERA </option>'+
                            
                '       </select>'+
                '   </div>'+
             
                '   <div class="col-md-12 form-group noPadMar">'+
                '       <h6 class="mt-2 fontLabelDatPersFormEstudiantes">Semestre *</h6>'+
                '       <select id="slcSemestre'+estuActual+'" class="seccionEstudiosFormEstudiantes" name="slcSemestre'+estuActual+'" >'+
                '           <option value=\' \'>SEMESTRE </option>'+
                            
                '       </select>'+
                '   </div>'+
               
                                    
                '</div>'
            ); //add input box
           

                for (let j in getListaUniversidades) {
                   
                    $("#slcUniversidad"+estuActual).append(
                        '<option value=\' '+getListaUniversidades[j].id+' \'>'+getListaUniversidades[j].nombreuniversidad+ '</option>'
                    );
                }
                for(let x in getListaCarrera){
                    $("#slcCarrera"+estuActual).append(
                        '<option value=\' '+getListaCarrera[x].id+' \'>'+getListaCarrera[x].nombrecarrera+ '</option>'
                    );
                }
                for(let z in getListaSemestre){
                    $("#slcSemestre"+estuActual).append(
                        '<option value=\' '+getListaSemestre[z].id_catalogo+' \'>'+getListaSemestre[z].nombre+ '</option>'
                    );
                }
            

            
        }

    });

    $(wrapperEstudiosEstudiantes).on("click", ".remove_fieldEstudio", function(e) { //boton de remover 
        e.preventDefault();
        $(this).parent('div').parent('div').remove();
        
        var estuActual = retornarValorElementoLocal('varEstu');; //contador inicial
        estuActual--;
        setValorElementoLocal('varEstu',estuActual);

    })
  

    var wrapperCertificadosEstudiantes = $(".input-multiple-imagenesGroup-Certificados-Estudiantes"); //variable contenedor inputs
    var add_buttonCertificadosEstudiantes = $(".agregarDivImagenCertificados-Estudiantes"); //adicona el boton de eliminar inputs

    
    $(add_buttonCertificadosEstudiantes).click(function(e) { //cuando presiona el boton 
        var certActual = retornarValorElementoLocal('varCert'); //contador inicial

        e.preventDefault();
        if (certActual < max_fields) { //mientras sea menor que 5
            certActual++; //adiciona un valor a x
            setValorElementoLocal('varCert',certActual);
            $(wrapperCertificadosEstudiantes).append(
                '<div class="col-12 col-lg-6 contImgCertifFormEstudiantes boderTopContAdicionalFormEstudiantes">'+
                    '<div class="col-1 contXDeCierreFormEstudiantes contXDeCierreCertific1024FormEstudiantes">'+
                    '    <a href="#" class="remove_fieldCertificados estilos-X-eliminacion-archivos-formEstudiantes"><i class="fas fa-times"></i></a>'+
                    '</div>'+
                '   <h6 class="fontLabelDatPersFormEstudiantes">Entidad *</h6>'+
                '   <input type="text" class="form-control PropiedadIputDatPersFormEstudiantes"  placeholder="Entidad" id="txtNivelCertificados' + certActual + '" name="txtNivelCertificados' + certActual + '">'+
                
                '   <h6 class="margin-top-1em fontLabelDatPersFormEstudiantes">Nombre del certificado *</h6>'+
                '   <input type="text" class="form-control PropiedadIputDatPersFormEstudiantes"  placeholder="Nombre" id="txtNombreCertificados' + certActual + '" name="txtNombreCertificados' + certActual + '">'+
                
                '   <div class="row">'+
                '       <div class="col-12"><h6 class="margin-top-1em fontLabelDatPersFormEstudiantes">Fecha culminación *</h6></div>'+
                '       <div class="col-12"> <input class="form-control PropiedadIputDatPersFormEstudiantes" type="date" value="" id="fechaCertificados' + certActual + '"  name="fechaCertificados' + certActual + '"></div>'+
                '   </div>'+
                
                '   <div class="col-md-12 mt-3 diseñoContenedorFotoDocumentos"  >'+
                '       <img class="card-img-top imagenAjustadaContenedor" id="Certificados' + certActual + '"/>'+
                '   </div>'+
                
                '<div class="col-12 col-md-12 noPad BtnAgregarFormEstudiantes">'+
                '   <div class="col-12 divFile btnEstilosFormEstudiantes">'+
                '       <p class="textoImputFileFormEstudiantes noPadMar">Agregar Archivo</p>'+
                '       <input class="inputFile"  type="file" id="inputMultiCertificados' + certActual + '" name="inputMultiCertificados' + certActual + '" accept="image/png, image/jpeg" onchange="loadFileCertificados' + certActual + '(event)">'+
                '   </div>'+

                    
                '</div>'+
        
                '</div>'+
                
                ' <script>'+
                '   var loadFileCertificados' + certActual + ' = function(event) {\n'+
                        ' var reader' + certActual + ' = new FileReader();\n'+
                        '    reader' + certActual + '.onload = function(){\n'+
                        '    var output' + certActual + ' = document.getElementById(\'Certificados' + certActual + '\');\n'+
                        '   output' + certActual + '.src = reader' + certActual + '.result;\n'+
                        '  };\n'+
                        ' reader' + certActual + '.readAsDataURL(event.target.files[0]);\n'+
                        '};'+
                ' </script>'
            ); //add input box
        }
    });

    $(wrapperCertificadosEstudiantes).on("click", ".remove_fieldCertificados", function(e) { //boton de remover 
        e.preventDefault();
        $(this).parent('div').parent('div').remove();

        var certActual = retornarValorElementoLocal('varCert'); //contador inicial
        certActual--;
        setValorElementoLocal('varCert',certActual);
    })

    var wrapperExperiencia = $(".input-multiple-imagenesGroup-Experiencia"); //variable contenedor inputs
    var add_buttonExperiencia = $(".agregarDivImagenExperiencia"); //adicona el boton de eliminar inputs

    
    $(add_buttonExperiencia).click(function(e) { //cuando presiona el boton 
        e.preventDefault();
        var expActual = retornarValorElementoLocal('varExpe'); //contador inicial

        if (expActual < max_fields) { //mientras sea menor que Experiencia
        
            expActual++; //adiciona un valor a x
            setValorElementoLocal('varExpe',expActual);
            $(wrapperExperiencia).append(
                '<div class="col-12 col-lg-6 padSectInfoExperFormEstudiantes boderTopContAdicionalFormEstudiantes">'+
                '           <div class="col-1 contXDeCierreFormEstudiantes contXDeCierre1024FormEstudiantes">'+
                '              <a href="#" class="remove_Experiencia estilos-X-eliminacion-archivos-formEstudiantes"><i class="fas fa-times"></i></a>'+
                '          </div>'+
                '           <h6 class="mt-2 fontLabelDatPersFormEstudiantes">Nombre de la empresa *</h6>'+
                '           <input type="text" class="form-control PropiedadIputDatPersFormEstudiantes"  placeholder="Nombre Empresa" id="txtNombreExperiencia'+expActual+'" name="txtNombreExperiencia'+expActual+'">'+
                
                '           <h6 class="fontLabelDatPersFormEstudiantes" style=" margin-top: 18px;">Descripción del puesto *</h6>'+
                '           <input type="text" class="form-control PropiedadIputDatPersFormEstudiantes"  placeholder="Descripcion del puesto" id="txtLinkExperiencia'+expActual+'" name="txtLinkExperiencia'+expActual+'">'+
                
                '           <div class="col-md-12 noPad" style=" margin-top: 18px;">'+
                '               <div class="col-md-12 noPad"><h6 class="fontLabelDatPersFormEstudiantes">Fecha de inicio *</h6></div>'+
                '               <div class="col-md-12 noPad"> <input class="form-control PropiedadIputDatPersFormEstudiantes" type="date" value="" id="fechaExperienciaIncio'+expActual+'"  name="fechaExperienciaIncio'+expActual+'"></div>'+
                '           </div>'+
                
                '           <div class="col-md-12 noPad" style=" margin-top: 18px;">'+
                '               <div class="col-md-12 noPad"><h6 class="fontLabelDatPersFormEstudiantes">Fecha de culminación *</h6></div>'+
                '               <div class="col-md-12 noPad"> <input class="form-control PropiedadIputDatPersFormEstudiantes" type="date" value="" id="fechaExperienciaFin'+expActual+'"  name="fechaExperienciaFin'+expActual+'"></div>'+
                '           </div>'+
                '       </div>'

            ); //add input box
        }
    });

    $(wrapperExperiencia).on("click", ".remove_Experiencia", function(e) { //boton de remover 
        e.preventDefault();
        $(this).parent('div').parent('div').remove();
        var expActual = retornarValorElementoLocal('varExpe'); //contador inicial
        expActual--;
        setValorElementoLocal('varExpe',expActual);
    })
  



});


$(document).ready(function() {
    cantidadImputs = localStorage.getItem("varEstu");
    
    
    for(i = 1 ; i <= cantidadImputs;i++){

        let posicionRelativa = i - 1 ;//correspondo a la posicion actual de la lista de estudios de la persona si los tiene 

        for (let j in getListaUniversidades) {
           
            $("#slcUniversidad"+i).append(
                '<option value=\' '+getListaUniversidades[j].id+' \''+
                (getListaEstudios[posicionRelativa].iduniversidad == getListaUniversidades[j].id ? 'selected = "selected"' : '') +
                '>'+getListaUniversidades[j].nombreuniversidad+ '</option>'
            );
        }
        for(let x in getListaCarrera){
            $("#slcCarrera"+i).append(
                '<option value=\' '+getListaCarrera[x].id+' \''+
                (getListaEstudios[posicionRelativa].idcarrera == getListaCarrera[x].id ? 'selected = "selected"' : '') +
                '>'+getListaCarrera[x].nombrecarrera+ '</option>'
            );
        }
        for(let z in getListaSemestre){
            $("#slcSemestre"+i).append(
                '<option value=\' '+getListaSemestre[z].id_catalogo+' \''+
                (getListaEstudios[posicionRelativa].idsemestre == getListaSemestre[z].id_catalogo ? 'selected = "selected"' : '') +
                '>'+getListaSemestre[z].nombre+ '</option>'
            );
        }
    }


});



$(document).ready(function() {

    var counter = 3;

    $("#addButton").click(function() {

        if (counter > 5) {
            return false;
        }

        var newTextBoxDiv = $(document.createElement('div'))
            .attr("id", 'TextBoxDivEstudios' + counter);

        newTextBoxDiv.after().html(
            '<input type="text" class="form-control input-estudios" placeholder="Escribe aqui" name="txtEstudio' + counter +
            '" id="inputEstudios' + counter + '" value="" >');

        newTextBoxDiv.appendTo("#divContenedorInputEstudios");


        counter++;
    });
});

$(document).ready(function() {

    var counter = 3;

    $("#addInputOtros").click(function() {

        if (counter > 5) {

            return false;
        }

        var newTextBoxDiv = $(document.createElement('div'))
            .attr("id", 'TextBoxDivOtros' + counter);

        newTextBoxDiv.after().html(
            '<input type="text" class="form-control input-estudios" placeholder="Escribe aqui" name="textboxotros' + counter +
            '" id="inputOtros' + counter + '" value="" >');

        newTextBoxDiv.appendTo("#divContenedorInputOtros");


        counter++;
    });
});

if(document.getElementById("avatar")){
    document.getElementById("avatar").onchange = function(e) {
        let reader = new FileReader();
    
        reader.onload = function() {
            let preview = document.getElementById('preview'),
                image = document.createElement('img');
    
            image.src = reader.result;
            image.className = "diseñoContenedorFoto";
    
            preview.innerHTML = '';
            preview.append(image);
        };
    
        reader.readAsDataURL(e.target.files[0]);
    }
}
if(document.getElementById("avatarBasico")){
    document.getElementById("avatarBasico").onchange = function(e) {
        let reader = new FileReader();
    
        reader.onload = function() {
            let preview = document.getElementById('preview'),
                image = document.createElement('img');
    
            image.src = reader.result;
            image.className = "diseñoContenedorFoto";
            image.className = "imgPrincipalMisDatos";
    
            preview.innerHTML = '';
            preview.append(image);
        };
    
        reader.readAsDataURL(e.target.files[0]);
    }
}
if(document.getElementById("avatarBasico-cell")){
    document.getElementById("avatarBasico-cell").onchange = function(e) {
        let reader = new FileReader();
    
        reader.onload = function() {
            let preview = document.getElementById('preview-cell'),
                image = document.createElement('img');
    
            image.src = reader.result;
            image.className = "diseñoContenedorFoto";
            image.className = "imgPrincipalMisDatos";
    
            preview.innerHTML = '';
            preview.append(image);
        };
    
        reader.readAsDataURL(e.target.files[0]);
    }
}

$(document).ready(function(){
    $("#guardarEstudiante").bind("submit",function(){

        $('#cantEstudios').val(retornarValorElementoLocal('varEstu'));
        $('#cantCertificados').val(retornarValorElementoLocal('varCert'));
        $('#cantExperiencia').val(retornarValorElementoLocal('varExpe'));
        $('#cantGaleria').val(retornarValorElementoLocal('varGale'));
        
        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data:$(this).serialize(),
            beforeSend: function(){

            },
            complete:function(data){}
        })
    })
});
    
   
