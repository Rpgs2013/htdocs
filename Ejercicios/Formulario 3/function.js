	



	$(document).ready(function() {
		$("#testAJAX").click(function() {

			var nombre = document.getElementById("user").value;
			var contra = document.getElementById("password").value;

				$.post("test.php",
				{
					user: nombre, password: contra
				}, function(data) {
					$("#result").hml(data);
				});
		});
	});