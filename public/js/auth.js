function aceptoTerminos() {
    
    if ($('#acepto2').is(':checked') ) {
        $("#acepto").prop('checked', true); 
    }else{
        $("#acepto").prop('checked', false); 
    }

};
