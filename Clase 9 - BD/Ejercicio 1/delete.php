<?php
include 'conexion.php';
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.html');
}
if ($_SESSION['nivel'] == 0) {
    header('Location: lista.php');
}
$id = $_GET['id'];
$sql = "DELETE FROM producto WHERE idproducto = $id";
$con->query($sql);
header('Location: lista.php');
