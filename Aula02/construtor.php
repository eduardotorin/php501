<?php

class Profissao
{
    public $salario;
    public $cargo;
    public $tempoDeCasa;

    /* Classe construtora */

    public function __construct($cargo)
    {
        echo $cargo . " Criado com sucesso!";
    }

    public function __destruct()
    {
        echo "Objeto sendo destruido";
    }

}

echo "<pre>";
$pedreiro = new Profissao('Pedreiro');
echo "<br><br>";
var_dump($pedreiro); 
unset($pedreiro);
echo "<br>";
var_dump($pedreiro); 