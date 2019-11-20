<?php

class MinhaExcecao extends Exception
{
    public function __contruct($mensagem, $code = 0, Exception $previous = null)
    {
        parent::__contruct($mensagem,$code,$previous);
    }
    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]:{$this->message}\n";
    }
    public function customFunction()
    {
        echo "Uma funcao especifica desse tipo de excecao\n";
    }
}

class TesteException
{
    public function mensagem(string $msg) : string
    {
        if (empty($msg))
        {
            throw new MinhaExcecao('Parametro mensagem e obrigatorio',500);
        }
        return $msg;
    }
}

$teste = new TesteException;

try{
    echo $teste->mensagem('');
} catch(MinhaExcecao $e){
    echo "Olha ela aqui ->:", $e;
    $e->customFunction();
}