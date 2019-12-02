<?php

$cadenas = ["patata","cebolla","sal","pimienta","te","agua"];

$larga = 0;
$corta = 0;
$comienzo = false;


foreach($cadenas as $c){
    $longitud = strlen($c);

    if($comienzo == false){
        $larga = $longitud;
        $corta = $longitud;

        $comienzo = true;
    }else{
        if($longitud > $larga){
            $larga = $longitud;
        }

        if($longitud < $corta){
            $corta = $longitud;
        }
    }
}

echo "La palabra mas larga tiene: " . $larga . " caracteres y la mas corta: " . $corta . " caracteres";

?>