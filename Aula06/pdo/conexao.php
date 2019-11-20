<?php

class ConectDatabase
{
    public function __construct($servidor, $usuario, $senha)
    {
        // $servidor = 'mysql:host=localhost;dbname=blog';
        // $usuario = 'developer';
        // $senha = '4linux';

        $this->servidor = $servidor;
        $this->usuario = $usuario;
        $this->senha = $senha;
        try {
            $conexao = new PDO($this->servidor, $this->usuario, $this->senha);
            $this->conexao = $conexao;
            return $this->conexao;
        } catch (PDOException $e) {
            throw new Exception("Não foi possivel realizar a conexão", 500);

        }
    }
    public function select($table)
    {
        return $this->conexao->query("SELECT * FROM {$table}");
    }
}

$obj = new ConectDatabase('mysql:host=localhost;dbname=blog', 'developer', '4linux');

foreach ($obj->select('usuarios') as $usuario) {
    print_r($usuario);
}
// try {
//     $conexao = new PDO($servidor, $usuario, $senha);
//     echo '<pre>';
//     echo "Conexão efetuada com sucesso</br>";

//     $res = $conexao->query('SELECT * FROM usuarios');
//     foreach ($res as $linha) {
//         print_r($linha);
//     }
// } catch (PDOException $e) {
//     echo "Erro {$e->getMessage()}</br>";
// } finally {
//     die();
// }
