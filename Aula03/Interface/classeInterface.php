<?php

require_once 'interfaces.php';

class Template implements iTemplate
{
    private $vars = array();

    public function setVariable(string $name, $var)
    {
        $this->vars[$name] = $var;
    }
    public function getHtml($template) : string
    {
        foreach($this->vars as $name => $value){
            $template = str_replace('{' . $name . '}',$value,$template);
        }
        return $template;
    }
}

$obj = new Template();
$obj->setVariable('nome','Philadelpho');
$obj->setVariable('email','philpho@naftalina.com.br');
$obj->setVariable('telefone','(11) 99999-9999');
$obj->setVariable('endereco','Alameda Santo Amaro, 446 - Santo Amaro');
$obj->setVariable('final','Volte Sempre!');