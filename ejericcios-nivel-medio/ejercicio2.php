<?php
// EJERCICIO 2: Carrito de Compras
// Escribe tu código aquí

// Ejemplo de carrito
$carrito = [
    ['nombre' => 'Laptop', 'precio' => 1200, 'cantidad' => 1],
    ['nombre' => 'Mouse', 'precio' => 25, 'cantidad' => 2],
    ['nombre' => 'Teclado', 'precio' => 80, 'cantidad' => 1]
];

// Tus funciones aquí:

// Función 1: calcular subtotal de un producto
function calcularSubtotal($precio, $cantidad) {
    // Escribe aquí
    return 0;
}

// Función 2: calcular total del carrito
function calcularTotal($carrito) {
    // Escribe aquí
    return 0;
}

// Función 3: aplicar descuento
function aplicarDescuento($total, $porcentaje_descuento) {
    // Escribe aquí
    return 0;
}

// Prueba tu código:
echo "=== CARRITO DE COMPRAS ===\n\n";

// Mostrar cada producto con su subtotal
foreach ($carrito as $producto) {
    // Escribe aquí la lógica para mostrar
}

// Mostrar totales
$total = calcularTotal($carrito);
echo "\nTotal: \$" . number_format($total, 2) . "\n";

// Aplicar descuento si el total es mayor a $500
if ($total > 500) {
    $descuento = aplicarDescuento($total, 10);
    echo "Descuento 10%: -\$" . number_format($descuento, 2) . "\n";
    echo "Total Final: \$" . number_format($total - $descuento, 2) . "\n";
}

?>
