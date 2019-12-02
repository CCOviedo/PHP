<?php

$username = $_POST['usuario'];
$password = $_POST['contraseña'];
$foto = $_FILES['foto'];

$usuario = "eyyy";
$contr = "lmao";

print_r($foto);

$ruta = $foto['tmp_name'];

$contenido = file_get_contents($ruta);

echo $contenido;

/*if(($username == $usuario) && ($password == $contr)){
    $mensaje = "Bienvenido <br>";
}else{
    $mensaje = "Usuario no valido <br>";
}
*/
//echo "El usuario es $username y la contraseña $password";

//require("formulario.html");