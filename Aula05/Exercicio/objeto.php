<?php

require_once "objetoInterface.php";

class Exercicio implements objeto
{
    public function __toString()
    {
        echo "Metodo toString";
    }
    public function __invoke()
    {
        echo "Metodo invoke";
    }
    public function __set($parametro, $valor)
    {
        echo "Atribuindo a variavel {$paramentro} {$valor}";
    }
    public function __get($parametro)
    {
        echo "Acessando o atributo {$paramentro}";
    }
    public function __call($metodo, $valores)
    {
        echo "Chamando {$metodo}";
    }
    public static function __callStatic($metodo, $valores)
    {
        echo "Chamando {$metodo}";
    }
    public function metodo()
    {
        //nao funciona
    }
}

$obj = new Exercicio;

$obj->metodo();