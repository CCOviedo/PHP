<?php

class Fichero{

    private $ruta;

    function __construct($r){
        $this->$ruta = $r;
    }

    function borrar(){
        unlink($this->$ruta);
    }

    function copiar($nueva){
        copy($this->ruta, $nueva);
    }

    function mover($aDonde){
        rename($this->ruta, $aDonde);
    }

    function leer(){
        $descriptor = fopen($this->$ruta, "r");
        fread($descriptor);
        fclose($descriptor);
    }

    function fechaModificacion(){
        echo date("F d Y H:i:s.", filectime($this->$ruta));
    }
}