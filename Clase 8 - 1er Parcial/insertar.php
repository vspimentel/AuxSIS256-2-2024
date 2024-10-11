<?php
$libros = $_POST['libros'];
include 'conexion.php';

foreach ($libros as $i => $libro) {
    $filename = $_FILES['libros']['name'][$i]['imagen'];
    $extension = explode(".", $filename)[1];
    $imagen = uniqid() . '.' . $extension;
    copy($_FILES['libros']['tmp_name'][$i]['imagen'], "images/$imagen");

    $titulo = $libro['titulo'];
    $autor = $libro['autor'];
    $ideditorial = $libro['editorial'];
    $anio = $libro['anio'];

    $sql = "INSERT INTO libros (imagen, titulo, autor, ideditorial, anio) VALUES ('$imagen', '$titulo', '$autor', $ideditorial, $anio)";
    $con->query($sql);
}

header('Location: read.php');
