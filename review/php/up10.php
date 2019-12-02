<?php

$sumatorio = [2,4,5,6,7,8,9];

function sumarArray(array $array){
    $suma = 0;
    foreach($array as $numeros){
        $suma += $numeros;
    }
    return $suma;
}

echo "la suma total es de " . sumarArray($sumatorio);