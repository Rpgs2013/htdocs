window.onload = function() {
  $("#boton").click(function() {
    var palabra1 = document.getElementById("palabra1").value;
    var palabra2 = document.getElementById("palabra2").value;
    $.post(
      "index.php",
      {
        palabra1: palabra1,
        palabra2: palabra2
      },
      function(data, status) {
        document.write(data);
      }
    );
  });
};
