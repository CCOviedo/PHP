<?php

$cadena = $_GET['valor'];
$nuevaCadena = str_replace(' ','',strtolower($cadena));
$invertido = strrev($nuevaCadena);

if($nuevaCadena == $invertido){
    echo "Son palindromos o capicuas";
}else{
    echo "No lo son";
}