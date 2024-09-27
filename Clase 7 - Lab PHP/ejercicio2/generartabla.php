<?php
include 'operaciones.php';
session_start();
$operaciones = $_SESSION['operaciones'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-spacing: 0;
        }

        th {
            background-color: red;
            color: white;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php $operaciones->mostrarResultados() ?>
</body>

</html>