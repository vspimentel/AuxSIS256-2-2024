<?php
class Operaciones
{
    private $n;
    private $a;
    private $b;
    private $c;
    private $cadena;

    public function __construct($n, $a, $b, $c, $cadena)
    {
        $this->n = $n;
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->cadena = $cadena;
    }

    public function fibonacci()
    {
        $n1 = 0;
        $n2 = 1;
        echo "<option>$n1</option>";
        echo "<option>$n2</option>";
        for ($i = 0; $i < $this->n; $i++) {
            $n3 = $n1 + $n2;
            $n1 = $n2;
            $n2 = $n3;
            echo "<option>$n3</option>";
        }
    }

    public function numeroMayor()
    {
        $nums = [$this->a, $this->b, $this->c];
        $max = 0;
        foreach ($nums as $num) {
            if ($num > $max) {
                $max = $num;
            }
        }
        foreach ($nums as $num) {
            if ($num == $max) {
                echo "<b>$num</b>";
            } else {
                echo $num;
            }
        }
    }

    public function piramide()
    {
        $length = strlen($this->cadena);
        $cadena = str_split($this->cadena);
        $chars = 1;
        for ($i = 0; $i < $length; $i++) {
            echo str_repeat("&nbsp", $length / 2 - $i);
            $k = $length / 2 - $i - 1;
            for ($j = 1; $j < $chars + 1; $j++) {
                echo $cadena[$k];
                $k++;
            }
            echo "<br>";
            $chars += 2;
            if ($chars >= $length) {
                echo $this->cadena;
                break;
            }
        }
    }
}


$operaciones = new Operaciones(20, 3, 8, 1, "EXAMEN");

?>
<select>
    <?php $operaciones->fibonacci(); ?>
</select> <br> <br>

<?php $operaciones->numeroMayor(); ?> <br> <br>

<?php $operaciones->piramide(); ?>