<?php

/*
 * ENCUENTRA EL BUG
 * ----------------
 * Este programa clasifica a un usuario segun su edad y le asigna una categoria
 * y un precio de entrada a un evento.
 *
 * Categorias esperadas:
 *   - Menor de 5 años   → "Bebe"       → Entrada GRATIS
 *   - De 5 a 12 años    → "Niño"       → $5.00
 *   - De 13 a 17 años   → "Adolescente"→ $8.50
 *   - De 18 a 64 años   → "Adulto"     → $15.00
 *   - 65 años o más     → "Adulto mayor" → $7.00
 *
 * El programa tiene UN bug logico. No hay errores de sintaxis.
 * Prueba con diferentes edades y observa cuando el resultado es incorrecto.
 */

$edad = 17; // Cambia este valor para probar: 3, 10, 17, 35, 70

if ($edad >= 18) {
    $categoria = "Adulto";
    $precio    = 15.00;
} elseif ($edad >= 13) {
    $categoria = "Adolescente";
    $precio    = 8.50;
} elseif ($edad >= 65) {
    $categoria = "Adulto mayor";
    $precio    = 7.00;
} elseif ($edad >= 5) {
    $categoria = "Niño";
    $precio    = 5.00;
} else {
    $categoria = "Bebe";
    $precio    = 0.00;
}

echo "=== ENTRADA AL EVENTO ===" . PHP_EOL;
echo "Edad:      " . $edad . " años" . PHP_EOL;
echo "Categoria: " . $categoria . PHP_EOL;

if ($precio === 0.00) {
    echo "Precio:    GRATIS" . PHP_EOL;
} else {
    echo "Precio:    $" . number_format($precio, 2) . PHP_EOL;
}
