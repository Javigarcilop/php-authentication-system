<?php
$usuarios = [ "usuario" => "Javi", "contraseña" => "1234" ];

session_start();
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

if ($_SERVER["REQUEST_METHOD"] == "POST" && $usuario === $usuarios['usuario'] && $contraseña === $usuarios['contraseña']) {

    $_SESSION['usuario'] = $usuario;
    header("Location: inicio.php");
    exit();

    
} else {
    header("Location: noPermisos.php");
    exit();
}
?>
