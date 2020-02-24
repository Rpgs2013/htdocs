window.onload = function() {
    $('#boton').click(function() {

        let palabra1 = document.getElementById("palabra1").value;
        let palabra2 = document.getElementById("palabra2").value;
        $.post(
            'client2.php',
            {
                palabra1: palabra1,
                palabra2: palabra2
            },
            function(data, status) {
                document.write(data);
            }
        )
    });

    /* $('#boton2').click(function() {

        let palabra1 = document.getElementById("palabra1").value;
        let palabra2 = document.getElementById("palabra2").value;
        $.post(
            'client2.php',
            {
                palabra1: palabra1,
                palabra2: palabra2,
                form: '2'
            },
            function(data, status) {
                document.write(data);
            }
        )
    }); */
}
