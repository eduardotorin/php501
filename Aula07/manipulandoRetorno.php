<?php

$servidor = 'mysql:host=localhost;dbname=blog';
$usuario = 'developer';
$senha = '4linux';

try {
    $conexao = new PDO($servidor, $usuario, $senha);
    $res = $conexao->query("SELECT * FROM usuarios");

    //while($linha = $res->fetch(PDO::FETCH_ASSOC)){
    //   echo "Nome: {$linha['nome']}</br>";
    //}

    var_dump($res->fetch(PDO::FETCH_ASSOC));

} catch (PDOException $e) {
    throw new Exception("Não foi possivel realizar a conexão", 500);
}

