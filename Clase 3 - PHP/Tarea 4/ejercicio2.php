<?php
$arreglo = [2, 3, 45, 32, 2, 1, 63, 21, 52, 242, 22, 1];

for ($i = 0; $i < count($arreglo); $i++) {
    for ($j = 0; $j < count($arreglo) - 1; $j++) {
        if ($arreglo[$j] > $arreglo[$j + 1]) {
            $temp = $arreglo[$j];
            $arreglo[$j] = $arreglo[$j + 1];
            $arreglo[$j + 1] = $temp;
        }
    }
}

foreach ($arreglo as $num) {
    echo $num . "<br>";
}
