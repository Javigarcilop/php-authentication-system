<?php
session_start();

if (isset($_SESSION['usuario'])) {
    echo "Bienvenido " . htmlspecialchars($_SESSION['usuario']) . "<br>";
    $fecha_y_hora = date("l, F j, Y");
    echo $fecha_y_hora . "<br>";
    echo '<a href="cierreSesion.php">Cerrar sesión</a>';
} else {
    header("Location: sesion.html");
    exit();
}
?>
