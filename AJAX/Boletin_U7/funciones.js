window.onload = function(){

$("#origen").change(function(){

    var origen = document.getElementById("origen");
    var valor = origen.options[origen.selectedIndex].value;
    document.getElementById("destino").style.display = "block"
    

    $.post(
        "server.php",
        {
 
            origen: valor

        },
        function(data, status){

            if(document.getElementById("opcion_1") != null){

                document.getElementById("opcion_1").remove();

            }

            var destinos = document.getElementById("destino");
            destinos.innerHTML = "";

            data = $.parseJSON(data);
            data.forEach(element => {
                
                var opcion = new Option(element, element.toLowerCase());
                $(opcion).html(element);
                $("#destino").append(opcion);

            });

        }
    )
});

}

