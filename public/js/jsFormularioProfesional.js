
// EP
$(document).ready(function() {
    var max_fields_estudios = 5; //maximo de inputs
    var max_fields = 5; //maximo de inputs
    var wrapper = $(".input-multiple"); //variable contenedor inputs
    var add_button = $(".add_field_button"); //adicona el boton de eliminar inputs

    var x = 1; //contador inicial

    $("#datosPersonales").show();
    $("#estudios").hide();
    $("#publicaciones").hide();
    $("#certificados").hide();
    $("#galeria").hide();
    $("#Redes").hide();

    $( "#btnDatosPersonales" ).click(function() {
            $("#datosPersonales").show();
            $("#estudios").hide();
            $("#publicaciones").hide();
            $("#certificados").hide();
            $("#galeria").hide();         
            $("#Redes").hide();  
    });
 
    $( "#btnEstudios" ).click(function() {
        $("#datosPersonales").hide();
        $("#estudios").show();
        $("#publicaciones").hide();
        $("#certificados").hide();
        $("#galeria").hide();   
        $("#Redes").hide();        
    });
   
    $( "#btnPublicaciones" ).click(function() {
        $("#datosPersonales").hide();
        $("#estudios").hide();
        $("#publicaciones").show();
        $("#certificados").hide();
        $("#galeria").hide();  
        $("#Redes").hide();    
    });
    $( "#btnCertificados" ).click(function() {
        $("#datosPersonales").hide();
        $("#estudios").hide();
        $("#publicaciones").hide();
        $("#certificados").show();
        $("#galeria").hide(); 
        $("#Redes").hide();
             
    });
    $( "#btnGaleria" ).click(function() {
        $("#datosPersonales").hide();
        $("#estudios").hide();
        $("#publicaciones").hide();
        $("#certificados").hide();
        $("#galeria").show();     
        $("#Redes").hide();      
    });

    $( "#btnRedes" ).click(function() {
        $("#datosPersonales").hide();
        $("#estudios").hide();
        $("#publicaciones").hide();
        $("#certificados").hide();
        $("#galeria").hide();     
        $("#Redes").show();      
    });


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



    
    var wrapper2 = $(".input-multiple-imagenesGroup"); //variable contenedor inputs
    var add_button2 = $(".agregarDivImagen"); //adicona el boton de eliminar inputs

  
    $(add_button2).click(function(e) { //cuando presiona el boton 

       
        var galeActual = retornarValorElementoLocal('varGale');; //contador inicial
       

        e.preventDefault();
        if (galeActual < max_fields) { //mientras sea menor que 5
            galeActual++; //adiciona un valor a x
            
            setValorElementoLocal('varGale',galeActual)
            $(wrapper2).append(
            '<div class="col-12 col-md-12 col-lg-6 divFileFotosGaleria">'+
                            
                '<div class="col-md-12 diseñoContenedorFoto" id="FotoloadPreview' + galeActual + '" style="height: 300px;" >'+
                    '<img class="card-img-top imagenAjustadaContenedor" id="output' + galeActual + '"  />'+
                    
                ' </div>'+
                '<div class="BtnAgregarFormProfesionales">'+
                    '<div class="col-8 col-md-8 col-lg-6 divFile btnEstilosFormProfesionales">'+
                        '<p class="textoImputFileFormProfesionales noPadMar">Agregar Archivo</p>'+
                        '<input class="inputFile"  onchange="loadFile' + galeActual + '(event)" type="file" id="inputMulti' + galeActual + '" name="inputMulti' + galeActual + '" accept="image/png, image/jpeg">'+
                        '</div>'+
                    '<div class="col-2 col-md-2 removImagenesFormProfesionales">'+
                    '   <a href="#" class="remove_Galeria"> X </a> '+ 
                    '</div>  '+
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

    $(wrapper2).on("click", ".remove_Galeria", function(e) { //boton de remover 
        e.preventDefault();
        $(this).parent('div').parent('div').parent('div').remove();
        
       
        var galeActual = retornarValorElementoLocal('varGale');; //contador inicial
        
        galeActual--;

        setValorElementoLocal('varGale',galeActual);
    })


    var wrapper3 = $(".input-multiple-imagenesGroup-estudios"); //variable contenedor inputs
    var add_button3 = $(".agregarDivImagenestudios"); //adicona el boton de eliminar inputs

  
    $(add_button3).click(function(e) { //cuando presiona el boton 
        var estuActual = retornarValorElementoLocal('varEstu');; //contador inicial

        e.preventDefault();
        if (estuActual < max_fields_estudios) { //mientras sea menor que 5
            estuActual++; //adiciona un valor a x
            setValorElementoLocal('varEstu',estuActual)
            $(wrapper3).append(
                '<div class="col-12 col-md-12 col-lg-6 contImgEstudFormProfesionales">'+
                '   <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Nivel de estudios *</h6>'+
                '   <input type="text" class="form-control PropiedadIputDatPersFormProfesionales col-12 col-md-12"  placeholder="Nivel estudio" id="txtNivelEstudios' + estuActual + '" name="txtNivelEstudios' + estuActual + '">'+
                
                '   <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Nombre de la profesión *</h6>'+
                '   <input type="text" class="form-control PropiedadIputDatPersFormProfesionales col-12 col-md-12"  placeholder="Nombre" id="txtNombreEstudios' + estuActual + '" name="txtNombreEstudios' + estuActual + '">'+
                
                '   <div class="row">'+
                '       <div class="col-12 col-md-12"><h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Fecha de culminación *</h6></div>'+
                '       <div class="col-12 col-md-12"> <input class="form-control PropiedadIputDatPersFormProfesionales" type="date" value="" id="fechaEstudios' + estuActual + '"  name="fechaEstudios' + estuActual + '"></div>'+
                '   </div>'+
                '<br>'+
                '   <div class="col-12 col-md-12 noPad diseñoContenedorFotoDocumentos"  >'+
                '       <img class="card-img-top imagenAjustadaContenedor" id="estudios' + estuActual + '"/>'+
                '   </div>'+

                '<div class="col-12 col-md-12 noPad BtnAgregarFormProfesionales">'+
                '   <div class="col-8 col-md-8 divFile btnEstilosFormProfesionales">'+
                '       <p class="textoImputFileFormProfesionales noPadMar">Agregar Archivo</p>'+
                '       <input class="inputFile col-12 col-md-12"  type="file" id="inputMultiestudios' + estuActual + '" name="inputMultiestudios' + estuActual + '" accept="image/png, image/jpeg" onchange="loadFileestudio' + estuActual + '(event)">'+

                '   </div>'+
                '    <div class="col-2 col-md-2 removImagenesFormProfesionales">'+
                '       <a href="#" class="remove_fieldEstudio">X</a>'+
                '    </div>'+
                '</div>'+
                '<br>'+
                '</div>'+
                
                ' <script>'+
                '   var loadFileestudio' + estuActual + ' = function(event) {\n'+
                        ' var reader' + estuActual + ' = new FileReader();\n'+
                        '    reader' + estuActual + '.onload = function(){\n'+
                        '    var output' + estuActual + ' = document.getElementById(\'estudios' + estuActual + '\');\n'+
                        '   output' + estuActual + '.src = reader' + estuActual + '.result;\n'+
                        '  };\n'+
                        ' reader' + estuActual + '.readAsDataURL(event.target.files[0]);\n'+
                        '};'+
                ' </script>'
            ); //add input box
        }
    });

    $(wrapper3).on("click", ".remove_fieldEstudio", function(e) { //boton de remover 
        e.preventDefault();
        $(this).parent('div').parent('div').parent('div').remove();
        
        var estuActual = retornarValorElementoLocal('varEstu');; //contador inicial
        estuActual--;
        setValorElementoLocal('varEstu',estuActual);

    })
  

    var wrapper4 = $(".input-multiple-imagenesGroup-Certificados"); //variable contenedor inputs
    var add_button4 = $(".agregarDivImagenCertificados"); //adicona el boton de eliminar inputs

    
    $(add_button4).click(function(e) { //cuando presiona el boton 
        var certActual = retornarValorElementoLocal('varCert'); //contador inicial

        e.preventDefault();
        if (certActual < max_fields) { //mientras sea menor que 5
            certActual++; //adiciona un valor a x
            setValorElementoLocal('varCert',certActual);
            $(wrapper4).append(
                '<div class="col-md-12 col-lg-6 contImgCertifFormProfesionales">'+
                '   <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Entidad *</h6>'+                 
                '   <input type="text" class="form-control PropiedadIputDatPersFormProfesionales"  placeholder="Entidad" id="txtNivelCertificados' + certActual + '" name="txtNivelCertificados' + certActual + '">'+
                
                '   <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Nombre del certificado *</h6>'+
                '   <input type="text" class="form-control PropiedadIputDatPersFormProfesionales"  placeholder="Nombre" id="txtNombreCertificados' + certActual + '" name="txtNombreCertificados' + certActual + '">'+
                
                '   <div class="row">'+
                '       <div class="col-md-12"><h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Fecha de culminación *</h6></div>'+
                '       <div class="col-md-12"> <input class="form-control PropiedadIputDatPersFormProfesionales" type="date" value="" id="fechaCertificados' + certActual + '"  name="fechaCertificados' + certActual + '"></div>'+
                '   </div>'+
                '<br>'+
                '   <div class="col-md-12 diseñoContenedorFotoDocumentos"  >'+
                '       <img class="card-img-top imagenAjustadaContenedor" id="imgCertificado' + certActual + '"/>'+
                '   </div>'+

                '<div class="BtnAgregarFormProfesionales">'+
                '   <div class="col-8 col-md-8 divFile btnEstilosFormProfesionales">'+
                '       <p class="textoImputFileFormProfesionales noPadMar">Agregar Archivo</p>'+
                '       <input class="inputFile"  type="file" id="inputMultiCertificados' + certActual + '" name="inputMultiCertificados' + certActual + '" accept="image/png, image/jpeg" onchange="loadFileCertificados' + certActual + '(event)">'+
                '   </div>'+

                    '<div class="col-2 col-md-2 removImagenesFormProfesionales">'+
                    '    <a href="#" class="remove_fieldCertificados"> X </a>'+
                    '</div>'+
                '</div>'+
                '<br>'+
                '</div>'+
                
                ' <script>'+
                '   var loadFileCertificados' + certActual + ' = function(event) {\n'+
                        ' var reader' + certActual + ' = new FileReader();\n'+
                        '    reader' + certActual + '.onload = function(){\n'+
                        '    var output' + certActual + ' = document.getElementById(\'imgCertificado' + certActual + '\');\n'+
                        '   output' + certActual + '.src = reader' + certActual + '.result;\n'+
                        '  };\n'+
                        ' reader' + certActual + '.readAsDataURL(event.target.files[0]);\n'+
                        '};'+
                ' </script>'
            ); //add input box
        }
    });

    $(wrapper4).on("click", ".remove_fieldCertificados", function(e) { //boton de remover 
        e.preventDefault();
        $(this).parent('div').parent('div').parent('div').remove();

        var certActual = retornarValorElementoLocal('varCert'); //contador inicial
        certActual--;
        setValorElementoLocal('varCert',certActual);
    })

    var wrapper5 = $(".input-multiple-imagenesGroup-Publicacion"); //variable contenedor inputs
    var add_button5 = $(".agregarDivImagenPublicacion"); //adicona el boton de eliminar inputs

    
    $(add_button5).click(function(e) { //cuando presiona el boton 
        e.preventDefault();
        var publActual = retornarValorElementoLocal('varPubl'); //contador inicial

        if (publActual < max_fields) { //mientras sea menor que 5
        
            publActual++; //adiciona un valor a x
            setValorElementoLocal('varPubl',publActual);
            $(wrapper5).append(
                '<div class="col-md-12 col-lg-6 contImgPublicFormProfesionales">'+

                '   <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Nombre</h6>'+
                '   <input type="text" class="form-control PropiedadIputDatPersFormProfesionales" placeholder="Nombre" id="txtNombrePublicacion' + publActual + '" name="txtNombrePublicacion' + publActual + '">'+
                
                '   <h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Link</h6>'+
                '   <input type="text" class="form-control PropiedadIputDatPersFormProfesionales" placeholder="Link" id="txtLinkPublicacion' + publActual + '" name="txtLinkPublicacion' + publActual + '">'+
               
                '   <div class="row">'+
                '       <div class="col-md-12"><h6 class="margin-top-1em fontLabelDatPersFormProfesionales">Fecha Culminación</h6></div>'+
                '       <div class="col-md-12"> <input class="form-control PropiedadIputDatPersFormProfesionales" type="date" value="" id="fechaPublicacion' + publActual + '" require name="fechaPublicacion' + publActual + '"></div>'+
                '   </div>'+
                '<br>'+
                '   <div class="col-12 col-md-12 diseñoContenedorFotoDocumentos"  >'+
                '       <img class="card-img-top imagenAjustadaContenedor" id="Publicacion' + publActual + '"/>'+
                '   </div>'+
                    '<div class="BtnAgregarFormProfesionales">'+
                    '   <div class="col-8 col-md-8 divFile btnEstilosFormProfesionales">'+
                    '       <p class="textoImputFileFormProfesionales noPadMar">Agregar Archivo</p>'+
                    '       <input class="inputFile"  type="file" id="inputMultiPublicacion' + publActual + '" name="inputMultiPublicacion' + publActual + '" accept="image/png, image/jpeg" onchange="loadFilePublicacion' + publActual + '(event)">'+
                    '   </div>'+
                     '   <div class="col-2 col-md-2 removImagenesFormProfesionales">'+
                        '    <a href="#" class="remove_fieldPublicacion"> X </a>'+
                         '</div>'+
                    '</div>'+
                    '<br>'+
                '</div>'+
                
                ' <script>'+
                '   var loadFilePublicacion' + publActual + ' = function(event) {\n'+
                        ' var reader' + publActual + ' = new FileReader();\n'+
                        '    reader' + publActual + '.onload = function(){\n'+
                        '    var output' + publActual + ' = document.getElementById(\'Publicacion' + publActual + '\');\n'+
                        '   output' + publActual + '.src = reader' + publActual + '.result;\n'+
                        '  };\n'+
                        ' reader' + publActual + '.readAsDataURL(event.target.files[0]);\n'+
                        '};'+
                ' </script>'
            ); //add input box
        }
    });

    $(wrapper5).on("click", ".remove_fieldPublicacion", function(e) { //boton de remover 
        e.preventDefault();
        $(this).parent('div').parent('div').parent('div').remove();
        var publActual = retornarValorElementoLocal('varPubl'); //contador inicial
        publActual--;
        setValorElementoLocal('varPubl',publActual);
    })
  



});

var actual = 1;

function pulsarListaExpertoEn(e) {
    if (e.keyCode === 13 && !e.shiftKey) {
        e.preventDefault();
        let varListaExpertoEn = retornarValorElementoLocal('varListaExpertoEn'); //contador inicial
       let valorinputActual = document.getElementById('inputExpertoEn').value
       varListaExpertoEn++; //adiciona un valor a x
        setValorElementoLocal('varListaExpertoEn',varListaExpertoEn);
        $('#listaExpertoEn').append(
            '<div style="display: inline-flex;" class="col-md-3">'+
            '    <li>'+
            '        <span class="list-group-item list-group-item-success contenido" id="expertoEn' + varListaExpertoEn + '">'+valorinputActual+'</span>'+
            '    </li>'+
            '    <button type="button" class="btn btn-dark remove_listaExpertoEn">x</button>'+
            '</div>');
        document.getElementById('inputExpertoEn').value='';

        
    }
}


$('#SeccionlistaExpertoEn').on("click", ".remove_listaExpertoEn", function(e) { //boton de remover 
    e.preventDefault();
    $(this).parent('div').remove();
     let varListaExpertoEn = retornarValorElementoLocal('varListaExpertoEn'); //contador inicial
     varListaExpertoEn--;
        setValorElementoLocal('varListaExpertoEn',varListaExpertoEn);
  
})

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
    
            preview.innerHTML = '';
            preview.append(image);
        };
    
        reader.readAsDataURL(e.target.files[0]);
    }
}

try {
    $(document).ready(function(){
        $("#guardarProfesional").bind("submit",function(){
            let cadenaerror = '';
            let error = 0;

            $('#cantEstudios').val(retornarValorElementoLocal('varEstu'));
            $('#cantCertificados').val(retornarValorElementoLocal('varCert'));
            $('#cantPublicaciones').val(retornarValorElementoLocal('varPubl'));
            $('#cantGaleria').val(retornarValorElementoLocal('varGale'));
            $('#cantExperiencia').val(retornarValorElementoLocal('varExpe'));
            /*
            for(i= 1 ; i<=$('#cantExperiencia').val();i++){
                if($('#txtNombreExperiencia'+i).val() == ''){
                    cadenaerror = cadenaerror + 'falta llenar el campo Nombre de la Experiencia '+ i+' \n'
                    error = 1;
                }
                if($('#txtLinkExperiencia'+i).val() == ''){
                    cadenaerror = cadenaerror + 'falta llenar el campo Link de la Experiencia '+ i+' \n'
                    error = 1;
                }
                if($('#fechaExperienciaIncio'+i).val() == ''){
                    cadenaerror = cadenaerror + 'falta llenar el campo fecha inicio de la Experiencia '+ i+' \n'
                    error = 1;
                }
                if($('#fechaExperienciaFin'+i).val() == ''){
                    cadenaerror = cadenaerror + 'falta llenar el campo fecha fin de la Experiencia '+ i+' \n'
                    error = 1;
                }
            }

            if($('#txtNivelEstudios1').val() == ''){
                cadenaerror = cadenaerror + 'falta llenar el campo Nivel del estudio \n'
                error = 1;
            }
            if($('#txtNombreEstudios1').val() == ''){
                cadenaerror = cadenaerror + 'falta llenar el campo Nombre del estudio \n'
                error = 1;
            }
            if($('#fechaEstudios1').val() == ''){
                cadenaerror = cadenaerror + 'falta llenar el campo fecha del estudio \n'
                error = 1;
            }
            if($('#inputMultiestudios1').val() == ''){
                cadenaerror = cadenaerror + 'falta agregar foto del estudio \n'
                error = 1;
            }


            
            if($('#txtNivelCertificados1').val() == ''){
                cadenaerror = cadenaerror + 'falta llenar el campo Nivel del certificado \n'
                error = 1;
            }
            if($('#txtNombreCertificados1').val() == ''){
                cadenaerror = cadenaerror + 'falta llenar el campo Nombre del certificado \n'
                error = 1;
            }
            if($('#fechaCertificados1').val() == ''){
                cadenaerror = cadenaerror + 'falta llenar el campo fecha del certificado \n'
                error = 1;
            }
            if($('#inputMultiCertificados1').val() == ''){
                cadenaerror = cadenaerror + 'falta agregar foto del certificado \n'
                error = 1;
            }

            
            if(error == 1){
                new Toast({
                    message: cadenaerror,
                    type: 'success'
                  });
               
               

                return false;
            }*/
    
            
            $('#cantEstudios').val(retornarValorElementoLocal('varEstu'));
            $('#cantCertificados').val(retornarValorElementoLocal('varCert'));
            $('#cantPublicaciones').val(retornarValorElementoLocal('varPubl'));
            $('#cantGaleria').val(retornarValorElementoLocal('varGale'));
            $('#cantExperiencia').val(retornarValorElementoLocal('varExpe'));
    
            let varListaExpertoEn = retornarValorElementoLocal('varListaExpertoEn'); //contador inicial
            let cadena="";
            for( z = 1 ; z <= varListaExpertoEn; z++){
                cadena = cadena + $('#expertoEn'+z).html() +';';
            }
            cadena = cadena.substring(0, cadena.length - 1);
            
            if($('#slcAreaMiPerf').val() == -1){
                $('#textoGenericoModal').text('')
                $('#textoGenericoModal').text('Seleccione una Area')
                $('#modalMensajeGenerico').modal('show')
                return false;
            }
            if($('#slcProfesionMiPerf').val() == -1){
                $('#textoGenericoModal').text('')
                $('#textoGenericoModal').text('Seleccione una Profesion')
                $('#modalMensajeGenerico').modal('show')
                return false;
            }
            if($('#slcEspecialidadMiPerf').val() == -1){
                $('#textoGenericoModal').text('')
                $('#textoGenericoModal').text('Seleccione una Especialidad')
                $('#modalMensajeGenerico').modal('show')
                return false;
            }
    
            $('#expertoEn').val(cadena);
    
    
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
    
} catch (error) {
    console.error(error,'ed')
}




    
   
