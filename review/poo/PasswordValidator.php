<?php

class PasswordValidator{

    function isValid(string $pass){
        if(strlen($pass) >= 8){
            if(strpos($pass, ".") == true || strpos($pass, ",") == true || strpos($pass, "-") == true || 
            strpos($pass, "_") == true || strpos($pass, ";") == true){

                echo "Bienvenido";
            }else{
                echo "La contraseña no cumple lo establecido";
            }
        }else{
            echo "La contraseña es demasiado pequeña";
        }

        /*Opcion 2
        $longitud = strlen($pass);
        $caracteres = ['.',',',';','_','-'];

        if($longitud < 8){
            return false;
        }

        foreach($caracteres as $caracter){
            if(strpos($pass, $caracter) !== false){
                return true;
            }
        }

        return false;
        */
    }
}