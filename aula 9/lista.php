<?php
include ('../conexoes/conexao.php');

$sql = 'SELECT * FROM produtos';
$resultado = $mysqli ->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lista de produtos</title>
</head>
<body>
    <div id='roberto'>
        <h1>Estoque</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>

            </tr>

            <?php
            

            if($mysqli ->query($sql) == TRUE) {
                    header('Location: lista.php');
            exit();
            }
            else {
                echo 'sou uma farsa ;-;' . $mysqli->error;
            }

            ?>
            
        </table>
    </div>
</body>
</html>