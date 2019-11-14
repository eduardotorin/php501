<?php

interface iTemplate
{
    public function setVariable(string $nome, $var);
    public function getHtml($template) : string;
}