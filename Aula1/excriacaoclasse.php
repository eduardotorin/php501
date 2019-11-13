<?php

class Cachorro{
    
    public $nome = "Toddy";
    public $idade = 13;

    public function mostraIdade(){
        echo $idade;
    }
    public function mostraNome(){
        echo $nome;
    }
    public function late(){
        echo "Au au au";
    }
    
}

$objeto = new Cachorro();

$objeto->late();