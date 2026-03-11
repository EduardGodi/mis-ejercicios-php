<?php

    if($_POST){
        $numero = (int)$_POST["numero_txt"];
        $esPrimo = true;
        
        for($i = 2; $i< $numero; $i++){
            if($numero%$i ==0){
                $esPrimo = false;    
                break;
            }
        }

        if($esPrimo == true){
            echo"El número " . $numero . " es primo";
        }else{
            echo "El número " . $numero . " no es Primo";
        }

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Primos</title>
</head>
<body>

<form action="primos.php" method="post">
    <label for="numeroP">Ingresa un número</label>
    <input type="text" name="numero_txt" id="numeroP">
    <input type="submit" value="Evaluar">
</form>
    
</body>
</html>