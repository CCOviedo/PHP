<?php

$color = ["blanco", "verde", "rojo"];

echo "Por comas: " . implode(", ",$color);

sort($color);

echo "<ul><li>" . implode("</li><li>", $color) . "</li></ul>";