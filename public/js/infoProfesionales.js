$(window).load(function() {
    $('#toggle').click(function() {
        $('.slide-in').toggleClass('show');
    });
    $('#toggle').trigger('click');
});

$(window).load(function() {
    $('#botonmuestra').click(function() {
        $('.doors').addClass('in');
    });
    $('#botonmuestra').removeClass('in');
});


$(document).ready(function() {


    $("#divEstudios").addClass( "boton-carrusel-hover");
    $("#contenedor-publicaciones").addClass( "oculto" );
    $("#contenedor-asociaciones").addClass( "oculto" );
    $("#contenedor-procedimientos").addClass( "oculto" );
    $("#contenedor-trataminetos").addClass( "oculto" );
    $("#contenedor-testimonios").addClass( "oculto" );


    $("#divEstudios" ).click(function() {       
        $("#divPublicaciones").removeClass( "boton-carrusel-hover");
        $("#spanPublicaciones").removeClass( "spanhover");
        $("#divAsociaciones").removeClass( "boton-carrusel-hover");
        $("#spanAsociaciones").removeClass( "spanhover");
        $("#divProcedimientos").removeClass( "boton-carrusel-hover");
        $("#spanProcedimientos").removeClass( "spanhover");
        $("#divTrataminetos").removeClass( "boton-carrusel-hover");
        $("#spanTratamientos").removeClass( "spanhover");
        $("#divTestimonios").removeClass( "boton-carrusel-hover");
        $("#spanTestimonios").removeClass( "spanhover");
        $("#divEstudios").addClass( "boton-carrusel-hover");



        $("#contenedor-certificados").addClass( "oculto" );
        $("#contenedor-publicaciones").addClass( "oculto" );
        $("#contenedor-asociaciones").addClass( "oculto" );
        $("#contenedor-procedimientos").addClass( "oculto" );
        $("#contenedor-trataminetos").addClass( "oculto" );
        $("#contenedor-testimonios").addClass( "oculto" );
        $("#contenedor-estudios").removeClass( "oculto" )
    }); 

    $("#divCertificados" ).click(function() {
        $("#divPublicaciones").removeClass( "boton-carrusel-hover");
        $("#spanPublicaciones").removeClass( "spanhover");
        $("#divAsociaciones").removeClass( "boton-carrusel-hover");
        $("#spanAsociaciones").removeClass( "spanhover");
        $("#divProcedimientos").removeClass( "boton-carrusel-hover");
        $("#spanProcedimientos").removeClass( "spanhover");
        $("#divTrataminetos").removeClass( "boton-carrusel-hover");
        $("#spanTratamientos").removeClass( "spanhover");
        $("#divTestimonios").removeClass( "boton-carrusel-hover");
        $("#spanTestimonios").removeClass( "spanhover");
        $("#divEstudios").removeClass( "boton-carrusel-hover");
        $("#spanEstudios").removeClass( "spanhover");
        $("#divCertificados").addClass( "boton-carrusel-hover");
   


        $("#contenedor-certificados").removeClass( "oculto" );
        $("#contenedor-publicaciones").addClass( "oculto" );
        $("#contenedor-asociaciones").addClass( "oculto" );
        $("#contenedor-procedimientos").addClass( "oculto" );
        $("#contenedor-trataminetos").addClass( "oculto" );
        $("#contenedor-testimonios").addClass( "oculto" );
        $("#contenedor-estudios").addClass( "oculto" )
    });  

    $("#divPublicaciones" ).click(function() {
        $("#divAsociaciones").removeClass( "boton-carrusel-hover");
        $("#spanAsociaciones").removeClass( "spanhover");
        $("#divProcedimientos").removeClass( "boton-carrusel-hover");
        $("#spanProcedimientos").removeClass( "spanhover");
        $("#divTrataminetos").removeClass( "boton-carrusel-hover");
        $("#spanTratamientos").removeClass( "spanhover");
        $("#divTestimonios").removeClass( "boton-carrusel-hover");
        $("#spanTestimonios").removeClass( "spanhover");
        $("#divEstudios").removeClass( "boton-carrusel-hover");
        $("#spanEstudios").removeClass( "spanhover");
        $("#divCertificados").removeClass( "boton-carrusel-hover");
        $("#spanCertificados").removeClass( "spanhover");
        $("#divPublicaciones").addClass( "boton-carrusel-hover");
   


        $("#contenedor-certificados").addClass( "oculto" );
        $("#contenedor-publicaciones").removeClass( "oculto" );
        $("#contenedor-asociaciones").addClass( "oculto" );
        $("#contenedor-procedimientos").addClass( "oculto" );
        $("#contenedor-trataminetos").addClass( "oculto" );
        $("#contenedor-testimonios").addClass( "oculto" );
        $("#contenedor-estudios").addClass( "oculto" )
    });
    
    
    $("#divAsociaciones" ).click(function() {
        $("#divProcedimientos").removeClass( "boton-carrusel-hover");
        $("#spanProcedimientos").removeClass( "spanhover");
        $("#divTrataminetos").removeClass( "boton-carrusel-hover");
        $("#spanTratamientos").removeClass( "spanhover");
        $("#divTestimonios").removeClass( "boton-carrusel-hover");
        $("#spanTestimonios").removeClass( "spanhover");
        $("#divEstudios").removeClass( "boton-carrusel-hover");
        $("#spanEstudios").removeClass( "spanhover");
        $("#divCertificados").removeClass( "boton-carrusel-hover");
        $("#spanCertificados").removeClass( "spanhover");
        $("#divPublicaciones").removeClass( "boton-carrusel-hover");
        $("#spanPublicaciones").removeClass( "spanhover");
        $("#divAsociaciones").addClass( "boton-carrusel-hover");



        $("#contenedor-certificados").addClass( "oculto" );
        $("#contenedor-publicaciones").addClass( "oculto" );
        $("#contenedor-asociaciones").removeClass( "oculto" );
        $("#contenedor-procedimientos").addClass( "oculto" );
        $("#contenedor-trataminetos").addClass( "oculto" );
        $("#contenedor-testimonios").addClass( "oculto" );
        $("#contenedor-estudios").addClass( "oculto" )
    });

    $("#divProcedimientos" ).click(function() {
        $("#divTrataminetos").removeClass( "boton-carrusel-hover");
        $("#spanTratamientos").removeClass( "spanhover");
        $("#divTestimonios").removeClass( "boton-carrusel-hover");
        $("#spanTestimonios").removeClass( "spanhover");
        $("#divEstudios").removeClass( "boton-carrusel-hover");
        $("#spanEstudios").removeClass( "spanhover");
        $("#divCertificados").removeClass( "boton-carrusel-hover");
        $("#spanCertificados").removeClass( "spanhover");
        $("#divPublicaciones").removeClass( "boton-carrusel-hover");
        $("#spanPublicaciones").removeClass( "spanhover");
        $("#divAsociaciones").removeClass( "boton-carrusel-hover");
        $("#spanAsociaciones").removeClass( "spanhover");
        $("#divProcedimientos").addClass( "boton-carrusel-hover");



        $("#contenedor-certificados").addClass( "oculto" );
        $("#contenedor-publicaciones").addClass( "oculto" );
        $("#contenedor-asociaciones").addClass( "oculto" );
        $("#contenedor-procedimientos").removeClass( "oculto" );
        $("#contenedor-trataminetos").addClass( "oculto" );
        $("#contenedor-testimonios").addClass( "oculto" );
        $("#contenedor-estudios").addClass( "oculto" )
    });

    $("#divTrataminetos" ).click(function() {
        $("#divTestimonios").removeClass( "boton-carrusel-hover");
        $("#spanTestimonios").removeClass( "spanhover");
        $("#divEstudios").removeClass( "boton-carrusel-hover");
        $("#spanEstudios").removeClass( "spanhover");
        $("#divCertificados").removeClass( "boton-carrusel-hover");
        $("#spanCertificados").removeClass( "spanhover");
        $("#divPublicaciones").removeClass( "boton-carrusel-hover");
        $("#spanPublicaciones").removeClass( "spanhover");
        $("#divAsociaciones").removeClass( "boton-carrusel-hover");
        $("#spanAsociaciones").removeClass( "spanhover");
        $("#divProcedimientos").removeClass( "boton-carrusel-hover");
        $("#spanProcedimientos").removeClass( "spanhover");
        $("#divTrataminetos").addClass( "boton-carrusel-hover");



        $("#contenedor-certificados").addClass( "oculto" );
        $("#contenedor-publicaciones").addClass( "oculto" );
        $("#contenedor-asociaciones").addClass( "oculto" );
        $("#contenedor-procedimientos").addClass( "oculto" );
        $("#contenedor-trataminetos").removeClass( "oculto" );
        $("#contenedor-testimonios").addClass( "oculto" );
        $("#contenedor-estudios").addClass( "oculto" )
    });
    
    $("#divTestimonios" ).click(function() {
        $("#divEstudios").removeClass( "boton-carrusel-hover");
        $("#spanEstudios").removeClass( "spanhover");
        $("#divCertificados").removeClass( "boton-carrusel-hover");
        $("#spanCertificados").removeClass( "spanhover");
        $("#divPublicaciones").removeClass( "boton-carrusel-hover");
        $("#spanPublicaciones").removeClass( "spanhover");
        $("#divAsociaciones").removeClass( "boton-carrusel-hover");
        $("#spanAsociaciones").removeClass( "spanhover");
        $("#divProcedimientos").removeClass( "boton-carrusel-hover");
        $("#spanProcedimientos").removeClass( "spanhover");
        $("#divTrataminetos").removeClass( "boton-carrusel-hover");
        $("#spanTratamientos").removeClass( "spanhover");
        $("#divTestimonios").addClass( "boton-carrusel-hover");


        $("#contenedor-certificados").addClass( "oculto" );
        $("#contenedor-publicaciones").addClass( "oculto" );
        $("#contenedor-asociaciones").addClass( "oculto" );
        $("#contenedor-procedimientos").addClass( "oculto" );
        $("#contenedor-trataminetos").addClass( "oculto" );
        $("#contenedor-testimonios").removeClass( "oculto" );
        $("#contenedor-estudios").addClass( "oculto" )
    });  
})




