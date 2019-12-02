<?php

$numero = $_GET['numero'];

if($numero%2==0){
    echo "<h1>Es par</h1>";
}else{
    echo "<h2>Es impar</h2>";
}