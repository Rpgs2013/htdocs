<?php 
    $palabra = "hollaa";
    $trozos = str_split($palabra);
    $sin = array_unique($trozos);
    $final = implode($sin);
    echo $final;
?>