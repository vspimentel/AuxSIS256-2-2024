<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="insertarLibro.php">
        <input type="hidden" name="fila" value="<?php echo $_GET['fila'] ?>">
        <label>Libro</label>
        <input type="text" name="libro">
        <button type="submit">Insertar</button>
    </form>
</body>

</html>