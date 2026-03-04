<?php

    if($_POST){
        $numero = (int)$_POST['numero_txt'];
        
        for($i = 1; $i<=10; $i++){
            echo $i . " x " . $numero . " = " . ($i*$numero) . "</br>";
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de Multiplicar</title>
</head>
<body>
    <form action="tablas.php" method="POST">
        <label for="numero">Ingresa un número</label>
        <input type="number" name="numero_txt" id="numero">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>