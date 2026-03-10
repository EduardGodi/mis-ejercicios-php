<?php

    if($_POST){
        $numero = $_POST["numero_txt"];
        $primo = true;
        for($i = 1; $i<=$numero; $i++){
            if($numero%$i!=0){
                $primo = false;
                break;
            }
        }

        if($primo){
            echo"El numero ". $numero . " es primo";
        }else{
            echo"El número ". $numero . " no es primo";
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