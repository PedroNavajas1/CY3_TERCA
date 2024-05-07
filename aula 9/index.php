<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de login</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1>Wish List</h1>
    <div>
        <h2>
            Tela de login
        </h2>
        <form action="verify.php" method="post">
            <div>
                <label for="user">User</label>
                <input type="text" name="user" id="user" placeholder="Type your user" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Type your password" required>
            </div>
            <div>
                <button type="submit">Entrar</button>
                <button type="reset">Limpar</button>
            </div>
        </form>  
    </div>
</body>
</html>