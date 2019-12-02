<?php

$numero = $_GET['num'];
$cnt = 0;

while(pow($numero, $cnt) < 10000){
    $cnt++;
}

echo "Para superar los 10.000, habria que elevar $numero a " . $cnt;