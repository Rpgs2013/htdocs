window.onload = function(){

    $("#mostrar_jugadores").click(function(){

        $.get( "http://localhost:8080/jugadores", 
        
        function( data, status ) {

            var obj = JSON.parse(data);
            console.log(obj);

        });

    })

    $("#buscar_jugador").click(function(){

        var id_jugador = document.getElementById("id_jugador").value;
        
        $.get("http://localhost:8080/jugadores/" + id_jugador,
        
            function(data, status){

                var obj = JSON.parse(data);
                console.log(obj);

            }
        )

    })

    $("#insertar_jugador").click(function(){

        $.post("http://localhost:8080/insertJugador",

        {

            nombre_jugador: document.getElementById("nombre_jugador").value,
            edad_jugador: document.getElementById("edad_jugador").value,
            nacionalidad_jugador: document.getElementById("nacionalidad_jugador").value,
            id_equipo: document.getElementById("id_equipo").value

        },
        function(data, status){

            console.log("a")

        }

        )

    })

}


