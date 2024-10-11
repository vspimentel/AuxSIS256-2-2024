<?php
include 'conexion.php';
$sql = "SELECT imagen, titulo FROM libros";
$resultado = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <?php while ($libro = $resultado->fetch_assoc()) { ?>
        <div class="row" style="gap: 5px; align-items:baseline">
            <img src="images/<?php echo $libro['imagen'] ?>" alt="<?php echo $libro['titulo'] ?>" height="100" />
            <p><?php echo $libro['titulo'] ?></p>
        </div>
    <?php } ?>
</body>

</html>