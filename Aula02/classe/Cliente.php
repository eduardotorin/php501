<?php

class Cliente extends Pessoa
{
    public $rg;
    public $cpf;

    public function nomeCompleto() : string
    {
        return "{$this->sobrenome}, {$this->nome}";
    }
}