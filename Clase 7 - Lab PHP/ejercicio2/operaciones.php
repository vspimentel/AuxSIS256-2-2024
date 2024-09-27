<?php

class Operaciones
{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    private function calcularSuma()
    {
        return $this->a + $this->b + $this->c;
    }

    private function calcularMayor()
    {
        $arreglo = [$this->a, $this->b, $this->c];
        for ($i = 0; $i < count($arreglo); $i++) {
            for ($j = 0; $j < count($arreglo) - 1; $j++) {
                if ($arreglo[$j] < $arreglo[$j + 1]) {
                    $temp = $arreglo[$j];
                    $arreglo[$j] = $arreglo[$j + 1];
                    $arreglo[$j + 1] = $temp;
                }
            }
        }
        return $arreglo[0];
    }

    public function mostrarResultados()
    {
?>
        <table border="1">
            <tr>
                <th>Valor de A</th>
                <th>Valor de B</th>
                <th>Valor de C</th>
            </tr>
            <tr>
                <td><?php echo $this->a; ?></td>
                <td><?php echo $this->b; ?></td>
                <td><?php echo $this->c; ?></td>
            </tr>
            <tr>
                <th>Suma</th>
                <td colspan="2"><?php echo $this->calcularSuma() ?></td>
            </tr>
            <tr>
                <th>Mayor</th>
                <td colspan="2"><?php echo $this->calcularMayor() ?></td>
            </tr>
        </table>
<?php
    }
}
