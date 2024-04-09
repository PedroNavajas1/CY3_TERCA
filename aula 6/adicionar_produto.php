<?php
include('../conexao/conexao.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $quatidade = $_POST['quantidade'];

    $sql = "INSERT INTO produtos(id,nome,valor, quatidade)VALUES(NULL, '$valor', '$nome', '$quatidade')";
    if($mysqli ->query($sql) == TRUE) {
        header('Location: lista_produtos.php');
        exit();
    }
    else {
        echo 'sou uma farsa ;-;' . $mysqli->error;
    }

    $mysqli->close();
}