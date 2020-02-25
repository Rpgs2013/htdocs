window.onload = function() {
    document.getElementById("btnGuardar").onclick = guardar;
}

function guardar() {
    let nombreForm = document.getElementById("nombre");
    let expRegNombre = /^[A-Z][a-z]{1,20}$/;
    if(!validar(expRegNombre, nombreForm)) {
        alert("El nombre es incorrecto");
        nombreForm.value = "";
        nombreForm.focus();
        return false;
    }

    let edadForm = document.getElementById("edad");
    let expRegEdad = /^([1-9][89]|[2-9][0-9])$/;
    if(!validar(expRegEdad, edadForm)) {
        alert("El edad es incorrecto");
        nombreForm.value = "";
        nombreForm.focus();
        return false;
    }

    let persona = {
        nombre: nombreForm.value,
        edad: edadForm.value
    }

    localStorage.setItem(nombreForm.value, JSON.stringify(persona));

    function validar(expReg, campo) {
        console.log("Estoy aqui"+campo.value+" - "+expReg);
        if(campo.value == null || campo.value.length == 0
            || /^\s*$/.test(campo.value)) {
                return false;
        } else {
            if(!expReg.test(campo.value)) {
                return false;
            }
        }
        return true;
    }
}