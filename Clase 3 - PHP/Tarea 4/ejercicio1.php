<?php
$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

$numPares = [];
$numImpares = [];

foreach ($nums as $num) {
    if ($num % 2 == 0) {
        $numPares[] = $num;
    } else {
        $numImpares[] = $num;
    }
}

?>

<div>Números pares:</div>
<?php
foreach ($numPares as $num) {
    echo $num . "<br>";
}
?>
<div>Números impares:</div>
<?php
foreach ($numImpares as $num) {
    echo $num . "<br>";
}
?>