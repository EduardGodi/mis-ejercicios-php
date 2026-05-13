<?php

$nota = 80;

if ($nota < 0 || $nota > 100) {
    echo "Error: la nota $nota debe estar entre 0 y 100.";
} elseif ($nota <= 59) {
    $letra     = "F";
    $resultado = "Reprobado";
} elseif ($nota <= 69) {
    $letra     = "D";
    $resultado = "Suficiente";
} elseif ($nota <= 79) {
    $letra     = "C";
    $resultado = "Bueno";
} elseif ($nota <= 89) {
    $letra     = "B";
    $resultado = "Muy bueno";
} else {
    $letra     = "A";
    $resultado = "Excelente";
}

if (isset($letra)) {
    echo "Calificacion: $nota <br>";
    echo "Letra: $letra <br>";
    echo "Resultado: $resultado <br>";
}
