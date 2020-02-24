$(function() {
    console.log("Funciona");

    $('#search').keyup(function() {
        let search = $('#search').val();
        console.log(search);
        $.ajax({
            url: 'task-search.php',
            type: 'POST',
            data: { "search": search },
            sucess: function() {
                console.log(response);
            }
        });
    })
})