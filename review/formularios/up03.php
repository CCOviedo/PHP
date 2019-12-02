<?php

$busqueda = $_POST['busqueda'];
$fichero = $_FILES['archivo'];

$ruta = $fichero['tmp_name'];

$contenido = file_get_contents($ruta);

$minus = strtolower($busqueda);
$minTexto = strtolower($contenido);

$pos = substr_count($minTexto, $minus);


echo "La palabra $busqueda se ha encontrado $pos veces";