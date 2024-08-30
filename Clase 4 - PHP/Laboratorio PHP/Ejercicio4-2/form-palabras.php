<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ordenar-palabras.php">
        <label>Palabras:</label><br>
        <?php
        $num = $_GET['num'];
        for ($i = 0; $i < $num; $i++) { ?>
            <input type="text" name="palabra<?php echo $i ?>"> <br>
        <?php } ?>
        <input type="hidden" name="num" value="<?php echo $num ?>">
        <button type="submit">Enviar</button>
    </form>
</body>

</html>