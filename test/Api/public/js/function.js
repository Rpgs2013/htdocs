window.onload = function (){
    $('#my-button').on('click', function(){  
        
        $.get({
            url : 'http://localhost:8080/hello',

            error: function(response){
                console.log(response);
            },

            success: function(response) {
                $('#txtMessage').html(response.message);
            }
        })

    });

    $('#my-button2').on('click', function(){  
        
        $.get({
            url : 'http://localhost:8080/hello',

            error: function(response){
                console.log(response);
            },

            success: function(response) {
                $('#txtMessage').html(response.message);
            }
        })

    });
}