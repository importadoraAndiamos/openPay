function retornarValorElementoLocal(element){

    if(localStorage.getItem(element) != null){
        var valor = localStorage.getItem(element);; //contador inicial
    }else{
        var valor = 1; //contador inicial
    }
    return valor;

}
function setValorElementoLocal(element,valor){

    if(localStorage.getItem(element) != null){
        localStorage.removeItem(element);
        localStorage.setItem(element, valor);
    }else{
        localStorage.setItem(element, valor);
    }
}