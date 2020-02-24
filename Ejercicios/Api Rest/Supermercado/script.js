$("#boton").click(function() {
    alert("Va bien");
    $.get("http://localhost:8080/getAllProducts"), function(data) {
        alert(data);
    };
});