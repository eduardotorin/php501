<?php

class Funcionario
{
    public function oi(){
        echo "Ola<br>";
    }
    public function __destruct(){
        echo "<br>Estou morrendo<br>";
    }
    public function __sleep(){
        return ['nome','cargo'];
    }
    public function __wakeup(){
        echo "Pegadinha<br>";
    }
}

$funcionario = new Funcionario;
$funcionario->nome = 'Joaquim Jose';
$funcionario->sobrenome = 'da Silva Xavier';
$funcionario->dataNascimento = '17946-11-12';
$funcionario->sexo = 'M';
$funcionario->cargo = 'Tiradentes';
$funcionario->setor = 'Grevista';

echo "<pre>";

var_dump($funcionario);

echo "<br><br>";

echo serialize($funcionario);

$serializado = serialize($funcionario);

unset($funcionario);

echo "<br><br>";

$funcionario = unserialize($serializado);

$funcionario->oi();


