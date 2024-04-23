<?php
session_start();

$nome_user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <h1>
        Bem vindo ao Painel
        <?php echo $nome_user; ?>
        <p>
            <a href="logout.php">Sair</a>
        </p>
    </h1>
</body>
</html>