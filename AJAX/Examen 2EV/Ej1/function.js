window.onload = function () {

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var misDatos = this.responseText;
            var miObjetoDatos = eval("(" + misDatos + ")");
            console.log(miObjetoDatos);

            lista(miObjetoDatos);

        } else if (this.readyState == 4 && this.status == 404) {
            window.addEventListener('error', function (e) {
                document.getElementById("list").innerHTML = e;
            }, true);

        }
    }

    xmlhttp.open("GET", "http://www.json-generator.com/api/json/get/cgzkOeKKnC?indent=2", true);
    xmlhttp.send();
}

function lista(miObjetoDatos) {

    var json = JSON.parse(JSON.stringify(miObjetoDatos));

    json.Recetas.forEach((nombre) => {

        var ul = document.createElement("ul");
        var li = document.createElement("li");

        nombre = document.createTextNode(nombre.nombre + " (Dificultad: " + nombre.dificultad + ", duracion: " + nombre.duracion + ")");
        li.appendChild(nombre);
        ul.appendChild(li);

        document.getElementById("list").appendChild(ul);
    });

    document.getElementById("btn").onclick = function () {

        var search = document.getElementById("text").value;

        json.Recetas.forEach((nombre, i) => {

            name = nombre.nombre;

            if (name.includes(search)) {

                nombre.ingredientes.forEach((ingrediente, j) => {

                    var ul = document.createElement("ul");
                    var li = document.createElement("li");

                    var comida = document.createTextNode(ingrediente);
                    li.appendChild(comida);
                    ul.appendChild(li);

                    document.getElementById("ingredient").appendChild(ul);
                })
            }
        })
    }
}