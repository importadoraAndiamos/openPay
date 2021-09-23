

    $("#pais").change(function(event) {
        $('#departamento').empty();
        $("#departamento").append("<option value = ' '> Seleccione un Departamento </option>");
        $('#provincia').empty();
        $("#provincia").append("<option value = ' '> Seleccione una Provincia </option>");
        $('#ciudad').empty();
        $("#ciudad").append("<option value = ' '> Seleccione una ciudad </option>");
        $.get("departamentoPorPais/" + event.target.value + "", function(response) {

            $('#departamento').empty();
            $("#departamento").append("<option value = ' '> Seleccione un Departamento </option>");
            for (i = 0; i < response.length; i++) {

                $("#departamento").append("<option value = '" + response[i].id_departamento + " '> " + response[i].nombre + "</option>");

            }
        })

    });
    $("#departamento").change(function(event) {

        $.get("provinciaPorDepartamento/" + event.target.value + "", function(response) {

            $('#provincia').empty();
            $("#provincia").append("<option value = ' '> Seleccione una Provincia </option>");
            for (i = 0; i < response.length; i++) {

                $("#provincia").append("<option value = '" + response[i].id_provincia + " '> " + response[i].nombre + "</option>");

            }
        })

    });
    $("#provincia").change(function(event) {

        $.get("municipioporProvincia/" + event.target.value + "", function(response) {

            $('#ciudad').empty();
            $("#ciudad").append("<option value = ' '> Seleccione una ciudad </option>");
            for (i = 0; i < response.length; i++) {

                $("#ciudad").append("<option value = '" + response[i].id_municipio + " '> " + response[i].nombre + "</option>");

            }
        })

    });
    $("#pais-envio").change(function(event) {
        $('#departamento-envio').empty();
        $("#departamento-envio").append("<option value = ' '> Seleccione un Departamento </option>");
        $('#provincia-envio').empty();
        $("#provincia-envio").append("<option value = ' '> Seleccione una Provincia </option>");
        $('#ciudad-envio').empty();
        $("#ciudad-envio").append("<option value = ' '> Seleccione una ciudad </option>");
        $.get("departamentoPorPais/" + event.target.value + "", function(response) {

            $('#departamento-envio').empty();
            $("#departamento-envio").append("<option value = ' '> Seleccione un Departamento </option>");
            for (i = 0; i < response.length; i++) {

                $("#departamento-envio").append("<option value = '" + response[i].id_departamento + " '> " + response[i].nombre + "</option>");

            }
        })

    });
    $("#departamento-envio").change(function(event) {

        $.get("provinciaPorDepartamento/" + event.target.value + "", function(response) {

            $('#provincia-envio').empty();
            $("#provincia-envio").append("<option value = ' '> Seleccione una Provincia </option>");
            for (i = 0; i < response.length; i++) {

                $("#provincia-envio").append("<option value = '" + response[i].id_provincia + " '> " + response[i].nombre + "</option>");

            }
        })

    });
    $("#provincia-envio").change(function(event) {

        $.get("municipioporProvincia/" + event.target.value + "", function(response) {

            $('#ciudad-envio').empty();
            $("#ciudad-envio").append("<option value = ' '> Seleccione una ciudad </option>");
            for (i = 0; i < response.length; i++) {

                $("#ciudad-envio").append("<option value = '" + response[i].id_municipio + "' data_dane=" + response[i].codigo_dane + " > " + response[i].nombre + "</option>");

            }
        })

    });

    $(document).ready(function(){
        $("#editBasic1").bind("submit",function(){
    
            if($('#slcAreaMiPerf-cell').val() == -1){
                $('#textoGenericoModal').text('')
                $('#textoGenericoModal').text('Seleccione una Area')
                $('#modalMensajeGenerico').modal('show')
                return false;
            }
            if($('#slcProfesionMiPerf-cell').val() == -1){
                $('#textoGenericoModal').text('')
                $('#textoGenericoModal').text('Seleccione una Profesion')
                $('#modalMensajeGenerico').modal('show')
                return false;
            }
            if($('#slcProfesionMiPerf-cell').val() == -1){
                $('#textoGenericoModal').text('')
                $('#textoGenericoModal').text('Seleccione una Especialidad')
                $('#modalMensajeGenerico').modal('show')
                return false;
            }
            if($('.tipoDocumento').val() == -1){
                $('#textoGenericoModal').text('')
                $('#textoGenericoModal').text('Seleccione un Tipo Documento')
                $('#modalMensajeGenerico').modal('show')
                return false;
            }
            
            $.ajax({
                type: $(this).attr("method"),
                url: $(this).attr("action"),
                data:$(this).serialize(),
                beforeSend: function(){
    
                },
                complete:function(data){}
            })
        })
        $("#editBasic2").bind("submit",function(){
    
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
            if($('.tipoDocumento').val() == -1){
                $('#textoGenericoModal').text('')
                $('#textoGenericoModal').text('Seleccione un Tipo Documento')
                $('#modalMensajeGenerico').modal('show')
                return false;
            }

            $.ajax({
                type: $(this).attr("method"),
                url: $(this).attr("action"),
                data:$(this).serialize(),
                beforeSend: function(){
    
                },
                complete:function(data){}
            })
        })
    })




