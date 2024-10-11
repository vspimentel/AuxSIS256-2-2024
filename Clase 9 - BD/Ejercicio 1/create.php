<?php
include 'conexion.php';
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.html');
}
if ($_SESSION['nivel'] == 0) {
    header('Location: lista.php');
}

$filename = $_FILES['imagen']['name'];
$extension = pathinfo($filename, PATHINFO_EXTENSION);
$imagen = uniqid() . '.' . $extension;
copy($_FILES['imagen']['tmp_name'], "images/$imagen");

$producto = $_POST['producto'];
$precio = $_POST['precio'];

$sql = "INSERT INTO producto (imagen, producto, precio) VALUES ('$imagen', '$producto', $precio)";
$con->query($sql);


header('Location: lista.php');
