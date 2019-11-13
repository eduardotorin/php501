<?php

require_once 'Pessoa.php';

class Funcionario extends Pessoa
{
    public $setor;
    public $cargo;

    public function gerarLog(string $dataHora, string $mensagem)
    {
        echo "Gerando log {$dataHora} {$mensagem}";
    }
}

$funcionario = new Funcionario();
$funcionario->gerarLog('DataAki','MensagemAki');