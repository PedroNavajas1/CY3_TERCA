<?php  
include('conexao.php');
{
    if(isset($_POST['nome'])  || (isset($_POST['sobrenome']) || (isset($_POST   ['email']) || (isset($_POST['telefone']) || (isset($_POST['avenida']) || (isset($_POST['rua']) || (isset($_POST['logradouro']) || (isset($_POST['senha']) || (isset($_POST['genero']))
{
    $nome =($_POST['nome'])  || ($sobrenome =($_POST['sobrenome']) || ($email =($_POST['email']) || ($telefone =($_POST['telefone']) || ($avenida =($_POST['avenida']) || ($rua =($_POST['rua']) || ($logradouro =($_POST['logradouro']) || ($senha =($_POST['senha']) || ($genero =($_POST['genero'])

    $sql_query = "INSERT INTO cliente ('nome', 'sobrenome', 'email', 'telefone', 'tipo', 'logradouro', 'numero', 'senha')
    VALUES  ( $nome, $sobrenome, $email, $telefone, $tipo, $logradouro, $numero, $senha)";

    $enviar = $mysqli ->query($sql_query);


}

