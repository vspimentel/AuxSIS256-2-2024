<?php
include 'conexion.php';
$estudiantes = $_POST['estudiantes'];

foreach ($estudiantes as $i => $estudiante) {
    $filename = $_FILES['estudiantes']['name'][$i]['fotografia'];
    $extension = explode(".", $filename)[1];
    $fotografia = uniqid() . '.' . $extension;
    copy($_FILES['estudiantes']['tmp_name'][$i]['fotografia'], "images/$fotografia");

    $nombres = $estudiante['nombres'];
    $apellidos = $estudiante['apellidos'];
    $cu = $estudiante['cu'];
    $sexo = $estudiante['sexo'];
    $carrera = $estudiante['carrera'];

    if (isset($estudiante['matriculado'])) {
        $matriculado = 1;
    } else {
        $matriculado = 0;
    }

    $sql = "INSERT INTO alumnos (nombres, apellidos, cu, sexo, id_carrera, fotografia, matriculado) VALUES ('$nombres', '$apellidos', '$cu', '$sexo', $carrera, '$fotografia', $matriculado)";
    $con->query($sql);
}

header('Location: read.php');
