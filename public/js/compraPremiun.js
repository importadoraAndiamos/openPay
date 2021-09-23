
$('#btnPagarPremium2').click(function() {
    if( $('#cboxProf').is(':checked') ) {
        var datos = {'compra' :'1'}
    }
    if( $('#cboxTec').is(':checked') ) {
        var datos = {'compra' :'2'}
    }
    if( $('#cboxDoc').is(':checked') ) {
        var datos = {'compra' :'3'}
    }
    if( $('#cboxEst').is(':checked') ) {
        var datos = {'compra' :'4'}
    }

    compraPremiun(datos);
});

$("#Profesional").show();
$("#Tecnolgo").hide();
$("#Docente").hide();
$("#Estudiante").hide();


$( '#cboxProf' ).on( 'click', function() {
    $("#cboxTec").prop('checked', false); 
    $("#cboxDoc").prop('checked', false); 
    $("#cboxEst").prop('checked', false); 
    $("#Profesional").show();
    $("#Tecnolgo").hide();
    $("#Docente").hide();
    $("#Estudiante").hide();

    $("#valorMenbresia").text('$ 1.190.000');
    $("#valorTipoMenbresia").text('Profesional');
    $("#valorTipoPlan").text('Plan Anual');


});
$( '#cboxTec' ).on( 'click', function() {
    $("#cboxProf").prop('checked', false); 
    $("#cboxDoc").prop('checked', false); 
    $("#cboxEst").prop('checked', false); 
    $("#Tecnolgo").show();
    $("#Profesional").hide();
    $("#Docente").hide();
    $("#Estudiante").hide();
    $("#valorMenbresia").text('$ 690.000');
    $("#valorTipoMenbresia").text('Tecnólogo');
    $("#valorTipoPlan").text('Plan Anual');
    
});
$( '#cboxDoc' ).on( 'click', function() {
    $("#cboxProf").prop('checked', false); 
    $("#cboxTec").prop('checked', false); 
    $("#cboxEst").prop('checked', false); 
    $("#Docente").show();
    $("#Tecnolgo").hide();
    $("#Profesional").hide();
    $("#Estudiante").hide();
    $("#valorMenbresia").text('$ 290.000');
    $("#valorTipoMenbresia").text('Docente');
    $("#valorTipoPlan").text('Plan Semestral');

});
$( '#cboxEst' ).on( 'click', function() {
    $("#cboxProf").prop('checked', false); 
    $("#cboxDoc").prop('checked', false); 
    $("#cboxTec").prop('checked', false); 
    $("#Estudiante").show();
    $("#Tecnolgo").hide();
    $("#Profesional").hide();
    $("#Docente").hide();
    $("#valorMenbresia").text('$ 200.000');
    $("#valorTipoMenbresia").text('Estudiante');
    $("#valorTipoPlan").text('Plan Semestral');
    
});



//version Celular
$('#btnPagarPremium2-cell').click(function() {
    if( $('#cboxProf-cell').is(':checked') ) {
        var datos = {'compra' :'1'}
    }
    if( $('#cboxTec-cell').is(':checked') ) {
        var datos = {'compra' :'2'}
    }
    if( $('#cboxDoc-cell').is(':checked') ) {
        var datos = {'compra' :'3'}
    }
    if( $('#cboxEst-cell').is(':checked') ) {
        var datos = {'compra' :'4'}
    }

    compraPremiun(datos);
});

$("#Profesional-cell").show();
$("#Tecnolgo-cell").hide();
$("#Docente-cell").hide();
$("#Estudiante-cell").hide();


