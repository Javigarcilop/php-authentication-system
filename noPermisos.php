<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Usuario y contraseña incorrectas</h2>
    <?php
        session_start();
        echo '<a href="cierreSesion.php">Volver</a>';
    ?>
</body>
</html>