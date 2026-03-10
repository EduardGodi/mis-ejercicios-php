<?php
    if($_POST){
        $palabra = $_POST["palabra_txt"];

        $vocales = ["a","e","i","o","u","A","E","I","O","U"];
        $traduccion = ["apa","epe","ipi","opo","upu","Apa","Epe","Ipi","Opo","Upu"];

        $resultado = str_replace($vocales,$traduccion,$palabra);
        echo "la palabra Ingresada fue: " . $palabra . "</br>";
        echo "la traducción es: " . $resultado;

    }

    //str_replace(lo que quiero buscar, por lo que quiero cambiar, donde lo voy a buscar);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traductor</title>
</head>
<body>
    <form action="traductor.php" method="post">
        <label for="palabra">Ingresa la palabra</label>
        <input type="text" id="palabra" name="palabra_txt">
        <input type="submit" value="Traducir">
    </form>
</body>
</html>