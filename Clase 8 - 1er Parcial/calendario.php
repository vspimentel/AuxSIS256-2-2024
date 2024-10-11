<?php

$month = $_GET['month'];
$year = $_GET['year'];
$height = $_GET['height'];

$num_dias = cal_days_in_month(CAL_GREGORIAN, $month, $year);
$fecha = "$year-$month-01";
$dia_semana = date('N', strtotime($fecha));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <table class="calendar" border="1">
        <tr>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
            <th>Sábado</th>
            <th>Domingo</th>
        </tr>

        <?php
        $dia = 1;
        for ($i = 1; $dia <= $num_dias; $i++) { ?>
            <tr style="background-color:<?php echo $i % 2 == 0 ? "#FFFFFF" : "#E2EFD9" ?>">
                <?php for ($j = 1; $j <= 7; $j++) {
                    if ($dia > $num_dias) {
                        echo "<td></td>";
                    } else if ($i == 1 && $j < $dia_semana) {
                        echo "<td></td>";
                    } else {
                        echo "<td>$dia</td>";
                        $dia++;
                    }
                } ?>
            </tr>
        <?php } ?>
    </table>
</body>

</html>

<!-- if ($i < $dia_semana) {
    echo " <td>
                </td>" ;
                } else {
                echo "<td>$dia</td>" ;
                $dia++;
                } -->