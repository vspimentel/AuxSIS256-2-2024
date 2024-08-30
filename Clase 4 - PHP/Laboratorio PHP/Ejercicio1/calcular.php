<?php
$num = $_GET['num'];
$sum = 0;
while ($num > 0) {
    $sum += $num % 10;
    $num = $num / 10;
}
echo "La suma de los dígito es: $sum";
