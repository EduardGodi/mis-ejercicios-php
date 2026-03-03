<?php

    if($_POST){
        $cuenta = (float)$_POST['cuenta_txt'];
        $propina = (float)$_POST['propina_txt'];

        $calculoPropina = $cuenta * ($propina/100);
        $total = $calculoPropina + $cuenta;
        echo "El total a cancelar es Q". number_format($total,2);


    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Propina</title>
</head>
<body>
    <form action="propina.php" method="POST">
        <input type="number" name="cuenta_txt" placeholder="Total de la cuenta">
        <label id="propina_id">Tu propina</label>
        <select name="propina_txt" id="propina_id">
            <option value="5">5%</option>
            <option value="10">10%</option>
            <option value="15">15%</option>
        </select>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>