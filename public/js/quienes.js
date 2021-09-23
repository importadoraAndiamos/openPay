$(document).ready(function() {
    $("#preguntas").addClass( "oculta-Div-quienes" );
    $("#cookies").addClass( "oculta-Div-quienes" );
    $("#politicas").addClass( "oculta-Div-quienes" );
    $("#terminosCondiciones").addClass( "oculta-Div-quienes" );
    $("#terminosCondicionesZaabraProfesional").addClass( "oculta-Div-quienes" );

    $("#btn-preguntas" ).click(function() {   
        $("#preguntas").removeClass( "oculta-Div-quienes" );
        $("#quienes").addClass( "oculta-Div-quienes" );
        $("#cookies").addClass( "oculta-Div-quienes" );
        $("#politicas").addClass( "oculta-Div-quienes" );
        $("#terminosCondiciones").addClass( "oculta-Div-quienes" );
    })
    $("#btn-quienes-somos" ).click(function() {   
        $("#quienes").removeClass( "oculta-Div-quienes" );
        $("#preguntas").addClass( "oculta-Div-quienes" );
        $("#cookies").addClass( "oculta-Div-quienes" );
        $("#politicas").addClass( "oculta-Div-quienes" );
        $("#terminosCondiciones").addClass( "oculta-Div-quienes" );
    })
    $("#btn-cookies" ).click(function() { 
        $("#quienes").addClass( "oculta-Div-quienes" );
        $("#preguntas").addClass( "oculta-Div-quienes" );
        $("#cookies").removeClass( "oculta-Div-quienes" );
        $("#politicas").addClass( "oculta-Div-quienes" );
        $("#terminosCondiciones").addClass( "oculta-Div-quienes" );
    })
    $("#btn-politicas" ).click(function() { 
        $("#quienes").addClass( "oculta-Div-quienes" );
        $("#preguntas").addClass( "oculta-Div-quienes" );
        $("#cookies").addClass( "oculta-Div-quienes" );
        $("#politicas").removeClass( "oculta-Div-quienes" );
        $("#terminosCondiciones").addClass( "oculta-Div-quienes" );
    })
    $("#btn-terminosCondiciones" ).click(function() { 
        $("#quienes").addClass( "oculta-Div-quienes" );
        $("#preguntas").addClass( "oculta-Div-quienes" );
        $("#cookies").addClass( "oculta-Div-quienes" );
        $("#politicas").addClass( "oculta-Div-quienes" );
        $("#terminosCondiciones").removeClass( "oculta-Div-quienes" );
    })
    $("#boton-ver-siguiente-terminosCondicionesZaabraProfesional" ).click(function() { 
        $("#quienes").addClass( "oculta-Div-quienes" );
        $("#preguntas").addClass( "oculta-Div-quienes" );
        $("#cookies").addClass( "oculta-Div-quienes" );
        $("#politicas").addClass( "oculta-Div-quienes" );
        $("#terminosCondiciones").addClass( "oculta-Div-quienes" );
        $("#terminosCondicionesZaabraProfesional").removeClass( "oculta-Div-quienes" );
    })
    $("#btn-atras-quienes" ).click(function() { 
        $("#quienes").removeClass( "oculta-Div-quienes" );
        $("#preguntas").addClass( "oculta-Div-quienes" );
        $("#cookies").addClass( "oculta-Div-quienes" );
        $("#politicas").addClass( "oculta-Div-quienes" );
        $("#terminosCondicionesZaabraProfesional").addClass( "oculta-Div-quienes" );
    })
    $("#btn-atras-preguntas" ).click(function() { 
        $("#quienes").addClass( "oculta-Div-quienes" );
        $("#preguntas").removeClass( "oculta-Div-quienes" );
        $("#cookies").addClass( "oculta-Div-quienes" );
        $("#terminosCondicionesZaabraProfesional").addClass( "oculta-Div-quienes" );
        $("#politicas").addClass( "oculta-Div-quienes" );
    })
    $("#btn-atras-cookies" ).click(function() { 
        $("#quienes").addClass( "oculta-Div-quienes" );
        $("#preguntas").addClass( "oculta-Div-quienes" );
        $("#cookies").removeClass( "oculta-Div-quienes" );
        $("#terminosCondicionesZaabraProfesional").addClass( "oculta-Div-quienes" );
        $("#politicas").addClass( "oculta-Div-quienes" );
    })
    $("#btn-atras-politicas" ).click(function() { 
        $("#quienes").addClass( "oculta-Div-quienes" );
        $("#preguntas").addClass( "oculta-Div-quienes" );
        $("#cookies").addClass( "oculta-Div-quienes" );
        $("#politicas").removeClass( "oculta-Div-quienes" );
        $("#terminosCondicionesZaabraProfesional").addClass( "oculta-Div-quienes" );
        $("#terminosCondiciones").addClass( "oculta-Div-quienes" );
    })
    $("#btn-atras-terminosCondiciones" ).click(function() { 
        $("#quienes").addClass( "oculta-Div-quienes" );
        $("#preguntas").addClass( "oculta-Div-quienes" );
        $("#cookies").addClass( "oculta-Div-quienes" );
        $("#politicas").addClass( "oculta-Div-quienes" );
        $("#terminosCondicionesZaabraProfesional").addClass( "oculta-Div-quienes" );
        $("#terminosCondiciones").removeClass( "oculta-Div-quienes" );
    })
})


