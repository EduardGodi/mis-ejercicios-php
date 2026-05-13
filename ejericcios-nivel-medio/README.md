# Ejercicios PHP Nivel Medio

Este directorio contiene 3 ejercicios para practicar **funciones**, **arreglos**, **condicionales** y **ciclos** en PHP.

---

## 📝 Ejercicio 1: Filtrar y Procesar Calificaciones

**Objetivo:** Trabajar con arreglos, funciones, condicionales y ciclos.

**Descripción:**
Crea un programa que reciba un arreglo de calificaciones de estudiantes y realice lo siguiente:

1. Una función que reciba un arreglo de números (calificaciones entre 0-100)
2. Filtra solo las calificaciones aprobadas (≥ 70)
3. Calcula el promedio de las calificaciones aprobadas
4. Determina cuántos estudiantes aprobaron y cuántos reprobaron
5. Retorna un arreglo asociativo con los resultados

**Ejemplo de uso:**
```php
$calificaciones = [85, 45, 92, 58, 76, 88, 52];

$resultado = analizarCalificaciones($calificaciones);

// Debería mostrar algo como:
// Array ( [aprobados] => 4 [reprobados] => 3 [promedio_aprobados] => 85.25 [calificaciones_aprobadas] => Array ( [0] => 85 [1] => 92 [2] => 76 [3] => 88 ) )
```

**Requisitos:**
- Usa funciones (array_filter, array_sum, count, etc. son opcionales)
- Usa ciclos (for, foreach)
- Usa condicionales (if/else)
- El arreglo debe ser dinámico (pueda cambiar)

---

## 📝 Ejercicio 2: Carrito de Compras

**Objetivo:** Practicar arreglos asociativos, funciones y ciclos.

**Descripción:**
Crea un sistema simple de carrito de compras que:

1. Tenga un arreglo de productos con nombre, precio y cantidad
2. Una función que calcule el subtotal (precio × cantidad) de cada producto
3. Una función que calcule el total del carrito
4. Una función que aplique un descuento (porcentaje) si el total supera cierta cantidad
5. Mostrar un resumen detallado con cada producto, subtotal, total y descuento aplicado

**Ejemplo de uso:**
```php
$carrito = [
    ['nombre' => 'Laptop', 'precio' => 1200, 'cantidad' => 1],
    ['nombre' => 'Mouse', 'precio' => 25, 'cantidad' => 2],
    ['nombre' => 'Teclado', 'precio' => 80, 'cantidad' => 1]
];

// Debería mostrar:
// Laptop: $1200.00 x 1 = $1200.00
// Mouse: $25.00 x 2 = $50.00
// Teclado: $80.00 x 1 = $80.00
// Total: $1330.00
// Descuento 10%: -$133.00
// Total Final: $1197.00
```

**Requisitos:**
- Usa funciones
- Usa ciclos para iterar el carrito
- Usa condicionales para aplicar descuentos
- Manejo de arreglos asociativos

---

## 🔧 Ejercicio 3: Generador de Números Pares e Impares (CON ERRORES PARA CORREGIR)

**Objetivo:** Identificar y corregir errores lógicos y de sintaxis.

**Descripción:**
El siguiente código intenta generar números pares e impares en rangos específicos, pero tiene **3 errores** que debes encontrar y corregir.

**Archivo:** `ejercicio3.php` (abre ese archivo)

**Errores a encontrar:**
- Error de lógica en condicional
- Error en la función (parámetro mal usado)
- Error en el ciclo (condición incorrecta)

**Instrucciones:**
1. Abre `ejercicio3.php`
2. Prueba el código y observa qué está mal
3. Identifica los 3 errores
4. Corrige el código
5. Verifica que funcione correctamente

**Esperado:**
- Listar números pares del 1 al 20
- Listar números impares del 1 al 20
- Contar cuántos pares e impares hay

---

## 💡 Consejos

- **Ejercicio 1 y 2:** Escribe el código paso a paso. Primero la función, luego pruébala.
- **Ejercicio 3:** Lee el código línea por línea, pruébalo en navegador y observa los errores.
- Usa `print_r()` o `var_dump()` para ver el contenido de los arreglos.
- Recuerda que `foreach` es muy útil para recorrer arreglos.

¡Éxito! 🚀
