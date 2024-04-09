<?php
include ('../conexoes/conexoes.php');

$sql = 'SELECT * FROM produtos';
$resultado = $mysqli ->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos</title>
</head>
<body>
    <div>
        <h1>Estoque</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Valor</th>
                <th>Quantidade</th>
                <th>Ações</th>
            </tr>

            <?php
            if($resultado->num_rows > 0){
                while($row = $resultado->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".$row{'id'} . '</td>';
                    echo "<td>".$row{'valor'} . '</td>';
                    echo "<td>".$row{'quantidade'} . '</td>';
                    echo '<td><a href"editar_produto.php?id=' . $row['id'] . '">Editar</a> | <a href="editar_produto.php?id=' . $row['id'] . '">Deletar</a></td>';
                    echo '</tr>';
                    
                }
            }

                else {
                    echo '<tr><td colspan="4"> Nenhum produto</td></tr>';
                }
                ?>
            
        </table>
    </div>
</body>
</html>