<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="style.css">
    <title>GO | HOME</title>
</head>
<body class="home">
<a href="index.php">voltar</a>
    <div class="centro">
        <h1>Sistema GO!</h1>
        <h2>Jean Lima</h2>
    </div>
    
    <div class="box">
        <h2>Login</h2>
        <form action="testeLogin.php" method="POST" autocomplete="off">
            <input type="text" name="usuario" id="usuario" placeholder="usuário" class="inputX" autofocus><br><br>
            <input type="password" name="senha" id="senha" placeholder="senha" class="inputX"><br><br>
            <input type="submit" value="Entrar" class="botaoEntrar" id="entrar" name="entrar">
        </form>

    </div>

</body>
</html>