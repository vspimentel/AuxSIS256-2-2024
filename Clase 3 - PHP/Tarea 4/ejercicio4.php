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
            width: 50px;
            height: 50px;
        }
    </style>
</head>

<body>
    <table border="1">
        <?php for ($i = 0; $i < 10; $i++) { ?>
            <tr>
                <?php for ($j = 0; $j < 10; $j++) { ?>
                    <?php if ($i % 2 == 0) { ?>
                        <?php if ($j % 2 == 0) { ?>
                            <td></td>
                        <?php } else { ?>
                            <td style="background-color: black"></td>
                        <?php } ?>
                    <?php } else { ?>
                        <?php if ($j % 2 != 0) { ?>
                            <td></td>
                        <?php } else { ?>
                            <td style="background-color: black"></td>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>

</html>