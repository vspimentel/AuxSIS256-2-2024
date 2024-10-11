<?php
include 'conexion.php';
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.html');
}
if ($_SESSION['nivel'] == 0) {
    header('Location: lista.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            width: 200px;
            gap: 5px;
        }
    </style>
</head>

<body>
    <form action="create.php" method="post" enctype="multipart/form-data">
        <label>Producto</label>
        <input type="text" name="producto">
        <label>Precio</label>
        <input type="number" name="precio">
        <label>Imagen</label>
        <input type="file" name="imagen">
        <button type="submit">Crear</button>
    </form>
</body>

</html>