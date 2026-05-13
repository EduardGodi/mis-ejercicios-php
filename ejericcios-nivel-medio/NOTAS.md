# Notas y Referencias - Ejercicios PHP Nivel Medio

## Funciones Útiles de PHP para estos Ejercicios

### Trabajar con Arreglos
```php
// Recorrer un arreglo
foreach ($array as $valor) {
    echo $valor;
}

// Recorrer con clave y valor
foreach ($array as $clave => $valor) {
    echo "$clave: $valor";
}

// Agregar elemento al final
$array[] = $nuevo_valor;

// Contar elementos
count($array);

// Mostrar arreglo para debugging
print_r($array);
var_dump($array);
```

### Operadores Matemáticos y Condicionales
```php
// Módulo (residuo de división)
10 % 3;  // Resultado: 1

// Comparadores
==   // igual
!=   // no igual
>    // mayor que
<    // menor que
>=   // mayor o igual
<=   // menor o igual

// Lógicos
&&   // AND
||   // OR
!    // NOT
```

### Ciclos
```php
// For
for ($i = 0; $i < 10; $i++) {
    echo $i;
}

// Foreach
foreach ($array as $valor) {
    echo $valor;
}

// While
$i = 0;
while ($i < 10) {
    echo $i;
    $i++;
}
```

### Condicionales
```php
if ($condicion) {
    // hacer algo
} else if ($otra_condicion) {
    // hacer otra cosa
} else {
    // por defecto
}
```

### Funciones de String
```php
// Unir elementos de arreglo con separador
implode(", ", [1, 2, 3]);  // "1, 2, 3"

// Formato de números con decimales
number_format(1234.56, 2);  // "1,234.56"
```

---

## Consejos por Ejercicio

### Ejercicio 1: Calificaciones
- Usa un arreglo para guardar las calificaciones aprobadas
- Cuenta aprobados con `count()`
- Reprobados = total - aprobados
- Promedio = suma total / cantidad

```php
// Ejemplo de cómo iterar y sumar
$suma = 0;
foreach ($calificaciones as $nota) {
    $suma += $nota;  // += significa suma y asigna
}
$promedio = $suma / count($calificaciones);
```

### Ejercicio 2: Carrito
- Usa `foreach` para recorrer productos
- En cada iteración, calcula precio × cantidad
- Suma todos los subtotales para el total
- El descuento es: total × porcentaje / 100

```php
// Ejemplo de descuento
$total = 1330;
$porcentaje = 10;
$descuento = $total * $porcentaje / 100;  // 133
$total_con_descuento = $total - $descuento;  // 1197
```

### Ejercicio 3: Números Pares e Impares
- Un número es PAR si: `numero % 2 == 0`
- Un número es IMPAR si: `numero % 2 != 0` o `numero % 2 == 1`
- El ciclo debe ir del 1 al 20 (inclusive)
- Revisa los parámetros de las funciones

```php
// Ejemplos:
2 % 2;   // 0 (par)
5 % 2;   // 1 (impar)
10 % 2;  // 0 (par)
```

---

## Cómo Probar tu Código

1. Guarda el archivo PHP
2. Abre en navegador: `http://localhost/mis-ejercicios-php/ejericcios-nivel-medio/ejercicio1.php`
3. Si hay errores, verás mensajes en rojo
4. Usa `print_r()` para ver contenido de variables

---

## Estructura de un Arreglo Asociativo

```php
$producto = [
    'nombre' => 'Laptop',
    'precio' => 1200,
    'cantidad' => 1
];

// Acceder a valores
echo $producto['nombre'];   // Laptop
echo $producto['precio'];   // 1200

// Modificar
$producto['precio'] = 1100;
```

---

¡Recuerda: Prueba con pequeños ejemplos primero, luego expande tu código!