$(document).ready(function() {

    $("#divEstudios-cel").addClass( "boton-carrusel-hover");
    $("#contenedor-publicaciones-cel").addClass( "oculto" );
    $("#contenedor-asociaciones-cel").addClass( "oculto" );
    $("#contenedor-procedimientos-cel").addClass( "oculto" );
    $("#contenedor-trataminetos-cel").addClass( "oculto" );
    $("#contenedor-testimonios-cel").addClass( "oculto" );


    $("#divEstudios-cel" ).click(function() {       
        $("#divAsociaciones-cel").removeClass( "boton-carrusel-hover");
        $("#spanAsociaciones").removeClass( "spanhover");
        $("#divProcedimientos-cel").removeClass( "boton-carrusel-hover");
        $("#spanProcedimientos").removeClass( "spanhover");
        $("#divTrataminetos-cel").removeClass( "boton-carrusel-hover");
        $("#spanTratamientos").removeClass( "spanhover");
        $("#divTestimonios-cel").removeClass( "boton-carrusel-hover");
        $("#spanTestimonios").removeClass( "spanhover");
        $("#divEstudios-cel").addClass( "boton-carrusel-hover");


        $("#contenedor-certificados-cel").addClass( "oculto" );
        $("#contenedor-publicaciones-cel").addClass( "oculto" );
        $("#contenedor-asociaciones-cel").addClass( "oculto" );
        $("#contenedor-procedimientos-cel").addClass( "oculto" );
        $("#contenedor-trataminetos-cel").addClass( "oculto" );
        $("#contenedor-testimonios-cel").addClass( "oculto" );
        $("#contenedor-estudios-cel").removeClass( "oculto" )
    }); 

    $("#divCertificados-cel" ).click(function() {
        $("#divAsociaciones-cel").removeClass( "boton-carrusel-hover");
        $("#spanAsociaciones").removeClass( "spanhover");
        $("#divProcedimientos-cel").removeClass( "boton-carrusel-hover");
        $("#spanProcedimientos").removeClass( "spanhover");
        $("#divTrataminetos-cel").removeClass( "boton-carrusel-hover");
        $("#spanTratamientos").removeClass( "spanhover");
        $("#divTestimonios-cel").removeClass( "boton-carrusel-hover");
        $("#spanTestimonios").removeClass( "spanhover");
        $("#divEstudios-cel").removeClass( "boton-carrusel-hover");
        $("#spanEstudios").removeClass( "spanhover");
        $("#divCertificados-cel").addClass( "boton-carrusel-hover");



        $("#contenedor-certificados-cel").removeClass( "oculto" );
        $("#contenedor-publicaciones-cel").addClass( "oculto" );
        $("#contenedor-asociaciones-cel").addClass( "oculto" );
        $("#contenedor-procedimientos-cel").addClass( "oculto" );
        $("#contenedor-trataminetos-cel").addClass( "oculto" );
        $("#contenedor-testimonios-cel").addClass( "oculto" );
        $("#contenedor-estudios-cel").addClass( "oculto" )
    });  

    $("#divPublicaciones-cel" ).click(function() {
        $("#divAsociaciones-cel").removeClass( "boton-carrusel-hover");
        $("#spanAsociaciones").removeClass( "spanhover");
        $("#divProcedimientos-cel").removeClass( "boton-carrusel-hover");
        $("#spanProcedimientos").removeClass( "spanhover");
        $("#divTrataminetos-cel").removeClass( "boton-carrusel-hover");
        $("#spanTratamientos").removeClass( "spanhover");
        $("#divTestimonios-cel").removeClass( "boton-carrusel-hover");
        $("#spanTestimonios").removeClass( "spanhover");
        $("#divEstudios-cel").removeClass( "boton-carrusel-hover");
        $("#spanEstudios").removeClass( "spanhover");
        $("#divCertificados-cel").removeClass( "boton-carrusel-hover");
        $("#spanCertificados").removeClass( "spanhover");
        $("#divPublicaciones-cel").addClass( "boton-carrusel-hover");



        $("#contenedor-certificados-cel").addClass( "oculto" );
        $("#contenedor-publicaciones-cel").removeClass( "oculto" );
        $("#contenedor-asociaciones-cel").addClass( "oculto" );
        $("#contenedor-procedimientos-cel").addClass( "oculto" );
        $("#contenedor-trataminetos-cel").addClass( "oculto" );
        $("#contenedor-testimonios-cel").addClass( "oculto" );
        $("#contenedor-estudios-cel").addClass( "oculto" )
    });
    
    
    $("#divAsociaciones-cel" ).click(function() {
        $("#divProcedimientos-cel").removeClass( "boton-carrusel-hover");
        $("#spanProcedimientos").removeClass( "spanhover");
        $("#divTrataminetos-cel").removeClass( "boton-carrusel-hover");
        $("#spanTratamientos").removeClass( "spanhover");
        $("#divTestimonios-cel").removeClass( "boton-carrusel-hover");
        $("#spanTestimonios").removeClass( "spanhover");
        $("#divEstudios-cel").removeClass( "boton-carrusel-hover");
        $("#spanEstudios").removeClass( "spanhover");
        $("#divCertificados-cel").removeClass( "boton-carrusel-hover");
        $("#spanCertificados").removeClass( "spanhover");
        $("#divPublicaciones-cel").removeClass( "boton-carrusel-hover");
        $("#spanPublicaciones").removeClass( "spanhover");
        $("#divAsociaciones-cel").addClass( "boton-carrusel-hover");



        $("#contenedor-certificados-cel").addClass( "oculto" );
        $("#contenedor-publicaciones-cel").addClass( "oculto" );
        $("#contenedor-asociaciones-cel").removeClass( "oculto" );
        $("#contenedor-procedimientos-cel").addClass( "oculto" );
        $("#contenedor-trataminetos-cel").addClass( "oculto" );
        $("#contenedor-testimonios-cel").addClass( "oculto" );
        $("#contenedor-estudios-cel").addClass( "oculto" )
    });

    $("#divProcedimientos-cel" ).click(function() {
        $("#divTrataminetos-cel").removeClass( "boton-carrusel-hover");
        $("#spanTratamientos").removeClass( "spanhover");
        $("#divTestimonios-cel").removeClass( "boton-carrusel-hover");
        $("#spanTestimonios").removeClass( "spanhover");
        $("#divEstudios-cel").removeClass( "boton-carrusel-hover");
        $("#spanEstudios").removeClass( "spanhover");
        $("#divCertificados-cel").removeClass( "boton-carrusel-hover");
        $("#spanCertificados").removeClass( "spanhover");
        $("#divPublicaciones-cel").removeClass( "boton-carrusel-hover");
        $("#spanPublicaciones").removeClass( "spanhover");
        $("#divAsociaciones-cel").removeClass( "boton-carrusel-hover");
        $("#spanAsociaciones").removeClass( "spanhover");
        $("#divProcedimientos-cel").addClass( "boton-carrusel-hover");


        $("#contenedor-certificados-cel").addClass( "oculto" );
        $("#contenedor-publicaciones-cel").addClass( "oculto" );
        $("#contenedor-asociaciones-cel").addClass( "oculto" );
        $("#contenedor-procedimientos-cel").removeClass( "oculto" );
        $("#contenedor-trataminetos-cel").addClass( "oculto" );
        $("#contenedor-testimonios-cel").addClass( "oculto" );
        $("#contenedor-estudios-cel").addClass( "oculto" )
    });

    $("#divTrataminetos-cel" ).click(function() {
        $("#divTestimonios-cel").removeClass( "boton-carrusel-hover");
        $("#spanTestimonios").removeClass( "spanhover");
        $("#divEstudios-cel").removeClass( "boton-carrusel-hover");
        $("#spanEstudios").removeClass( "spanhover");
        $("#divCertificados-cel").removeClass( "boton-carrusel-hover");
        $("#spanCertificados").removeClass( "spanhover");
        $("#divPublicaciones-cel").removeClass( "boton-carrusel-hover");
        $("#spanPublicaciones").removeClass( "spanhover");
        $("#divAsociaciones-cel").removeClass( "boton-carrusel-hover");
        $("#spanAsociaciones").removeClass( "spanhover");
        $("#divProcedimientos-cel").removeClass( "boton-carrusel-hover");
        $("#spanProcedimientos").removeClass( "spanhover");
        $("#divTrataminetos-cel").addClass( "boton-carrusel-hover");



        $("#contenedor-certificados-cel").addClass( "oculto" );
        $("#contenedor-publicaciones-cel").addClass( "oculto" );
        $("#contenedor-asociaciones-cel").addClass( "oculto" );
        $("#contenedor-procedimientos-cel").addClass( "oculto" );
        $("#contenedor-trataminetos-cel").removeClass( "oculto" );
        $("#contenedor-testimonios-cel").addClass( "oculto" );
        $("#contenedor-estudios-cel").addClass( "oculto" )
    });
    
    $("#divTestimonios-cel" ).click(function() {
        $("#divEstudios-cel").removeClass( "boton-carrusel-hover");
        $("#spanEstudios").removeClass( "spanhover");
        $("#divCertificados-cel").removeClass( "boton-carrusel-hover");
        $("#spanCertificados").removeClass( "spanhover");
        $("#divPublicaciones-cel").removeClass( "boton-carrusel-hover");
        $("#spanPublicaciones").removeClass( "spanhover");
        $("#divAsociaciones-cel").removeClass( "boton-carrusel-hover");
        $("#spanAsociaciones").removeClass( "spanhover");
        $("#divProcedimientos-cel").removeClass( "boton-carrusel-hover");
        $("#spanProcedimientos").removeClass( "spanhover");
        $("#divTrataminetos-cel").removeClass( "boton-carrusel-hover");
        $("#spanTratamientos").removeClass( "spanhover");
        $("#divTestimonios-cel").addClass( "boton-carrusel-hover");


        $("#contenedor-certificados-cel").addClass( "oculto" );
        $("#contenedor-publicaciones-cel").addClass( "oculto" );
        $("#contenedor-asociaciones-cel").addClass( "oculto" );
        $("#contenedor-procedimientos-cel").addClass( "oculto" );
        $("#contenedor-trataminetos-cel").addClass( "oculto" );
        $("#contenedor-testimonios-cel").removeClass( "oculto" );
        $("#contenedor-estudios-cel").addClass( "oculto" )
    });  
})






