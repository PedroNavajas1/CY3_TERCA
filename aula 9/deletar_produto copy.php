<?php
include ("../conexao/conexao.php");

if (isset($_GET['id'])){

    $id = $_GET['id'];

    $sql = "DELETE FROM produtos WHERE id = '$id'";

}

    if ($mysqli->query($sql) === TRUE){
        header("Location: lista_produtos.php");
        exit();
    }
    else{
        echo "Deu ruim, pq???" . $mysqli->error;
    }

$mysqli->close();


?>