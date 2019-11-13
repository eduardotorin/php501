<?php

class Usuario{
    const STATUS_ATIVO = true;
    const STATUS_INATIVO = false;

    public $ativo = true;
}

$usuario = new Usuario();

var_dump($usuario->ativo === Usuario::STATUS_ATIVO);

var_dump($usuario->ativo === Usuario::STATUS_INATIVO);

$usuario->ativo = false;

var_dump($usuario->ativo === Usuario::STATUS_ATIVO);

var_dump($usuario->ativo === Usuario::STATUS_INATIVO);

if ($usuario->ativo === Usuario::STATUS_ATIVO) {
    echo "<p>Ativo</p>";
} else {
    echo "<p>Desativado</p>";
}