$('#icono-desplegar-landing').click(function() {
    $('#contenedor-span-landing').removeClass("contenedor-span-landing ");
    $('#contenedor-span-landing').addClass(" contenedor-span-landing-click");
});

$(document).ready(function(){
    $("#guardarTestimonio").bind("submit",function(){

        if($('#calificacion').val() == 0){
            $('#modalNoCalificacion').modal('show')
            return false;
        }

        $('#modalTestimonio').modal('show')
        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data:$(this).serialize(),
            beforeSend: function(){

            },
            complete:function(data){
                debugger;
                $('#tempBloqueComentarios').html('');
               
                var i = 1;
                tamañoTestimonios = JSON.parse(data.responseText).length;
                data = JSON.parse(data.responseText);
                data.forEach(item => {
                    $("#tempBloqueComentarios").append(
                        (i > 1 ? '<div  class="collapse multi-collapse" >'  : '' )               
                        +'<div class="col-md-12 usuarioComentario" >'+
                            '<span class="nombre-verificado font-weight-bold font-sizetitulos">'+item.name+'</span>'+
                        '</div>'+
                        '<div class="col-md-12 comentario">'+
                            '<span class="text-uppercase text-black font-sizesubtitulos">'+item.comentario+'</span>'+
                        '</div>'+
                        '<div class="col-md-12 row comentario noPadMar">'+
                        (item.calificacion == 0 ? 
                        '<span  class="far fa-star color-verde "></span>'+
                         '<span  class="far fa-star color-verde "></span>'+
                         '<span  class="far fa-star color-verde "></span>'+
                         '<span  class="far fa-star color-verde "></span>'+
                         '<span  class="far fa-star color-verde "></span>'
                         : '') +
                         (item.calificacion == 1 ? 
                         '<span  class="fas fa-star color-verde "></span>'+
                         '<span  class="far fa-star color-verde "></span>'+
                         '<span  class="far fa-star color-verde "></span>'+
                         '<span  class="far fa-star color-verde "></span>'+
                         '<span  class="far fa-star color-verde "></span>'
                         : '') +
                         (item.calificacion == 2 ? 
                         '<span  class="fas fa-star color-verde "></span>'+
                         '<span  class="fas fa-star color-verde "></span>'+
                         '<span  class="far fa-star color-verde "></span>'+
                         '<span  class="far fa-star color-verde "></span>'+
                         '<span  class="far fa-star color-verde "></span>'
                         : '') +
                         (item.calificacion == 3 ? 
                         '<span  class="fas fa-star color-verde "></span>'+
                         '<span  class="fas fa-star color-verde "></span>'+
                         '<span  class="fas fa-star color-verde "></span>'+
                         '<span  class="far fa-star color-verde "></span>'+
                         '<span  class="far fa-star color-verde "></span>'
                         : '') +
                         (item.calificacion == 4 ? 
                         '<span  class="fas fa-star color-verde "></span>'+
                         '<span  class="fas fa-star color-verde "></span>'+
                         '<span  class="fas fa-star color-verde "></span>'+
                         '<span  class="fas fa-star color-verde "></span>'+
                         '<span  class="far fa-star color-verde " ></span>'
                         : '') +
                         
                         (item.calificacion == 5 ? 
                         '<span  class="fas fa-star color-verde "></span>'+
                         '<span  class="fas fa-star color-verde "></span>'+
                         '<span  class="fas fa-star color-verde "></span>'+
                         '<span  class="fas fa-star color-verde "></span>'+
                         '<span  class="fas fa-star color-verde "></span>'
                         : '')
                      +'</div>'+

                        (i > 1 ? '</div>'  : '' )
                        
                        )
                    i++;
                })
                $('#modalTestimonio').modal('hide')
            }

        })
        debugger;
        // Nos permite cancelar el envio del formulario
        return false;

   
       
    })

})




