<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-spacing: 0;
            border: 1px solid green;
        }

        td {
            border: 1px solid green;
            background-color: white;
            width: 100px;
            padding: 5px;
        }
    </style>
</head>

<body>
    <table border="1">
        <tr>
            <td>Celsius</td>
            <td>Fahrenheit</td>
            <td>Kelvin</td>
        </tr>
        <?php
        $temp = $_GET['temp'];
        $unidad = $_GET['unidad'];

        switch ($unidad) {
            case 'c':
                $f = ($temp * 9 / 5) + 32;
                $k = $temp + 273.15;
        ?>
                <tr>
                    <td><?php echo $temp; ?></td>
                    <td><?php echo $f; ?></td>
                    <td><?php echo $k; ?></td>
                </tr>

            <?php
                break;
            case 'f':
                $c = ($temp - 32) * 5 / 9;
                $k = ($temp - 32) * 5 / 9 + 273.15;
            ?>

                <tr>
                    <td><?php echo $c; ?></td>
                    <td><?php echo $temp; ?></td>
                    <td><?php echo $k; ?></td>
                </tr>

            <?php
                break;
            case 'k':
                $c = $temp - 273.15;
                $f = ($temp - 273.15) * 9 / 5 + 32;
            ?>

                <tr>
                    <td><?php echo $c; ?></td>
                    <td><?php echo $f; ?></td>
                    <td><?php echo $temp; ?></td>
                </tr>
        <?php
                break;
        } ?>
    </table>
</body>

</html>