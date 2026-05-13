<?php

    $clienteVip = false;
    $compra = 800;

    if($clienteVip){
        $vip = "Si";
        if($compra < 200){
            $descuento = $compra * 0.10;
            $totalPago = $compra-$descuento;
            $porcentaje = "10%";
        }elseif($compra <= 500){
            $descuento = $compra * 0.20;
            $totalPago = $compra-$descuento;
            $porcentaje = "20%";
        }else{
            $descuento = $compra * 0.30;
            $totalPago = $compra-$descuento;
            $porcentaje = "30%";
        }
    }else{
        $vip= "No";
        if($compra < 200){
            $descuento = 0;
            $totalPago = $compra-$descuento;
            $porcentaje = "0%";
        }elseif($compra <= 500){
            $descuento = $compra * 0.10;
            $totalPago = $compra-$descuento;
            $porcentaje = "10%";
        }else{
            $descuento = $compra * 0.15;
            $totalPago = $compra-$descuento;
            $porcentaje = "15%";
        }
    }

    echo"Cliente Vip: $vip <br>";
    echo"Monto Original: $compra <br>";
    echo"Descuento aplicado: $porcentaje (- Q$descuento) <br>";
    echo"Total a pagar: Q$totalPago <br>";


// ---------------------------------------------------------------
// VERSION MEJORADA
// ---------------------------------------------------------------

$clienteVip = false;
$compra = 800;

if ($clienteVip) {
    $vip = "Si";
    if ($compra < 200) {
        $porcentaje = 10;
    } elseif ($compra <= 500) {
        $porcentaje = 20;
    } else {
        $porcentaje = 30;
    }
} else {
    $vip = "No";
    if ($compra < 200) {
        $porcentaje = 0;
    } elseif ($compra <= 500) {
        $porcentaje = 10;
    } else {
        $porcentaje = 15;
    }
}

$descuento = $compra * ($porcentaje / 100);
$totalPago = $compra - $descuento;

echo "Cliente VIP: $vip <br>";
echo "Monto original: Q" . number_format($compra, 2) . " <br>";
echo "Descuento aplicado: {$porcentaje}% (-Q" . number_format($descuento, 2) . ") <br>";
echo "Total a pagar: Q" . number_format($totalPago, 2) . " <br>";
