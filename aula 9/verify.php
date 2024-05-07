<?php
// FAZ CONEXÃO COM O BD 
include('../conexoes/conexao.php');

// INICIA UMA SESSÃO
session_start();

// VERIFICAR SE O USUÁRIO JÁ ESTÁ LOGADO
if (isset($_SESSION['user']))
{
    $user_name = $_SESSION['user'];
    header('Location: painel.php');
}
else
{
    if( isset($_POST['user']) || isset($_POST['password']) )
    {
        $index_name_user = $_POST['user'];
        $index_pass_user = $_POST['password'];

        // QUERY PARA TRAZER O USUÁRIO E SENHA CORRETOS
        $sql_code = "SELECT * FROM users WHERE '$index_name_user' = user AND '$index_pass_user' = password";

        // EXECUTANDO QUERY
        $sql_query = $mysqli->query($sql_code);

        // PEGANDO QUANTIDADE DE LINHAS DE RESPOSTA DO BD
        $quantidade_linhas = $sql_query->num_rows;
        // VERIFICA SE TEM APENAS UMA LINHA
        if ($quantidade_linhas == 1)
        {
            $_SESSION['user'] = $nome_usuario;
            header('Location: painel.php');
            // $response = $sql_query->fetch_assoc();
            // $id = $response['id'];
            // $user = $response['user'];
            // $pass = $response['password'];
        }
        else
        {
            header('Location: index.php');
        }
    }
}
?>