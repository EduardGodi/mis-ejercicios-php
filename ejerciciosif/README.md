# Ejercicios PHP — Condicionales (if / else if / else / switch)

Este directorio contiene 4 ejercicios para practicar el uso de **estructuras condicionales** en PHP.

---

## Ejercicio 1: Clasificador de Calificaciones

**Objetivo:** Usar `if / else if / else` para convertir una nota numérica en letra.

**Descripción:**
Crea un programa que reciba una calificación entre 0 y 100 y la clasifique así:

| Rango       | Letra | Resultado  |
|-------------|-------|------------|
| 90 – 100    | A     | Excelente  |
| 80 – 89     | B     | Muy bueno  |
| 70 – 79     | C     | Bueno      |
| 60 – 69     | D     | Suficiente |
| 0 – 59      | F     | Reprobado  |

**Ejemplo de salida:**
```
Calificación: 85
Letra: B
Resultado: Muy bueno
```

**Requisitos:**
- Usa `if / else if / else`
- Valida que la nota esté entre 0 y 100; si no, muestra un mensaje de error
- Prueba con al menos 5 valores diferentes

---

## Ejercicio 2: Calculadora de Descuentos

**Objetivo:** Aplicar condicionales anidados para calcular descuentos según el monto de compra y si el cliente es miembro VIP.

**Descripción:**
Crea un programa que calcule el precio final de una compra con las siguientes reglas:

- Si el cliente **es VIP**:
  - Compras mayores a $500 → 30% de descuento
  - Compras de $200 a $500 → 20% de descuento
  - Compras menores a $200 → 10% de descuento
- Si el cliente **no es VIP**:
  - Compras mayores a $500 → 15% de descuento
  - Compras de $200 a $500 → 10% de descuento
  - Compras menores a $200 → sin descuento

**Ejemplo de salida:**
```
Cliente VIP: Sí
Monto original: $650.00
Descuento aplicado: 30% (-$195.00)
Total a pagar: $455.00
```

**Requisitos:**
- Usa condicionales anidados (`if` dentro de otro `if`)
- Muestra el porcentaje de descuento y el monto ahorrado
- Prueba con al menos 4 combinaciones distintas

---

## Ejercicio 3: Día de la Semana con switch

**Objetivo:** Practicar la estructura `switch` para mostrar información según el día de la semana.

**Descripción:**
Dado un número del 1 al 7, muestra:
- El nombre del día (en español)
- Si es día hábil o fin de semana
- Una frase motivacional diferente para cada día

**Ejemplo de salida:**
```
Día número: 3
Nombre: Miércoles
Tipo: Día hábil
Frase: ¡Ya llegaste a la mitad de la semana, sigue adelante!
```

**Requisitos:**
- Usa `switch` (no `if`)
- Maneja el caso en que el número esté fuera del rango 1-7 con `default`
- Los 7 días deben tener su propia frase

---

## Ejercicio 4: Calculadora de Tarifas de Taxi

**Objetivo:** Combinar múltiples condiciones con `&&` y `||` para calcular tarifas.

**Descripción:**
Crea un programa que calcule el costo de un viaje en taxi según estas reglas:

- Tarifa base: **$2.50**
- Costo por kilómetro: **$1.20**
- Si el viaje es de **noche** (entre las 22:00 y las 6:00) → recargo del **25%**
- Si es **fin de semana** (sábado o domingo) → recargo del **15%**
- Si el viaje supera **20 km** → descuento del **10%** sobre el total

Los recargos se acumulan (se aplican uno sobre el otro).

**Ejemplo de salida:**
```
Distancia: 25 km
Hora: 23:00 (noche)
Día: Sábado (fin de semana)
-----------------------------
Tarifa base: $2.50
Costo por km: $30.00
Subtotal: $32.50
Recargo nocturno (25%): +$8.13
Recargo fin de semana (15%): +$6.09
Descuento por distancia (10%): -$4.67
Total: $42.05
```

**Requisitos:**
- Usa `if` con operadores lógicos (`&&`, `||`)
- Aplica los recargos en orden (nocturno primero, luego fin de semana, luego descuento)
- Muestra cada concepto por separado en la salida

---

## Archivo de Debug

Hay un archivo llamado `encuentra_el_bug.php` en esta misma carpeta.

El codigo **tiene un bug logico** que hace que el programa nunca muestre el resultado correcto en ciertos casos. Tu tarea es:

1. Leer el codigo completo
2. Ejecutarlo en el navegador con distintos valores
3. Identificar por que falla
4. Corregir el bug

No hay errores de sintaxis — PHP no va a marcar ningun error en rojo. El problema es logico.

---

## Consejos

- Usa `var_dump()` para verificar el tipo de dato de una variable si el resultado es inesperado.
- Recuerda que `=` asigna y `==` compara. Confundirlos es uno de los bugs mas comunes.
- Con `switch`, no olvides el `break` al final de cada `case`.
- Cuando combines condiciones con `&&` y `||`, usa parentesis para dejar clara la prioridad.

¡Buena suerte!