$( '#cboxProf-cell' ).on( 'click', function() {
    $("#cboxTec-cell").prop('checked', false); 
    $("#cboxDoc-cell").prop('checked', false); 
    $("#cboxEst-cell").prop('checked', false); 
    $("#Profesional-cell").show();
    $("#Tecnolgo-cell").hide();
    $("#Docente-cell").hide();
    $("#Estudiante-cell").hide();

    $("#valorMenbresia-cell").text('$ 1.190.000');
    $("#valorTipoMenbresia-cell").text('Profesional');
    $("#valorTipoPlan-cell").text('Plan Anual');


});
$( '#cboxTec-cell' ).on( 'click', function() {
    $("#cboxProf-cell").prop('checked', false); 
    $("#cboxDoc-cell").prop('checked', false); 
    $("#cboxEst-cell").prop('checked', false); 
    $("#Tecnolgo-cell").show();
    $("#Profesional-cell").hide();
    $("#Docente-cell").hide();
    $("#Estudiante-cell").hide();
    $("#valorMenbresia-cell").text('$ 690.000');
    $("#valorTipoMenbresia-cell").text('Tecnólogo');
    $("#valorTipoPlan-cell").text('Plan Anual');
    
});
$( '#cboxDoc-cell' ).on( 'click', function() {
    $("#cboxProf-cell").prop('checked', false); 
    $("#cboxTec-cell").prop('checked', false); 
    $("#cboxEst-cell").prop('checked', false); 
    $("#Docente-cell").show();
    $("#Tecnolgo-cell").hide();
    $("#Profesional-cell").hide();
    $("#Estudiante-cell").hide();
    $("#valorMenbresia-cell").text('$ 290.000');
    $("#valorTipoMenbresia-cell").text('Docente');
    $("#valorTipoPlan-cell").text('Plan Semestral');

});
$( '#cboxEst-cell' ).on( 'click', function() {
    $("#cboxProf-cell").prop('checked', false); 
    $("#cboxDoc-cell").prop('checked', false); 
    $("#cboxTec-cell").prop('checked', false); 
    $("#Estudiante-cell").show();
    $("#Tecnolgo-cell").hide();
    $("#Profesional-cell").hide();
    $("#Docente-cell").hide();
    $("#valorMenbresia-cell").text('$ 200.000');
    $("#valorTipoMenbresia-cell").text('Estudiante');
    $("#valorTipoPlan-cell").text('Plan Semestral');
    
});



function compraPremiun(datos){
    
    $.ajax({
        dataType: "json",
        url: 'guardarCompraPremiun',
        data: datos,
        method: "GET",
        success: function(xhr) {
            //toma la url que retorna el servicio y lo envia al formulario de pago 
            window.location.replace(xhr.url);
        },
        error: function(xhr, status) {
           // console.log(status)
           if( JSON.parse(xhr.responseText).message == "Unauthenticated."){
            window.location ="/login";
           }
        }
    });
    
}

/*  esto es para cuando el servicio es por PayU
function crearFormPayU() {
    html_form = '<form id="formPay" method="post" action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/">' +
        '<input name="merchantId" id="merchantId"    type="hidden"  value=""   >' +
        '<input name="accountId" id="accountId"  type="hidden"  value="" >' +
        '<input name="description" id="description"  type="hidden"  value=""  >' +
        '<input name="referenceCode" id="referenceCode" type="hidden"  value="" >' +
        '<input name="amount" id="amount"    type="hidden"  value=""   >' +
        '<input name="tax" id="tax"  type="hidden"  value=""  >' +
        '<input name="taxReturnBase" id="taxReturnBase" type="hidden"  value="" >' +
        '<input name="currency" id="currency"   type="hidden"  value="" >' +
        '<input name="signature" id="signature"   type="hidden"  value=""  >' +
        '<input name="test" id="test"  type="hidden"  value="" >' +
        '<input name="buyerEmail" id="buyerEmail"   type="hidden"  value="" >' +
        '<input name="responseUrl" id="responseUrl"  type="hidden"  value="" >' +
        '<input name="confirmationUrl" id="confirmationUrl"  type="hidden"  value="" >' +
        '</form>';
    $(".formularioPagoPremiun").append(html_form);
}
crearFormPayU();*/