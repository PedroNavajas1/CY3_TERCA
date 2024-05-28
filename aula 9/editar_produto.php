<?php
include ('../conexoes/conexao.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT nome FROM produtos WHERE id='$id'";
    $resultado = $mysqli->query($sql);
    }

    if($resultado->num_rows > 0){
        $linhas = $resultado->fetch_array();
        $nome = $linhas['nome'];
    }
    

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];



        $sql = "UPDATE produtos SET nome='$nome' WHERE id='$id'";

        if($mysqli->query($sql) === TRUE)
        {
            header("Location: teste.php");
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
                <button type="submit">Adicionar</button>
                <button type="reset">Limpar</button>
            </div>
        </div>
        </form>
    </div>
</body>
</html>