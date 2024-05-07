<?php

$servidor = 'localhost';
// $banco_de_dados = 'test';
$usuario = 'root';
$senha = '';

$mysqli = new mysqli ($servidor, $usuario, $senha);

if ($mysqli-> error){
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}

$banco_de_dados_existe = $mysqli->select_db("test");

if(!$banco_de_dados_existe){
    $criar_bd_sql = 'CREATE DATABASE test';
    if($mysqli ->query($criar_bd_sql) === TRUE)
    {
        echo "banco criado com sucesso";
    }
    else{
        echo 'erro ao criar!!!'. $mysqli->error;
    }
}

$mysqli->select_db('test');

$tabela_users_existe = $mysqli->query('SHOW TABLES LIKE "users"')->num_rows>0;

if(!$tabela_users_existe){
    $criar_tabela_users = "CREATE TABLE users(
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        user VARCHAR(50) NOT NULL,
        password VARCHAR(20) NOT NULL
        )";
    if ($mysqli->query($criar_tabela_users) === TRUE)
    {
        echo"Tabela users criada";
    }
    else
    {
        echo"Erro ao criar a tabela users" . $mysqli->error;
    }
}

$tabela_produtos_existe = $mysqli->query('SHOW TABLES LIKE "produtos"') -> num_rows > 0;
if(!$tabela_produtos_existe){

    $criar_tabela_produtos = "CLEAR TABLE produtos(

        id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nome_produto VARCHAR(50) NOT NULL,
        id_users INT(11) UNSIGNED NOT NULL,
        FOREING KEY (id_users) REFERENCES users(id)
    )";
    if($mysqli->query($criar_tabela_produtos) === TRUE)
    {
        echo "Tabela produtos criada";
    }
    else
    {
        echo "erro ao criar a tabela produtos" . $mysqli->error;
    }
}

$mysqli->close();
?>