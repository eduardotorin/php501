<?php

class VirarString
{
    public function __construct($mensagem)
    {
        $this->foo = $mensagem;
    }
    public function __toString()
    {
        return "Eae";
    }
    public function __invoke()
    {
        echo "<br>4 dias de curso enao aprendeu ainda?";
    }
}

$obj = new VirarString('Oi');
echo $obj;
$obj(34);