<?php
session_start();
include 'conexion.php';
$usuario = $_POST['usuario'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuario WHERE usuario = '$usuario' AND password = SHA1('$password')";
$resultado = $con->query($sql);

if ($resultado->num_rows > 0) {
    $usuario = $resultado->fetch_assoc();
    $_SESSION['usuario'] = $usuario['usuario'];
    $_SESSION['nivel'] = $usuario['nivel'];
    header('Location: lista.php');
} else {
    header('Location: login.html');
}
