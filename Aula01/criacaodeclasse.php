<?php

/* Classe, metodos e atributos */

class NomeDaClasse{
    
    /* Atributos */
    public $atributo1 = 1;

    private $atributo2;

    protected $atributo3;

    const ATRIBUTOCONSTANTE = 'x';

    /* Metodos */
    public function metodoDaClasse(){
        echo "Sou um metodo!!!";
    }

}

$objeto = new NomeDaClasse();

$objeto->metodoDaClasse();