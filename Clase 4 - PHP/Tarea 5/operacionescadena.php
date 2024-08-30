<?php
class OperacionesCadena
{
    private $cadena;

    public function __construct($cadena)
    {
        $this->cadena = $cadena;
    }

    public function invertirCadena()
    {
        $newCadena = "";
        for ($i = strlen($this->cadena) - 1; $i >= 0; $i--) {
            $newCadena .= $this->cadena[$i];
        }
        echo $newCadena;
    }

    public function minusculas()
    {
        echo strtolower($this->cadena);
    }

    public function mayusculas()
    {
        echo strtoupper($this->cadena);
    }
}
