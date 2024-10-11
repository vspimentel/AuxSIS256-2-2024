<?php
include 'conexion.php';
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.html');
}
if ($_SESSION['nivel'] == 0) {
    header('Location: lista.php');
}

$id = $_POST['id'];
$producto = $_POST['producto'];
$precio = $_POST['precio'];
$imagen_old = $_POST['nombre_imagen'];

if ($_FILES['imagen']) {
    echo 'entro';
    $filename = $_FILES['imagen']['name'];
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $imagen = uniqid() . '.' . $extension;
    copy($_FILES['imagen']['tmp_name'], "images/$imagen");
    unlink("images/$imagen_old");
    $sql = "UPDATE producto SET imagen='$imagen', producto='$producto', precio=$precio WHERE idproducto=$id";
} else {
    $sql = "UPDATE producto SET producto='$producto', precio=$precio WHERE idproducto=$id";
}

$con->query($sql);

header('Location: lista.php');
