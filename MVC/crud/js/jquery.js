$(function() {
    $("#signin").click(function() {
        let name = $('form[name=register] input[name=name]')
        $.ajax({
            url: 'http://localhost:81/MVC/crud/',
            type: 'POST',
            data: 'data',
            sucess: function() {
                console.log(response);
            }
        });
    })
}