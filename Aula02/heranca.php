<?php

function __autoload(string $class)
{
    $arquivo = "classe/$class.php";
    require_once($arquivo);
}

$funcionario = new Funcionario();
$funcionario->nome = 'Godofredo';
$funcionario->sobrenome = 'Silva';
$funcionario->dataNascimento = '1966-02-06';
$funcionario->sexo = 'Indefinido';
$funcionario->cargo = 'Escravo/Programador';
$funcionario->setor = 'Tecnologia da info';

echo "<pre>";
var_dump($funcionario);

echo "<br>";
echo "Nome do funcionario: {$funcionario->nomeCompleto()}";

$cliente = new Cliente();
$cliente->nome = 'Jose';
$cliente->sobrenome = 'Carvalho';
$cliente->dataNascimento = '1999-11-04';
$cliente->sexo = 'Masculino';
$cliente->rg = '40.785.203';
$cliente->rg = '337.761.118-52';

echo "<br><br>";

var_dump($cliente);

echo "<br>";
echo "Nome do cliente: {$cliente->nomeCompleto()}";

$estagiario = new Estagiario();

echo "<br><br>";
var_dump($estagiario);

$estagiario->plr = 9500;

echo "<br><br>";
var_dump($estagiario);


