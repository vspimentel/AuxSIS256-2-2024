<?php
$palabras = $_GET['palabras'];

sort($palabras);

foreach ($palabras as $palabra) {
    echo $palabra . "<br>";
}
