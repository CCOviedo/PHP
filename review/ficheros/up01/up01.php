<?php

$fichero = "up01.txt";
$firma = "Carlos";

//crear directorio
if(file_exists("./ejercicioFichero01") === false){

    mkdir('./ejercicioFichero01', 0777);
}

//copiar fichero al directorio
$nuevo = $fichero;
copy($fichero,"ejercicioFichero01/".$nuevo);

//abrir en modo escritura al final
$abrido = fopen("ejercicioFichero01/".$nuevo, "a");

//añadir nuestro nombre
fwrite($abrido,"\n" . $firma);

//cerrar el fichero
fclose($abrido);
