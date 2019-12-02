<?php

include 'Fichero.php';

$fichero = new Fichero('quijote.txt');

$fichero->borrar();

$fichero->copiar('nuevo.txt');

$fichero->mover('/NuevaUbiacion');

echo $fichero->leer();

$fichero->fechaModificacion();