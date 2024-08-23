<?php
$nums = [1, 2, 3, 4, 5];

$max = 0;

foreach ($nums as $num) {
    if ($num > $max) {
        $max = $num;
    }
}

$min = $max;

foreach ($nums as $num) {
    if ($num < $min) {
        $min = $num;
    }
}


echo "<div style=\"border: 1px solid red; width: min-content\">$max</div>";
?>

<div style="border: 1px solid red; width: min-content"><?php echo $min; ?></div>