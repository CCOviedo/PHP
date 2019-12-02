<?php

$base = $_GET['base'];
$piramide = [];

for($i =0; $i < $base; $i++){
    $cad = "";
    for($h = 0; $h < $i; $h++){
        $cad = " " . $cad;
    }
    $cad = $cad . "*";
    for($x = 0; $x < $base - $i - 1; $x++){
        $cad = $cad . " *";
    }
    array_push($piramide, $cad);
}

echo "<pre>";
for($i = count($piramide) - 1; $i >=0; $i--){
    echo $piramide[$i] . "\n";
}
echo "</pre>";