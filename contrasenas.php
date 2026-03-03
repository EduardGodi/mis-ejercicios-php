<?php
// Lógica de validación
$mensaje = "";

if ($_POST) {
    $password = $_POST['password'];
    
    if (strlen($password) < 8) {
        $mensaje = "❌ La contraseña es muy corta (mínimo 8 caracteres).";
    } elseif (!preg_match("#[0-9]+#", $password)) {
        $mensaje = "❌ Debe incluir al menos un número.";
    } elseif (!preg_match("#[A-Z]+#", $password)) {
        $mensaje = "❌ Debe incluir al menos una mayúscula.";
    } else {
        $mensaje = "✅ ¡Contraseña segura!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Validador de Contraseñas</title>
</head>
<body>
    <h2>Validador de Seguridad</h2>
    <form method="POST">
        <input type="password" name="password" placeholder="Escribe tu clave..." required>
        <button type="submit">Validar</button>
    </form>
    
    <?php if ($mensaje): ?>
        <p><strong><?php echo $mensaje; ?></strong></p>
    <?php endif; ?>
</body>
</html>