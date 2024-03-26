<?php
 include('../conexao/conexao.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>aula 5</title>
</head>
<body>
    <table>
        <tr>
            <th>Nome</th>
            <th>Sobrenome</th>
        </tr>
    

    <?php
        $sql = "SELECT nome, sobrenome from pessoas";
        $resultado = $mysqli -> query($sql);

        if($resultado -> num_rows > 0) 
        {
            while($row = $resultado ->fetch_assoc()) 
            {
                $nome = $row['nome'];
                $sobrenome = $row['sobrenome'];

                echo "<tr><td>" . $nome . "</td> <td>" . $sobrenome . "</td></tr>";
            }
        }
        $mysqli->close();

    
    ?>
    </table>
</body>
</html>