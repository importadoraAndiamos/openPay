$(document).ready(function() {
    areaActual = retornarValorElementoLocal("areaActual");

    if (areaActual =="Economico"){
        $(".contains-nombre").css("background-color", "#fc9149");
    }
    if (areaActual =="Salud"){
        $(".contains-nombre").css("background-color", "#05908b");
    }
    if (areaActual =="Ingenieria"){
        
    }
    if (areaActual =="Docente"){
        $(".contains-nombre").css("background-color", "#0086b5");
    }
    if (areaActual =="Tecnologo"){
        $(".contains-nombre").css("background-color", "#925684");
    }
    if (areaActual =="Estudiantes"){
        
    }

})