function enviarFavorito(){
    datos = { 'usuarioLandingPage' : $('#usuarioLandingPage').val()}; 
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        dataType: "json",
        url: 'http://localhost:8000/selecFavorito',
        data: datos,
        method: "POST",
        beforeSend: function(){
        },
        complete:function(data){
           respuesta = data.responseText;
           
           if (respuesta =="Guardo") {
            new Toast({
                message: 'Se ha agregado a favoritos',
                type: 'success'
              });
           }else{
            new Toast({
                message: 'Se ha eliminado de favoritos',
                type: 'danger'
              });
           }


        }
    })
    return false;
}


// Esto para el click de la imagen
$(document).ready(function() {
    


     // Esto es para la version computador
    $("#img-banner-hijo-landing1").addClass( "oculta-img-landing" );
    $("#img-banner-hijo-landing2").addClass( "oculta-img-landing" );
    $("#img-banner-hijo-landing3").addClass( "oculta-img-landing" );
    $("#img-banner-hijo-landing4").addClass( "oculta-img-landing" );
    $("#img-banner-hijo-landing5").addClass( "oculta-img-landing" );
    $("#img-banner-hijo-landingULTIMO").addClass( "oculta-img-landing" );

    // Esto es para la version cel
    $("#img-banner-hijo-landing-cel1").addClass( "oculta-img-landing" );
    $("#img-banner-hijo-landing-cel2").addClass( "oculta-img-landing" );
    $("#img-banner-hijo-landing-cel3").addClass( "oculta-img-landing" );
    $("#img-banner-hijo-landing-cel4").addClass( "oculta-img-landing" );
    $("#img-banner-hijo-landing-cel5").addClass( "oculta-img-landing" );
    $("#img-banner-hijo-landingULTIMO-cel").addClass( "oculta-img-landing" );


// Esto es para la version computador
    $("#div-carrusel-lending-padre1" ).click(function() {
        $("#banner-landing-Page").addClass("oculta-img-landing");
        $("#img-banner-hijo-landing1").removeClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing2").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing3").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing4").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing5").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landingULTIMO").addClass( "oculta-img-landing" );
        
    });

    $("#div-carrusel-lending-padre2" ).click(function() {
        $("#banner-landing-Page").addClass("oculta-img-landing");
        $("#img-banner-hijo-landing1").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing2").removeClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing3").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing4").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing5").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landingULTIMO").addClass( "oculta-img-landing" );
        
    });

    $("#div-carrusel-lending-padre3" ).click(function() {
        $("#banner-landing-Page").addClass("oculta-img-landing");
        $("#img-banner-hijo-landing1").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing2").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing3").removeClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing4").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing5").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landingULTIMO").addClass( "oculta-img-landing" );
        
    });
    $("#div-carrusel-lending-padre4" ).click(function() {
        $("#banner-landing-Page").addClass("oculta-img-landing");
        $("#img-banner-hijo-landing1").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing2").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing3").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing4").removeClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing5").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landingULTIMO").addClass( "oculta-img-landing" );
        
    });
    $("#div-carrusel-lending-padre5" ).click(function() {
        $("#banner-landing-Page").addClass("oculta-img-landing");
        $("#img-banner-hijo-landing1").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing2").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing3").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing4").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing5").removeClass( "oculta-img-landing" );
        $("#img-banner-hijo-landingULTIMO").addClass( "oculta-img-landing" );
        
    });
    $("#div-carrusel-lending-padreULTIMO" ).click(function() {
        $("#banner-landing-Page").addClass("oculta-img-landing");
        $("#img-banner-hijo-landing1").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing2").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing3").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing4").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing5").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landingULTIMO").removeClass( "oculta-img-landing" );
        
    });

