<?php
$num = $_GET['num'];
$mayor = $_GET['mayor'];
$numeros = [];
for ($i = 0; $i < $num; $i++) {
    $numeros[] = $_GET["numero$i"];
}

echo "Arreglo inicial: <br>";
foreach ($numeros as $numero) {
    echo $numero . "<br>";
}

$filtrados = [];
foreach ($numeros as $numero) {
    if ($numero >= $mayor) {
        $filtrados[] = $numero;
    }
}

echo "Arreglo filtrado: <br>";
foreach ($filtrados as $numero) {
    echo $numero . "<br>";
}
