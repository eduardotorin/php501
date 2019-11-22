<?php

$servidor = 'mysql:host=localhost;dbname=blog';
$usuario = 'developer';
$senha = '4linux';

try {
    $conexao = new PDO($servidor, $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //$count = $conexao->exec("DELETE FROM usuario");
    $res = $conexao->query("SELECT * FROM usuarios");
    foreach ($res as $usuario) {
        echo "Nome: " . $usuario['nome'] . " " ;
        echo "E-mail: " . $usuario['email'] . "</br>" ;
    }
    //echo "{$count} linhas foram apagadas";
} catch (PDOException $e) {
    throw new Exception("Não foi possivel realizar a conexão", 500);
}