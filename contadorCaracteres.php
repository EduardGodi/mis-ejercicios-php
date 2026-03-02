<?php
    $texto = "Hola";
    $longitud = strlen($texto);

    if($longitud < 10){
        echo "El texto es perfecto, tiene ", $longitud, " caracteres";
    }else{
        echo "El texto es muy largo, tiene ", $longitud, " caracteres";
    }