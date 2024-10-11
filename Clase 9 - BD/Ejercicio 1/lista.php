<?php
include 'conexion.php';
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.html');
}
$usuario = $_SESSION['usuario'];
$nivel = $_SESSION['nivel'];
$sql = "SELECT * FROM producto";
$resultado = $con->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .row {
            display: flex;
            gap: 10px;
        }

        table {
            border-spacing: 0;
        }
    </style>
</head>

<body>
    <div class="row">
        <div>Usuario: <?php echo $usuario ?> Tipo: <?php echo $nivel == 0 ? "Usuario" : "Admin" ?></div>
        <a href="logout.php">Cerrar sesión</a>
    </div>
    <?php if ($nivel == 1) { ?>
        <a href="form_create.php">Crear producto</a>
    <?php } ?>
    <table border="1">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Imagen</th>
                <?php if ($nivel == 1) { ?>
                    <th>Acciones</th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php while ($producto = $resultado->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $producto['producto'] ?></td>
                    <td><?php echo $producto['precio'] ?></td>
                    <td><img src="images/<?php echo $producto['imagen'] ?>" height="100" /></td>
                    <?php if ($nivel == 1) { ?>
                        <td>
                            <a href="form_update.php?id=<?php echo $producto['idproducto'] ?>">Editar</a>
                            <a href="delete.php?id=<?php echo $producto['idproducto'] ?>">Eliminar</a>
                        </td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>