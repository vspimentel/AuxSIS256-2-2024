<?php
$cadena1 = "Desarrollo";
$cadena2 = "Web";

$cruce1 = -1;

foreach (str_split($cadena1) as $i => $char) {
    foreach (str_split($cadena2) as $j => $char2) {
        if ($char == $char2) {
            $cruce1 = $i;
            $cruce2 = $j;
            break;
        }
    }
    if ($cruce1 != -1) {
        break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-spacing: 0;
        }

        td {
            width: 30px;
        }
    </style>
</head>

<body>
    <table border="1">
        <?php foreach (str_split($cadena2) as $i => $char2) { ?>
            <tr>
                <?php foreach (str_split($cadena1) as $j => $char) { ?>
                    <?php if ($j == $cruce1) { ?>
                        <td style="background-color: cyan"><?php echo $char2; ?></td>
                    <?php } else if ($i  == $cruce2) {  ?>
                        <td style="background-color: cyan"><?php echo $char; ?></td>
                    <?php } else { ?>
                        <td></td>
                    <?php } ?>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>

</html>