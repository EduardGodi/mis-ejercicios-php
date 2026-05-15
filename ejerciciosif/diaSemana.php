<?php

$numero = 5;
$dia;
$tipo = "Dia habil";
//$frase;

switch ($numero) {
    case 1:
        $dia = "Lunes";
        $frase = "Vamos a iniciar con todo";
        break;
    case 2:
        $dia = "Lunes";
        $frase = "Un dia mas es un dia menos";
        break;
    case 3:
        $dia = "Martes";
        $frase = "Ya llegaste a la mitad de la semana, sigue adelante!";
        break;
    case 4:
        $dia = "Jueves";
        $frase = "Ya estamos cerca de ese viernes, vamos con todo";
        break;
    case 5:
        $dia = "Viernes";
        $frase = "Es viernes y el cupero lo sabe :)";
        break;
    case 6:
        $dia = "Sabado";
        $frase = "Dia de ver pelis en la casa :)";
        $tipo = "Fin de semana";
        break;
    case 7:
        $dia = "Domingo";
        $frase = "A descansar que manana iniciamos de nuevo";
        $tipo = "Fin de semana";
        break;
    default:
        echo "El numero esta fuera del rango permitido";
}

echo "Dia numero: $numero <br>";
echo "Nombre: $dia <br>";
echo "tipo: $tipo <br>";
//echo "Frase: $frase <br>";

// ✅ VERSIÓN MEJORADA (compara con la anterior)

echo "<hr>";
echo "<h3>Versión mejorada:</h3>";

$numero = 7;
$dia;
$tipo = "Dia habil";
$frase = "";

switch ($numero) {
    case 1:
        $dia = "Lunes";
        $frase = "Vamos a iniciar con todo";
        break;
    case 2:
        $dia = "Martes"; // ← CORREGIDO (era Lunes)
        $frase = "Un dia mas es un dia menos";
        break;
    case 3:
        $dia = "Miércoles"; // ← CORREGIDO (era Martes)
        $frase = "Ya llegaste a la mitad de la semana, sigue adelante!";
        break;
    case 4:
        $dia = "Jueves";
        $frase = "Ya estamos cerca de ese viernes, vamos con todo";
        break;
    case 5:
        $dia = "Viernes";
        $frase = "Es viernes y el cupero lo sabe :)";
        break;
    case 6:
        $dia = "Sábado"; // ← Agregué tilde
        $frase = "Dia de ver pelis en la casa :)";
        $tipo = "Fin de semana";
        break;
    case 7:
        $dia = "Domingo";
        $frase = "A descansar que manana iniciamos de nuevo";
        $tipo = "Fin de semana";
        break;
    default:
        echo "El numero esta fuera del rango permitido";
        exit(); // ← SOLUCIÓN: Detiene aquí para evitar mostrar variables sin valor
}

echo "Dia numero: $numero <br>";
echo "Nombre: $dia <br>";
echo "tipo: $tipo <br>";
echo "Frase: $frase <br>";

?>
