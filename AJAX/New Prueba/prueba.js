if(document.forms.lengh > 0) {
    for(var i = 0; i < document.forms[0].elements.length; i++) {
        var campo = document.forms[0].elements[i];
        if(campo.type != "hidden") {
            campo.focus();
            console.log("funciona");
            break
        }
    }
}

/*function sendForm() {
    if() {
        
    }
}*/