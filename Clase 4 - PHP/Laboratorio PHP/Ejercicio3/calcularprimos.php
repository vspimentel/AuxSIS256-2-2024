<?php
$num = $_GET['num'];

$numero = 1;
for ($i = 0; $i < $num; $i++) {
    $divs = 0;
    for ($j = 1; $j <= $numero; $j++) {
        if ($numero % $j == 0) {
            $divs++;
        }
    }
    if ($divs == 2) {
        echo $numero . "<br>";
    } else {
        $i--;
    }
    $numero++;
}
