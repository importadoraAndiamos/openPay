
$("#slcArea").change(function(event) {
    $('#textoGenericoModal').text('')
    $('#textoGenericoModal').text('Espere un Momento')
    $('#modalMensajeGenerico').modal('show')
    $.get("profesionPorArea/" + event.target.value + "", function(response) {

        $('#slcProfesion').empty();
        $('#slcEspecialidad').empty();
        $("#slcProfesion").append("<option value = '-1'>Profesión</option>");
        $("#slcEspecialidad").append("<option value = '-1'>Especialidad</option>");
        for (i = 0; i < response.length; i++) {

            $("#slcProfesion").append("<option value = '" + response[i].id + " '> " + response[i].nombreProfesion + "</option>");

        }
        $('#modalMensajeGenerico').modal('hide')
    })

});

$("#slcProfesion").change(function(event) {
    $('#textoGenericoModal').text('')
    $('#textoGenericoModal').text('Espere un Momento')
    $('#modalMensajeGenerico').modal('show')
    $.get("especialidadPorProfesion/" + event.target.value + "", function(response) {

        $('#slcEspecialidad').empty();
        $("#slcEspecialidad").append("<option value = '-1'>Especialidad</option>");
        for (i = 0; i < response[0].length; i++) {

            $("#slcEspecialidad").append("<option value ='http://portal-test.zaabra.local/"+
                                            //este if se hace para la ruta que no sea de estudiantes
                                            (response[1][0].ruta != 'Estudiantes' ? "galeriaProfesionales/" : "galeriaEstudiantes/")  +    

                                             response[1][0].ruta + //esta ruta pertenece al area
                                             "/"+ response[2][0].ruta  + //esta ruta pertenece a la profesion 
                                             "/" + response[0][i].ruta +" '>"+ //esta ruta pertenece especialidad
                                             response[0][i].nombreEspecialidad + 
                                            "</option>");

        }
        $('#modalMensajeGenerico').modal('hide')
    })

});

$("#slcAreaMiPerf").change(function(event) {
    $('#textoGenericoModal').text('')
    $('#textoGenericoModal').text('Espere un Momento')
    $('#modalMensajeGenerico').modal('show')
    $.get("profesionPorArea/" + event.target.value + "", function(response) {

        $('#slcProfesionMiPerf').empty();
        $('#slcEspecialidadMiPerf').empty();
        $("#slcProfesionMiPerf").append("<option value = '-1'>Profesión</option>");
        $("#slcEspecialidadMiPerf").append("<option value = '-1'>Especialidad</option>");
        for (i = 0; i < response.length; i++) {

            $("#slcProfesionMiPerf").append("<option value = '" + response[i].id + " '> " + response[i].nombreProfesion + "</option>");

        }
        $('#modalMensajeGenerico').modal('hide')
    })

});

$("#slcProfesionMiPerf").change(function(event) {
    $('#textoGenericoModal').text('')
    $('#textoGenericoModal').text('Espere un Momento')
    $('#modalMensajeGenerico').modal('show')
    $.get("especialidadPorProfesion/" + event.target.value + "", function(response) {

        $('#slcEspecialidadMiPerf').empty();
        $("#slcEspecialidadMiPerf").append("<option value = '-1'>Especialidad</option>");
        for (i = 0; i < response[0].length; i++) {

            $("#slcEspecialidadMiPerf").append("<option value ='"+ response[0][i].id + " '>"+ //esta ruta pertenece especialidad
                                             response[0][i].nombreEspecialidad + 
                                            "</option>");

        }
        $('#modalMensajeGenerico').modal('hide')
    })

});

$("#slcAreaMiPerf-cell").change(function(event) {
    $('#textoGenericoModal').text('')
    $('#textoGenericoModal').text('Espere un Momento')
    $('#modalMensajeGenerico').modal('show')
    $.get("profesionPorArea/" + event.target.value + "", function(response) {

        $('#slcProfesionMiPerf-cell').empty();
        $('#slcEspecialidadMiPerf-cell').empty();
        $("#slcProfesionMiPerf-cell").append("<option value = '-1'>Profesión</option>");
        $("#slcEspecialidadMiPerf-cell").append("<option value = '-1'>Especialidad</option>");
        for (i = 0; i < response.length; i++) {

            $("#slcProfesionMiPerf-cell").append("<option value = '" + response[i].id + " '> " + response[i].nombreProfesion + "</option>");

        }
        $('#modalMensajeGenerico').modal('hide')
    })

});

