$('#reveal-click').click(function() {

    $(this).toggleClass("active");
    if ($(this).hasClass("active")) {
        $(this).text("Ver Menos").append('<i class="fas fa-angle-down botonVerMas-chevron-despliegue-footer"></i>');
    } else {
        $(this).text("Ver Más").append('<i class="fas fa-angle-up botonVerMas-chevron-despliegue-footer"></i>');
    }

    $('#reveal-wrap #hidden-div').slideToggle({
        direction: "up"
    }, 300);
    $(this).toggleClass('clientsClose');


}); // end click

$('#reveal-click2').click(function() {

    $(this).toggleClass("active2");
    if ($(this).hasClass("active2")) {
        $(this).text("Ver Menos").append('<i class="fas fa-angle-down botonVerMas-chevron-despliegue-footer"></i>');
    } else {
        $(this).text("Ver Más").append('<i class="fas fa-angle-up botonVerMas-chevron-despliegue-footer"></i>');
    }

    $('#reveal-wrap2 #hidden-div2').slideToggle({
        direction: "up"
    }, 300);
    $(this).toggleClass('clientsClose2');


}); // end click


    function redireccion_preguntas() {
        $("#preguntas").removeClass( "oculta-Div-quienes" );
        window.location.href="/quienes#preguntas";
    }



