<?php
// EJERCICIO 3: Generador de Números Pares e Impares
// Este código tiene 3 errores que debes encontrar y corregir

// Función para filtrar números pares
function obtenerPares($maximo) {
    $pares = [];
    for ($i = 1; $i < $maximo; $i++) {  // ERROR 1: Revisar la condición del ciclo
        if ($i % 2 != 0) {  // ERROR 2: La condición es incorrecta
            $pares[] = $i;
        }
    }
    return $pares;
}

// Función para filtrar números impares
function obtenerImpares($limite) {
    $impares = [];
    for ($i = 1; $i <= $maximo; $i++) {  // ERROR 3: Se usa variable incorrecta
        if ($i % 2 == 0) {
            $impares[] = $i;
        }
    }
    return $impares;
}

// Programa principal
$limite = 20;

$numeros_pares = obtenerPares($limite);
$numeros_impares = obtenerImpares($limite);

echo "=== NÚMEROS PARES (1 al 20) ===\n";
echo implode(", ", $numeros_pares) . "\n";
echo "Total de pares: " . count($numeros_pares) . "\n\n";

echo "=== NÚMEROS IMPARES (1 al 20) ===\n";
echo implode(", ", $numeros_impares) . "\n";
echo "Total de impares: " . count($numeros_impares) . "\n";

// Resultado esperado:
// Pares: 2, 4, 6, 8, 10, 12, 14, 16, 18, 20 (10 números)
// Impares: 1, 3, 5, 7, 9, 11, 13, 15, 17, 19 (10 números)
?>
