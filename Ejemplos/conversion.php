<?php 

/* Crear "conversion.php"
Una variable que guarde un valor númerico y otra variable que contenga la frase "burguer king es mejor que mcdonald"
Sumar las dos variables y aplicar funciones para saber de qué tipo es. */

$num = 2;

$frase = "burguer king es mejor que mcdonald";

$total = $num + (int)$frase;

echo var_dump(is_array($total)) . "<br>";
echo var_dump(is_bool($total)) . "<br>";
echo var_dump(is_float($total)) . "<br>";
echo var_dump(is_string($total)) . "<br>";
echo var_dump(is_object($total)) . "<br>";
echo var_dump(is_int($total)) . "<br>";

?>