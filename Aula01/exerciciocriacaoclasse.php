<?php

class Humano
{
    public $idade;

    public function __construct($idadeObj){
        $this->idade = $idadeObj;
    }
    public function __clone(){
        echo "<br>Clonando o objeto...<br>";
    }
    public function andar()
    {
        echo "Andando... e eu tenho " . $this->idade;
    }
    public function falar()
    {
        echo "Falando...";
    }
}
$humano = new Humano(13);
$humano2 = clone $humano;

$humano2->idade = 15;

echo "<br>";
$humano->andar();
echo "<br>";
$humano2->andar();