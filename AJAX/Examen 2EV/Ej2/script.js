window.onload=function(){
    document.getElementById("btnGuardar").onclick = guardar;
    document.getElementById("btnPintar").onclick = pintar;
    document.getElementById("btnRecuperar").onclick = recuperar;
}


function guardar() {
    var nombreForm = document.getElementById("nombre");
    var expRegNombre =/^[A-Z][a-z]{3,25}$/;
    if(!validar(expRegNombre, nombreForm)){
        alert("El nombre es invalido");
        nombreForm.value ="";
        nombreForm.focus();
        return false;
    }
    var duracionForm = document.getElementById("duracion");
    var expRegDuracion =/^(6[0-0]|[1-5][0-9]|[6-9])$/;
    if(!validar(expRegDuracion, duracionForm)){
        alert("La duracion es invalida");
        nombreForm.value ="";
        nombreForm.focus();
        return false;
    }

    var codForm = document.getElementById("codigo");
    var expRegCod =/^[C]-[7,9][0-9][0-9][0-9][0-9]$/;
    if(!validar(expRegCod, codForm)){
        alert("El codigo es invalido");
        nombreForm.value ="";
        nombreForm.focus();
        return false;
    }
    
    var tipoForm = document.getElementById("tipo");
    var expRegTipo =/^\postre|\bentrante|\bprincipal$/;
    if(!validar(expRegTipo, tipoForm)){
        alert("El tipo es invalido");
        nombreForm.value ="";
        nombreForm.focus();
        return false;
    }

    var receta = {
        nombre:nombreForm.value,
        duracion:duracionForm.value,
        codigo:codForm.value,
        tipo:tipoForm.value
    }
    localStorage.setItem(nombreForm.value, JSON.stringify(receta));
    alert("Almacenado con exito");
    
}

function validar(expReg, campo) {
    if(campo.value == null || campo.value.length == 0 || /^\s*$/.test(campo.value))  {
        return false;
    } else {
        if(!expReg.test(campo.value)){
            return false;
        }
    }
    return true;
}

function pintar() {
        for(i = 0; i < localStorage.length; i++) {
            var keyLocal = localStorage.key(i);
            var localValue = JSON.parse(localStorage.getItem(keyLocal));
            var li = document.createElement("li");
            var texto = document.createTextNode(localValue.nombre + " - "+localValue.duracion + " - " + localValue.codigo + " - " + localValue.tipo);
            li.appendChild(texto);
            document.getElementById("datos").appendChild(li);
        }
}

function recuperar() {

    var Nombre = document.getElementById("nombre").value;

    var localValue = localStorage.getItem(Nombre);
    console.log(" El dato ha sido recuperado: " + localValue);
    console.log(JSON.parse(localValue));

    for(i = 0; i < localStorage.length; i++) {
        console.log(localStorage.key(i));
    }

    localStorage.getItem(i);
}