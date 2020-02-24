window.onload = function() {
    document.getElementById("btnGuardar").onclick = guardar;
}

function guardar() {
    let nombreForm = document.getElementById("nombre");
    let expRegNombre = /^[AM][a-z]{1,20}$/;
    if(!validar.test(expRegNombre, nombreForm)) {
        alert("El nombre es incorrecto");
        nombreForm.value = "";
        nombreFrom.focus();
        return false;
    }

    let edadForm = document.getElementById("edad");
    let expRegEdad = /^([1-9][89][2-9][0-9])}$/;
    if(!validar.test(expRegEdad, edadForm)) {
        alert("El edad es incorrecto");
        nombreForm.value = "";
        nombreFrom.focus();
        return false;
    }

    function validar(expReg, campo) {
        if(!expReg.test(campo.value == null || campo.value.length == 0
            || /^\s*$/.est(campo.value))) {
                return false;
        } else {
            if(!expReg.test(campo.value)) {
                return false;
            }
        }
    }
}