$(document).ready(function() {
    $("#preguntas-cel").addClass( "oculta-Div-quienes" );
    $("#cookies-cel").addClass( "oculta-Div-quienes" );
    $("#politicas-cel").addClass( "oculta-Div-quienes" );


    $("#btn-quienes-somos-cel" ).click(function() {   
        $("#quienes-cel").removeClass( "oculta-Div-quienes" );
        $("#preguntas-cel").addClass( "oculta-Div-quienes" );
        $("#cookies-cel").addClass( "oculta-Div-quienes" );
        $("#politicas-cel").addClass( "oculta-Div-quienes" );
    })
    $("#btn-preguntas-cel" ).click(function() {   
        $("#preguntas-cel").removeClass( "oculta-Div-quienes" );
        $("#quienes-cel").addClass( "oculta-Div-quienes" );
        $("#cookies-cel").addClass( "oculta-Div-quienes" );
        $("#politicas-cel").addClass( "oculta-Div-quienes" );

    })
    $("#btn-cookies-cel" ).click(function() { 
        $("#quienes-cel").addClass( "oculta-Div-quienes" );
        $("#preguntas-cel").addClass( "oculta-Div-quienes" );
        $("#cookies-cel").removeClass( "oculta-Div-quienes" );
        $("#politicas-cel").addClass( "oculta-Div-quienes" );
    })
    $("#btn-politicas-cel" ).click(function() { 
        $("#quienes-cel").addClass( "oculta-Div-quienes" );
        $("#preguntas-cel").addClass( "oculta-Div-quienes" );
        $("#cookies-cel").addClass( "oculta-Div-quienes" );
        $("#politicas-cel").removeClass( "oculta-Div-quienes" );
    })
    $("#btn-atras-quienes-cel" ).click(function() { 
        $("#quienes-cel").removeClass( "oculta-Div-quienes" );
        $("#preguntas-cel").addClass( "oculta-Div-quienes" );
        $("#cookies-cel").addClass( "oculta-Div-quienes" );
        $("#politicas-cel").addClass( "oculta-Div-quienes" );
    })
    $("#btn-atras-preguntas-cel" ).click(function() { 
        $("#quienes-cel").addClass( "oculta-Div-quienes" );
        $("#preguntas-cel").removeClass( "oculta-Div-quienes" );
        $("#cookies-cel").addClass( "oculta-Div-quienes" );
        $("#politicas-cel").addClass( "oculta-Div-quienes" );
    })
    $("#btn-atras-cookies-cel" ).click(function() { 
        $("#quienes-cel").addClass( "oculta-Div-quienes" );
        $("#preguntas-cel").addClass( "oculta-Div-quienes" );
        $("#cookies-cel").removeClass( "oculta-Div-quienes" );
        $("#politicas-cel").addClass( "oculta-Div-quienes" );
    })
})


$(document).ready(function() {
    $("#preguntas").addClass( "oculta-Div-quienes" );
    $("#cookies").addClass( "oculta-Div-quienes" );
    $("#politicas").addClass( "oculta-Div-quienes" );

    $("#li_preguntas" ).click(function() {   
        $("#quienes").removeClass( "oculta-Div-quienes" );
        $("#preguntas").addClass( "oculta-Div-quienes" );
        $("#cookies").addClass( "oculta-Div-quienes" );
        $("#politicas").addClass( "oculta-Div-quienes" );
    })
    $("#li_cookies" ).click(function() { 
        $("#quienes").addClass( "oculta-Div-quienes" );
        $("#preguntas").addClass( "oculta-Div-quienes" );
        $("#cookies").removeClass( "oculta-Div-quienes" );
        $("#politicas").addClass( "oculta-Div-quienes" );
    })
    $("#li_politicas" ).click(function() { 
        $("#quienes").addClass( "oculta-Div-quienes" );
        $("#preguntas").addClass( "oculta-Div-quienes" );
        $("#cookies").addClass( "oculta-Div-quienes" );
        $("#politicas").removeClass( "oculta-Div-quienes" );
    })
    $("#li_quienes" ).click(function() {   
        $("#preguntas").removeClass( "oculta-Div-quienes" );
        $("#quienes").addClass( "oculta-Div-quienes" );
        $("#cookies").addClass( "oculta-Div-quienes" );
        $("#politicas").addClass( "oculta-Div-quienes" );

    })
})

$(window).load(function() {
	$("#botton-quienes-subir").click(function(){  //referimos el elemento ( clase o identificador de acción )
		$("html, body, #politicas-cel").animate({scrollTop:0}, 'slow'); //seleccionamos etiquetas,clase o identificador destino, creamos animación hacia top de la página.
		return false;
	});
});
