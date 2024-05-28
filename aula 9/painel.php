


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>aula 6</title>
</head>
<body>
    <div>
        <h1>Lista de desejos</h1>
        <form action="" method="post">
        <div>
            <div>
                <label for="nome">Nome do produto</label>
                <input type="text" name="nome" id="nome">
            </div>

            <div>
                <button type="submit">Adicionar</button>
                <button type="reset">Limpar</button>
            </div>
        </div>
        </form>
    </div>
</body>
</html>

<?php
    include('../conexoes/conexao.php');
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $nome = $_POST['nome'];

    $sql = "INSERT INTO produtos(id,nome)VALUES(NULL, '$nome')";
    if($mysqli ->query($sql) == TRUE) {
        header('Location: teste.php');
        exit();
    }
    else {
        echo 'sou uma farsa ;-;' . $mysqli->error;
    }
}
?>