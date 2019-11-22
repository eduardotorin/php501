<?php

$servidor = 'mysql:host=localhost;dbname=blog';
$usuario = 'developer';
$senha = '4linux';

try {
    $conexao = new PDO($servidor, $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->beginTransaction();
    //$res = $conexao->exec("DELETE FROM usuarios");
    //echo "{$res}</br>";
    //$conexao->exec("DELETE FOM usuarios");
    $res = $conexao->query("SELECT * FROM usuarios");
    var_dump($res);
    $conexao->commit();
} catch (PDOException $e) {
    $conexao->rollBack();
    echo $e;
}

