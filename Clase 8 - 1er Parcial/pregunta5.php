<?php
include 'conexion.php';
$sql = "SELECT * FROM editoriales";
$resultado = $con->query($sql);
$editoriales = [];
while ($editorial = $resultado->fetch_assoc()) {
  $editoriales[] = $editorial;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="styles.css" />
</head>

<body>
  <form action="insertar.php" class="form-libros" enctype="multipart/form-data" method="POST">
    <div class="row">
      <div class="libro" style="border-right: 1px solid black">
        <div class="input">
          <label>Imagen</label>
          <label class="file-input">
            <input type="file" name="libros[0][imagen]" style="display: none" />
            Elegir archivo
          </label>
        </div>
        <div class="input">
          <label>Titulo</label>
          <input type="text" name="libros[0][titulo]" />
        </div>
        <div class="input">
          <label>Autor</label>
          <input type="text" name="libros[0][autor]" />
        </div>
        <div class="input">
          <label>Editorial</label>
          <select name="libros[0][editorial]">
            <?php foreach ($editoriales as $editorial) { ?>
              <option value="<?php echo $editorial['id'] ?>"><?php echo $editorial['editorial'] ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="input">
          <label>Año</label>
          <input type="number" name="libros[0][anio]" />
        </div>
      </div>
      <div class="libro">
        <div class="input">
          <label>Imagen</label>
          <label class="file-input">
            <input type="file" name="libros[1][imagen]" style="display: none" />
            Elegir archivo
          </label>
        </div>
        <div class="input">
          <label>Titulo</label>
          <input type="text" name="libros[1][titulo]" />
        </div>
        <div class="input">
          <label>Autor</label>
          <input type="text" name="libros[1][autor]" />
        </div>
        <div class="input">
          <label>Editorial</label>
          <select name="libros[1][editorial]">
            <?php foreach ($editoriales as $editorial) { ?>
              <option value="<?php echo $editorial['id'] ?>"><?php echo $editorial['editorial'] ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="input">
          <label>Año</label>
          <input type="number" name="libros[1][anio]" />
        </div>
      </div>
    </div>
    <div class="footer">
      <button type="submit">Registrar</button>
    </div>
  </form>
</body>

</html>