<?php
  

    if($_POST){

      $inventario = [
            "camara" => 450,
            "router" => 325,
            "antena" => 800,
            "switch" => 150
        ];
        $existencia;
        $resultado='';
        $producto = strtolower($_POST["buscador_txt"]);
        $existencia = array_key_exists($producto,$inventario); //esta funcion devuelve 1 si lo encuentra
        
        if($existencia){
            $precio = $inventario[$producto];
            echo "El precio de ". $producto . " es: Q". $precio; 
        }else{
            echo "Lo sentimos, el producto ". $producto . " no esta en el inventario.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
</head>
<body>
    <form action="inventario.php" method="post">
        <label for="buscador">Buscador</label>
        <input type="text" name="buscador_txt" id="buscador">
        <input type="submit" value="Buscar">
    </form>
</body>
</html>