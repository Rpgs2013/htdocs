<?php
$name = $_POST["nombre"];
$toAddr = $_POST["correo"];  
$fromAddr = 'elansia15@gmail.com';
$header = "From: $name <$fromAddr>";
$subject = 'test email';
$message = 'Test passed!';
$result = mail ($toAddr, $subject, $message, $header);
exit(($result) ? 'Sent' : '<b>Not sent!</b>');
?>