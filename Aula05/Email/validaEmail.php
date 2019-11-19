<?php

class Email
{
    public static function validar(string $email)
    {
        $email_validate = filter_var($email, FILTER_VALIDATE_EMAIL);
        if($email_validade){
            return $email;
        } else {
            throw new Exception("E-mail nao existe",500);
        }
    }
}
