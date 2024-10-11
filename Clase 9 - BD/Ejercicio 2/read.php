<?php
include 'conexion.php';
$sql = "SELECT A.fotografia, A.nombres, A.apellidos, A.cu, A.sexo, A.matriculado, C.nombre as carrera FROM alumnos A 
INNER JOIN carreras C ON A.id_carrera = C.id";
$resultado = $con->query($sql);
?>
<table border="1">
    <tr>
        <th>Fotografía</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>CU</th>
        <th>Sexo</th>
        <th>Carrera</th>
        <th>Matriculado</th>
    </tr>
    <?php while ($alumno = $resultado->fetch_assoc()) { ?>
        <tr>
            <td><img src="images/<?php echo $alumno['fotografia']; ?>" width="100"></td>
            <td><?php echo $alumno['nombres']; ?></td>
            <td><?php echo $alumno['apellidos']; ?></td>
            <td><?php echo $alumno['cu'] ?></td>
            <td><?php echo $alumno['sexo'] == "M" ? "Masculino" : "Femenino" ?></td>
            <td><?php echo $alumno['carrera'] ?></td>
            <td><?php echo $alumno['matriculado'] == 1 ? "Sí" : "No" ?></td>
        </tr>
    <?php } ?>
</table>