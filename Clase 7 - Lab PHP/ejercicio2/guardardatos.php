<?php
session_start();
include 'operaciones.php';

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

$operaciones = new Operaciones($a, $b, $c);
$_SESSION['operaciones'] = $operaciones;

header('Location: menu.html');
