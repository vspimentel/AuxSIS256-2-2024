<?php
class Estante
{
    private $fila1;
    private $fila2;

    public function __construct() {}

    public function insertarFila1($libro)
    {
        $this->fila1[] = $libro;
    }

    public function insertarFila2($libro)
    {
        $this->fila2[] = $libro;
    }

    public function mostrarArmario()
    { ?>
        <table border="1">
            <tr>
                <?php foreach ($this->fila1 as $libro) { ?>
                    <td><?php echo $libro ?></td>
                <?php } ?>
            </tr>
            <tr>
                <?php foreach ($this->fila2 as $libro) { ?>
                    <td><?php echo $libro ?></td>
                <?php } ?>
            </tr>
        </table>
<?php }
}
