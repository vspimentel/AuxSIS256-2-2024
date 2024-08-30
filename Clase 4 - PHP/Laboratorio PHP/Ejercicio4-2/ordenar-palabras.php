<?php
$palabras = [];
$num = $_GET['num'];

for ($i = 0; $i < $num; $i++) {
    $palabra = $_GET['palabra' . $i];
    $palabras[] = $palabra;
}

sort($palabras);

foreach ($palabras as $palabra) {
    echo $palabra . "<br>";
}
