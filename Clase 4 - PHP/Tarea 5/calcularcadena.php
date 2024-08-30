<?php
include 'operacionescadena.php';
$cadena = $_GET['cadena'];

$operaciones = new OperacionesCadena($cadena);

$operaciones->invertirCadena();
echo "<br>";
$operaciones->minusculas();
echo "<br>";
$operaciones->mayusculas();
echo "<br>";