$("#slcProfesionMiPerf-cell").change(function(event) {
    $('#textoGenericoModal').text('')
    $('#textoGenericoModal').text('Espere un Momento')
    $('#modalMensajeGenerico').modal('show')
    $.get("especialidadPorProfesion/" + event.target.value + "", function(response) {

        $('#slcEspecialidadMiPerf-cell').empty();
        $("#slcEspecialidadMiPerf-cell").append("<option value = '-1'>Especialidad</option>");
        for (i = 0; i < response[0].length; i++) {

            $("#slcEspecialidadMiPerf-cell").append("<option value ='"+ response[0][i].id + " '>"+ //esta ruta pertenece especialidad
                                             response[0][i].nombreEspecialidad + 
                                            "</option>");
        }
        $('#modalMensajeGenerico').modal('hide')
    })

});

//codigo para el bucador oculto del icono de la lupa en modo responsive de 320 a 768
$('#btn-buscadorOculto').click(function() {
    $('#buscadorOculto').toggle();
});

//codigo para el ojo de la caja de texto del LOGIN
$(".toggle-password1").click(function() {

    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
});

//codigo para animacion del input banner profesionales
$('.icono-lupa').hover(
    function() {$(".filaPrincipalImagenes").show("slow","swing")}
    //function() {$('.filaPrincipalImagenes').toggleClass('mostrarinput')}
    //function() {$(".filaPrincipalImagenes").css("display", "block")}
)

$(document).ready(function() {
    $("#contenedor-areas-home1").hide();
    $("#contenedor-areas-home2").hide();
    $("#contenedor-areas-home3").hide();
    $("#contenedor-areas-home4").hide();
    $("#contenedor-areas-home5").hide();
    $("#contenedor-areas-home6").hide();

    $("#dropdownMenuButton1" ).click(function() {
        $("#contenedor-areas-home1").toggle("650","swing");
        $("#contenedor-areas-home2").hide();
        $("#contenedor-areas-home3").hide();
        $("#contenedor-areas-home4").hide();
        $("#contenedor-areas-home5").hide();
        $("#contenedor-areas-home6").hide();   
        setValorElementoLocal("areaActual","Economico")
    });
      $("#dropdownMenuButton2" ).click(function() {
        $("#contenedor-areas-home1").hide();
        $("#contenedor-areas-home2").toggle("650","swing");
        $("#contenedor-areas-home3").hide();
        $("#contenedor-areas-home4").hide();
        $("#contenedor-areas-home5").hide();
        $("#contenedor-areas-home6").hide();   
        setValorElementoLocal("areaActual","Salud")
      });
      $("#dropdownMenuButton3" ).click(function() {
        $("#contenedor-areas-home1").hide();
        $("#contenedor-areas-home2").hide();
        $("#contenedor-areas-home3").toggle("650","swing");
        $("#contenedor-areas-home4").hide();
        $("#contenedor-areas-home5").hide();
        $("#contenedor-areas-home6").hide();   
        setValorElementoLocal("areaActual","Ingenieria")
      });
      $("#dropdownMenuButton4" ).click(function() {
        $("#contenedor-areas-home1").hide();
        $("#contenedor-areas-home2").hide();
        $("#contenedor-areas-home3").hide();
        $("#contenedor-areas-home4").toggle("650","swing");
        $("#contenedor-areas-home5").hide();
        $("#contenedor-areas-home6").hide();   
      });
      $("#dropdownMenuButton5" ).click(function() {
        $("#contenedor-areas-home1").hide();
        $("#contenedor-areas-home2").hide();
        $("#contenedor-areas-home3").hide();
        $("#contenedor-areas-home4").hide();
        $("#contenedor-areas-home5").toggle("650","swing");
        $("#contenedor-areas-home6").hide();   
      });
      $("#dropdownMenuButton6" ).click(function() {
        $("#contenedor-areas-home1").hide();
        $("#contenedor-areas-home2").hide();
        $("#contenedor-areas-home3").hide();
        $("#contenedor-areas-home4").hide();
        $("#contenedor-areas-home5").hide();
        $("#contenedor-areas-home6").toggle("650","swing");   
        setValorElementoLocal("areaActual","Estudiantes")
      });
     
});

