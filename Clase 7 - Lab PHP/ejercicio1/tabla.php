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

        td,
        th {
            width: 50px;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    $col = $_POST['col'];
    $fil = $_POST['fil'];

    ?>

    <table border="1">
        <?php for ($i = $fil; $i >= 0; $i--) { ?>
            <tr>
                <?php for ($j = $col; $j >= 0; $j--) { ?>
                    <?php if ($i == 0 && $j == 0) { ?>
                        <th style="background-color: red; color:white"></th>
                    <?php } elseif ($i == 0) { ?>
                        <th style="background-color: red; color:white"><?php echo $j; ?></th>
                    <?php } elseif ($j == 0) { ?>
                        <th style="background-color: red; color:white"><?php echo $i; ?></th>
                    <?php } else { ?>
                        <td><?php echo $i * $j; ?></td>
                    <?php } ?>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>

</html>