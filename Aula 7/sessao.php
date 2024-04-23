<?php

session_start();

if(isset($_SESSION['user'])){

    $nome_usuario = $_SESSION['user'];
    header('Location: painel.php');
}

else{
    if(isset($_POST['user']) && isset($_POST['user'])){
        $nome_usuario = $_POST['user'];
        $senha_usuario = $_POST['password'];

        if( ! empty($nome_usuario) && ! empty($senha_usuario) ){
            $_SESSION['user'] = $nome_usuario;
            header('Location: painel.php');
    } else {{
        header('Location: index.php');
    }
}



?>