<?php
$num = $_GET['num'];
$meses = [
    'Enero',
    'Febrero',
    'Marzo',
    'Abril',
    'Mayo',
    'Junio',
    'Julio',
    'Agosto',
    'Septiembre',
    'Octubre',
    'Noviembre',
    'Diciembre'
];
if ($num <= 12) { ?>
    <select>
        <?php for ($i = 1; $i <= 12; $i++) { ?>
            <option <?php echo $num == $i ? "selected" : "" ?>><?php echo $meses[$i - 1] ?></option>
        <?php } ?>
    </select>
<?php } else {
    echo "El número ingresado no es válido";
}
