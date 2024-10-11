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
$sql = "SELECT producto, precio, imagen FROM producto WHERE idproducto = $id";

$resultado = $con->query($sql);
$producto = $resultado->fetch_assoc();
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
    <form action="update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <label>Producto</label>
        <input type="text" name="producto" value="<?php echo $producto['producto'] ?>">
        <label>Precio</label>
        <input type="number" name="precio" value="<?php echo $producto['precio'] ?>">
        <label>Imagen</label>
        <input type="file" name="imagen">
        <input type="hidden" name="nombre_imagen" value="<?php echo $producto['imagen'] ?>">
        <button type="submit">Editar</button>
    </form>
</body>

</html>