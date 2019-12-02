<?php

$fichero = $_GET['fichero'];

if(strpos($fichero, '.exe') == true){
    echo strtoupper($fichero);
}else if(strpos($fichero, '.db') == true){
    echo strtolower($fichero);
}