$("#boton_mostrar").click(function(){

    $.post(
        "index.php",
        {

            peticion: "getUsers"

        },
        function(data, status){
        }

    )


})