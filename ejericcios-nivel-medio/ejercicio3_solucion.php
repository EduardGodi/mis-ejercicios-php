<?php
// EJERCICIO 3: SOLUCIÓN - Compara esto con tu código corregido

// Función para filtrar números pares
function obtenerPares($maximo) {
    $pares = [];
    for ($i = 1; $i <= $maximo; $i++) {  // CORRECCIÓN 1: cambiar < por <=
        if ($i % 2 == 0) {  // CORRECCIÓN 2: cambiar != por ==
            $pares[] = $i;
        }
    }
    return $pares;
}

// Función para filtrar números impares
function obtenerImpares($limite) {
    $impares = [];
    for ($i = 1; $i <= $limite; $i++) {  // CORRECCIÓN 3: cambiar $maximo por $limite
        if ($i % 2 != 0) {
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