// Esto es para la version cel
    $("#div-carrusel-lending-padre-cel1" ).click(function() {
        $("#banner-landing-Page-cel").addClass("oculta-img-landing");
        $("#img-banner-hijo-landing-cel1").removeClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing-cel2").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing-cel3").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing-cel4").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing-cel5").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landingULTIMO-cel").addClass( "oculta-img-landing");
    });
    $("#div-carrusel-lending-padre-cel2" ).click(function() {
        $("#banner-landing-Page-cel").addClass("oculta-img-landing");
        $("#img-banner-hijo-landing-cel1").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing-cel2").removeClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing-cel3").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing-cel4").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing-cel5").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landingULTIMO-cel").addClass( "oculta-img-landing");
    });
    $("#div-carrusel-lending-padre-cel3" ).click(function() {
        $("#banner-landing-Page-cel").addClass("oculta-img-landing");
        $("#img-banner-hijo-landing-cel1").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing-cel2").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing-cel3").removeClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing-cel4").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing-cel5").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landingULTIMO-cel").addClass( "oculta-img-landing");
    });
    $("#div-carrusel-lending-padre-cel4" ).click(function() {
        $("#banner-landing-Page-cel").addClass("oculta-img-landing");
        $("#img-banner-hijo-landing-cel1").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing-cel2").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing-cel3").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing-cel4").removeClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing-cel5").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landingULTIMO-cel").addClass( "oculta-img-landing");
    });
    $("#div-carrusel-lending-padre-cel5" ).click(function() {
        $("#banner-landing-Page-cel").addClass("oculta-img-landing");
        $("#img-banner-hijo-landing-cel1").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing-cel2").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing-cel3").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing-cel4").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing-cel5").removeClass( "oculta-img-landing" );
        $("#img-banner-hijo-landingULTIMO-cel").addClass( "oculta-img-landing");
    });
    $("#div-carrusel-lending-padreULTIMO-cel" ).click(function() {
        $("#banner-landing-Page-cel").addClass("oculta-img-landing");
        $("#img-banner-hijo-landing-cel1").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing-cel2").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing-cel3").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing-cel4").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landing-cel5").addClass( "oculta-img-landing" );
        $("#img-banner-hijo-landingULTIMO-cel").removeClass( "oculta-img-landing");
    });

     //acciones de la landing page
     $(".contains-perfil-profesional").hide();
     $("#contenedor-estudios-cel").hide();
     $(".contains-publicaciones").hide();
     $(".contains-galeria").hide();
     $("#contains-testimonios").hide();
 
     $(".icon-perfil").click(function() {
         $(".contains-perfil-profesional").toggle("650","swing");
         $("#contenedor-estudios-cel").hide();
         $(".contains-publicaciones").hide();
         $(".contains-galeria").hide();
         $("#contains-testimonios").hide();
     });
 
     $(".icon-educacion").click(function() {
         $("#contenedor-estudios-cel").toggle("100", function(){
            jQuery('#carousel-estudios-cel').slick('resize');
            jQuery('#carousel-estudios-cel').slick('refresh');
         });
         $(".contains-perfil-profesional").hide();
         $(".contains-publicaciones").hide();
         $(".contains-galeria").hide();
         $("#contains-testimonios").hide();
         
     });
     $(".icon-publicaciones").click(function() {
        $(".contains-publicaciones").toggle("650","swing");
        $("#contenedor-estudios-cel").hide();
        $(".contains-perfil-profesional").hide();
        $(".contains-galeria").hide();
        $("#contains-testimonios").hide();
    });
    $(".icon-galeria").click(function() {
        $(".contains-galeria").toggle("650","swing");
        $("#contenedor-estudios-cel").hide();
        $(".contains-perfil-profesional").hide();
        $(".contains-publicaciones").hide();
        $("#contains-testimonios").hide();
    });
     $(".icon-testimonios").click(function() {
        $("#contains-testimonios").toggle("650","swing");
        $("#contenedor-estudios-cel").hide();
        $(".contains-perfil-profesional").hide();
        $(".contains-publicaciones").hide();
        $(".contains-galeria").hide();
    });
});

$('.logo-corazon').click(function() {
    $('.logo-corazon').css("font-weight", "900");
});
               


