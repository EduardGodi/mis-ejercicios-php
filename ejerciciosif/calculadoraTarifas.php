<?php

$hora = 23;
$dia = "Sabado";
$tarifaBase = 2.5;
$distancia = 25;
$costoKilometro = 1.2;
$subTotal = $distancia * $costoKilometro + $tarifaBase;
$recargo = round($subTotal * 0.25, 2);

echo "Total: $recargo";

?>
