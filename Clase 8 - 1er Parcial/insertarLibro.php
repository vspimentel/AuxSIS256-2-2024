<?php
include 'estante.php';
session_start();

$fila = $_GET['fila'];
$libro = $_GET['libro'];

if (!isset($_SESSION['estante'])) {
    $_SESSION['estante'] = new Estante();
}

if ($fila == 1) {
    $_SESSION['estante']->insertarFila1($libro);
} else if ($fila == 2) {
    $_SESSION['estante']->insertarFila2($libro);
}

header('Location: pregunta3.html');
