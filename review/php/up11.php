<?php
//La idea es guardar la cadena en un array, recorrerlo y 
//con un switch comprobar que es

function milenializador($cadena){
    if(strpos($cadena, "que")!== false){
        echo str_replace("que","k", $cadena);
    }
}

milenializador("Hola que pasa loco");