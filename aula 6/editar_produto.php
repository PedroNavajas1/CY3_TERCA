<?php
include ('../conexao/conexao.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT nome, valor, quatidade FROM produtos WHERE id='$id'";
    $resultado = $mysqli->query($sql);
    }

    if($resultado->num_rows > 0){
        $linhas = $resultado->fetch_array();
        $nome = $linhas['nome'];
        $valor = $linhas['valor'];
        $quatidade = $linhas['quatidade'];
    }
    

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
        $quatidade = $_POST['quatidade'];



        $sql = "UPDATE produtos SET nome='$nome', valor='$valor', quatidade ='$quatidade' WHERE id='$id'";

        if($mysqli->query($sql) === TRUE)
        {
            header("Location: lista_produtos.php");
            exit();
        }
        else{
            echo "erro ao atualizar a lista" . $mysqli->error;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Editar produtos</title>
</head>
<body>
<div>
        <h1>Editar produtos</h1>
        <form action="<?php echo htmlspecialchars($_SERVER ["PHP_SELF"]);?>" method="post">
                <input type="hidden" name='id' value="<?php echo $id; ?>">
        <div>
            <div>
                <label for="nome">Nome do produto</label>
                <input type="text" name="nome" id="nome" value="<?php echo $nome; ?>" required>
            </div>
            <div>
                <label for="valor">Valor do produto</label>
                <input type="text" name="valor" id="valor" value="<?php echo $valor; ?>" required>
            </div>
            <div>
                <label for="quantidade">quantidade do produto</label>
                <input type="number" name="quantidade" id="quantidade" value="<?php echo $quatidade; ?>" required>
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